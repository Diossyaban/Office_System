<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'm_kelurahan_id',
'm_provinsi_id',
'm_kabupaten_id',
'm_kecamatan_id',
'm_keluarahan_nama',
'm_keluarahan_kodepos',
'm_keluarahan_latitude',
'm_kelurahan_ longitude' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'm_kelurahan_id' => array( 'import_field' ),
'm_provinsi_id' => array( 'import_field1' ),
'm_kabupaten_id' => array( 'import_field2' ),
'm_kecamatan_id' => array( 'import_field3' ),
'm_keluarahan_nama' => array( 'import_field4' ),
'm_keluarahan_kodepos' => array( 'import_field5' ),
'm_keluarahan_latitude' => array( 'import_field6' ),
'm_kelurahan_ longitude' => array( 'import_field7' ) ) ),
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
'import_field7' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
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
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'm_kelurahan_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'm_provinsi_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'm_kabupaten_id',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'm_kecamatan_id',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'm_keluarahan_nama',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'm_keluarahan_kodepos',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'm_keluarahan_latitude',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'm_kelurahan_ longitude',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>