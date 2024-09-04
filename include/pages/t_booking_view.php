<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'm_disposition' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'fields' => array( 'gridFields' => array( 't_booking_destination',
'fr_date',
't_booking_user',
'Voucher',
't_booking_from_date',
't_booking_to_date',
'm_vehicle_driver',
't_booking_remarks',
'm_vehicle_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 't_booking_destination' => array( 'integrated_edit_field4' ),
'fr_date' => array( 'integrated_edit_field18' ),
't_booking_user' => array( 'integrated_edit_field6' ),
'Voucher' => array( 'integrated_edit_field8' ),
't_booking_from_date' => array( 'integrated_edit_field2' ),
't_booking_to_date' => array( 'integrated_edit_field3' ),
'm_vehicle_driver' => array( 'integrated_edit_field7' ),
't_booking_remarks' => array( 'integrated_edit_field1' ),
'm_vehicle_id' => array( 'integrated_edit_field5' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'adminarea_link',
'changepassword_link',
'notifications' ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'top' => array( 'view_header' ),
'grid' => array( 'section',
'section1' ),
'section' => array( 'integrated_edit_field4',
'integrated_edit_field18',
'integrated_edit_field6',
'integrated_edit_field8',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field7',
'integrated_edit_field1',
'integrated_edit_field5' ),
'section1' => array( 'details_preview' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'adminarea_link' => 'above-grid',
'changepassword_link' => 'above-grid',
'notifications' => 'above-grid',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'view_header' => 'top',
'section' => 'grid',
'section1' => 'grid',
'integrated_edit_field4' => 'section',
'integrated_edit_field18' => 'section',
'integrated_edit_field6' => 'section',
'integrated_edit_field8' => 'section',
'integrated_edit_field2' => 'section',
'integrated_edit_field3' => 'section',
'integrated_edit_field7' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field5' => 'section',
'details_preview' => 'section1' ),
'itemLocations' => array( 'section' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'section1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field18' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field6' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field8' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field3' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c5' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c6' ),
'integrated_edit_field5' => array( 'location' => 'section',
'cellId' => 'c7' ),
'details_preview' => array( 'location' => 'section1',
'cellId' => 'c1' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'section' => array( 'section',
'section1' ),
'integrated_edit_field' => array( 'integrated_edit_field4',
'integrated_edit_field18',
'integrated_edit_field6',
'integrated_edit_field8',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field7',
'integrated_edit_field1',
'integrated_edit_field5' ),
'details_preview' => array( 'details_preview' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'notifications' => array( 'notifications' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'section',
'section1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2',
'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field18' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 6 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
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
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'adminarea_link',
'changepassword_link',
'notifications' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'section',
'section1' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field18' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2',
'integrated_edit_field3' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ),
'c8' => array( 'model' => 'c1',
'items' => array(  ) ),
'c9' => array( 'model' => 'c1',
'items' => array(  ) ),
'c10' => array( 'model' => 'c1',
'items' => array(  ) ),
'c11' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header',
'title' => array( 'page' => 'view',
'table' => 't_booking',
'type' => 7 ) ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'section' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => '' ),
'location' => 'section',
'bsStyle' => 'default',
'panelType' => 3 ),
'integrated_edit_field4' => array( 'field' => 't_booking_destination',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field18' => array( 'field' => 'fr_date',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 't_booking_user',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'Voucher',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 't_booking_from_date',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 't_booking_to_date',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'm_vehicle_driver',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 't_booking_remarks',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'm_vehicle_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'section1' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => '' ),
'location' => 'section1',
'bsStyle' => 'default',
'panelType' => 3 ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'm_disposition',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
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