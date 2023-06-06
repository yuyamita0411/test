(function () {
	// 見出し
	/*
	シンプル
	塗りつぶし
	帯
	吹き出し
	ステッチ
	*/

	wp.blocks.registerBlockStyle("core/heading", {
		name: "h font-simple",
		label: "塗りつぶし",
	});
	wp.blocks.registerBlockStyle("core/heading", {
		name: "h font-tie",
		label: "帯",
	});
    wp.blocks.registerBlockStyle("core/paragraph", {
        name: "h font-black",
        label: "黒い背景の段落"
    });
    wp.blocks.registerBlockStyle("core/paragraph", {
        name: "h font-blue",
        label: "青い背景の段落"
    });


	// リスト
	wp.blocks.registerBlockStyle("core/list", {
		name: "h font-purple",
		label: "紫色の背景の見出し",
	});
})();

//ブロックテンプレート
/*
registerBlockType 参考↓
https://deep-space.blue/web/1611#index_id0
*/
(function( wp ) {
    'use strict';
    const { blocks, element, editor, blockEditor } = wp;
    const el = element.createElement;
    const { RichText } = editor;
    const { InnerBlocks } = blockEditor;
    
    /*
     * アコーディオン
    */
    blocks.registerBlockType( 'original/new-block', {
        title: 'オリジナルブロック',
        icon: 'wordpress-alt',
        category: 'original-blocks', /* PHPで指定したslugを入力 */
        keywords: [ 'オリジナル', 'original', 'おりじなる' ],
        attributes: {/* リッチテキストの場合は、必須 */
            h2: {/* props.attributes.「content」と連動 */
                type: 'string',/* 取得する値のタイプ */
                source: 'html',/* 値のどこまで抽出するか */
                default: 'オリジナルブロックを作る',
                selector: 'h2'/* tagName（タグ名）かクラス名を一致させる */
            }
        },
        example: {
            attributes: {
                button: 'オリジナルブロックを作る！',
            },
            innerBlocks: [
                {
                    name: 'core/paragraph',
                    attributes: {
                        content: 'ブロックにコンテンツを入れる'
                    },
                },
            ],
        },
        supports: {
            anchor: true
        },
        edit: function( props ) {
            return el(
                'div',
                { className: 'block-area' },
                [
                    el(
                        RichText, {
                            tagName: 'h2', 
                            className: 'block-title',
                            value: props.attributes.h2,
                            formattingControls: [ 'bold', 'italic' ],
                            onChange: function( content ) {
                                props.setAttributes( { h2: content } );
                            },
                            placeholder: 'オリジナルブロックを作る',
                        }
                    ),
                    el(
                        'div',
                        { className: 'block-content' },
                        [
                            el(
                                InnerBlocks,
                                {
                                    template: [ ['core/paragraph'] ]
                                }
                            ),
                        ]
                    )
                ]
            );
        },
        save: function( props ) {
            return el(
                'div',
                { className: 'block-area' },
                [
                    el( RichText.Content, {
                        tagName: 'h2',
                        className: 'block-title',
                        value: props.attributes.h2,
                        type: 'h2'
                    } ),
                    el(
                        'div',
                        { className: 'block-content' },
                        [
                            el( InnerBlocks.Content, {} ),
                        ]
                    )
                ]
            );
        }
    });
} (
    window.wp
) );