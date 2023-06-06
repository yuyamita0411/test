import { RangeControl } from '@wordpress/components';
import JsonData from '../../../prop.json';
const EditStyleObj = JsonData.boxMenuProp;
const { MenuItem} = wp.components;

const borderSettingFunc = (run) => {
    return run();
};
export const borderSetting = (props) => {
    return borderSettingFunc(() => {
        const EachMenu = [];
        EditStyleObj.forEach((obj) => {
            EachMenu.push(
                <div class="buttonWrapper">
                    <MenuItem
                        value={obj.border}
                        isDefault={false}
                        onClick={
                            (ev) => {
                                props.setAttributes({
                                    boxBorderCat: ev.currentTarget.value,
                                });
                            }
                        }
                    />
                    <div class="buttonTitleLabel">
                        {obj.name}
                    </div>
                </div>
            );
        });

        return <div>
            <span style={{fontWeight:'bold'}}>枠線の種類</span>
            <div style={{width:'100%', display:'inline-block'}}>
                {EachMenu}
            </div>
            <RangeControl
                label='枠の太さ調整'
                onChange={
                    ( number ) => {
                        props.setAttributes( { boxBorderWidth: number } );
                    }
                }
                min={0}
                max={20}
                step={0.1}
                value={props.attributes.boxBorderWidth}
            />
            <RangeControl
                label='枠の余白(内側)調整'
                onChange={
                    ( number ) => {
                        props.setAttributes( { boxPaddingInside: number } );
                    }
                }
                min={0}
                max={5}
                step={0.1}
                value={props.attributes.boxPaddingInside}
            />
            <RangeControl
                label='枠の余白(外側)調整'
                onChange={
                    ( number ) => {
                        props.setAttributes( { boxPaddingOutside: number } );
                    }
                }
                min={0}
                max={5}
                step={0.1}
                value={props.attributes.boxPaddingOutside}
            />
            <RangeControl
                label='枠線の丸み'
                onChange={
                    ( number ) => {
                        props.setAttributes( { boxBorderRadius: number } );
                    }
                }
                min={0}
                max={5}
                step={0.1}
                value={props.attributes.boxBorderRadius}
            />
        </div>
    });
}