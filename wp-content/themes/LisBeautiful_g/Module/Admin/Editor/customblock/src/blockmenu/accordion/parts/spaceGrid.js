import { RangeControl } from '@wordpress/components';
export const spaceGrid = (props) => {
    const comp = 
    <div>
        <RangeControl
            label='タイトルの余白'
            onChange={
                ( number ) => {
                    props.setAttributes( { titleGridPadding: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.titleGridPadding}
        />
        <RangeControl
            label='タイトル枠線の太さ'
            onChange={
                ( number ) => {
                    props.setAttributes( { titleGridThickness: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.titleGridThickness}
        />
        <RangeControl
            label='タイトル枠線の丸み'
            onChange={
                ( number ) => {
                    props.setAttributes( { titleGridBorderRadius: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.titleGridBorderRadius}
        />
        <RangeControl
            label='コンテンツの余白'
            onChange={
                ( number ) => {
                    props.setAttributes( { contentGridPadding: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.contentGridPadding}
        />
        <RangeControl
            label='コンテンツ枠線の太さ'
            onChange={
                ( number ) => {
                    props.setAttributes( { contentGridThickness: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.contentGridThickness}
        />
        <RangeControl
            label='コンテンツ枠線の丸み'
            onChange={
                ( number ) => {
                    props.setAttributes( { contentGridBorderRadius: number } );
                }
            }
            min={0}
            max={4.0}
            step={0.1}
            value={props.attributes.contentGridBorderRadius}
        />
    </div>

    return comp;
}