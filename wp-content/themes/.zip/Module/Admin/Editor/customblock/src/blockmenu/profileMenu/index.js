import {Button, DropdownMenu} from '@wordpress/components';
import {RichText} from '@wordpress/block-editor';
import { createBlock, getDefaultBlockName } from '@wordpress/blocks';

import {borderSetting} from './parts/borderSetting.js'
import {colorSetting} from './parts/colorSetting.js'
import {IconColorSetting} from './parts/IconColorSetting.js'
import {IconSizeSetting} from './parts/IconSizeSetting.js'
import {space} from './parts/space.js'
import {profileImg} from './parts/profileImg.js'

const { InspectorControls } = wp.blockEditor;
const { PanelBody} = wp.components;
const { __ } = wp.i18n;
const { RawHTML } = wp.element;

const getUserInfo = () => {
    var home_url = "http://localhost:8000";
    return $. ajax(
        {
            url: home_url,
            data:{"rest_route":"/wp/custom/GetWpUsers"},
            cache : false,
            async:false,
            type:'GET'
        }
    ).done((data) => {
        return data;
    }).responseJSON;
}
const getUserProfInfo = (ID) => {
    var home_url = "http://localhost:8000";
    return $. ajax(
        {
            url: home_url,
            data:{"rest_route":"/wp/custom/GetWpUsersSelected", "ID":ID},
            cache : false,
            async:false,
            type:'GET'
        }
    ).done((data) => {
        return data;
    }).responseJSON;
}
const displayUserProfile = (run) => {
    return run();
}
const callBackFunc = (run) => {
    return run();
}

/*
プロフィールのイメージの大きさ

プロフィールのイメージの枠の太さ
プロフィールのイメージの枠の丸み
*/
wp.blocks.registerBlockType( 'paragraph-style/profile', {
    title: 'プロフィールメニュー',
    category: 'common',
    attributes: {
        headerClassName: {type: 'string', default: ''},
        fontPadding: {type: 'number', default: 0.5},
        userInfoStr: {type: 'string', source:'html', default: ''},

        buttonClass: {type: 'string', default: 'profileButtonClose'},

        profileBorderWidth: {type: 'number', default: 0.5},
        profileWhiteSpace: {type: 'number', default: 0.5},
        profileBorderRadius: {type: 'number', default: 0.5},
        profileBorderColor: {type: 'string', default: ''},
        profileBackgroundColor: {type: 'string', default: 'transparent'},
        profileFontColor: {type: 'string', default: ''},

        profileImgWidth: {type: 'number', default: 5},
        profileImgBorderColor: {type: 'string', default: '#abb8c3'},
        profileImgBorderWidth: {type: 'number', default: 0.5},
        profileImgBorderRadius: {type: 'number', default: 50},

        //user information
        display_name: {type: 'string', default: ''},
        user_description: {type: 'string', default: ''},
        user_email: {type: 'string', default: ''},

        Instagram: {type: 'string', default: ''},
        InstagramColor: {type: 'string', default: '#ff7b7b'},
        LINE: {type: 'string', default: ''},
        LINEColor: {type: 'string', default: '#70da7d'},
        Facebook: {type: 'string', default: ''},
        FacebookColor: {type: 'string', default: '#3b8df7'},
        Twitter: {type: 'string', default: ''},
        TwitterColor: {type: 'string', default: '#3ab4ff'},
        Feedly: {type: 'string', default: ''},
        FeedlyColor: {type: 'string', default: '#72d865'},
        YouTube: {type: 'string', default: ''},
        YouTubeColor: {type: 'string', default: '#f0504f'},

        IconSize: {type: 'number', default: 2},

        profurl: {type: 'string', default: ''},
        backgroundurl: {type: 'string', default: ''},
        user_registered: {type: 'string', default: ''},
        
        displayProfile: {type: 'boolean', default: false},

        profileMarginBottom: {type: 'number', default: 2},
    },
    transforms: {
        from: [{
            type: 'block',
            blocks: [ 'core/paragraph' ],
            transform: ( { content } ) => {
                return wp.blocks.createBlock( 'paragraph-style/profile', {text: content});
            }
        }]
    },
    edit: ( props ) => {
        return (
            <div { ...props }>
                {
                <InspectorControls>
                    <div style={{display:'inline-block',width:'100%'}}>
                        <PanelBody title={ __( 'プロフィールイメージの設定' ) } initialOpen={ false }>{ profileImg(props) }</PanelBody>
                        <PanelBody title={ __( '枠線の設定' ) } initialOpen={ false }>{ borderSetting(props) }</PanelBody>
                        <PanelBody title={ __( '色の設定' ) } initialOpen={ false }>{ colorSetting(props) }</PanelBody>
                        <PanelBody title={ __( 'アイコンの色設定' ) } initialOpen={ false }>{ IconColorSetting(props) }</PanelBody>
                        <PanelBody title={ __( 'アイコンの大きさ設定' ) } initialOpen={ false }>{ IconSizeSetting(props) }</PanelBody>
                        <PanelBody title={ __( '下のスペース' ) } initialOpen={ false }>{ space(props) }</PanelBody>
                    </div>
                </InspectorControls>
                }
                <div>
                    <div
                    style={{
                        display:'inline-block',
                        width:'100%',
                        border:'solid .5px'
                    }}
                    >
                        <p
                        style={{
                            width: '50%',
                            float:'left',
                            marginBlockStart: '.2em',
                            marginBlockEnd: '.2em',
                            paddingLeft:'.5em'
                        }}
                        >プロフィールを設定するユーザーを選択してください
                        <small style={{color:'red'}}><br/>{'*プロフィールは、ユーザー > ユーザー一覧 から設定できます'}</small></p>
                        <select
                        style={{
                            width: '50%',
                            padding: '.5em',
                            float:'right',
                            borderTop: '0',
                            borderBottom: '0',
                            borderRight: '0',
                            borderRadius: '0'
                        }}
                        onChange={
                            (e) => {
                                const userObj = getUserProfInfo(e.target.value);
                                console.log(userObj);
                                props.setAttributes({
                                    display_name: userObj.display_name,
                                });
                                props.setAttributes({
                                    user_description: userObj.user_description,
                                });
                                props.setAttributes({
                                    user_email: userObj.user_email,
                                });
                                props.setAttributes({
                                    Instagram: userObj.Instagram,
                                });
                                props.setAttributes({
                                    Facebook: userObj.Facebook,
                                });
                                props.setAttributes({
                                    Twitter: userObj.Twitter,
                                });
                                props.setAttributes({
                                    Feedly: userObj.Feedly,
                                });
                                props.setAttributes({
                                    YouTube: userObj.YouTube,
                                });
                                props.setAttributes({
                                    profurl: userObj.profurl,
                                });
                                props.setAttributes({
                                    backgroundurl: userObj.backgroundurl,
                                });
                                props.setAttributes({
                                    user_registered: userObj.user_registered,
                                });

                                props.setAttributes({
                                    displayProfile: true
                                });
                            }
                        }
                        >
                        {
                            callBackFunc(() => {
                                var arr = [];
                                arr.push(<option value={''}></option>);
                                for (var key in getUserInfo()) {
                                    arr.push(
                                    <option
                                    value={getUserInfo()[key].ID}
                                    >
                                        {getUserInfo()[key].user_login}
                                    </option>);
                                }
                                return arr;
                            })
                        }
                        </select>
                    </div>
                    <div
                    className={'displayArea'}
                    style={{
                        backgroundImage:`url(${props.attributes.backgroundurl})`,
                        backgroundRepeat: 'no-repeat',
                        backgroundPosition: '50% 50%',
                        backgroundColor:`${props.attributes.profileBackgroundColor}`,
                        padding:`${props.attributes.profileWhiteSpace}em`,
                        border:`solid ${props.attributes.profileBorderWidth}px ${props.attributes.profileBorderColor}`,
                        borderRadius: `${props.attributes.profileBorderRadius}em`,
                        color:`${props.attributes.profileFontColor}`,
                        marginBottom:`${props.attributes.profileMarginBottom}rem`
                    }}
                    >
                        <div style={{width:'100%', textAlign:'center'}}>
                            {
                                callBackFunc(() => {
                                    if (props.attributes.displayProfile == true) {
                                        return <img
                                        src={props.attributes.profurl}
                                        style={{maxWidth:'5em',
                                        border:`solid ${props.attributes.profileImgBorderWidth}px ${props.attributes.profileImgBorderColor}`,
                                        borderRadius: `${props.attributes.profileImgBorderRadius}%`,
                                        width:`${props.attributes.profileImgWidth}em`
                                        }}/>
                                    }
                                })
                            }
                        </div>
                        <div style={{textAlign:'center'}}>{props.attributes.display_name}</div>
                        <div>{props.attributes.user_description}</div>
                        {
                            callBackFunc(() => {
                                var tag;
                                if (props.attributes.displayProfile == true) {
                                    tag = 
                                    <ul class="" style={{listStyle:'none', paddingInlineStart: '0px', textAlign:'center'}}>
                                        <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                                            <a href={props.attributes.Twitter} rel="nofollow noopener" target="_blank"><i class="fab fa-twitter" style={{color:`${props.attributes.TwitterColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                                        </li>
                                        <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                                            <a href={props.attributes.Facebook} rel="nofollow noopener" target="_blank"><i class="fab fa-facebook-f" style={{color:`${props.attributes.FacebookColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                                        </li>
                                        <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                                            <a href={props.attributes.Instagram} rel="nofollow noopener" target="_blank"><i class="fab fa-instagram" style={{color:`${props.attributes.InstagramColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                                        </li>
                                        <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                                            <a href={props.attributes.Feedly} rel="nofollow noopener" target="_blank"><i class="fa fa-feedly" style={{color:`${props.attributes.FeedlyColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                                        </li>
                                        <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                                            <a href={props.attributes.LINE} rel="nofollow noopener" target="_blank"><i class="fab fa-line" style={{color:`${props.attributes.LINEColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                                        </li>
                                        <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                                            <a href={props.attributes.YouTube} rel="nofollow noopener" target="_blank"><i class="fab fa-youtube" style={{color:`${props.attributes.YouTubeColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                                        </li>
                                    </ul>
                                }
                                return tag;
                            })
                        }

                    </div>
                </div>
            </div>
        );
    },
    save: ( props ) => {
        return (
            <div
            style={{
                backgroundImage:`url(${props.attributes.backgroundurl})`,
                backgroundRepeat: 'no-repeat',
                backgroundPosition: '50% 50%',
                backgroundColor:`${props.attributes.profileBackgroundColor}`,
                padding:`${props.attributes.profileWhiteSpace}em`,
                border:`solid ${props.attributes.profileBorderWidth}px ${props.attributes.profileBorderColor}`,
                borderRadius: `${props.attributes.profileBorderRadius}em`,
                color:`${props.attributes.profileFontColor}`,
                marginBottom:`${props.attributes.profileMarginBottom}rem`
            }}
            >
                <div style={{width:'100%', textAlign:'center'}}>
                    <img
                    src={props.attributes.profurl}
                    style={{maxWidth:'5em',
                    border:`solid ${props.attributes.profileImgBorderWidth}px ${props.attributes.profileImgBorderColor}`,
                    borderRadius: `${props.attributes.profileImgBorderRadius}%`,
                    width:`${props.attributes.profileImgWidth}em`
                    }}/>
                </div>
                <div style={{textAlign:'center'}}>{props.attributes.display_name}</div>
                <div>{props.attributes.user_description}</div>
                <ul class="" style={{listStyle:'none', paddingInlineStart: '0px', textAlign:'center'}}>
                    <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                        <a href={props.attributes.Twitter} rel="nofollow noopener" target="_blank"><i class="fab fa-twitter" style={{color:`${props.attributes.TwitterColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                    </li>
                    <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                        <a href={props.attributes.Facebook} rel="nofollow noopener" target="_blank"><i class="fab fa-facebook-f" style={{color:`${props.attributes.FacebookColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                    </li>
                    <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                        <a href={props.attributes.Instagram} rel="nofollow noopener" target="_blank"><i class="fab fa-instagram" style={{color:`${props.attributes.InstagramColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                    </li>
                    <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                        <a href={props.attributes.Feedly} rel="nofollow noopener" target="_blank"><i class="fa fa-feedly" style={{color:`${props.attributes.FeedlyColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                    </li>
                    <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                        <a href={props.attributes.LINE} rel="nofollow noopener" target="_blank"><i class="fab fa-line" style={{color:`${props.attributes.LINEColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                    </li>
                    <li style={{width:'100%', textAlign:'center', display:'inline-block', width:'auto'}}>
                        <a href={props.attributes.YouTube} rel="nofollow noopener" target="_blank"><i class="fab fa-youtube" style={{color:`${props.attributes.YouTubeColor}`, fontSize:`${props.attributes.IconSize}em`, padding:'5px'}}></i></a>
                    </li>
                </ul>
            </div>
        );
    }
} );