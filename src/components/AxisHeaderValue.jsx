/**
 * AxisHeader component
 * This component is used to display the pivot grid axis headers.
 *
 * @param {Object} props
 * @param {string} props.label - The data to be displayed in the axis headers.
 * @param {Object} props.props - Additional properties to be passed to the component.
 * @return {JSX.Element} - The rendered component.
 * @constructor
 */
export default function AxisHeaderValue({label, ...props}) {

	/**
	 * Render
	 */
	return (
		<div>
			{label}
		</div>
	);
}

