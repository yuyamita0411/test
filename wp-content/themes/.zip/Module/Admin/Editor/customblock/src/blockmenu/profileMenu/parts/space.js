import { RangeControl } from '@wordpress/components';
export const space= (props) => {
    const comp = 
    <RangeControl
        label='数値'
        onChange={
            ( margin ) => {
                props.setAttributes( { profileMarginBottom: margin } );
            }
        }
        min={0}
        max={10.0}
        step={0.1}
        value={props.attributes.profileMarginBottom}
    />
    return comp;
}