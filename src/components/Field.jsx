import {useState, useEffect} from 'react';

/**
 * Field component
 *
 * @param id
 * @param label
 * @param type
 * @param sort
 * @param props
 * @return {JSX.Element}
 * @constructor
 */
export default function Field({id, label, sort = 'DESC', type='dimension',...props}) {

	const [filters, setFilters] = useState([]);
	const [values, setValues] = useState([]);

	const sortIcon = sort === 'ASC' ? '↑' : sort === 'DESC' ? '↓' : '';

	/**
	 * Render
	 */
	return <div className={'pw-field'}>
		<div className={'pw-field-label'}>{label}</div>
		<div className={'pw-field-sort'}>{sortIcon}</div>
	</div>
}
