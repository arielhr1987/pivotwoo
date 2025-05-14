import React, { useState, useRef } from 'react';
import {
	DndContext,
	useDraggable,
	useDroppable,
	DragOverlay,
	closestCenter
} from '@dnd-kit/core';

function DraggableItem({ id, children }) {
	const { attributes, listeners, setNodeRef, transform, isDragging } = useDraggable({ id });
	const style = {
		transform: transform ? `translate(${transform.x}px, ${transform.y}px)` : undefined,
		opacity: isDragging ? 0.5 : 1,
		padding: '8px 12px',
		margin: '4px',
		background: '#fff',
		border: '1px solid #ccc',
		borderRadius: '4px',
		cursor: 'grab'
	};

	const droppable = useDroppable({ id });

	return (
		<div ref={droppable.setNodeRef} >

		<div ref={setNodeRef} style={style} {...attributes} {...listeners}>
			{children}
		</div>
		</div>
	);
}

function DroppableList({ id, items, placeholderIndex, renderItem }) {
	const { setNodeRef } = useDroppable({ id });
	return (
		<div
			ref={setNodeRef}
			style={{
				display: 'flex',
				minHeight: '50px',
				padding: '10px',
				border: '2px dashed #ddd',
				borderRadius: '6px',
				marginBottom: '16px'
			}}
		>
			{items.map((item, index) => (
				<React.Fragment key={item}>
					{placeholderIndex === index && <Placeholder />}
					{renderItem(item)}
				</React.Fragment>
			))}
			{placeholderIndex === items.length && <Placeholder />}
		</div>
	);
}

function Placeholder() {
	return (
		<div
			style={{
				width: '4px',
				background: 'blue',
				margin: '0 4px',
				height: '100%'
			}}
		></div>
	);
}

export default function DndExample() {
	const [lists, setLists] = useState({
		list1: ['A', 'B', 'C'],
		list2: ['D', 'E']
	});
	const [activeId, setActiveId] = useState(null);
	const [overListId, setOverListId] = useState(null);
	const [placeholderIndex, setPlaceholderIndex] = useState(null);

	const handleDragStart = (event) => {
		setActiveId(event.active.id);
	};

	const handleDragMove = (event) => {
		console.log('Drag moved', event);
		const { over } = event;
		if (!over) return;

		const overId = over.id;
		const listEntries = Object.entries(lists);
		const containerEntry = listEntries.find(([_, items]) => _ === overId || items.includes(overId));

		if (containerEntry) {
			const [containerId, items] = containerEntry;
			const index = items.indexOf(overId);
			const bounding = over.rect;
			const cursor = event.delta;

			const insertAfter = cursor.x > bounding.width / 2;
			setOverListId(containerId);
			setPlaceholderIndex(insertAfter ? index + 1 : index);
			console.log('Placeholder index:', placeholderIndex);
		}
	};

	const handleDragEnd = (event) => {
		console.log('Drag ended', event);
		const { active } = event;

		if (!overListId || placeholderIndex === null) {
			setActiveId(null);
			setPlaceholderIndex(null);
			setOverListId(null);
			return;
		}

		// Remove from any list
		let sourceListId = null;
		for (const [key, value] of Object.entries(lists)) {
			if (value.includes(active.id)) {
				sourceListId = key;
				break;
			}
		}

		if (!sourceListId) return;

		const sourceItems = [...lists[sourceListId]];
		const targetItems = [...lists[overListId]];
		const itemIndex = sourceItems.indexOf(active.id);
		sourceItems.splice(itemIndex, 1);
		targetItems.splice(placeholderIndex, 0, active.id);

		setLists({
			...lists,
			[sourceListId]: sourceItems,
			[overListId]: targetItems
		});

		setActiveId(null);
		setPlaceholderIndex(null);
		setOverListId(null);
	};

	return (
		<DndContext
			collisionDetection={closestCenter}
			onDragStart={handleDragStart}
			onDragMove={handleDragMove}
			onDragEnd={handleDragEnd}
		>
			{Object.entries(lists).map(([id, items]) => (
				<DroppableList
					key={id}
					id={id}
					items={items}
					placeholderIndex={id === overListId ? placeholderIndex : null}
					renderItem={(item) => <DraggableItem key={item} id={item}>{item}</DraggableItem>}
				/>
			))}

			<DragOverlay>{activeId ? <DraggableItem id={activeId}>{activeId}</DraggableItem> : null}</DragOverlay>
		</DndContext>
	);
}
