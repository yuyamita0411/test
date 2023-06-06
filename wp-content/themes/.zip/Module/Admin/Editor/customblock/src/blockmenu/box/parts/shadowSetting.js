import { RangeControl, ColorPalette } from '@wordpress/components';
import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
export const shadowSetting = (props) => {
    const [ color, setColor ] = useState ( '#f00' )
    const comp = 
    <div>
        <RangeControl
            label='横向き'
            onChange={
                ( number ) => {
                    props.setAttributes( { boxGridShadowX: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.boxGridShadowX}
        />
        <RangeControl
            label='縦向き'
            onChange={
                ( number ) => {
                    props.setAttributes( { boxGridShadowY: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.boxGridShadowY}
        />
        <RangeControl
            label='広がり1'
            onChange={
                ( number ) => {
                    props.setAttributes( { boxGridShadowSpread1: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.boxGridShadowSpread1}
        />
        <RangeControl
            label='広がり2'
            onChange={
                ( number ) => {
                    props.setAttributes( { boxGridShadowSpread2: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.boxGridShadowSpread2}
        />
        <ColorPalette
            label='影の色'
            colors={ JsonData.colors }
            value={ color }
            onChange={
                (color) => {
                    setColor( color )
                    props.setAttributes({
                        boxGridShadowColor: color,
                    });
                }
            }
        />
    </div>

    return comp;
}