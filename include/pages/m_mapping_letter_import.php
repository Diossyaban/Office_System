<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id',
'm_template_id',
'is_active',
'm_category_id',
'm_type_id',
'm_language_id',
'm_signature_id',
'template_file' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'import_field' ),
'm_category_id' => array( 'import_field1' ),
'm_type_id' => array( 'import_field2' ),
'm_language_id' => array( 'import_field3' ),
'm_signature_id' => array( 'import_field4' ),
'm_template_id' => array( 'import_field5' ),
'is_active' => array( 'import_field6' ),
'template_file' => array( 'import_field7' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field5',
'import_field6',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field7' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field7' => 'grid' ),
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
'import_field7' ) ),
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
'import_field5',
'import_field6',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field7' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'm_category_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'm_type_id',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'm_language_id',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'm_signature_id',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'm_template_id',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'is_active',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'template_file',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>