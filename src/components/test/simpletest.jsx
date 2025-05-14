import React, { useState } from 'react';
import {
	DndContext,
	closestCenter,
	useSensor,
	useSensors,
	PointerSensor,
	DragOverlay,
	useDroppable
} from '@dnd-kit/core';
import {
	SortableContext,
	useSortable,
	horizontalListSortingStrategy
} from '@dnd-kit/sortable';
import { CSS } from '@dnd-kit/utilities';

const initialItems = {
	list1: ['A', 'B', 'C'],
	list2: ['D', 'E']
};

export default function App() {
	const [items, setItems] = useState(initialItems);
	const [activeId, setActiveId] = useState(null);
	const [placeholder, setPlaceholder] = useState({ container: null, index: null });

	const sensors = useSensors(useSensor(PointerSensor));

	const findContainer = (id) => {
		return Object.keys(items).find((key) => items[key].includes(id));
	};

	const handleDragStart = ({ active }) => {
		setActiveId(active.id);
	};

	const handleDragOver = ({ active, over }) => {
		if (!over) return;

		const activeContainer = findContainer(active.id);
		const overContainer = items[over.id] ? over.id : findContainer(over.id);
		if (!overContainer) return;

		const overItems = items[overContainer];
		const overIndex = overItems.indexOf(over.id);
		const index = overIndex === -1 ? overItems.length : overIndex;

		if (
			placeholder.container !== overContainer ||
			placeholder.index !== index
		) {
			setPlaceholder({ container: overContainer, index });
		}
	};

	const handleDragEnd = ({ active, over }) => {
		if (!over) {
			resetDrag();
			return;
		}

		const activeContainer = findContainer(active.id);
		const overContainer = placeholder.container;

		if (!activeContainer || !overContainer) {
			resetDrag();
			return;
		}

		if (activeContainer === overContainer) {
			const activeIndex = items[activeContainer].indexOf(active.id);
			const newItems = arrayMove(items[activeContainer], activeIndex, placeholder.index);
			setItems({
				...items,
				[activeContainer]: newItems
			});
		} else {
			const newItems = { ...items };
			newItems[activeContainer] = newItems[activeContainer].filter((i) => i !== active.id);
			newItems[overContainer] = [
				...newItems[overContainer].slice(0, placeholder.index),
				active.id,
				...newItems[overContainer].slice(placeholder.index)
			];
			setItems(newItems);
		}

		resetDrag();
	};

	const resetDrag = () => {
		setActiveId(null);
		setPlaceholder({ container: null, index: null });
	};

	return (
		<DndContext
			sensors={sensors}
			collisionDetection={closestCenter}
			onDragStart={handleDragStart}
			onDragOver={handleDragOver}
			onDragEnd={handleDragEnd}
		>
			<div style={{ display: 'flex', gap: '40px', padding: '20px' }}>
				{Object.entries(items).map(([listId, listItems]) => (
					<SortableList
						key={listId}
						id={listId}
						items={listItems}
						activeId={activeId}
						placeholder={placeholder}
					/>
				))}
			</div>
			<DragOverlay>
				{activeId ? <Item id={activeId} isOverlay /> : null}
			</DragOverlay>
		</DndContext>
	);
}

function SortableList({ id, items, activeId, placeholder }) {
	const { setNodeRef } = useDroppable({ id });

	return (
		<SortableContext id={id} items={items} strategy={horizontalListSortingStrategy}>
			<div
				ref={setNodeRef}
				style={{
					display: 'flex',
					alignItems: 'center',
					gap: '10px',
					padding: '10px',
					border: '2px solid #ccc',
					minHeight: '60px',
					minWidth: '300px'
				}}
			>
				{items.map((itemId, index) => {
					const isActive = itemId === activeId;
					const shouldShowPlaceholder =
						placeholder.container === id && placeholder.index === index;

					return (
						<React.Fragment key={itemId}>
							{shouldShowPlaceholder && <DropIndicator />}
							{!isActive && <SortableItem id={itemId} />}
						</React.Fragment>
					);
				})}
				{/* Placeholder at end */}
				{placeholder.container === id && placeholder.index === items.length && (
					<DropIndicator />
				)}
			</div>
		</SortableContext>
	);
}

function SortableItem({ id }) {
	const {
		attributes,
		listeners,
		setNodeRef,
		transform,
		transition
	} = useSortable({ id });

	const style = {
		//transform: CSS.Transform.toString(transform),
		//transition,
		padding: '10px 20px',
		border: '1px solid #333',
		backgroundColor: '#fff',
		cursor: 'grab'
	};

	return (
		<div ref={setNodeRef} style={style} {...attributes} {...listeners}>
			{id}
		</div>
	);
}

function Item({ id, isOverlay = false }) {
	return (
		<div
			style={{
				padding: '10px 20px',
				border: isOverlay ? '1px dashed #888' : '1px solid #333',
				backgroundColor: isOverlay ? '#f5f5f5' : '#fff',
				opacity: isOverlay ? 0.8 : 1
			}}
		>
			{id}
		</div>
	);
}

function DropIndicator() {
	return (
		<div
			style={{
				width: '2px',
				height: '40px',
				backgroundColor: '#007bff',
				margin: '0 2px'
			}}
		/>
	);
}
