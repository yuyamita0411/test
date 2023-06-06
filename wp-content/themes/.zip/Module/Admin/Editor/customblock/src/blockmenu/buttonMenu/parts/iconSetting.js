import FontAwesomData from '../../../fontawesome.json';
import { BaseControl, ButtonGroup, ColorPalette} from '@wordpress/components';
import { useState } from '@wordpress/element';
import JsonData from '../../../prop.json';

const FontAwesomeOBj = FontAwesomData.editIcon;
const { __ } = wp.i18n;

const iconSettingFunc = (run) => {
    return run();
};
export const iconSetting = (props) => {
    const [ color1, setColor1 ] = useState ( '#f00' )
    const [ color2, setColor2 ] = useState ( '#f00' )
    const comp = 
    <div>
        <BaseControl
        label={ __( 'ボタン前アイコン' ) }
        className={'editorIconArea'}
        >
            <ButtonGroup>
                {
                    iconSettingFunc(() => {
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
                                                iconFrontClass: object.currentTarget.value,
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
        <span style={{fontWeight:'bold'}}>アイコン前色</span>
        <ColorPalette
            colors={ JsonData.colors }
            value={ color1 }
            onChange={
                (color1) => {
                    setColor1( color1 )
                    props.setAttributes({
                        iconFrontColor: color1,
                    });
                }
            }
            style={{marginBottom:'1rem'}}
        />
        <BaseControl
        label={ __( 'ボタン後アイコン' ) }
        className={'editorIconArea'}
        >
            <ButtonGroup>
                {
                    iconSettingFunc(() => {
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
                                                iconBackClass: object.currentTarget.value,
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

        <span style={{fontWeight:'bold'}}>アイコン後色</span>
        <ColorPalette
            colors={ JsonData.colors }
            value={ color2 }
            onChange={
                (color2) => {
                    setColor2( color2 )
                    props.setAttributes({
                        iconBackColor: color2,
                    });
                }
            }
            style={{marginBottom:'1rem'}}
        />
    </div>
    return comp;
}