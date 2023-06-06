import { SelectControl} from '@wordpress/components';

export const MyTagCategory = (props) => {
    const { TagName } = props;
    const comp = 
        <SelectControl
            label="タグ指定"
            options={[
            { label: 'p', value: 'p' },
            { label: 'h1', value: 'h1' },
            { label: 'h2', value: 'h2' },
            { label: 'h3', value: 'h3' },
            { label: 'h4', value: 'h4' },
            { label: 'h5', value: 'h5' },
            { label: 'h6', value: 'h6' },
            ]}
            value={ TagName }
            onChange={
                ( value ) => {
                    props.setAttributes( { TagName: value } );
                }
            }
        />
    return comp;
}