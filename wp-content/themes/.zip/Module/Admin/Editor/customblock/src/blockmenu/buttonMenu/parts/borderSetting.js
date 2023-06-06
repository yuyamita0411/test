import { RangeControl } from '@wordpress/components';
export const borderSetting = (props) => {
    const comp = 
    <div>
        <RangeControl
            label='ボタンの余白'
            onChange={
                ( number ) => {
                    props.setAttributes( { buttonGridPadding: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.buttonGridPadding}
        />
        <RangeControl
            label='ボタン枠線の太さ'
            onChange={
                ( number ) => {
                    props.setAttributes( { buttonGridThickness: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.buttonGridThickness}
        />
        <RangeControl
            label='ボタン枠線の丸み'
            onChange={
                ( number ) => {
                    props.setAttributes( { buttonGridBorderRadius: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.buttonGridBorderRadius}
        />
    </div>

    return comp;
}