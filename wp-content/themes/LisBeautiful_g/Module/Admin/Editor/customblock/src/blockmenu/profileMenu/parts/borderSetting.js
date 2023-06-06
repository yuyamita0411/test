import JsonData from '../../../prop.json';
import { RangeControl, SelectControl, ColorPalette } from '@wordpress/components';
import { useState } from '@wordpress/element';

export const borderSetting= (props) => {
    const [ color, setColor ] = useState ( '#f00' )
    const comp = 
    <div>
        <RangeControl
            label='枠の太さ調整'
            onChange={
                ( number ) => {
                    props.setAttributes( { profileBorderWidth: number } );
                }
            }
            min={0}
            max={20}
            step={0.1}
            value={props.attributes.profileBorderWidth}
        />
        <RangeControl
            label='枠の余白調整'
            onChange={
                ( number ) => {
                    props.setAttributes( { profileWhiteSpace: number } );
                }
            }
            min={0}
            max={5}
            step={0.1}
            value={props.attributes.profileWhiteSpace}
        />
        <RangeControl
            label='枠線の丸み'
            onChange={
                ( number ) => {
                    props.setAttributes( { profileBorderRadius: number } );
                }
            }
            min={0}
            max={5}
            step={0.1}
            value={props.attributes.profileBorderRadius}
        />
    </div>
    return comp;
}