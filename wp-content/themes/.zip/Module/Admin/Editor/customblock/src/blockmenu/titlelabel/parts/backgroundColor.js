import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
import { ColorPalette} from '@wordpress/components';

const MyBackgroundColorFunc = (run) => {
    return run();
};
export const MyBackgroundColor = (props) => {
    return MyBackgroundColorFunc(() => {
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
                                background: color,
                            });
                        }
                    }
                />
            )
        }
    });
}