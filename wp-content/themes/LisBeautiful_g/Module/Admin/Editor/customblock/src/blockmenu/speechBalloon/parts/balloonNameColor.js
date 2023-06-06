import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
import { ColorPalette} from '@wordpress/components';

const balloonNameColorFunc = (run) => {
    return run();
};
export const balloonNameColor = (props) => {
    return balloonNameColorFunc(() => {
        {
            const [ color, setColor ] = useState ( '#f00' )
            return (
                <ColorPalette
                    colors={ JsonData.colors }
                    value={ color }
                    onChange={
                        (color) => {
                            setColor( color )
                            props.setAttributes({
                                balloonNameColor: color,
                            });
                        }
                    }
                />
            )
        }
    });
}