<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'm_asuransi_type',
'm_asuransi_alamat',
'm_asuransi_tgl',
'm_asuransi_no',
'm_asuransi_nama',
'm_asuransi_fax',
'm_asuransi_tlp',
'm_asuransi_email',
'is_active' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'm_asuransi_type' => array( 'integrated_edit_field' ),
'm_asuransi_alamat' => array( 'integrated_edit_field4' ),
'm_asuransi_tgl' => array( 'integrated_edit_field3' ),
'm_asuransi_no' => array( 'integrated_edit_field2' ),
'm_asuransi_nama' => array( 'integrated_edit_field1' ),
'm_asuransi_fax' => array( 'integrated_edit_field6' ),
'm_asuransi_tlp' => array( 'integrated_edit_field5' ),
'm_asuransi_email' => array( 'integrated_edit_field7' ),
'is_active' => array( 'integrated_edit_field9' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add_message',
'changepassword_link',
'notifications' ),
'below-grid' => array( 'add_save',
'add_reset',
'add_back_list',
'add_cancel' ),
'top' => array( 'add_header' ),
'grid' => array( 'section' ),
'section' => array( 'integrated_edit_field',
'integrated_edit_field4',
'integrated_edit_field3',
'integrated_edit_field2',
'integrated_edit_field1',
'integrated_edit_field6',
'integrated_edit_field5',
'integrated_edit_field7',
'integrated_edit_field9' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'add_message' => 'above-grid',
'changepassword_link' => 'above-grid',
'notifications' => 'above-grid',
'add_save' => 'below-grid',
'add_reset' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'add_header' => 'top',
'section' => 'grid',
'integrated_edit_field' => 'section',
'integrated_edit_field4' => 'section',
'integrated_edit_field3' => 'section',
'integrated_edit_field2' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field6' => 'section',
'integrated_edit_field5' => 'section',
'integrated_edit_field7' => 'section',
'integrated_edit_field9' => 'section' ),
'itemLocations' => array( 'section' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field4' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field3' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field6' => array( 'location' => 'section',
'cellId' => 'c5' ),
'integrated_edit_field5' => array( 'location' => 'section',
'cellId' => 'c6' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c7' ),
'integrated_edit_field9' => array( 'location' => 'section',
'cellId' => 'c8' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'add_reset' => array( 'add_reset' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'section' => array( 'section' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field4',
'integrated_edit_field3',
'integrated_edit_field2',
'integrated_edit_field1',
'integrated_edit_field6',
'integrated_edit_field5',
'integrated_edit_field7',
'integrated_edit_field9' ),
'changepassword_link' => array( 'changepassword_link' ),
'notifications' => array( 'notifications' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'section' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 0 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 9 ) ) ),
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
'items' => array( 'changepassword_link',
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
'items' => array( 'section' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9' ) ) ),
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
'section' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'Asuransi, Add New' ),
'location' => 'section',
'bsStyle' => 'default',
'panelType' => 3 ),
'integrated_edit_field' => array( 'field' => 'm_asuransi_type',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'm_asuransi_alamat',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'm_asuransi_tgl',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'm_asuransi_no',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'm_asuransi_nama',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'm_asuransi_fax',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'm_asuransi_tlp',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'm_asuransi_email',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'is_active',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'notifications' => array( 'type' => 'notifications' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>