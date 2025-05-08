import {Fragment} from '@wordpress/element';
import {PivotGridContextProvider} from "./PivotGridContext";
import * as Woo from '@woocommerce/components';
import AxisColumnHeader from "./components/AxisColumnHeader";

/**
 * AxisHeader component
 * This component is used to display a pivot grid axis.
 *
 * @param props
 * @return {JSX.Element}
 * @constructor
 */
function AxisHeader({...props}) {

	const data = [
		{ label: 'A' },
		{
			label: 'B',
			expanded: true,
			children: [
				{ label: 'B1' },
				{
					label: 'B2',
					expanded: true,
					children: [
						{ label: 'B2.1' },
						{ label: 'B2.2' },
					],
				},
				{ label: 'B3' },
			],
		},
		{ label: 'C' },
		{ label: 'D' },
	];

	return <div className={'axis-headers'}>
		<AxisColumnHeader data={data} />
	</div>;

	// const data = [
	// 	{
	// 		label: 'A',
	// 	},
	// 	{
	// 		label: 'B',
	// 		children: [
	// 			{label: 'B1'},
	// 			{label: 'B2'},
	// 			{label: 'B3'},
	// 		]
	// 	},{
	// 		label: 'C',
	// 	},{
	// 		label: 'D',
	// 	}
	// ];
	//
	// return <div className={'axis-headers'}>
	// 	Axis Headers
	// 	<table className={'table table-bordered'}>
	// 		<tbody>
	//
	// 		</tbody>
	// 	</table>
	// </div>
}

export default AxisHeader;
