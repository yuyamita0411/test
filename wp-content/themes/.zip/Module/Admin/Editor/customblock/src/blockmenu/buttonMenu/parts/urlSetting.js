import {RichText} from '@wordpress/block-editor';
import { TextareaControl } from '@wordpress/components';
import { useState } from '@wordpress/element';

export const urlSetting= (props) => {
    const [ text, setText ] = useState( '' );
    const comp = 
    <div>
        <RichText
            value={ props.attributes.buttonUrl }
            onChange={
                (url) => {
                    props.setAttributes( { buttonUrl: url } )
                }
            }
            style={{border:'solid .5px gray', padding:'.5em'}}
            placeholder={'ボタンのURLを設定頂けます'}
        />
        <TextareaControl
            label="アフィリエイト用の計測タグを入力ください"
            value={ props.attributes.affiliateTag }
            onChange={
                (value) => {
                    props.setAttributes( { affiliateTag: value } )
                }
            }
            placeholder={'アフィリエイト用の計測タグを入力ください'}
        />
    </div>
    return comp;
}


