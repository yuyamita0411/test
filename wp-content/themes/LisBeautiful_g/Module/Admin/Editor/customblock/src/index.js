const { registerFormatType } = wp.richText;

import { createToolbarButton, getRichTextSetting } from './utils';
import { Common, RichText } from '@technote-space/register-grouped-format-type';
import JsonData from './prop.json';

const { registerFormatTypeGroup, registerGroupedFormatType } = RichText;
registerFormatTypeGroup( 'test2', {
    icon: 'admin-network',
} );

const PropOBj = JsonData.toolbarprop;

const ButtonPropObj = PropOBj.map((Name, index) => {
	return 	{name: Name, create: createToolbarButton};
});

ButtonPropObj.forEach(({ name, create, setting = {} }, index) => {
	registerFormatType( ...getRichTextSetting( { name, create, setting }, index ) );
});

//headerline style
require('./blockmenu/titlelabel/index.js');
//boxmenu
require('./blockmenu/boxmenu/index.js');
//speechBalloon
require('./blockmenu/speechBalloon/index.js');
//accordion
require('./blockmenu/accordion/index.js');
//buttonMenu
require('./blockmenu/buttonMenu/index.js');
//listMenu
require('./blockmenu/listMenu/index.js');
//profileMenu
require('./blockmenu/profileMenu/index.js');
//box
require('./blockmenu/box/index.js');

//ButtonPropObj.forEach( ( { name, create, setting = {} }, index ) => registerFormatType( ...getRichTextSetting( { name, create, setting }, index ) ) );