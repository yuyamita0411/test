import { RangeControl } from '@wordpress/components';
export const space= (props) => {
    const comp = 
    <RangeControl
        label='下のスペース'
        onChange={
            ( margin ) => {
                props.setAttributes( { boxMarginBottom: margin } );
            }
        }
        min={0}
        max={10.0}
        step={0.1}
        value={props.attributes.boxMarginBottom}
    />
    return comp;
}