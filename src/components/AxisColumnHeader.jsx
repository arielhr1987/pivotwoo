import React from "react";
import AxisHeaderValue from "./AxisHeaderValue";

/**
 * Normalizes the data by adding a 'total' child if the node is expanded.
 *
 * @param {Object[]} nodes - The tree nodes to normalize.
 * @return {Object[]} - The normalized data.
 */
const normalizeData = (nodes) => {
	return nodes.map((node) => {
		const hasChildren = Array.isArray(node.children) && node.children.length > 0;
		let children = hasChildren ? normalizeData(node.children) : [];

		if (node.expanded) {
			children = [...children, {label: "total"}];
		}

		return {
			...node,
			children: children.length > 0 ? children : undefined,
		};
	});
};

/**
 * Get the depth of the tree.
 *
 * @param {Object[]} nodes - The tree nodes.
 * @return {number} - The maximum depth of the tree.
 */
const getDepth = (nodes) => {
	if (!nodes) return 0;
	return 1 + Math.max(0, ...nodes.map((node) => getDepth(node.children || [])));
};

/**
 * Builds the header rows with rowSpan and colSpan.
 *
 * @param {Object[]} nodes - The tree nodes.
 * @param {number} currentDepth - The current depth of the tree.
 * @param {Object[]} rows - The rows being built.
 * @param {number} maxDepth - The columns being used for
 * @return {Object[]} - The rows with rowSpan and colSpan.
 */
const buildHeaderRows = (nodes, currentDepth = 0, rows = [], maxDepth = null) => {
	rows[currentDepth] = rows[currentDepth] || [];

	nodes.forEach((node) => {
		const hasChildren = Array.isArray(node.children) && node.children.length > 0;

		const colSpan = hasChildren ? countLeafNodes(node.children) : 1;
		const rowSpan = hasChildren ? 1 : (maxDepth - currentDepth);

		rows[currentDepth].push({
			label: node.label,
			colSpan,
			rowSpan,
		});

		if (hasChildren) {
			buildHeaderRows(node.children, currentDepth + 1, rows, maxDepth);
		}
	});

	return rows;
};

/**
 * Counts the number of leaf nodes in the tree node.
 *
 * @param {Object[]} nodes - The tree nodes.
 * @return {*}
 */
const countLeafNodes = (nodes) => {
	return nodes.reduce((count, node) => {
		if (node.children && node.children.length > 0) {
			return count + countLeafNodes(node.children);
		} else {
			return count + 1;
		}
	}, 0);
};

/**
 * AxisColumnTable component
 *
 * @param {Object[]} data - The data to be displayed in the table.
 * @return {JSX.Element} - The rendered table component.
 * @constructor
 */
const AxisColumnHeader = ({data}) => {
	data = [
		{label: 'A'},
		{
			label: 'B',
			expanded: true,
			children: [
				{label: 'B1'},
				{
					label: 'B2',
					expanded: true,
					children: [
						{label: 'B2.1'},
						{label: 'B2.2'},
					]
				},
				{label: 'B3'}
			]
		},
		{label: 'C'},
		{label: 'D'},
		{label: 'Grand Total'},
	];
	/**
	 * Normalize data
	 * This is used to add a 'total' child if the node is expanded and the Grand Total.
	 */
	const normalizedData = normalizeData(data);

	/**
	 * Get the depth of the tree
	 * This is used to determine how many columns are needed for the table.
	 */
	const maxDepth = getDepth(normalizedData);

	/**
	 * Build the header rows
	 * This is used to build the rows with rowSpan and colSpan.
	 */
	const headerRows = buildHeaderRows(normalizedData, 0, [], maxDepth);

	/**
	 * Render
	 */
	return (
		<div className="">
			<table className="table table-axis table-axis-column">
				<tbody>
				{headerRows.map((row, rowIndex) => (
					<tr key={rowIndex} className="">
						{row.map((cell, cellIndex) => {
							const props = {};
							if (cell.rowSpan && cell.rowSpan > 1) props.rowSpan = cell.rowSpan;
							if (cell.colSpan && cell.colSpan > 1) props.colSpan = cell.colSpan;

							return <td
								key={cellIndex}
								{...props}
							>
								<AxisHeaderValue label={cell.label}/>
							</td>
						})}
					</tr>
				))}
				</tbody>
			</table>
		</div>
	);
};

export default AxisColumnHeader;
