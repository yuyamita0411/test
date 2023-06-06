import { RangeControl, SelectControl } from '@wordpress/components';
export const widthDirSetting= (props) => {
    //const { TagName } = props;
    const comp = 
    <div>
        <RangeControl
            label='ボタンの幅調整'
            onChange={
                ( number ) => {
                    props.setAttributes( { buttonWidth: number } );
                }
            }
            min={10}
            max={100}
            step={1}
            value={props.attributes.buttonWidth}
        />
        <RangeControl
            label='ボタンのフォントサイズ調整'
            onChange={
                ( number ) => {
                    props.setAttributes( { buttonFontSize: number } );
                }
            }
            min={0.5}
            max={5}
            step={0.1}
            value={props.attributes.buttonFontSize}
        />
        <SelectControl
            label="文字方向"
            options={[
                { label: '右', value: 'right' },
                { label: '真ん中', value: 'center' },
                { label: '左', value: 'left' }
            ]}
            value={ props.attributes.buttonFontDir }
            onChange={
                ( value ) => {
                    props.setAttributes( { buttonFontDir: value } );
                }
            }
        />
        <SelectControl
            label="ボタン方向"
            options={[
                { label: '右', value: 'right' },
                { label: '真ん中', value: 'center' },
                { label: '左', value: 'left' }
            ]}
            value={ props.attributes.buttonDir }
            onChange={
                ( value ) => {
                    props.setAttributes( { buttonDir: value } );
                }
            }
        />
    </div>
    return comp;
}