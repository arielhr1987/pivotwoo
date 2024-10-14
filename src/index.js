/**
 * External dependencies
 */
import { addFilter } from '@wordpress/hooks';
import { __ } from '@wordpress/i18n';
import { Dropdown } from '@wordpress/components';
import * as Woo from '@woocommerce/components';
import { Fragment } from '@wordpress/element';

/**
 * Internal dependencies
 */
import './index.scss';

const MyExamplePage = () => (
	<Fragment>
		<Woo.Section component="article">
			<Woo.SectionHeader title={ __( 'Search', 'pivotwoo' ) } />
			<Woo.Search
				type="products"
				placeholder="Search for something"
				selected={ [] }
				onChange={ ( items ) => setInlineSelect( items ) }
				inlineTags
			/>
		</Woo.Section>

		<Woo.Section component="article">
			<Woo.SectionHeader title={ __( 'Dropdown', 'pivotwoo' ) } />
			<Dropdown
				renderToggle={ ( { isOpen, onToggle } ) => (
					<Woo.DropdownButton
						onClick={ onToggle }
						isOpen={ isOpen }
						labels={ [ 'Dropdown' ] }
					/>
				) }
				renderContent={ () => <p>Dropdown content here</p> }
			/>
		</Woo.Section>

		<Woo.Section component="article">
			<Woo.SectionHeader
				title={ __( 'Pill shaped container', 'pivotwoo' ) }
			/>
			<Woo.Pill className={ 'pill' }>
				{ __( 'Pill Shape Container', 'pivotwoo' ) }
			</Woo.Pill>
		</Woo.Section>

		<Woo.Section component="article">
			<Woo.SectionHeader title={ __( 'Spinner', 'pivotwoo' ) } />
			<Woo.H>I am a spinner!</Woo.H>
			<Woo.Spinner />
		</Woo.Section>

		<Woo.Section component="article">
			<Woo.SectionHeader title={ __( 'Datepicker', 'pivotwoo' ) } />
			<Woo.DatePicker
				text={ __( 'I am a datepicker!', 'pivotwoo' ) }
				dateFormat={ 'MM/DD/YYYY' }
			/>
		</Woo.Section>
	</Fragment>
);

addFilter( 'woocommerce_admin_pages_list', 'pivotwoo', ( pages ) => {
	pages.push( {
		container: MyExamplePage,
		path: '/pivotwoo',
		breadcrumbs: [ __( 'Pivotwoo', 'pivotwoo' ) ],
		navArgs: {
			id: 'pivotwoo',
		},
	} );

	return pages;
} );
