import {RichText} from '@wordpress/block-editor';

import {colorSetting} from './parts/colorSetting.js'
import {spaceGrid} from './parts/spaceGrid.js'

import {titleGridShadow} from './parts/titleGridShadow.js'
import {contentGridShadow} from './parts/contentGridShadow.js'
import {space} from './parts/space.js'

const { InspectorControls } = wp.blockEditor;
const { PanelBody } = wp.components;
const { __ } = wp.i18n;

wp.blocks.registerBlockType( 'paragraph-style/accordion', {
    title: 'アコーディオンメニュー',
    category: 'common',
    attributes: {
        accordionTitle: {type: 'string', default: ''},
        accordionDescription: {type: 'string', default: ''},
        accordionStatus: {type: 'string', default: 'close'},

        titleBackgroundColor: {type: 'string', default: '#ffff'},
        titleColor: {type: 'string', default: ''},
        titleGridColor: {type: 'string', default: 'rgba(77,88,101,.15)'},
        contentBackgroundColor: {type: 'string', default: ''},
        contentColor: {type: 'string', default: ''},
        contentGridColor: {type: 'string', default: 'rgba(77,88,101,.15)'},

        titleGridThickness: {type: 'number', default: 0.5},
        titleGridPadding: {type: 'number', default: 0.5},
        titleGridShadowX: {type: 'number', default: 0},
        titleGridShadowY: {type: 'number', default: 3},
        titleGridShadowSpread1: {type: 'number', default: 6},
        titleGridShadowSpread2: {type: 'number', default: -1},
        titleGridShadowColor: {type: 'string', default: '#B1B9C2'},
        titleGridBorderRadius: {type: 'number', default: 0},

        contentGridThickness: {type: 'number', default: 0.5},
        contentGridPadding: {type: 'number', default: 0.5},
        contentGridShadowX: {type: 'number', default: 0},
        contentGridShadowY: {type: 'number', default: 0},
        contentGridShadowSpread1: {type: 'number', default: 0},
        contentGridShadowSpread2: {type: 'number', default: 0},
        contentGridShadowColor: {type: 'string', default: '#B1B9C2'},
        contentGridBorderRadius: {type: 'number', default: 0},

        accordionMarginBottom: {type: 'number', default: 2}
    },
    transforms: {
        from: [{
            type: 'block',
            blocks: [ 'core/paragraph' ],
            transform: ( { content } ) => {
                return wp.blocks.createBlock( 'paragraph-style/paragraph', {text: content});
            }
        }]
    },
    edit: ( props ) => {
        return (
            <div { ...props }>
                {
                <InspectorControls>
                    <div style={{display:'inline-block',width:'100%'}}>
                        <PanelBody title={ __( '色設定' ) } initialOpen={ false }>{colorSetting(props)}</PanelBody>

                        <PanelBody title={ __( '枠線・余白設定' ) } initialOpen={ false }>{spaceGrid(props)}</PanelBody>

                        <PanelBody title={ __( '見出し影' ) } initialOpen={ false }>{titleGridShadow(props)}</PanelBody>
                        <PanelBody title={ __( 'コンテンツ枠影' ) } initialOpen={ false }>{contentGridShadow(props)}</PanelBody>
                        <PanelBody title={ __( '下のスペース' ) } initialOpen={ false }>{space(props)}</PanelBody>
                    </div>
                </InspectorControls>
                }
                <div style={{positon:'relative', marginBottom:`${props.attributes.accordionMarginBottom}rem`}} className={''}>
                    <div
                    className={'accordionTitle cursor accordionTitleClose'}
                    style={{
                        position:'relative',
                        background:props.attributes.titleBackgroundColor,
                        border:`${props.attributes.titleGridThickness}px solid ${props.attributes.titleGridColor}`,
                        boxShadow: `${props.attributes.titleGridShadowX}px ${props.attributes.titleGridShadowY}px ${props.attributes.titleGridShadowSpread1}px ${props.attributes.titleGridShadowSpread2}px ${props.attributes.titleGridShadowColor}`,
                        padding:`${props.attributes.titleGridPadding}em`,
                        borderRadius:`${props.attributes.titleGridBorderRadius}em`
                    }}
                    >
                        <RichText
                            tagName="span"
                            value={ props.attributes.accordionTitle }
                            onChange={
                                (text) => {
                                    props.setAttributes( { accordionTitle: text } )
                                }
                            }
                            style={{
                                color:props.attributes.titleColor,
                                display:'inline-block'
                            }}
                            placeholder={'タイトルを入力してください'}
                        />
                    </div>
                    <div
                    className={`accordionDescription accordionContentOpen`}
                    style={{
                        background:props.attributes.contentBackgroundColor,
                        border:`${props.attributes.contentGridThickness}px solid ${props.attributes.contentGridColor}`,
                        boxShadow: `${props.attributes.contentGridShadowX}px ${props.attributes.contentGridShadowY}px ${props.attributes.contentGridShadowSpread1}px ${props.attributes.contentGridShadowSpread2}px ${props.attributes.contentGridShadowColor}`,
                        borderRadius:`${props.attributes.contentGridBorderRadius}em`,
                        padding:`${props.attributes.contentGridPadding}em`
                    }}
                    >
                        <RichText
                            tagName="span"
                            value={ props.attributes.accordionDescription }
                            onChange={
                                (text) => {
                                    props.setAttributes( { accordionDescription: text } )
                                }
                            }
                            style={{
                                color:props.attributes.contentColor,
                                display:'inline-block'
                            }}
                            placeholder={'コンテンツの中身を入力してください'}
                        />
                    </div>
                </div>
            </div>
        );
    },
    save: ( props ) => {
        return (
            <div className={'accordionWrapper'} style={{marginBottom:`${props.attributes.accordionMarginBottom}rem`}}>
                <div
                className={'accordionTitle cursor accordionTitleClose'}
                style={{
                    position:'relative',
                    background:props.attributes.titleBackgroundColor,
                    border:`${props.attributes.titleGridThickness}px solid ${props.attributes.titleGridColor}`,
                    boxShadow: `${props.attributes.titleGridShadowX}px ${props.attributes.titleGridShadowY}px ${props.attributes.titleGridShadowSpread1}px ${props.attributes.titleGridShadowSpread2}px ${props.attributes.titleGridShadowColor}`,
                    padding:`${props.attributes.titleGridPadding}em`,
                    borderRadius:`${props.attributes.titleGridBorderRadius}em`
                }}
                >
                    <RichText.Content
                        tagName="span"
                        style={{
                            color:props.attributes.titleColor
                        }}
                        { ...props } value={ props.attributes.accordionTitle }
                    />
                </div>
                <div
                className={`accordionDescription accordionContentClose`}
                style={{
                    background:props.attributes.contentBackgroundColor,
                    border:`${props.attributes.contentGridThickness}px solid ${props.attributes.contentGridColor}`,
                    boxShadow: `${props.attributes.contentGridShadowX}px ${props.attributes.contentGridShadowY}px ${props.attributes.contentGridShadowSpread1}px ${props.attributes.contentGridShadowSpread2}px ${props.attributes.contentGridShadowColor}`,
                    borderRadius:`${props.attributes.contentGridBorderRadius}em`,
                    padding:`${props.attributes.contentGridPadding}em`,
                }}
                >
                    <RichText.Content
                        tagName="span"
                        style={{
                            color:props.attributes.contentColor
                        }}
                        { ...props } value={ props.attributes.accordionDescription }
                    />
                </div>
            </div>
        );
    }
} );