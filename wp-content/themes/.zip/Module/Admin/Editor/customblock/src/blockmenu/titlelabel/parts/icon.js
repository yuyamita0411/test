import FontAwesomData from '../../../fontawesome.json';
import { BaseControl, ButtonGroup} from '@wordpress/components';
const FontAwesomeOBj = FontAwesomData.editIcon;
const { __ } = wp.i18n;

const MyIconItemFunc = (run) => {
    return run();
};
export const MyIconItem = (props) => {
    const comp = 
    <BaseControl
    label={ __( 'アイコンを設定頂けます。' ) }
    className={'editorIconArea'}
    >
        <ButtonGroup>
            {
                MyIconItemFunc(() => {
                    const EachMenu = [];
                    FontAwesomeOBj.forEach((obj) => {
                        EachMenu.push(
                            wp.element.createElement(
                                wp.components.Button,
                                {
                                    value: obj.iconclass,
                                    isSmall: true,
                                    onClick: (object) => {
                                        props.setAttributes({
                                            iconClass: object.currentTarget.value,
                                        });
                                    }
                                },
                                '',
                            )
                        );
                    });
                    return EachMenu;
                })
            }
        </ButtonGroup>
    </BaseControl>
    return comp;
}