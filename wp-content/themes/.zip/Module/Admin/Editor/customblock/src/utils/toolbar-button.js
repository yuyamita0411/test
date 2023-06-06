const { toggleFormat } = wp.richText;
const { ToolbarButton } = wp.components;

const getToolbarButtonProps = ( { args, name, formatName } ) => {
	//それぞれのツールバーのプロパティ
	return {
		icon: name.class,
		title: <div className={ name.class } >
			{ name.name }
		</div>,
		onClick: () => {
			args.onChange( toggleFormat( args.value, {
				type: formatName,
			} ) );
		},
		isActive: args.isActive,
	};
};

export const createToolbarButton = ( { args, name, formatName } ) => <ToolbarButton { ...getToolbarButtonProps( { args, name, formatName } ) } />;