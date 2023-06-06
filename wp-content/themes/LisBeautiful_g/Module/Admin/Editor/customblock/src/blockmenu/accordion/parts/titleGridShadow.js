import { RangeControl, ColorPalette } from '@wordpress/components';
import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
export const titleGridShadow = (props) => {
    const [ color, setColor ] = useState ( '#f00' )
    const comp = 
    <div>
        <RangeControl
            label='横向き'
            onChange={
                ( number ) => {
                    props.setAttributes( { titleGridShadowX: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.titleGridShadowX}
        />
        <RangeControl
            label='縦向き'
            onChange={
                ( number ) => {
                    props.setAttributes( { titleGridShadowY: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.titleGridShadowY}
        />
        <RangeControl
            label='広がり1'
            onChange={
                ( number ) => {
                    props.setAttributes( { titleGridShadowSpread1: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.titleGridShadowSpread1}
        />
        <RangeControl
            label='広がり2'
            onChange={
                ( number ) => {
                    props.setAttributes( { titleGridShadowSpread2: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.titleGridShadowSpread2}
        />
        <ColorPalette
            label='影の色'
            colors={ JsonData.colors }
            value={ color }
            onChange={
                (color) => {
                    setColor( color )
                    props.setAttributes({
                        titleGridShadowColor: color,
                    });
                }
            }
        />
    </div>

    return comp;
}