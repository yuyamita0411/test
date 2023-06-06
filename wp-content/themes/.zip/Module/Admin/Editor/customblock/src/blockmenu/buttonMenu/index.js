import {RichText} from '@wordpress/block-editor';

import {shadowSetting} from './parts/shadowSetting.js'
import {borderSetting} from './parts/borderSetting.js'
import {colorSetting} from './parts/colorSetting.js'
import {widthDirSetting} from './parts/widthDirSetting.js'
import {urlSetting} from './parts/urlSetting.js'
import {iconSetting} from './parts/iconSetting.js'
import {space} from './parts/space.js'

const { InspectorControls } = wp.blockEditor;
const { PanelBody} = wp.components;
const { __ } = wp.i18n;
const { RawHTML } = wp.element;

const returnMouseEventColor = (run) => {
    return run();
}
wp.blocks.registerBlockType( 'paragraph-style/button', {
    title: 'オリジナルボタン',
    category: 'common',
    attributes: {
        content: {type: 'string', default: ''},

        buttonFontColor: {type: 'string', default: '#ffff'},
        buttonFontHoverColor: {type: 'string', default: '#ffff'},
        buttonBackgroundColor: {type: 'string', default: '#CF2E2E'},
        buttonBackgroundHoverColor: {type: 'string', default: '#FCB900'},
        buttonGridColor: {type: 'string', default: 'transparent'},

        buttonGridPadding: {type: 'number', default: 0.5},
        buttonGridThickness: {type: 'number', default: 0},
        buttonGridBorderRadius: {type: 'number', default: 1.5},

        buttonGridShadowX: {type: 'number', default: 2.5},
        buttonGridShadowY: {type: 'number', default: 2.5},
        buttonGridShadowSpread1: {type: 'number', default: 3.5},

        buttonGridShadowSpread2: {type: 'number', default: 0},
        buttonGridShadowColor: {type: 'string', default: '#B1B9C2'},

        iconFrontClass: {type: 'string', default: ''},
        iconFrontColor: {type: 'string', default: '#ffff'},
        iconBackClass: {type: 'string', default: 'fa-angle-right'},
        iconBackColor: {type: 'string', default: '#ffff'},

        buttonWidth: {type: 'number', default: 30},
        buttonFontSize: {type: 'number', default: 1},
        buttonDir: {type: 'string', default: 'center'},
        buttonFontDir: {type: 'string', default: 'center'},

        buttonUrl: {type: 'string', default: ''},
        affiliateTag: {type: 'string', default: ''},

        buttonClassName: {type: 'string', default: 'normalButton'},

        buttonMarginBottom: {type: 'number', default: 2},
    },
    transforms: {
        from: [{
            type: 'block',
            blocks: [ 'core/button' ],
            transform: ( { content } ) => {
                return wp.blocks.createBlock( 'paragraph-style/button', {text: content});
            }
        }]
    },
    edit: ( props ) => {
        return (
            <div style={{
                width:'100%',
                textAlign:`${props.attributes.buttonDir}`,
                display:'inline-block'
            }}>
                <div { ...props }>
                    {
                    <InspectorControls>
                        <div style={{display:'inline-block',width:'100%'}}>
                            <PanelBody title={ __( '色設定' ) } initialOpen={ false }>{colorSetting(props)}</PanelBody>
                            <PanelBody title={ __( '枠線・余白設定' ) } initialOpen={ false }>{borderSetting(props)}</PanelBody>
                            <PanelBody title={ __( '見出し影' ) } initialOpen={ false }>{shadowSetting(props)}</PanelBody>
                            <PanelBody title={ __( 'アイコン設定' ) } initialOpen={ false }>{iconSetting(props)}</PanelBody>
                            <PanelBody title={ __( '下のスペース' ) } initialOpen={ false }>{space(props)}</PanelBody>
                            <PanelBody title={ __( 'ボタン幅、位置、文字方向' ) } initialOpen={ false }>{widthDirSetting(props)}</PanelBody>
                            <PanelBody title={ __( 'ボタン遷移先設定、アフィリエイト計測タグ' ) } initialOpen={ false }>{urlSetting(props)}</PanelBody>
                        </div>
                    </InspectorControls>
                    }
                    <div
                    className={''}
                    style={{
                        position:'relative',
                        display:'inline-block',
                        background:props.attributes.buttonBackgroundColor,
                        border:`${props.attributes.buttonGridThickness}px solid ${props.attributes.buttonGridColor}`,
                        boxShadow: `${props.attributes.buttonGridShadowX}px ${props.attributes.buttonGridShadowY}px ${props.attributes.buttonGridShadowSpread1}px ${props.attributes.buttonGridShadowSpread2}px ${props.attributes.buttonGridShadowColor}`,
                        padding:`${props.attributes.buttonGridPadding}em`,
                        borderRadius:`${props.attributes.buttonGridBorderRadius}em`,
                        color:props.attributes.buttonFontColor,
                        width:`${props.attributes.buttonWidth}%`,
                        textAlign:`${props.attributes.buttonFontDir}`,
                        fontSize:`${props.attributes.buttonFontSize}em`,
                        marginBottom: `${props.attributes.buttonMarginBottom}rem`
                    }}
                    >
                        <i className={props.attributes.iconFrontClass}
                        style={{
                            color: props.attributes.iconFrontColor,
                            marginRight:'.2em'
                        }}>
                        </i>
                        <RichText
                            tagName="span"
                            value={ props.attributes.content }
                            onChange={
                                (text) => {
                                    props.setAttributes( { content: text } )
                                }
                            }
                            style={{
                                display:'inline-block'
                            }}
                            placeholder={'タイトルを入力してください'}
                        />
                        <i className={props.attributes.iconBackClass}
                        style={{
                            color: props.attributes.iconBackColor,
                            marginLeft:'.2em'
                        }}>
                        </i>
                        <RawHTML>{ props.attributes.affiliateTag }</RawHTML>
                    </div>
                </div>
            </div>
        );
    },
    save: ( props ) => {
        return (
            <div style={{
                width:'100%',
                textAlign:`${props.attributes.buttonDir}`,
                marginBottom: `${props.attributes.buttonMarginBottom}rem`
            }}>
                <a
                className={'cursor'}
                style={{
                    position:'relative',
                    display:'inline-block',
                    background:props.attributes.buttonBackgroundColor,
                    border:`${props.attributes.buttonGridThickness}px solid ${props.attributes.buttonGridColor}`,
                    boxShadow: `${props.attributes.buttonGridShadowX}px ${props.attributes.buttonGridShadowY}px ${props.attributes.buttonGridShadowSpread1}px ${props.attributes.buttonGridShadowSpread2}px ${props.attributes.buttonGridShadowColor}`,
                    padding:`${props.attributes.buttonGridPadding}em`,
                    borderRadius:`${props.attributes.buttonGridBorderRadius}em`,
                    color:props.attributes.buttonFontColor,
                    width:`${props.attributes.buttonWidth}%`,
                    textAlign:`${props.attributes.buttonFontDir}`,
                    fontSize:`${props.attributes.buttonFontSize}em`
                }}
                onMouseOut={
                    returnMouseEventColor(() => {
                        return `
                        this.style.background='${props.attributes.buttonBackgroundColor}';
                        this.style.color='${props.attributes.buttonFontColor}';
                        this.style.transition='all .5s';`
                        ;
                    })
                }
                onMouseOver={
                    returnMouseEventColor(() => {
                        return `
                        this.style.background='${props.attributes.buttonBackgroundHoverColor}';
                        this.style.color='${props.attributes.buttonFontHoverColor}';
                        this.style.transition='all .5s';`
                        ;
                    })
                }
                href={props.attributes.buttonUrl}
                >
                    <i className={props.attributes.iconFrontClass}
                    style={{
                        color: props.attributes.iconFrontColor,
                        marginRight:'.2em'
                    }}>
                    </i>
                    <RichText.Content
                        style={{
                            display:'inline-block'
                        }}
                        { ...props } value={ props.attributes.content }
                    />
                    <i className={props.attributes.iconBackClass}
                    style={{
                        color: props.attributes.iconBackColor,
                        marginLeft:'.2em'
                    }}>
                    </i>
                    <RawHTML>{ props.attributes.affiliateTag }</RawHTML>
                </a>
            </div>
        );
    }
});