import { RadioControl} from '@wordpress/components';

const balloonDirectionFunc = (run) => {
    return run();
};

export const balloonDirection = (props) => {
    return balloonDirectionFunc(() => {
        {
            return (
                <RadioControl
                    selected={ props.attributes.balloonDirection }
                    options={ [
                        { label: '左向き', value: 'left' },
                        { label: '右向き', value: 'right' }
                    ] }
                    onChange={
                        (direction) => {
                            props.setAttributes({ balloonDirection: direction })
                        }
                    }
                />
            )
        }
    });
}