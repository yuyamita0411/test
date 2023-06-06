import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
import { ColorPalette} from '@wordpress/components';

const balloonFontColorFunc = (run) => {
    return run();
};
export const balloonFontColor = (props) => {
    return balloonFontColorFunc(() => {
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
                                balloonFontColor: color,
                            });
                        }
                    }
                />
            )
        }
    });
}