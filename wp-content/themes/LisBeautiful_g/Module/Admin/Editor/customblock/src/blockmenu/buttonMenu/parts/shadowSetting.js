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
                    props.setAttributes( { buttonGridShadowX: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.buttonGridShadowX}
        />
        <RangeControl
            label='縦向き'
            onChange={
                ( number ) => {
                    props.setAttributes( { buttonGridShadowY: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.buttonGridShadowY}
        />
        <RangeControl
            label='広がり1'
            onChange={
                ( number ) => {
                    props.setAttributes( { buttonGridShadowSpread1: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.buttonGridShadowSpread1}
        />
        <RangeControl
            label='広がり2'
            onChange={
                ( number ) => {
                    props.setAttributes( { buttonGridShadowSpread2: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.buttonGridShadowSpread2}
        />
        <ColorPalette
            label='影の色'
            colors={ JsonData.colors }
            value={ color }
            onChange={
                (color) => {
                    setColor( color )
                    props.setAttributes({
                        buttonGridShadowColor: color,
                    });
                }
            }
        />
    </div>

    return comp;
}