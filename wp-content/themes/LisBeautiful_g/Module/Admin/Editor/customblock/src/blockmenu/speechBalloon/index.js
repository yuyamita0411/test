import {balloonDirection} from './parts/balloonDirection.js'
import {balloonFontColor} from './parts/balloonFontColor.js'
import {balloonNameColor} from './parts/balloonNameColor.js'
import {balloonGridColor} from './parts/balloonGridColor.js'
import {MyGridLineThickness} from './parts/gridLineThickness.js'
import {balloonBackgroundColor} from './parts/balloonBackgroundColor.js'
import {space} from './parts/space.js'
import {whichBalloonType, balloonPanelBody} from './parts/balloonStyle.js'

const { InspectorControls } = wp.blockEditor;
const { PanelBody, MenuItem} = wp.components;
const { __ } = wp.i18n;

wp.blocks.registerBlockType( 'paragraph-style/paragraph', {
    title: '吹き出し',
    category: 'common',
    attributes: {
        balloonType: {type: 'string', default: 'normal'},
        balloonDirection: {type: 'string', default: 'left'},
        balloonDirectionCheck:{type:'boolean'},
        balloonContent: {type: 'string', default: ''},
        balloonFontColor: {type: 'string', default: '#000'},
        balloonNameColor: {type: 'string', default: '#000'},
        balloonNameText: {type: 'string', default: ''},
        balloonGridColor: {type: 'string', default: '#abb8c3'},
        balloonGridThickness: {type: 'number', default: 1},
        balloonBackgroundColor: {type: 'string', default: '#ffff'},
        mediaID: {
            type: 'number',
            default: 0
        },
        imageUrl: {
            type: 'string',
            source: 'attribute',
            attribute: 'src',
            selector: '.card_image',
            default:'/wp-content/themes/LisBeautiful/img/defaultlogo.png'
        },
        imageAlt: {
            type: 'string',
            source: 'attribute',
            attribute: 'alt',
            selector: '.card_image'
        },
        balloonMarginBottom: {type: 'number', default: 2}
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
                        <PanelBody title={ __( '吹き出しのタイプ' ) } initialOpen={ false }>{balloonPanelBody(props)}</PanelBody>
                        <PanelBody title={ __( '吹き出しの方向' ) } initialOpen={ false }>{balloonDirection(props)}</PanelBody>
                        <PanelBody title={ __( '吹き出しの文字色' ) } initialOpen={ false }>{balloonFontColor(props)}</PanelBody>
                        <PanelBody title={ __( '吹き出しの名前の文字色' ) } initialOpen={ false }>{balloonNameColor(props)}</PanelBody>
                        <PanelBody title={ __( '吹き出しの枠の色' ) } initialOpen={ false }>{balloonGridColor(props)}</PanelBody>
                        <PanelBody title={ __( '吹き出しの枠の太さ' ) } initialOpen={false}>{ MyGridLineThickness(props) }</PanelBody>
                        <PanelBody title={ __( '吹き出しの背景色' ) } initialOpen={ false }>{balloonBackgroundColor(props)}</PanelBody>
                        <PanelBody title={ __( '下のスペース' ) } initialOpen={ false }>{space(props)}</PanelBody>
                    </div>
                </InspectorControls>
                }
                {whichBalloonType(
                    props,
                    true
                )}
            </div>
        );
    },
    save: ( props ) => {
        return (
            whichBalloonType(
                props,
                false
            )
        );
    }
} );