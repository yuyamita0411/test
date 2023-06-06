import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
import { ColorPalette} from '@wordpress/components';

const balloonBackgroundColorFunc = (run) => {
    return run();
};
export const balloonBackgroundColor = (props) => {
    return balloonBackgroundColorFunc(() => {
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
                                balloonBackgroundColor: color,
                            });
                        }
                    }
                />
            )
        }
    });
}