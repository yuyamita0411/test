import { RangeControl, SelectControl, ColorPalette } from '@wordpress/components';

export const space= (props) => {
    const comp = 
    <div>
        <RangeControl
            label='下のスペース'
            onChange={
                ( number ) => {
                    props.setAttributes( { accordionMarginBottom: number } );
                }
            }
            min={0}
            max={5}
            step={0.1}
            value={props.attributes.accordionMarginBottom}
        />
    </div>
    return comp;
}