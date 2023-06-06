import { RangeControl } from '@wordpress/components';
export const MyFontSpace= (props) => {
    const comp = 
    <RangeControl
        label='数値'
        onChange={
            ( padding ) => {
                props.setAttributes( { fontPadding: padding } );
            }
        }
        min={0.5}
        max={2.0}
        step={0.1}
        value={props.attributes.fontPadding}
    />
    return comp;
}