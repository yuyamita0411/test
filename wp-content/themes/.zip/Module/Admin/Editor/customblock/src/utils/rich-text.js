const { Fragment } = wp.element;

import { PLUGIN_NAME } from '../constant';
import { MyDropdown, MyDropdownControls } from '../components';

export const getRichTextSetting = ( { name, create, setting = {} }, index ) => {
	const formatName = PLUGIN_NAME + '/' + name["class"];
	const component = args => <MyDropdownControls>
		{ create( { args, name, formatName } ) }
	</MyDropdownControls>;

	setting.title = setting.title || name["class"];
	setting.tagName = setting.tagName || 'span';
	setting.className = setting.className || name["class"];
	setting.edit = args => {
		if ( ! index ) {
			return <Fragment>
				{ component( args ) }
				<MyDropdown/>
			</Fragment>;
		}
		return component( args );
	};
	return [ formatName, setting ];
};