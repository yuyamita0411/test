import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
import { ColorPalette} from '@wordpress/components';

const MyFontColorFunc = (run) => {
    return run();
};
export const MyFontColor = (props) => {
    return MyFontColorFunc(() => {
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
                                fontcolor: color,
                            });
                        }
                    }
                />
            )
        }
    });
}