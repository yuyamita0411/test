import {Button} from '@wordpress/components';
import {RichText} from '@wordpress/block-editor';
import { createBlock, getDefaultBlockName } from '@wordpress/blocks';

import {MyMenuItem} from './parts/menuitem.js'
import {MyColorPalette} from './parts/colorPalette.js'
import {MyIconItem} from './parts/icon.js'
import {MyIconColor} from './parts/iconColor.js'
import {MyBackgroundColor} from './parts/backgroundColor.js'
import {MyFontColor} from './parts/fontColor.js'
import {MyTagCategory} from './parts/tagCategory.js'
import {MyFontSize} from './parts/fontSize.js'
import {MyFontSpace} from './parts/MyFontSpace.js'
import {space} from './parts/space.js'

const { InspectorControls } = wp.blockEditor;
const { PanelBody} = wp.components;
const { __ } = wp.i18n;

wp.blocks.registerBlockType( 'paragraph-style/head', {
    title: 'オリジナル見出し',
    category: 'common',
    attributes: {
        headerClassName: {type: 'string', default: ''},
        headerStyle: {type: 'string', default: ''},
        iconClass:{type: 'string', default: ''},
        iconStyle:{type: 'string', default: ''},
        background: {type: 'string', default: ''},
        fontcolor: {type: 'string', default: ''},
        TagName: {type: 'string', default: 'h2'},
        fontSize: {type: 'number', default: 1.5},
        fontPadding: {type: 'number', default: 0.5},
        content: {type: 'string', default: ''},
        titleMarginBottom: {type: 'number', default: 2}
    },
    transforms: {
        from: [{
            type: 'block',
            blocks: [ 'core/heading' ],
            transform: ( { content } ) => {
                return wp.blocks.createBlock( 'paragraph-style/head', {text: content});
            }
        }]
    },
    edit: ( props ) => {
        const onChangeText = ( newText ) => {
            props.setAttributes( { content: newText } );
        };
        const TagName = props.attributes.TagName;
        return (
            <div { ...props }>
                {
                <InspectorControls>
                    <div style={{display:'inline-block',width:'100%'}}>
                        <PanelBody title={ __( '見出し用スタイル設定' ) } initialOpen={ false }>{ MyMenuItem(props) }</PanelBody>
                        <PanelBody title={ __( '見出しスタイル色設定' ) } initialOpen={false}>{ MyColorPalette(props) }</PanelBody>
                        <PanelBody title={ __( '見出しアイコン設定' ) } initialOpen={ false }>{ MyIconItem(props) }
                            <Button title={ __( 'リセット' ) } value={''}></Button>
                        </PanelBody>
                        <PanelBody title={ __( '見出しアイコン色設定' ) } initialOpen={false}>{ MyIconColor(props) }</PanelBody>
                        <PanelBody title={ __( '背景色' ) } initialOpen={false}>{ MyBackgroundColor(props) }</PanelBody>
                        <PanelBody title={ __( '文字色' ) } initialOpen={false}>{ MyFontColor(props) }</PanelBody>
                        <PanelBody title={ __( 'タグの種類' ) } initialOpen={false}>{ MyTagCategory(props) }</PanelBody>
                        <PanelBody title={ __( '文字の大きさ' ) } initialOpen={false}>{ MyFontSize(props) }</PanelBody>
                        <PanelBody title={ __( '余白設定' ) } initialOpen={false}>{ MyFontSpace(props) }</PanelBody>
                        <PanelBody title={ __( '下のスペース' ) } initialOpen={false}>{ space(props) }</PanelBody>
                    </div>
                </InspectorControls>
                }
                <TagName className={props.attributes.headerClassName}
                style={{
                    borderColor: props.attributes.headerStyle,
                    backgroundColor:props.attributes.background,
                    fontSize:`${props.attributes.fontSize}em`,
                    padding:`${props.attributes.fontPadding}em`,
                    marginBottom:`${props.attributes.titleMarginBottom}rem`
                }}
                >
                    <i  className={props.attributes.iconClass} style={{color: props.attributes.iconStyle, marginRight:'.2em'}}></i>
                    <RichText
                        tagName="span"
                        value={ props.attributes.content }
                        onChange={ onChangeText }
                        style={{color: props.attributes.fontcolor}}

                        onSplit={ ( value, isOriginal ) => {
                            let newAttributes = {}
                            if (isOriginal || value) {
                              newAttributes = {
                                ...props.attributes,
                                content: value,
                              }
                            }
                            const block = createBlock("paragraph-style/head", newAttributes)
                            if (isOriginal) {
                              block.clientId = props.clientId
                            }
                            return block;
                        } }
                        onReplace={props.onReplace}
                        onMerge={props.mergeBlocks}
                        onRemove={props.onRemove}
                    />
                </TagName>
            </div>
        );
    },
    save: ( props ) => {
        const TagName = props.attributes.TagName;
        return (
            <TagName
            className={props.attributes.headerClassName}
            style={{
                borderColor: props.attributes.headerStyle,
                backgroundColor:props.attributes.background,
                color:props.attributes.fontcolor,
                fontSize:`${props.attributes.fontSize}em`,
                padding:`${props.attributes.fontPadding}em`,
                marginBottom:`${props.attributes.titleMarginBottom}rem`
            }}>
                <i class={props.attributes.iconClass}
                style={`color:${props.attributes.iconStyle}; margin-right:.2em;`}></i>
                <RichText.Content
                    { ...props } value={ props.attributes.content }
                />
            </TagName>
        );
    }
} );