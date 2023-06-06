const { BlockFormatControls } = wp.blockEditor;
const { ToolbarGroup, DropdownMenu } = wp.components;
import MyDropdownControls from './my-dropdown-controls';

const MyDropdown = () => <BlockFormatControls>
	<div className="editor-format-toolbar block-editor-format-toolbar">
		<ToolbarGroup>
			<MyDropdownControls.Slot>
				{ fills => <DropdownMenu
					icon='art'
					position="bottom left"
					label='dropdown'
					controls={ fills.map( ( [ { props } ] ) => props ) }
				/> }
			</MyDropdownControls.Slot>
		</ToolbarGroup>
	</div>
</BlockFormatControls>;

export default MyDropdown;