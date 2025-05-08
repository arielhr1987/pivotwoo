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
		const children = node.children ? normalizeData(node.children) : [];

		const extendedChildren =
			node.expanded && children.every(child => child.label !== 'total')
				? [...children, {label: "total"}]
				: children;

		return {
			...node,
			children: extendedChildren.length > 0 ? extendedChildren : undefined,
		};
	});
};

/**
 * Get the number of leaf nodes in the tree node.
 *
 * @param {Object} node - The tree node.
 * @return {number} - The number of leaf nodes the provided node has.
 */
const getRowSpan = (node) => {
	if (!node.children || node.children.length === 0) return 1;
	return node.children.reduce((sum, child) => sum + getRowSpan(child), 0);
};

/**
 * Gets the depth of the tree.
 *
 * @param {Object} nodes - The tree nodes.
 * @return {number} - The maximum depth of the tree.
 */
const getDepth = (nodes) => {
	if (!nodes) return 0;
	return 1 + Math.max(0, ...nodes.map((node) => getDepth(node.children || [])));
};

/**
 * Builds the rows with rowSpan and colSpan
 *
 * @param {Object[]} nodes - The tree nodes.
 * @param {number} col - The current column index.
 * @param {Object[]} rows - The rows being built.
 * @param {number} currentRowIndex - The current row index.
 * @param {number} maxCols - The maximum number of columns.
 * @return {*[]}
 */
const buildRows = (nodes, col = 0, rows = [], currentRowIndex = 0, maxCols = 1) => {
	nodes.forEach((node) => {
		const rowSpan = getRowSpan(node);
		const row = rows[currentRowIndex] || [];
		const isLeaf = !node.children || node.children.length === 0;
		const colSpan = isLeaf ? maxCols - col : 1;

		row[col] = {
			label: node.label,
			rowSpan: isLeaf ? undefined : rowSpan,
			colSpan,
		};

		rows[currentRowIndex] = row;

		if (node.children && node.children.length > 0) {
			buildRows(node.children, col + 1, rows, currentRowIndex, maxCols);
		}

		currentRowIndex += rowSpan;
	});

	return rows;
};

/**
 * AxisRowTable component
 * This component is used to display a pivot grid axis.
 *
 * @param {Object[]} data - The data to display in the table.
 * @return {JSX.Element} - The rendered table component.
 * @constructor
 */
const AxisRowHeader = ({data}) => {

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
	 * Normalizes the data by adding a 'total' child if the node is expanded.
	 * @type {Object[]}
	 */
	const normalized = normalizeData(data);

	/**
	 * Get the maximum depth of the tree.
	 * @type {number}
	 */
	const maxCols = getDepth(normalized);

	/**
	 * Build the rows with rowSpan and colSpan.
	 * @type {*[]}
	 */
	const rows = buildRows(normalized, 0, [], 0, maxCols);

	/**
	 * Render
	 */
	return (
		<div>
		<table className="table table-axis table-axis-row">
			<tbody>
			{rows.map((row, rowIndex) => (
				<tr key={rowIndex}>
					{[...Array(maxCols)].map((_, colIndex) => {
						const cell = row?.[colIndex];
						if (!cell) return null;

						const props = {};
						if (cell.rowSpan && cell.rowSpan > 1) props.rowSpan = cell.rowSpan;
						if (cell.colSpan && cell.colSpan > 1) props.colSpan = cell.colSpan;

						return (
							<td key={colIndex} {...props}>
								<AxisHeaderValue label={cell.label} />
							</td>
						);
					})}
				</tr>
			))}
			</tbody>
		</table>
		</div>
	);
};

export default AxisRowHeader;
