import {RichText} from '@wordpress/block-editor';

import {borderSetting} from './parts/borderSetting.js'
import {colorSetting} from './parts/colorSetting.js'
import {shadowSetting} from './parts/shadowSetting.js'
import {space} from './parts/space.js'

const { InspectorControls } = wp.blockEditor;
const { PanelBody} = wp.components;
const { __ } = wp.i18n;
const { RawHTML } = wp.element;

const returnMouseEventColor = (run) => {
    return run();
}
wp.blocks.registerBlockType( 'paragraph-style/box', {
    title: 'ボックス',
    category: 'common',
    attributes: {
        content: {type: 'string', default: ''},

        boxBorderCat: {type: 'string', default: 'dotted'},
        boxBorderColor: {type: 'string', default: '#abb8c3'},
        boxBorderWidth: {type: 'number', default: 2},
        boxBorderRadius: {type: 'number', default: 0},

        boxBackgroundColor: {type: 'string', default: 'transparent'},

        boxPaddingInside: {type: 'number', default: 1},
        boxPaddingOutside: {type: 'number', default: 0},

        boxGridShadowX: {type: 'number', default: 0},
        boxGridShadowY: {type: 'number', default: 0},
        boxGridShadowSpread1: {type: 'number', default: 0},
        boxGridShadowSpread2: {type: 'number', default: 0},

        boxGridShadowColor: {type: 'string', default: 'transparent'},

        boxMarginBottom: {type: 'number', default: 2},
    },
    transforms: {
        from: [{
            type: 'block',
            blocks: [ 'core/button' ],
            transform: ( { content } ) => {
                return wp.blocks.createBlock( 'paragraph-style/box', {text: content});
            }
        }]
    },
    edit: ( props ) => {
        return (
            <div style={{}}>
                <div { ...props }>
                    {
                    <InspectorControls>
                        <div style={{display:'inline-block',width:'100%'}}>
                            <PanelBody title={ __( '枠線設定' ) } initialOpen={ false }>{borderSetting(props)}</PanelBody>
                            <PanelBody title={ __( '色の設定' ) } initialOpen={ false }>{colorSetting(props)}</PanelBody>
                            <PanelBody title={ __( '影の設定' ) } initialOpen={ false }>{shadowSetting(props)}</PanelBody>
                            <PanelBody title={ __( '下のスペース' ) } initialOpen={ false }>{space(props)}</PanelBody>
                        </div>
                    </InspectorControls>
                    }
                    <div
                    style={{
                        boxShadow: `${props.attributes.boxGridShadowX}px ${props.attributes.boxGridShadowY}px ${props.attributes.boxGridShadowSpread1}px ${props.attributes.boxGridShadowSpread2}px ${props.attributes.boxGridShadowColor}`,
                        padding:`${props.attributes.boxPaddingOutside}em`,
                        backgroundColor:props.attributes.boxBackgroundColor,
                        marginBottom:`${props.attributes.boxMarginBottom}rem`
                    }}
                    >
                        <div
                        style={{
                            backgroundColor:props.attributes.boxBackgroundColor,
                            padding:`${props.attributes.boxPaddingInside}em`,
                            border:props.attributes.boxBorderCat,
                            borderWidth:props.attributes.boxBorderWidth,
                            borderColor:props.attributes.boxBorderColor,
                            borderRadius:`${props.attributes.boxBorderRadius}em`
                        }}
                        >
                            <RichText
                                value={ props.attributes.content }
                                onChange={
                                    (text) => {
                                        props.setAttributes( { content: text } )
                                    }
                                }
                                style={{
                                    display:'inline-block'
                                }}
                                placeholder={'文字を入力してください'}
                            />
                        </div>
                    </div>
                </div>
            </div>
        );
    },
    save: ( props ) => {
        return (
            <div
            style={{
                boxShadow: `${props.attributes.boxGridShadowX}px ${props.attributes.boxGridShadowY}px ${props.attributes.boxGridShadowSpread1}px ${props.attributes.boxGridShadowSpread2}px ${props.attributes.boxGridShadowColor}`,
                padding:`${props.attributes.boxPaddingOutside}em`,
                backgroundColor:props.attributes.boxBackgroundColor,
                marginBottom:`${props.attributes.boxMarginBottom}rem`
            }}
            >
                <div
                style={{
                    backgroundColor:props.attributes.boxBackgroundColor,
                    padding:`${props.attributes.boxPaddingInside}em`,
                    border:props.attributes.boxBorderCat,
                    borderWidth:props.attributes.boxBorderWidth,
                    borderColor:props.attributes.boxBorderColor,
                    borderRadius:`${props.attributes.boxBorderRadius}em`
                }}
                >
                    <RichText.Content
                        { ...props } value={ props.attributes.content }
                    />
                </div>
            </div>
        );
    }
});