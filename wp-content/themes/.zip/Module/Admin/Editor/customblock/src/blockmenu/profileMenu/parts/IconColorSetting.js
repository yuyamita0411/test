import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
import { ColorPalette } from '@wordpress/components';

const IconColorSettingFunc = (run) => {
    return run();
};
export const IconColorSetting = (props) => {
    return IconColorSettingFunc(() => {
        {
            const [ color1, setColor1 ] = useState ( '#f00' )
            const [ color2, setColor2 ] = useState ( '#f00' )
            const [ color3, setColor3 ] = useState ( '#f00' )
            const [ color4, setColor4 ] = useState ( '#f00' )
            const [ color5, setColor5 ] = useState ( '#f00' )
            const [ color6, setColor6 ] = useState ( '#f00' )
            return (
                <div>
                    <span style={{fontWeight:'bold'}}>Instagramの色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color1 }
                        onChange={
                            (color1) => {
                                setColor1( color1 )
                                props.setAttributes({
                                    InstagramColor: color1,
                                });
                            }
                        }
                        style={{marginBottom:'1rem'}}
                    />
                    <span style={{fontWeight:'bold'}}>LINEの色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color2 }
                        onChange={
                            (color2) => {
                                setColor2( color2 )
                                props.setAttributes({
                                    LINEColor: color2,
                                });
                            }
                        }
                        style={{marginBottom:'1rem'}}
                    />
                    <span style={{fontWeight:'bold'}}>Facebookの色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color3 }
                        onChange={
                            (color3) => {
                                setColor3( color3 )
                                props.setAttributes({
                                    FacebookColor: color3
                                });
                            }
                        }
                        style={{marginBottom:'1rem'}}
                    />
                    <span style={{fontWeight:'bold'}}>Twitterの色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color4 }
                        onChange={
                            (color4) => {
                                setColor4( color4 )
                                props.setAttributes({
                                    TwitterColor: color4
                                });
                            }
                        }
                        style={{marginBottom:'1rem'}}
                    />
                    <span style={{fontWeight:'bold'}}>Feedlyの色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color5 }
                        onChange={
                            (color5) => {
                                setColor5( color5 )
                                props.setAttributes({
                                    FeedlyColor: color5
                                });
                            }
                        }
                        style={{marginBottom:'1rem'}}
                    />
                    <span style={{fontWeight:'bold'}}>YouTubeの色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color6 }
                        onChange={
                            (color6) => {
                                setColor6( color6 )
                                props.setAttributes({
                                    YouTubeColor: color6
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