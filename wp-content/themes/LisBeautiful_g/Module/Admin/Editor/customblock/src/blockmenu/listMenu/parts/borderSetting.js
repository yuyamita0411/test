import JsonData from '../../../prop.json';
import { RangeControl, SelectControl, ColorPalette } from '@wordpress/components';
import { useState } from '@wordpress/element';

export const borderSetting= (props) => {
    const [ color1, setColor1 ] = useState ( '#f00' )
    const comp = 
    <div>
        <RangeControl
            label='枠の太さ調整'
            onChange={
                ( number ) => {
                    props.setAttributes( { listBorderWidth: number } );
                }
            }
            min={0}
            max={20}
            step={0.1}
            value={props.attributes.listBorderWidth}
        />
        <RangeControl
            label='枠の余白調整'
            onChange={
                ( number ) => {
                    props.setAttributes( { listWhiteSpace: number } );
                }
            }
            min={0}
            max={5}
            step={0.1}
            value={props.attributes.listWhiteSpace}
        />
        <RangeControl
            label='項目の間隔調整'
            onChange={
                ( number ) => {
                    props.setAttributes( { menuWhiteSpace: number } );
                }
            }
            min={0}
            max={5}
            step={0.1}
            value={props.attributes.menuWhiteSpace}
        />
        <RangeControl
            label='枠線の丸み'
            onChange={
                ( number ) => {
                    props.setAttributes( { menuBorderRadius: number } );
                }
            }
            min={0}
            max={5}
            step={0.1}
            value={props.attributes.menuBorderRadius}
        />
    </div>
    return comp;
}