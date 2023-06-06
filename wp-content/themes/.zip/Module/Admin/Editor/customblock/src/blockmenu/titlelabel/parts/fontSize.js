import { RangeControl } from '@wordpress/components';
export const MyFontSize = (props) => {
    const comp = 
    <RangeControl
        label='数値'
        onChange={
            ( number ) => {
                props.setAttributes( { fontSize: number } );
            }
        }
        min={0.5}
        max={2.0}
        step={0.1}
        value={props.attributes.fontSize}
    />
    return comp;
}