import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
import { ColorPalette} from '@wordpress/components';

const MyColorPaletteFunc = (run) => {
    return run();
};
export const MyColorPalette = (props) => {
    return MyColorPaletteFunc(() => {
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
                                headerStyle: color,
                            });
                        }
                    }
                />
            )
        }
    });
}