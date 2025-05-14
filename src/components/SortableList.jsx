import {SortableContext, horizontalListSortingStrategy, useSortable} from '@dnd-kit/sortable';
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
 * @param {string[]|string} props.accepts - The types of draggable elements accepted ['dimension'|'measure'].
 * @param {React.ReactNode} props.children - The list items to be rendered.
 * @returns {JSX.Element}
 */
export default function SortableList({id, items, type, dragState, accepts, children}) {
	const {
		setNodeRef,
	} = useDroppable({
		id,
		data: {
			//the types of draggable elements this droppable accepts
			accepts: Array.isArray(accepts) ? accepts : [accepts],
		},
	});

	return (
		<div ref={setNodeRef} className={'zone'}>
			<SortableContext id={id} items={items} strategy={horizontalListSortingStrategy}>
				{/*<div className={'zone'}>*/}
				{
					items.map((itemId, index) => {

						const isPlaceholder = false;
						// const isPlaceholder = dragState && dragState.overIndex === index;
						// const isPlaceholder = dragState
						// 	//&& dragState.to === id
						// 	//&& dragState.activeId !== itemId
						// 	&& dragState.overIndex === index
						// ;

						let position = null;
						if (dragState) {
							if (dragState.activeIndex > dragState.overIndex) {
								position = 'left';
							} else if (dragState.activeIndex < dragState.overIndex) {
								position = 'right';
							}
							//console.log(position, 'overIndex', dragState.overIndex, 'index', dragState.activeIndex);
						}

						return (
							<React.Fragment key={itemId}>
								{isPlaceholder && position === 'left' && (
									<div className="placeholder" style={{
										height: 50,
										border: '2px dashed #999',
										margin: '10px 0',
										background: '#f0f0f0'
									}}>
										{dragState.activeId}
									</div>
								)}
								<SortableItem id={itemId}/>
								{isPlaceholder && position === 'right' && (
									<div className="placeholder" style={{
										height: 50,
										border: '2px dashed #999',
										margin: '10px 0',
										background: '#f0f0f0'
									}}>
										{dragState.activeId}
									</div>
								)}
							</React.Fragment>
						);
					})}
			</SortableContext>
		</div>
	);
}
