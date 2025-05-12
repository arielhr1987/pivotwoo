import {SortableContext, horizontalListSortingStrategy} from '@dnd-kit/sortable';
import {useDroppable} from "@dnd-kit/core";
import React from 'react';
import SortableItem from "./SortableItem";

/**
 * SortableList component wraps its children within a SortableContext,
 * enabling drag-and-drop sorting functionality for the list items.
 *
 * @param {Object} props
 * @param {string} props.id - Unique identifier for the list.
 * @param {Array} props.items - Array of items to be rendered and sorted.
 * @param {string} props.type - Type of items in the list ('dimension' or 'measure').
 * @param {React.ReactNode} props.children - The list items to be rendered.
 * @returns {JSX.Element}
 */
export default function SortableList({id, items, type, children}) {

	const { setNodeRef } = useDroppable({
		id
	});

	return (
		<SortableContext
			id={id}
			items={items}
			strategy={horizontalListSortingStrategy}
		>
			<div ref={setNodeRef} className={'zone'}>
				{items.map((id) => (
					<SortableItem key={id} id={id} />
				))}
			</div>
		</SortableContext>
	);
}
