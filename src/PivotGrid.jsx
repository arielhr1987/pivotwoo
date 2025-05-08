import {Fragment} from '@wordpress/element';
import {PivotGridContextProvider} from "./PivotGridContext";
import * as Woo from '@woocommerce/components';
import AxisHeader from "./AxisHeader";
import ColSpanTableVertical from "./components/AxisRowHeader";
import AxisRowHeader from "./components/AxisRowHeader";
import AxisColumnHeader from "./components/AxisColumnHeader";

/**
 * PivotGrid component
 * This component is used to display a pivot grid.
 *
 * For more information about woocommerce table refer to:
 * https://github.com/woocommerce/woocommerce/blob/trunk/packages/js/components/src/table/README.md
 *
 * @param props
 * @return {JSX.Element}
 * @constructor
 */
function PivotGrid({...props}) {


	return <Fragment>
		<PivotGridContextProvider {...props}>
			{/*<PivotGridHeader />*/}
			{/*<PivotGridBody />*/}
			{/*<PivotGridFooter />*/}
			{/*<PivotGridSidebar />*/}
			{/*<PivotGridToolbar />*/}
			{/*<PivotGridContextProvider />*/}
			{/*<PivotGridContextConsumer />*/}
			{/*<PivotGridContextProvider />*/}

			<div className={'pivot-grid'}>
				<table style={{width: '100%'}} className={'table '}>
					<colgroup>
						<col style={{width: 1}}></col>
						<col></col>
					</colgroup>
					<tbody>
					<tr>
						<td colSpan="2">
							Waiting zone
						</td>
					</tr>
					<tr>
						<td colSpan="2">
							Filter zone
						</td>
					</tr>
					<tr>
						<td>
							Measure zone
						</td>
						<td>
							Columns dimension zone
						</td>
					</tr>
					<tr>
						<td>
							Rows dimension zone
						</td>
						<td>
							<AxisColumnHeader/>
						</td>
					</tr>
					<tr>
						<td>
							<AxisRowHeader/>
						</td>
						<td>
							Data zone
						</td>
					</tr>
					<tr>
						<td colSpan="2">
							<div style={{padding: '16px'}}>
								<Woo.Pagination
									page={1}
									perPage={10}
									total={500}
									onPageChange={(newPage) => setState({page: newPage})}
									onPerPageChange={(newPerPage) => setState({perPage: newPerPage})}
								/>
							</div>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</PivotGridContextProvider>
	</Fragment>
}

export default PivotGrid;
