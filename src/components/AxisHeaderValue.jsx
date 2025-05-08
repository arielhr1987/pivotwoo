

/**
 * AxisHeader component
 * This component is used to display the pivot grid axis headers.
 *
 * @param {Array} label - The data to be displayed in the axis headers.
 * @param {Object} props - Additional properties to be passed to the component.
 * @return {JSX.Element} - The rendered component.
 * @constructor
 */
function AxisHeaderValue({label, ...props}) {

	/**
	 * Render
	 */
	return (
		<div>
			{label}
		</div>
	);
}

export default AxisHeaderValue;
