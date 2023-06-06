import JsonData from '../../../prop.json';
import { useState } from '@wordpress/element';
import { ColorPalette, RangeControl } from '@wordpress/components';

const profileImgFunc = (run) => {
    return run();
};
export const profileImg = (props) => {
    return profileImgFunc(() => {
        {
            const [ color, setColor ] = useState ( '#f00' )
            return (
                <div>
                    <RangeControl
                        label='プロフィールイメージのサイズ'
                        onChange={
                            ( width ) => {
                                props.setAttributes( { profileImgWidth: width } );
                            }
                        }
                        min={0}
                        max={10.0}
                        step={0.1}
                        value={props.attributes.profileImgWidth}
                    />
                    <RangeControl
                        label='プロフィールイメージの枠線の太さ'
                        onChange={
                            ( width ) => {
                                props.setAttributes( { profileImgBorderWidth: width } );
                            }
                        }
                        min={0}
                        max={10.0}
                        step={0.1}
                        value={props.attributes.profileImgBorderWidth}
                    />
                    <span style={{fontWeight:'bold'}}>プロフィールイメージ画像の枠の色</span>
                    <ColorPalette
                        colors={ JsonData.colors }
                        value={ color }
                        onChange={
                            (color) => {
                                setColor( color )
                                props.setAttributes({
                                    profileImgBorderColor: color
                                });
                            }
                        }
                        style={{marginBottom:'1rem'}}
                    />
                    <RangeControl
                        label='プロフィールイメージの枠線の丸み'
                        onChange={
                            ( radius ) => {
                                props.setAttributes( { profileImgBorderRadius: radius } );
                            }
                        }
                        min={0}
                        max={100}
                        step={1}
                        value={props.attributes.profileImgBorderRadius}
                    />
                </div>
            )
        }
    });
}