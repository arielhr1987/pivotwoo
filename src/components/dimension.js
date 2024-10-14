import React, {useState} from "react";

export default function dimension(props) {

    const [state, setState] = useState([
        { id: 1, name: "shrek" },
        { id: 2, name: "fiona" },
    ]);

    return <ReactSortable list={state} setList={setState} group="dimensions">
        {state.map((item) => (
            <button key={item.id}>{item.name}</button>
        ))}
    </ReactSortable>
}