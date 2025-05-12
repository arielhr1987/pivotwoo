import React from "react";
import { useDroppable } from "@dnd-kit/core";
import {
	SortableContext,
	horizontalListSortingStrategy,
	verticalListSortingStrategy
} from "@dnd-kit/sortable";

import SortableItem from "./SortableItem";

const containerStyle = {
	background: "#dadada",
	padding: 10,
	margin: 10,
	flex: 1,
	display: "flex",
};

export default function List(props) {
	const { id, items } = props;

	const { setNodeRef } = useDroppable({
		id
	});

	return (
		<SortableContext
			id={id}
			items={items}
			strategy={horizontalListSortingStrategy}
		>
			<div ref={setNodeRef} style={containerStyle}>
				{items.map((id) => (
					<SortableItem key={id} id={id} />
				))}
			</div>
		</SortableContext>
	);
}
