<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'm_customer_id',
'm_customer_name',
'm_customer_business_phone',
'm_customer_mobile_phone',
'm_customer_whatsApp',
'm_customer_email',
'm_customer_website',
'm_customer_billing_address',
'm_customer_billing_city',
'm_customer_billing_zipcode',
'm_customer_billing_province',
'm_customer_billing_country',
'm_customer_currency',
'm_customer_contact_fullname',
'm_customer_contact_position',
'm_customer_contact_email',
'm_customer_contact_mobile_phone',
'add_user',
'add_date',
'edit_user',
'edit_date',
'm_customer_status',
'm_customer_no' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'm_customer_id' => array( 'import_field' ),
'm_customer_name' => array( 'import_field1' ),
'm_customer_business_phone' => array( 'import_field2' ),
'm_customer_mobile_phone' => array( 'import_field3' ),
'm_customer_whatsApp' => array( 'import_field4' ),
'm_customer_email' => array( 'import_field5' ),
'm_customer_website' => array( 'import_field6' ),
'm_customer_billing_address' => array( 'import_field7' ),
'm_customer_billing_city' => array( 'import_field8' ),
'm_customer_billing_zipcode' => array( 'import_field9' ),
'm_customer_billing_province' => array( 'import_field10' ),
'm_customer_billing_country' => array( 'import_field11' ),
'm_customer_currency' => array( 'import_field12' ),
'm_customer_contact_fullname' => array( 'import_field13' ),
'm_customer_contact_position' => array( 'import_field14' ),
'm_customer_contact_email' => array( 'import_field15' ),
'm_customer_contact_mobile_phone' => array( 'import_field16' ),
'add_user' => array( 'import_field17' ),
'add_date' => array( 'import_field18' ),
'edit_user' => array( 'import_field19' ),
'edit_date' => array( 'import_field20' ),
'm_customer_status' => array( 'import_field21' ),
'm_customer_no' => array( 'import_field22' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
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
'import_field22' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
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
'import_field22' => 'grid' ),
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
'import_field22' ) ),
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
'items' => array( 'import_field',
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
'import_field22' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'm_customer_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'm_customer_name',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'm_customer_business_phone',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'm_customer_mobile_phone',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'm_customer_whatsApp',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'm_customer_email',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'm_customer_website',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'm_customer_billing_address',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'm_customer_billing_city',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'm_customer_billing_zipcode',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'm_customer_billing_province',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'm_customer_billing_country',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'm_customer_currency',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'm_customer_contact_fullname',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'm_customer_contact_position',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'm_customer_contact_email',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'm_customer_contact_mobile_phone',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'add_user',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'add_date',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'edit_user',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'edit_date',
'type' => 'import_field' ),
'import_field21' => array( 'field' => 'm_customer_status',
'type' => 'import_field' ),
'import_field22' => array( 'field' => 'm_customer_no',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>