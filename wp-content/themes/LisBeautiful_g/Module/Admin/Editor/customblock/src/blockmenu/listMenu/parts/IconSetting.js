import FontAwesomData from '../../../fontawesome.json';
import { BaseControl, ButtonGroup, ColorPalette} from '@wordpress/components';
import { useState } from '@wordpress/element';
import JsonData from '../../../prop.json';

const FontAwesomeOBj = FontAwesomData.editIcon;
const { __ } = wp.i18n;

const IconSettingFunc = (run) => {
    return run();
};
export const IconSetting = (props) => {
    const [ color1, setColor1 ] = useState ( '#f00' )
    const comp = 
    <div>
        <BaseControl
        label={ __( 'アイコン設定' ) }
        className={'editorIconArea'}
        >
            <ButtonGroup>
                {
                    IconSettingFunc(() => {
                        const EachMenu = [];
                        FontAwesomeOBj.forEach((obj) => {
                            EachMenu.push(
                                wp.element.createElement(
                                    wp.components.Button,
                                    {
                                        value: obj.iconclass,
                                        isSmall: true,
                                        onClick: (object) => {
                                            props.setAttributes({
                                                listIconClass: object.currentTarget.value,
                                            });
                                        }
                                    },
                                    '',
                                )
                            );
                        });
                        return EachMenu;
                    })
                }
            </ButtonGroup>
        </BaseControl>
    </div>
    return comp;
}