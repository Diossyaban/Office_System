<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'announcement_subject',
'announcement_desc',
'announcement_file',
'announcement_images',
'announcement_star_periode',
'announcement_end_periode',
'announcement_active' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'announcement_subject' => array( 'integrated_edit_field' ),
'announcement_desc' => array( 'integrated_edit_field1' ),
'announcement_file' => array( 'integrated_edit_field2' ),
'announcement_images' => array( 'integrated_edit_field3' ),
'announcement_star_periode' => array( 'integrated_edit_field8' ),
'announcement_end_periode' => array( 'integrated_edit_field9' ),
'announcement_active' => array( 'integrated_edit_field10' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add_message',
'adminarea_link',
'changepassword_link',
'notifications' ),
'below-grid' => array( 'add_save',
'add_reset',
'add_back_list',
'add_cancel' ),
'top' => array( 'add_header' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'add_message' => 'above-grid',
'adminarea_link' => 'above-grid',
'changepassword_link' => 'above-grid',
'notifications' => 'above-grid',
'add_save' => 'below-grid',
'add_reset' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'add_header' => 'top',
'integrated_edit_field' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field10' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'add_reset' => array( 'add_reset' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'notifications' => array( 'notifications' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => true ),
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'adminarea_link',
'changepassword_link',
'notifications' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_reset',
'add_back_list',
'add_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'add_reset' => array( 'type' => 'add_reset' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'integrated_edit_field' => array( 'field' => 'announcement_subject',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'announcement_desc',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'announcement_file',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'announcement_images',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'announcement_star_periode',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'announcement_end_periode',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'announcement_active',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'notifications' => array( 'type' => 'notifications' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>