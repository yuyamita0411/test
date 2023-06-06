import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
import { ColorPalette } from '@wordpress/components';

const colorSettingFunc = (run) => {
    return run();
};
export const colorSetting = (props) => {
    return colorSettingFunc(() => {
        {
            const [ color1, setColor1 ] = useState ( '#f00' )
            const [ color2, setColor2 ] = useState ( '#f00' )
            const [ color3, setColor3 ] = useState ( '#f00' )
            const [ color4, setColor4 ] = useState ( '#f00' )
            const [ color5, setColor5 ] = useState ( '#f00' )
            return (
                <div>
                    <span style={{fontWeight:'bold'}}>ボタン文字色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color1 }
                        onChange={
                            (color1) => {
                                setColor1( color1 )
                                props.setAttributes({
                                    buttonFontColor: color1,
                                });
                            }
                        }
                        style={{marginBottom:'1rem'}}
                    />
                    <span style={{fontWeight:'bold'}}>ホバー時のボタン文字色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color2 }
                        onChange={
                            (color2) => {
                                setColor2( color2 )
                                props.setAttributes({
                                    buttonFontHoverColor: color2,
                                });
                            }
                        }
                        style={{marginBottom:'1rem'}}
                    />
                    <span style={{fontWeight:'bold'}}>ボタン背景色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color3 }
                        onChange={
                            (color3) => {
                                setColor3( color3 )
                                props.setAttributes({
                                    buttonBackgroundColor: color3,
                                });
                            }
                        }
                        style={{marginBottom:'1rem'}}
                    />
                    <span style={{fontWeight:'bold'}}>ホバー時のボタン背景色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color4 }
                        onChange={
                            (color4) => {
                                setColor4( color4 )
                                props.setAttributes({
                                    buttonBackgroundHoverColor: color4,
                                });
                            }
                        }
                        style={{marginBottom:'1rem'}}
                    />
                    <span style={{fontWeight:'bold'}}>ボタン枠色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color5 }
                        onChange={
                            (color5) => {
                                setColor5( color5 )
                                props.setAttributes({
                                    buttonGridColor: color5,
                                });
                            }
                        }
                        style={{marginBottom:'1rem'}}
                    />
                </div>
            )
        }
    });
}