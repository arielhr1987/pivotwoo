import React, {useState} from "react";

export default function field(props) {

    const [state, setState] = useState([
        { id: 1, name: "shrek" },
        { id: 2, name: "fiona" },
    ]);

    return <div>Field</div>
}