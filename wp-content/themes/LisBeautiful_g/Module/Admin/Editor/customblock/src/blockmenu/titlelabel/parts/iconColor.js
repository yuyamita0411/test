import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
import { ColorPalette} from '@wordpress/components';

const MyIconColorFunc = (run) => {
    return run();
};
export const MyIconColor = (props) => {
    return MyIconColorFunc(() => {
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
                                iconStyle: color,
                            });
                        }
                    }
                />
            )
        }
    });
}