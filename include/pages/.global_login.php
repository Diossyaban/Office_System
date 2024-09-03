<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'login_message' ),
'top' => array( 'text1',
'text2',
'login-logo',
'text' ),
'grid' => array( 'username_label',
'username',
'password_label',
'password',
'remember_password',
'login_remind' ),
'footer' => array( 'login_button' ),
'superbottom' => array(  ) ),
'formXtTags' => array( 'footer' => array( 'signin_button' ),
'superbottom' => array(  ) ),
'itemForms' => array( 'login_message' => 'above-grid',
'text1' => 'top',
'text2' => 'top',
'login-logo' => 'top',
'text' => 'top',
'username_label' => 'grid',
'username' => 'grid',
'password_label' => 'grid',
'password' => 'grid',
'remember_password' => 'grid',
'login_remind' => 'grid',
'login_button' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'username_label' => array( 'username_label' ),
'username' => array( 'username' ),
'password_label' => array( 'password_label' ),
'password' => array( 'password' ),
'login_message' => array( 'login_message' ),
'remember_password' => array( 'remember_password' ),
'login-logo' => array( 'login-logo' ),
'login_remind' => array( 'login_remind' ),
'login_button' => array( 'login_button' ),
'text' => array( 'text',
'text1',
'text2' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'login',
'type' => 'login',
'layoutId' => 'pretty1',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'login-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'plogin-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 1 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'text1',
'text2' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'login-logo',
'text' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'plogin-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c6' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'username_label',
'username' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'password_label',
'password' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'remember_password' ) ),
'c6' => array( 'model' => 'c6',
'items' => array( 'login_remind' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'plogin-footer',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c' => array( 'model' => 'c1',
'items' => array( 'login_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'superbottom' => array( 'modelId' => 'plogin-superbottom',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'username_label' => array( 'type' => 'username_label',
'bold' => true,
'font-size' => '14px' ),
'username' => array( 'type' => 'username',
'customCSS' => '.form-control {
    display: block;
    width: 100%;
    height: 55px;
    padding: 8px 12px;
    font-size: 15px;
    line-height: 1.4;
    color: #6f6f6f;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}' ),
'password_label' => array( 'type' => 'password_label',
'bold' => true,
'font-size' => '14px' ),
'password' => array( 'type' => 'password',
'customCSS' => '.form-control {
    display: block;
    width: 100%;
    height: 55px;
    padding: 8px 12px;
    font-size: 15px;
    line-height: 1.4;
    color: #6f6f6f;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}' ),
'login_message' => array( 'type' => 'login_message' ),
'remember_password' => array( 'type' => 'remember_password' ),
'login-logo' => array( 'type' => 'login-logo',
'font-size' => '24px',
'bold' => true,
'label' => array( 'table' => null,
'type' => 8 ) ),
'login_remind' => array( 'type' => 'login_remind',
'bold' => true ),
'login_button' => array( 'type' => 'login_button',
'buttonSize' => 'large',
'width' => '100%',
'label' => array( 'type' => 0,
'text' => 'Login' ),
'buttonStyle' => 'default',
'icon' => array( 'glyph' => '' ),
'customCSS' => '/* Put  your custom CSS code here */
.btn-lg, .btn-group-lg > .btn {
    padding: 15px 15px;
    font-size: 20px;
    line-height: 1;
    border-radius: 4px;
}


',
'bold' => true ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => 'Login to your account',
'type' => 0 ),
'editedByRte' => false,
'font-size' => '16px',
'bold' => true ),
'text1' => array( 'type' => 'text',
'label' => array( 'text' => 'Welcome to ',
'type' => 0 ),
'editedByRte' => false,
'font-size' => '25px',
'bold' => true ),
'text2' => array( 'type' => 'text',
'label' => array( 'text' => 'Talisman Digital',
'type' => 0 ),
'editedByRte' => false,
'font-size' => '25px',
'bold' => true,
'italic' => true,
'color' => '#008cba' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image',
'shadow' => false,
'fullSize' => true,
'image' => array( 'image' => 'new_login.jpg',
'source' => 2 ),
'width' => '' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'left',
'pageCSS' => '.r-pretty-login-page > .r-controls .r-mainform {
    min-width: 350px;
    width: 550px;
    margin-bottom: 50px;
  }' );
		?>