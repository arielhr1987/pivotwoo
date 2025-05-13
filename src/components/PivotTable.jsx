import React, { useState } from '@wordpress/element';
import {
	DndContext,
	closestCenter,
	MouseSensor,
	TouchSensor,
	useSensors,
	useSensor, DragOverlay,
} from '@dnd-kit/core';
import { SortableContext, arrayMove } from '@dnd-kit/sortable';
import SortableList from './SortableList';
import SortableItem from './SortableItem';
import AxisColumnHeader from './AxisColumnHeader';
import AxisRowHeader from './AxisRowHeader';
import DataTable from './DataTable';
import * as Woo from '@woocommerce/components';

export default function PivotTable({ initialItems }) {
	const fixedLists = {
		rows: { type: 'dimension' },
		columns: { type: 'dimension' },
		filters: { type: 'dimension' },
		measures: { type: 'measure' },
		waiting: { type: 'both' },
	};

	const [lists, setLists] = useState(
		Object.fromEntries(
			Object.entries(fixedLists).map(([key, config]) => [
				key,
				{ ...config, items: initialItems[key] || [] },
			])
		)
	);

	const sensors = useSensors(
		useSensor(MouseSensor, {
			activationConstraint: { distance: 5 },
		}),
		useSensor(TouchSensor, {
			activationConstraint: { delay: 150, tolerance: 5 },
		})
	);

	const findContainer = (itemId) => {
		for (let key in lists) {
			if (lists[key].items.find((item) => item.id === itemId)) {
				return key;
			}
		}
		return null;
	};

	const handleDragStart = (event) => {
		//console.log('Drag started', event);
		const { active } = event;
		const containerId = findContainer(active.id);
		const item = lists[containerId].items.find((i) => i.id === active.id);

		event.active.data.current = { type: item.type, containerId, item: item };
	};

	const handleDragEnd = (event) => {
		//console.log('Drag ended', event);
		const { active, over } = event;
		if (!over) return;

		const activeContainer = findContainer(active.id);
		const overContainer = findContainer(over.id);

		//console.log('activeContainer', activeContainer);
		//console.log('overContainer', overContainer);

		if (!activeContainer || !overContainer) return;

		const activeIndex = lists[activeContainer].items.findIndex(
			(i) => i.id === active.id
		);
		const overIndex = lists[overContainer].items.findIndex(
			(i) => i.id === over.id
		);

		const activeItem = lists[activeContainer].items[activeIndex];
		const targetList = lists[overContainer];

		const typeMatch =
			targetList.type === 'both' || activeItem.type === targetList.type;

		// Intra-list reordering
		if (activeContainer === overContainer && activeIndex !== overIndex) {
			const updatedItems = arrayMove(
				lists[activeContainer].items,
				activeIndex,
				overIndex
			);

			setLists((prev) => ({
				...prev,
				[activeContainer]: { ...prev[activeContainer], items: updatedItems },
			}));
			return;
		}

		// Inter-list transfer
		if (typeMatch && activeContainer !== overContainer) {
			const updatedOriginItems = lists[activeContainer].items.filter(
				(i) => i.id !== active.id
			);
			const updatedTargetItems = [...lists[overContainer].items];
			const dropIndex = overIndex === -1 ? updatedTargetItems.length : overIndex;
			updatedTargetItems.splice(dropIndex, 0, activeItem);

			setLists((prev) => ({
				...prev,
				[activeContainer]: {
					...prev[activeContainer],
					items: updatedOriginItems,
				},
				[overContainer]: {
					...prev[overContainer],
					items: updatedTargetItems,
				},
			}));
		}
	};

	const renderSortableList = (id, title) => (
		<div className="highlighted-zone">
			<strong>{title}</strong>
			<SortableList id={id} items={lists[id].items} type={lists[id].type}>
				{/*{lists[id].items.map((item) => (*/}
				{/*	<SortableItem key={item.id} id={item.id}>{item.label}</SortableItem>*/}
				{/*))}*/}
			</SortableList>
		</div>
	);

	return (
		<div className={'pivot-grid'}>
			<DndContext
				sensors={sensors}
				collisionDetection={closestCenter}
				onDragEnd={handleDragEnd}
				onDragStart={handleDragStart}
			>
				<table style={{ width: '100%' }} className={'table'}>
					<colgroup>
						<col style={{ width: 1 }} />
						<col />
					</colgroup>
					<tbody>
					<tr>
						<td colSpan="2">{renderSortableList('waiting', 'Waiting zone')}</td>
					</tr>
					<tr>
						<td colSpan="2">{renderSortableList('filters', 'Filter zone')}</td>
					</tr>
					<tr>
						<td>{renderSortableList('measures', 'Measure zone')}</td>
						<td>{renderSortableList('columns', 'Columns dimension zone')}</td>
					</tr>
					<tr>
						<td>{renderSortableList('rows', 'Rows dimension zone')}</td>
						<td><AxisColumnHeader /></td>
					</tr>
					<tr>
						<td><AxisRowHeader /></td>
						<td><DataTable data={[[1, 2, 3], [4, 5, 6], [6, 7, 8]]} /></td>
					</tr>
					<tr>
						<td colSpan="2">
							<div style={{ padding: '16px' }}>
								<Woo.Pagination
									page={1}
									perPage={10}
									total={500}
									onPageChange={(newPage) => console.log('Page changed', newPage)}
									onPerPageChange={(newPerPage) => console.log('Per page changed', newPerPage)}
								/>
							</div>
						</td>
					</tr>
					</tbody>
				</table>
				{/*<DragOverlay dropAnimation={dropAnimation}>*/}
				{/*	{dragging ? <div /> : null}*/}
				{/*</DragOverlay>*/}
			</DndContext>
		</div>
	);
}
