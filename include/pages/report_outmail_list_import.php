<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 't_delivery_no',
't_delivery_date',
't_delivery_type',
't_delivery_id',
't_delivery_token',
't_location_id',
't_select_table_text',
't_delivery_to_table',
't_delivery_to_text',
't_delivery_address',
't_delivery_desc',
't_delivery_status',
'add_user',
'add_date',
'edit_user',
'edit_date',
'process_user',
'process_date',
'kepada',
't_delivery_category_code',
'last_user',
'last_date',
't_delivery_location_address',
'status',
'fullname',
'm_location_name' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 't_delivery_id' => array( 'import_field' ),
't_delivery_token' => array( 'import_field1' ),
't_delivery_no' => array( 'import_field2' ),
't_delivery_date' => array( 'import_field3' ),
't_delivery_type' => array( 'import_field4' ),
't_location_id' => array( 'import_field5' ),
't_select_table_text' => array( 'import_field6' ),
't_delivery_to_table' => array( 'import_field7' ),
't_delivery_to_text' => array( 'import_field8' ),
't_delivery_address' => array( 'import_field9' ),
't_delivery_desc' => array( 'import_field10' ),
't_delivery_status' => array( 'import_field11' ),
'add_user' => array( 'import_field12' ),
'add_date' => array( 'import_field13' ),
'edit_user' => array( 'import_field14' ),
'edit_date' => array( 'import_field15' ),
'process_user' => array( 'import_field16' ),
'process_date' => array( 'import_field17' ),
'kepada' => array( 'import_field18' ),
't_delivery_category_code' => array( 'import_field19' ),
'last_user' => array( 'import_field20' ),
'last_date' => array( 'import_field21' ),
't_delivery_location_address' => array( 'import_field22' ),
'status' => array( 'import_field23' ),
'fullname' => array( 'import_field24' ),
'm_location_name' => array( 'import_field25' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field2',
'import_field3',
'import_field4',
'import_field',
'import_field1',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field19' => 'grid',
'import_field20' => 'grid',
'import_field21' => 'grid',
'import_field22' => 'grid',
'import_field23' => 'grid',
'import_field24' => 'grid',
'import_field25' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
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
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field2',
'import_field3',
'import_field4',
'import_field',
'import_field1',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 't_delivery_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 't_delivery_token',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 't_delivery_no',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 't_delivery_date',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 't_delivery_type',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 't_location_id',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 't_select_table_text',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 't_delivery_to_table',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 't_delivery_to_text',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 't_delivery_address',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 't_delivery_desc',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 't_delivery_status',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'add_user',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'add_date',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'edit_user',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'edit_date',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'process_user',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'process_date',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'kepada',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 't_delivery_category_code',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'last_user',
'type' => 'import_field' ),
'import_field21' => array( 'field' => 'last_date',
'type' => 'import_field' ),
'import_field22' => array( 'field' => 't_delivery_location_address',
'type' => 'import_field' ),
'import_field23' => array( 'field' => 'status',
'type' => 'import_field' ),
'import_field24' => array( 'field' => 'fullname',
'type' => 'import_field' ),
'import_field25' => array( 'field' => 'm_location_name',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>