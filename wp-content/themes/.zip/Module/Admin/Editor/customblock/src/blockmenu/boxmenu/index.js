import {RichText} from '@wordpress/block-editor';
import { RangeControl } from '@wordpress/components';

const { InspectorControls } = wp.blockEditor;
const { PanelBody} = wp.components;
const { __ } = wp.i18n;

const boxTitlePattern = /boxTitle(.*)th/g;

const showtxt = (run) => {
    return run();
};

wp.blocks.registerBlockType( 'paragraph-style/boxmenu', {
    title: 'ボックスメニュー',
    category: 'common',
    attributes: {
        headerClassName: {type: 'string', default: ''},
        headerStyle: {type: 'string', default: ''},
        iconClass:{type: 'string', default: ''},
        iconStyle:{type: 'string', default: ''},
        background: {type: 'string', default: ''},
        fontcolor: {type: 'string', default: ''},
        TagName: {type: 'string', default: 'h2'},
        fontPadding: {type: 'number', default: 0.5},

        content: {type: 'string', default: ''},
        titleRichTextArr: {type: 'array', default: []},
        titleDataArr: {type: 'object', default: {}},
        titleArrNum: {type: 'number', default: 4}
    },

    transforms: {
        from: [{
            type: 'block',
            blocks: [ 'core/heading' ],
            transform: ( { content } ) => {
                return wp.blocks.createBlock( 'paragraph-style/boxmenu', {text: content});
            }
        }]
    },

    edit: ( props ) => {
        const onChangeText = ( newText ) => {
            props.setAttributes( { content: newText } );
        };
        return (
            <div { ...props }>
                {
                <InspectorControls>
                    <div style={{display:'inline-block',width:'100%'}}>
                        <PanelBody title={ __( 'タイトル指定' ) } initialOpen={ false }>タイトル指定！！</PanelBody>
                        <PanelBody title={ __( 'カラム数' ) } initialOpen={false}>
                            <RangeControl label='カラム数'
                                onChange={
                                    ( number ) => {
                                        props.setAttributes( { titleArrNum: number } );
                                    }
                                }
                                min={1}
                                max={8}
                                step={1}
                                value={props.attributes.titleArrNum ? props.attributes.titleArrNum : 4}
                            />
                        </PanelBody>
                    </div>
                </InspectorControls>
                }
                <div>
                    <div class="">
                        <div class="">
                            <i class=""></i>
                            <div>
                                <RichText
                                    tagName="span"
                                    value={ props.attributes.content }
                                    onChange={ onChangeText }
                                    style={{color: props.attributes.fontcolor}}
                                />
                            </div>
                        </div>
                        <div class="">
                            {
                                showtxt(
                                    () => {
                                        var titleArr = [];
                                        for (var i=1; i <= props.attributes.titleArrNum; i++) {
                                            titleArr.push(
                                                <RichText
                                                    onChange={
                                                        window.addEventListener('input', (e) => {
                                                            props.attributes.titleDataArr[e.target.className.match(boxTitlePattern)] = e.target.innerText;
                                                            props.setAttributes( { titleDataArr: props.attributes.titleDataArr } );
                                                            console.log(props.attributes.titleDataArr);
                                                        })
                                                    }
                                                    value={props.attributes.titleDataArr[`boxTitle${i}th`]}
                                                    className={`boxTitle${i}th`}
                                                />
                                            )
                                        }
                                        return titleArr;
                                    }
                                )
                            }
                        </div>
                    </div>
                </div>
            </div>
        );
    },
    save: ( props ) => {
        return (
            <div>
                <div class="">
                    <div class="">
                        <i class="" ></i>
                        <div>{ props.attributes.content }</div>
                    </div>
                    <div class="">
                        { props.attributes.titleDataArr }
                    </div>
                </div>
            </div>
        );
    }
} );