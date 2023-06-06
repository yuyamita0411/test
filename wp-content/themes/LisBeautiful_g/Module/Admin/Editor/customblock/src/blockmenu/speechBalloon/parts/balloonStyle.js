import {RichText, MediaUpload, MediaUploadCheck} from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

const { MenuItem} = wp.components;
const showArea = (run) => {
    return run();
}
export const whichBalloonType = (props, boolean) => {
    const onSelectImage = ( media ) => {
        props.setAttributes( {
            imageAlt: media.alt, 
            imageUrl: media.url, 
            mediaID: media.id 
        });
    };
    const getImageButton = ( open ) => {
        if(props.attributes.imageUrl) {
            return (
            <img 
                src={ props.attributes.imageUrl }
                onClick={ open }
                className="image"
                alt=""
            />
            );
        } else {
            return (
            <div className="button-container">
                <Button 
                onClick={ open }
                className="button button-large"
                >
                画像をアップロード
                </Button>
            </div>
            );
        }
    };
    const getImagesSave = (src, alt) => {
        if(!src) return null;
        if(alt) {
        return (
            <img 
            className="card_image" 
            src={ src }
            alt={ alt }
            style={{width:'100%'}}
            /> 
        );
        }
        return (
        <img 
            className="card_image" 
            src={ src }
            alt=""
            aria-hidden="true"
            style={{width:'100%'}}
        /> 
        );
    };
    const partStyle = () => {
        if (props.attributes.balloonDirection == 'left') {
            if (props.attributes.balloonType == 'normal') {
                return {
                    borderRight:`10px solid ${props.attributes.balloonGridColor}`,
                    borderLeft: `10px solid transparent`,
                    borderTop: '10px solid transparent',
                    borderBottom: '10px solid transparent',
                    display: 'inline-block',
                    position: 'absolute',
                    top: '18px',
                    left:`-21px`
                }
            }
            if (props.attributes.balloonType == 'heart') {
                return {
                    width: `15px`,
                    height: `15px`,
                    position: `absolute`,
                    border: `solid 1px ${props.attributes.balloonGridColor}`,
                    borderRadius: `50%`,
                    left: `-21px`,
                    top: `14px`
                }
            }

        } else {
            if (props.attributes.balloonType == 'normal') {
                return {
                    borderRight:`10px solid transparent`,
                    borderLeft: `10px solid ${props.attributes.balloonGridColor}`,
                    borderTop: '10px solid transparent',
                    borderBottom: '10px solid transparent',
                    display: 'inline-block',
                    position: 'absolute',
                    top: '18px',
                    right:`-21px`
                }
            }
            if (props.attributes.balloonType == 'heart') {
                return {
                    width: `15px`,
                    height: `15px`,
                    position: `absolute`,
                    border: `solid 1px ${props.attributes.balloonGridColor}`,
                    borderRadius: `50%`,
                    right: `-21px`,
                    top: `14px`
                }
            }
        }
    }
    const partStyle2 = () => {
        if (props.attributes.balloonDirection == 'left') {
            if (props.attributes.balloonType == 'normal') {
                return {
                    borderRight:`10px solid ${props.attributes.balloonBackgroundColor}`,
                    borderLeft: `10px solid transparent`,
                    borderTop: '10px solid transparent',
                    borderBottom: '10px solid transparent',
                    display: 'inline-block',
                    position: 'absolute',
                    top: '18px',
                    left:`-${20.5 - props.attributes.balloonGridThickness}px`
                }
            }
            if (props.attributes.balloonType == 'heart') {
                return {
                    width: `9px`,
                    height: `9px`,
                    position: `absolute`,
                    border: `solid 1px ${props.attributes.balloonGridColor}`,
                    borderRadius: `50%`,
                    left: `-32px`,
                    top: `27px`
                }
            }

        } else {
            if (props.attributes.balloonType == 'normal') {
                return {
                    borderRight:`10px solid transparent`,
                    borderLeft: `10px solid ${props.attributes.balloonBackgroundColor}`,
                    borderTop: '10px solid transparent',
                    borderBottom: '10px solid transparent',
                    display: 'inline-block',
                    position: 'absolute',
                    top: '18px',
                    right:`-${20.5 - props.attributes.balloonGridThickness}px`
                }
            }
            if (props.attributes.balloonType == 'heart') {
                return {
                    width: `9px`,
                    height: `9px`,
                    position: `absolute`,
                    border: `solid 1px ${props.attributes.balloonGridColor}`,
                    borderRadius: `50%`,
                    right: `-32px`,
                    top: `27px`
                }
            }
        }
    }
    const typearr =
        <div class="" style={{marginBottom:`${props.attributes.balloonMarginBottom}rem`}}>
            <div class="" style={{position:'relative'}}>
                <div class="avater"
                    style={
                        props.attributes.balloonDirection == 'left' ? {position:'absolute',width:'80px',left:'0px'} : {position:'absolute',width:'80px',right:'0px'}
                    }
                >
                    <button class="" style={{
                        fontSize:'13px',
                        padding:'0px 12px',
                        border:'none',
                        background:'none'
                    }}>
                        {
                            showArea(() => {
                                if (boolean == true) {
                                    return <div>
                                        <MediaUploadCheck>
                                            <MediaUpload
                                                onSelect={ onSelectImage }
                                                allowedTypes={ ['image'] }
                                                value={ props.attributes.mediaID }
                                                render={ ({ open }) => getImageButton( open ) }
                                            />
                                        </MediaUploadCheck>
                                    </div>
                                } else {
                                    return <div>
                                        {getImagesSave(props.attributes.imageUrl, props.attributes.imageAlt)}
                                    </div>
                                }
                            })
                        }
                    </button>
                    <div class="">
                        {
                            showArea(() => {
                                if (boolean == true) {
                                    return <RichText
                                        style={{
                                            width:'100%',
                                            overflow: 'hidden',
                                            wordWrap: 'break-word',
                                            resize: 'none',
                                            fontSize:'14px',
                                            height: '14px',
                                            lineHeight: '14px',
                                            textAlign: 'center',
                                            border:'1px solid',
                                            color:props.attributes.balloonNameColor
                                        }}
                                        value={props.attributes.balloonNameText}
                                        onChange={(txt) => {
                                            props.setAttributes({balloonNameText: txt});
                                        }}
                                        AcceptReturn={true}
                                    />
                                } else {
                                    return <RichText.Content
                                    style={{
                                        width:'100%',
                                        overflow: 'hidden',
                                        wordWrap: 'break-word',
                                        resize: 'none',
                                        fontSize:'14px',
                                        height: '14px',
                                        lineHeight: '14px',
                                        border: 'none',
                                        textAlign: 'center',
                                        color:props.attributes.balloonNameColor
                                    }}
                                    { ...props } value={ props.attributes.balloonNameText}
                                    />
                                }
                            })
                        }

                    </div>
                </div>
                <div class="text" style={
                    props.attributes.balloonDirection == 'left' ? {paddingLeft:`100px`, textAlign:'left'} : {paddingRight:`100px`, textAlign:'right'}
                }>
                    <div class="" style={{
                        border: `${props.attributes.balloonGridThickness}px solid ${props.attributes.balloonGridColor}`,
                        borderColor:`${props.attributes.balloonGridColor}`,
                        backgroundColor:`${props.attributes.balloonBackgroundColor}`,
                        color:`${props.attributes.balloonFontColor}`,
                        borderRadius: '12px',
                        display: 'inline-block',
                        padding: '13px',
                        position: 'relative',
                        textAlign: 'left',
                        wordBreak: 'break-all'
                    }}>
                        <div class="">
                            <div class="">
                                <div class="">
                                    <div class="">
                                        {
                                            showArea(() => {
                                                if (boolean == true) {
                                                    return <RichText
                                                        onChange={(txt) => {
                                                            props.setAttributes({balloonContent: txt});
                                                        }}
                                                        value={props.attributes.balloonContent}
                                                        className={`talk-text`}
                                                        placeholder="ここに吹き出しテキストを入力"
                                                    />
                                                } else {
                                                    return <RichText.Content
                                                    { ...props } value={ props.attributes.balloonContent }
                                                    />;
                                                }
                                            })
                                        }
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="" style={partStyle()}
                        ></span>
                        <span class="" style={partStyle2()}></span>
                    </div>
                </div>
            </div>
        </div>
    return typearr
}

export const balloonPanelBody = (props) => {
    var arr = [];
    ['normal', 'heart'].forEach((type) => {
        arr.push(<div class="buttonWrapper">
            <MenuItem
                value={type}
                onClick={
                    (ev) => {
                        props.setAttributes({
                            balloonType: ev.currentTarget.value,
                        });
                    }
                }
            />
        </div>);
    })
    return arr;
}