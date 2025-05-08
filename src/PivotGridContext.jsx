import React, {createContext, useState} from 'react';

/**
 * PivotGridContext
 * This context is used to manage the state of the PivotGrid component.
 *
 * @type {React.Context<{}>}
 */
export const PivotGridContext = createContext({
	rows: [],
	columns: [],
	data: [],
});

/**
 * PivotGridContextProvider
 * This component provides the PivotGridContext to its children.
 *
 * @param children
 * @return {JSX.Element}
 * @constructor
 */
export const PivotGridContextProvider = ({children}) => {
	const [rows, setRows] = useState([]);
	const [columns, setColumns] = useState([]);

	return (
		<PivotGridContext.Provider value={{rows, columns}}>
			{children}
		</PivotGridContext.Provider>
	);
};
