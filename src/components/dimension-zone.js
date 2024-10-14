import React, {useState} from "react";
import {ReactSortable} from "react-sortablejs";

export default function DimensionZone(props) {

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