import React from 'react';
import {useSortable} from '@dnd-kit/sortable';
import {CSS} from '@dnd-kit/utilities';
import {Item} from "./test/SortableItem";
import {useDraggable} from "@dnd-kit/core";

/**
 * SortableItem component represents an individual item within a sortable list.
 * It uses the useSortable hook to enable drag-and-drop functionality.
 *
 * @param {Object} props
 * @param {string} props.id - Unique identifier for the item.
 * @param {React.ReactNode} props.children - The content to be rendered inside the item.
 * @returns {JSX.Element}
 */
// export default function SortableItem({id, children}) {
// 	// Destructure properties returned by the useSortable hook
// 	const {
// 		attributes, // Accessibility attributes for the draggable item
// 		listeners,  // Event listeners for drag events
// 		setNodeRef, // Ref callback to set the DOM node
// 		transform,  // CSS transform to apply during dragging
// 		transition, // CSS transition for smooth animations
// 		isDragging, // Boolean indicating if the item is currently being dragged
// 	} = useSortable({id});
//
// 	// Define the style for the item, applying transform and transition
// 	const style = {
// 		transform: CSS.Transform.toString(transform),
// 		transition,
// 		padding: '8px',
// 		marginBottom: '4px',
// 		backgroundColor: isDragging ? '#e0f7fa' : '#ffffff',
// 		border: '1px solid #ccc',
// 		borderRadius: '4px',
// 		cursor: 'grab',
// 	};
//
// 	return (
// 		<div ref={setNodeRef} style={style} {...attributes} {...listeners}>
// 			{children}
// 		</div>
// 	);
// }

export function ItemEl(props) {
	const {id} = props;

	const style = {
		width: "100%",
		padding: 10,
		height: 50,
		display: "flex",
		alignItems: "center",
		justifyContent: "center",
		border: "1px solid black",
		margin: "10px 0",
		background: "white"
	};

	return <div style={style}>{id}</div>;
}

export default function SortableItem(props) {

	// const sortable = useSortable({id: props.id});
	// console.log(sortable);
	//
	// if (sortable.overIndex === sortable.newIndex) {
	// 	if(sortable?.transform?.x !== 0){
	// 		console.log(sortable.transform);
	// 	}
	// }

	const {
		attributes,
		listeners,
		setNodeRef,
		transform,
		index,
		over,
		isDragging,
		transition,
		...sortableProps
	} = useSortable({
		id: props.id,
		data: {
			type: 'type1',
		}
	});

	const style = {
		// transform: CSS.Transform.toString(transform),
		// transition,
		transform: 'none',
		transition: isDragging ? 'none' : transition,
		opacity: isDragging ? 0.5 : 1,
	};

	console.log(transform);

	return (
		<div ref={setNodeRef}
			 style={style}
			 {...attributes}
			 {...listeners}>
			<ItemEl id={props.id}/>
		</div>
	);
}
