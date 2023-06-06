import { RangeControl, ColorPalette } from '@wordpress/components';
import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
export const contentGridShadow = (props) => {
    const [ color, setColor ] = useState ( '#f00' )
    const comp = 
    <div>
        <RangeControl
            label='横向き'
            onChange={
                ( number ) => {
                    props.setAttributes( { contentGridShadowX: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.contentGridShadowX}
        />
        <RangeControl
            label='縦向き'
            onChange={
                ( number ) => {
                    props.setAttributes( { contentGridShadowY: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.contentGridShadowY}
        />
        <RangeControl
            label='広がり1'
            onChange={
                ( number ) => {
                    props.setAttributes( { contentGridShadowSpread1: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.contentGridShadowSpread1}
        />
        <RangeControl
            label='広がり2'
            onChange={
                ( number ) => {
                    props.setAttributes( { contentGridShadowSpread2: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.contentGridShadowSpread2}
        />
        <ColorPalette
            label='影の色'
            colors={ JsonData.colors }
            value={ color }
            onChange={
                (color) => {
                    setColor( color )
                    props.setAttributes({
                        contentGridShadowColor: color,
                    });
                }
            }
        />
    </div>
    return comp;
}