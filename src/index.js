/**
 * External dependencies
 */
import {addFilter} from '@wordpress/hooks';
import {__} from '@wordpress/i18n';
import {Dropdown} from '@wordpress/components';
import * as Woo from '@woocommerce/components';
import {Fragment} from '@wordpress/element';
import PivotGrid from './PivotGrid';
import PivotTable from "./components/PivotTable";

/**
 * Internal dependencies
 */
import './index.scss';
import Table from "./components/test/Table";

const MyExamplePage = () => {

	const headers = [
		{key: 'month', label: 'Month'},
		{key: 'orders', label: 'Orders'},
		{key: 'revenue', label: 'Revenue'},
	];
	const rows = [
		[
			{display: 'January', value: 1},
			{display: 10, value: 10},
			{display: '$530.00', value: 530},
		],
		[
			{display: 'February', value: 2},
			{display: 13, value: 13},
			{display: '$675.00', value: 675},
		],
		[
			{display: 'March', value: 3},
			{display: 9, value: 9},
			{display: '$460.00', value: 460},
		],
	];
	const summary = [
		{label: 'Gross Income', value: '$830.00'},
		{label: 'Taxes', value: '$96.32'},
		{label: 'Shipping', value: '$50.00'},
	];

	const initialItems = {
		waiting: [
			{ id: 'dim1', label: 'Country', type: 'dimension' },
			{ id: 'dim2', label: 'Region', type: 'dimension' },
			{ id: 'dim3', label: 'City', type: 'dimension' },
			{ id: 'dim4', label: 'Product', type: 'dimension' },
			{ id: 'dim5', label: 'Category', type: 'dimension' },
			{ id: 'dim6', label: 'Sales Channel', type: 'dimension' },
			{ id: 'meas1', label: 'Revenue', type: 'measure' },
			{ id: 'meas2', label: 'Profit', type: 'measure' },
		],
		filters: [],
		measures: [],
		rows: [],
		columns: [],
	};


	return (<Fragment>


		{/*<PivotTable initialItems={initialItems}/>*/}
		<PivotGrid/>
		{/*<Table/>*/}

		{/*<Woo.Section component="article">*/}
		{/*	<Woo.SectionHeader title={__('Table', 'pivotwoo')}/>*/}

		{/*	<Woo.TableCard*/}
		{/*		title="Revenue last week"*/}
		{/*		rows={rows}*/}
		{/*		headers={headers}*/}
		{/*		query={{page: 2}}*/}
		{/*		rowsPerPage={7}*/}
		{/*		totalRows={10}*/}
		{/*		summary={summary}*/}
		{/*	/>*/}

		{/*	<Woo.TablePlaceholder*/}
		{/*		caption="Revenue last week"*/}
		{/*		headers={headers}*/}
		{/*	/>*/}

		{/*	<Woo.Table*/}
		{/*		caption="Revenue last week"*/}
		{/*		headers={headers}*/}
		{/*		rows={rows}*/}
		{/*		// rowKey={ row => row.display }*/}
		{/*	/>*/}

		{/*	<Woo.TableSummary data={[*/}
		{/*		{label: 'Gross Income', value: '$830.00'},*/}
		{/*		{label: 'Taxes', value: '$96.32'},*/}
		{/*		{label: 'Shipping', value: '$50.00'},*/}
		{/*	]}/>*/}
		{/*</Woo.Section>*/}

		{/*<Woo.Section component="article">*/}
		{/*	<Woo.SectionHeader title={__('Search', 'pivotwoo')}/>*/}
		{/*	<Woo.Search*/}
		{/*		type="products"*/}
		{/*		placeholder="Search for something important"*/}
		{/*		selected={[]}*/}
		{/*		onChange={(items) => setInlineSelect(items)}*/}
		{/*		inlineTags*/}
		{/*	/>*/}
		{/*</Woo.Section>*/}

		{/*<Woo.Section component="article">*/}
		{/*	<Woo.SectionHeader title={__('Dropdown', 'pivotwoo')}/>*/}
		{/*	<Dropdown*/}
		{/*		renderToggle={({isOpen, onToggle}) => (*/}
		{/*			<Woo.DropdownButton*/}
		{/*				onClick={onToggle}*/}
		{/*				isOpen={isOpen}*/}
		{/*				labels={['Dropdown']}*/}
		{/*			/>*/}
		{/*		)}*/}
		{/*		renderContent={() => <p>Dropdown content here</p>}*/}
		{/*	/>*/}
		{/*</Woo.Section>*/}

		{/*<Woo.Section component="article">*/}
		{/*	<Woo.SectionHeader*/}
		{/*		title={__('Pill shaped container', 'pivotwoo')}*/}
		{/*	/>*/}
		{/*	<Woo.Pill className={'pill'}>*/}
		{/*		{__('Pill Shape Container', 'pivotwoo')}*/}
		{/*	</Woo.Pill>*/}
		{/*</Woo.Section>*/}

		{/*<Woo.Section component="article">*/}
		{/*	<Woo.SectionHeader title={__('Spinner', 'pivotwoo')}/>*/}
		{/*	<Woo.H>I am a spinner!</Woo.H>*/}
		{/*	<Woo.Spinner/>*/}
		{/*</Woo.Section>*/}

		{/*<Woo.Section component="article">*/}
		{/*	<Woo.SectionHeader title={__('Datepicker', 'pivotwoo')}/>*/}
		{/*	<Woo.DatePicker*/}
		{/*		text={__('I am a datepicker!', 'pivotwoo')}*/}
		{/*		dateFormat={'MM/DD/YYYY'}*/}
		{/*	/>*/}
		{/*</Woo.Section>*/}
	</Fragment>)
};

addFilter('woocommerce_admin_pages_list', 'pivotwoo', (pages) => {
	pages.push({
		container: MyExamplePage,
		path: '/pivotwoo',
		breadcrumbs: [__('Pivotwoo', 'pivotwoo')],
		navArgs: {
			id: 'pivotwoo',
		},
	});

	return pages;
});
