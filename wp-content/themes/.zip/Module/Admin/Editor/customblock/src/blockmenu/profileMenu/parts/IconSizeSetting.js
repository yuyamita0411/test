import JsonData from '../../../prop.json';
import { RangeControl, SelectControl, ColorPalette } from '@wordpress/components';
import { useState } from '@wordpress/element';

export const IconSizeSetting= (props) => {
    const comp = 
    <div>
        <RangeControl
            label='SNSアイコンの大きさ調整'
            onChange={
                ( number ) => {
                    props.setAttributes( { IconSize: number } );
                }
            }
            min={0.5}
            max={5}
            step={0.1}
            value={props.attributes.IconSize}
        />
    </div>
    return comp;
}