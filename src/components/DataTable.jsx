/**
 * DataTable component
 *
 * @param {[][]} data - The data to be displayed in the table.
 * @param {Object} props - The properties to be passed to the component.
 * @return {JSX.Element} - The rendered table component.
 * @constructor
 */
function DataTable({data, ...props}) {

	/**
	 * Render
	 */
	return <table className="table table-bordered">
		<tbody>
		{data.map((row, rowIndex) => (
			<tr key={rowIndex}>
				{row.map((cell, cellIndex) => (
					<td key={cellIndex}>
						<div>{cell}</div>
					</td>
				))}
			</tr>
		))}
		</tbody>
	</table>
}

export default DataTable;
