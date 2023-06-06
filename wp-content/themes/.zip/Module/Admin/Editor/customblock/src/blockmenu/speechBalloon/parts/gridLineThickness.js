import { RangeControl } from '@wordpress/components';
export const MyGridLineThickness = (props) => {
    const comp = 
    <RangeControl
        label='数値'
        onChange={
            ( number ) => {
                props.setAttributes( { balloonGridThickness: number } );
            }
        }
        min={0.5}
        max={4.0}
        step={0.1}
        value={props.attributes.balloonGridThickness}
    />
    return comp;
}