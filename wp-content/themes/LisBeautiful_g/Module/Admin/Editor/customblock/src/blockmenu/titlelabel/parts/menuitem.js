import JsonData from '../../../prop.json';
const EditStyleObj = JsonData.blockmenuprop;
const { MenuItem} = wp.components;

const MenuItemFunc = (run) => {
    return run();
};
export const MyMenuItem = (props) => {
    return MenuItemFunc(() => {
        const EachMenu = [];
        EditStyleObj.forEach((obj) => {
            EachMenu.push(
                <div class="buttonWrapper">
                    <MenuItem
                        value={obj.className}
                        className={obj.className}
                        isDefault={false}
                        onClick={
                            (ev) => {
                                props.setAttributes({
                                    headerClassName: ev.currentTarget.value,
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
        return EachMenu;
    });
}