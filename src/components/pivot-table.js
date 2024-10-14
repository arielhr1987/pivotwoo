import React, {useState} from 'react';
import {DndContext} from '@dnd-kit/core';
import {MeasureZone} from "./measure-zone";
import {Measure} from "./measure";
import DimensionZone from "./dimension-zone";
import { Button } from '@wordpress/components';
// import '../../node_modules/@wordpress/components/build-style/style.css';
import "@wordpress/components/build-style/style.css";
import "@wordpress/block-editor/build-style/style.css";

export function PivotTable(props) {
    const [parent, setParent] = useState(null);

    return <div className="woobi-pivot-container">
        <DndContext onDragEnd={handleDragEnd}>
            <table className="woobi-pivot woobi-table woobi-table-bordered">
                <tbody>
                <tr>
                    <td colSpan="3">Filter Zone.<Button>Hello</Button></td>
                </tr>
                <tr>
                    <td colSpan="1">
                        Measures Zone
                    </td>
                    <td colSpan="3">
                        Top Axis Dimensions
                        <DimensionZone>

                        </DimensionZone>
                        {/*<MeasureZone key="a" id="a">*/}
                        {/*    <Measure id="draggable">Drag me</Measure>*/}
                        {/*</MeasureZone>*/}
                    </td>
                </tr>
                <tr>
                    <td colSpan="1">
                        Left Axis Dimensions
                        <DimensionZone>

                        </DimensionZone>
                        {/*<MeasureZone key="b" id="b">*/}
                        {/*    asdasd*/}
                        {/*</MeasureZone>*/}
                    </td>
                    <td colSpan="1" className="woobi-top-axis-header woobi-table-container">
                        Top Axis Headers
                    </td>

                    <td colSpan="1" rowSpan="2" className="vertical-scroll">
                    </td>
                </tr>
                <tr>
                    <td colSpan="1" className="woobi-left-axis-header woobi-table-container">
                        Left Axis Headers
                    </td>
                    <td colSpan="1" className="p-0">
                        Data
                    </td>
                </tr>
                <td colSpan="3" className="horizontal-scroll">
                </td>
                <tr>
                    <td colSpan="3" className="">
                        Pager
                    </td>
                </tr>
                <tr>
                    <td colSpan="3" className="">
                        Statusbar
                    </td>
                </tr>
                </tbody>
            </table>
        </DndContext>
    </div>

    /**
     * Handle drag end
     * @param event
     */
    function handleDragEnd(event) {
        const {over} = event;
        console.log('Drag End');
        console.log(event);

        // If the item is dropped over a container, set it as the parent
        // otherwise reset the parent to `null`
        setParent(over ? over.id : null);
    }
}