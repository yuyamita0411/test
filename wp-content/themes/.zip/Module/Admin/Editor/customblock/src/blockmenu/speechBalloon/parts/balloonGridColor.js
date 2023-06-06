import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
import { ColorPalette} from '@wordpress/components';

const balloonGridColorFunc = (run) => {
    return run();
};
export const balloonGridColor = (props) => {
    return balloonGridColorFunc(() => {
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
                                balloonGridColor: color,
                            });
                        }
                    }
                />
            )
        }
    });
}