import {Fragment} from '@wordpress/element';
import {PivotGridContextProvider} from "./PivotGridContext";
import * as Woo from '@woocommerce/components';
import AxisHeader from "./AxisHeader";
import ColSpanTableVertical from "./components/AxisRowHeader";
import AxisRowHeader from "./components/AxisRowHeader";
import AxisColumnHeader from "./components/AxisColumnHeader";
import DataTable from "./components/DataTable";
import {useEffect, useState} from "@wordpress/element";

import {
	useSensors,
	useSensor,
	PointerSensor,
	KeyboardSensor,
	DndContext,
	closestCorners,
	DragEndEvent,
	DragStartEvent,
	DragOverEvent,
	DragOverlay,
	DropAnimation,
	defaultDropAnimation, MouseSensor, TouchSensor,
} from '@dnd-kit/core';
import {arrayMove, sortableKeyboardCoordinates} from "@dnd-kit/sortable";
import {ItemEl} from "./components/SortableItem";
import SortableList from "./components/SortableList";

/**
 * PivotGrid component
 * This component is used to display a pivot grid.
 *
 * For more information about woocommerce table refer to:
 * https://github.com/woocommerce/woocommerce/blob/trunk/packages/js/components/src/table/README.md
 *
 * @param props
 * @return {JSX.Element}
 * @constructor
 */
function PivotGrid({...props}) {

	/**
	 * States
	 */
	const [dragging, setDragging] = useState();
	const [items, setItems] = useState({
		filters: ["1", "2", "3"],
		columns: ["4", "5", "6"],
		rows: ["7", "8", "9"],
		measures: ['10'],
	});

	/**
	 * Sensors
	 */
	const sensors = useSensors(
		useSensor(PointerSensor),
		useSensor(TouchSensor, {
			activationConstraint: {delay: 150, tolerance: 5},
		})
	);

	function findContainer(id) {
		if (id in items) {
			return id;
		}

		return Object.keys(items).find((key) => items[key].includes(id));
	}

	const onDragStart = (event) => {
		console.log('Drag started', event);
		const {active} = event;
		const {id} = active;

		setDragging(id);

	}

	const onDragOver = (event) => {
		console.log('Drag over', event);
		const {active, over, draggingRect} = event;
		const {id} = active;
		const {id: overId} = over;

		// Find the containers
		const activeContainer = findContainer(id);
		const overContainer = findContainer(overId);

		if (
			!activeContainer ||
			!overContainer ||
			activeContainer === overContainer
		) {
			return;
		}

		setItems((prev) => {
			const activeItems = prev[activeContainer];
			const overItems = prev[overContainer];

			// Find the indexes for the items
			const activeIndex = activeItems.indexOf(id);
			const overIndex = overItems.indexOf(overId);

			let newIndex;
			if (overId in prev) {
				// We're at the root droppable of a container
				newIndex = overItems.length + 1;
			} else {
				const isBelowLastItem =
					over &&
					overIndex === overItems.length - 1;
				//&& draggingRect.offsetTop > over.rect.offsetTop + over.rect.height;

				const modifier = isBelowLastItem ? 1 : 0;

				newIndex = overIndex >= 0 ? overIndex + modifier : overItems.length + 1;
			}

			return {
				...prev,
				[activeContainer]: [
					...prev[activeContainer].filter((item) => item !== active.id)
				],
				[overContainer]: [
					...prev[overContainer].slice(0, newIndex),
					items[activeContainer][activeIndex],
					...prev[overContainer].slice(newIndex, prev[overContainer].length)
				]
			};
		});
	}

	const onDragEnd = (event) => {
		console.log('Drag ended', event);
		const {active, over} = event;
		const {id} = active;
		const {id: overId} = over;

		const activeContainer = findContainer(id);
		const overContainer = findContainer(overId);

		if (
			!activeContainer ||
			!overContainer ||
			activeContainer !== overContainer
		) {
			return;
		}

		const activeIndex = items[activeContainer].indexOf(active.id);
		const overIndex = items[overContainer].indexOf(overId);

		if (activeIndex !== overIndex) {
			setItems((items) => ({
				...items,
				[overContainer]: arrayMove(items[overContainer], activeIndex, overIndex)
			}));
		}

		setDragging(null);
	}

	return <Fragment>
		<PivotGridContextProvider {...props}>
			<DndContext
				//announcements={defaultAnnouncements}
				sensors={sensors}
				collisionDetection={closestCorners}
				onDragStart={onDragStart}
				onDragOver={onDragOver}
				onDragEnd={onDragEnd}
			>
				{/*<PivotGridHeader />*/}
				{/*<PivotGridBody />*/}
				{/*<PivotGridFooter />*/}
				{/*<PivotGridSidebar />*/}
				{/*<PivotGridToolbar />*/}
				{/*<PivotGridContextProvider />*/}
				{/*<PivotGridContextConsumer />*/}
				{/*<PivotGridContextProvider />*/}

				<div className={'pivot-grid'}>
					<table style={{width: '100%'}} className={'table '}>
						<colgroup>
							<col style={{width: 1}}></col>
							<col></col>
						</colgroup>
						<tbody>
						<tr>
							<td colSpan="2">
								Waiting zone
							</td>
						</tr>
						<tr>
							<td colSpan="2">
								{/*Filter zone*/}
							</td>
						</tr>
						<tr>
							<td>
								{/*Measure zone*/}
								<SortableList id="columns" items={items.measures}/>
							</td>
							<td>
								{/*Columns dimension zone*/}
								<SortableList id="columns" items={items.columns}/>
							</td>
						</tr>
						<tr>
							<td>
								{/*Rows dimension zone*/}
								<SortableList id="rows" items={items.rows}/>
							</td>
							<td>
								<AxisColumnHeader/>
							</td>
						</tr>
						<tr>
							<td>
								<AxisRowHeader/>
							</td>
							<td>
								<DataTable data={[[1, 2, 3], [4, 5, 6], [6, 7, 8]]}/>
							</td>
						</tr>
						<tr>
							<td colSpan="2">
								<div style={{padding: '16px'}}>
									<Woo.Pagination
										page={1}
										perPage={10}
										total={500}
										onPageChange={(newPage) => setState({page: newPage})}
										onPerPageChange={(newPerPage) => setState({perPage: newPerPage})}
									/>
								</div>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
				<DragOverlay>{dragging ? <ItemEl id={dragging}/> : null}</DragOverlay>
			</DndContext>
		</PivotGridContextProvider>
	</Fragment>
}

export default PivotGrid;
