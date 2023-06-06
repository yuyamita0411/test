import {RichText, BlockList} from '@wordpress/block-editor';
import { createBlock, getDefaultBlockName } from '@wordpress/blocks';

import {colorSetting} from './parts/colorSetting.js'
import {borderSetting} from './parts/borderSetting.js'
import {IconSetting} from './parts/IconSetting.js'
import {space} from './parts/space.js'

const { InspectorControls } = wp.blockEditor;
var InnerBlocks = wp.blockEditor.InnerBlocks;
const { PanelBody } = wp.components;
const { __ } = wp.i18n;
const { RawHTML } = wp.element;

const event = (run) => {
    return run();
}

wp.blocks.registerBlockType( 'paragraph-style/listmenu', {
    title: '箇条書き',
    category: 'common',
    attributes: {
        content: {type: 'string', default: ''},

        listFontColor: {type: 'string', default: ''},
        listBackgroundColor: {type: 'string', default: ''},

        listIconClientId: {type: 'string', default: ''},
        listIconClass: {type: 'string', default: 'fa-chevron-circle-right'},
        listIconColor: {type: 'string', default: '#808080'},

        listBorderWidth: {type: 'number', default: 1},
        listBorderColor: {type: 'string', default: '#808080'},

        listWhiteSpace: {type: 'number', default: 0.5},
        menuWhiteSpace: {type: 'number', default: 1.5},
        menuBorderRadius: {type: 'number', default: 0.5},
        menuMarginBottom: {type: 'number', default: 2},
    },
    transforms: {
        from: [{
            type: 'block',
            blocks: [ 'core/paragraph' ],
            transform: ( { content } ) => {
                return wp.blocks.createBlock( 'paragraph-style/listmenu', {text: content});
            }
        }]
    },
    edit: ( props ) => {
        return (
            <div { ...props }
            className={`listWrapper-${props.attributes.listIconClass}`}
            style={{
                backgroundColor:`${props.attributes.listBackgroundColor}`,
                border:`solid ${props.attributes.listBorderWidth}px ${props.attributes.listBorderColor}`,
                borderRadius: `${props.attributes.menuBorderRadius}em`,
                marginBottom:`${props.attributes.menuMarginBottom}rem`
            }}
            >
                {
                <InspectorControls>
                    <div style={{display:'inline-block',width:'100%'}}>
                        <PanelBody title={ __( '色設定' ) } initialOpen={ false }>{colorSetting(props)}</PanelBody>
                        <PanelBody title={ __( 'アイコン設定' ) } initialOpen={ false }>{IconSetting(props)}</PanelBody>
                        <PanelBody title={ __( '枠設定' ) } initialOpen={ true }>{borderSetting(props)}</PanelBody>
                        <PanelBody title={ __( '下のスペース' ) } initialOpen={ true }>{space(props)}</PanelBody>
                    </div>
                </InspectorControls>
                }
                <RichText
                    multiline= "li"
                    value={props.attributes.content}
                    className={`Tag${props.attributes.listIconClientId}`}
                    onChange={
                        (text) => {
                            props.setAttributes( { content: text } )
                        }
                    }
                    placeholder={'コンテンツの中身を入力してください'}
                    style={{
                        color:`${props.attributes.listFontColor}`,
                        listStyleType:'none',
                        padding:`${props.attributes.listWhiteSpace}em`,
                        lineHeight:`${props.attributes.menuWhiteSpace}em`
                    }}

                    onSplit={ ( value, isOriginal ) => {
                        let newAttributes = {}
                        if (isOriginal || value) {
                            newAttributes = {
                                ...props.attributes,
                                content: value,
                            }
                        }
                        const block = createBlock("paragraph-style/listmenu", newAttributes)
                        if (isOriginal) {
                            block.clientId = props.clientId
                        }
                        return block;
                    } }
                    onReplace={props.onReplace}
                    onMerge={props.mergeBlocks}
                    onRemove={props.onRemove}
                />
                <RawHTML>{`
                    <style>
                    .Tag${props.attributes.listIconClientId} li::before{
                        color:${props.attributes.listIconColor};
                        margin-right: .5em;
                    }
                    </style>
                `}
                </RawHTML>
            </div>
        );
    },
    save: ( props ) => {
        return (
            <div
            className={`listWrapper-${props.attributes.listIconClass} Tag${props.attributes.listIconClientId}`}
            style={{
                padding:`${props.attributes.listWhiteSpace}em`,
                backgroundColor:`${props.attributes.listBackgroundColor}`,
                lineHeight:`${props.attributes.menuWhiteSpace}em`,
                border:`solid ${props.attributes.listBorderWidth}px ${props.attributes.listBorderColor}`,
                borderRadius: `${props.attributes.menuBorderRadius}em`,
                marginBottom:`${props.attributes.menuMarginBottom}rem`
            }}
            >
                <RichText.Content
                    className={props.attributes.listIconClientId}
                    style={{
                        color:`${props.attributes.listFontColor}`,
                        listStyleType:'none'
                    }}
                    { ...props } value={ props.attributes.content }
                />
                <RawHTML>{`
                    <style>
                    .Tag${props.attributes.listIconClientId} li::before{
                        color:${props.attributes.listIconColor};
                        margin-right: .5em;
                    }
                    </style>
                `}
                </RawHTML>
            </div>
        );
    }
} );