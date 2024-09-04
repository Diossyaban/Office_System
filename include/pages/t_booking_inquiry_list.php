<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => false,
'editInPopup' => false,
'viewInPopup' => true,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 2 ),
'details' => array( 'm_disposition' => array( 'displayPreview' => 2,
'previewPageId' => '',
'showCount' => false,
'badgeColor' => '',
'hideEmptyChild' => false,
'hideEmptyPreview' => null,
'showProceedLink' => null,
'printDetails' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 't_booking_id' => array( 'totalsType' => '' ),
't_booking_no' => array( 'totalsType' => '' ),
't_booking_from_date' => array( 'totalsType' => '' ),
't_booking_to_date' => array( 'totalsType' => '' ),
't_booking_from_time' => array( 'totalsType' => '' ),
't_booking_to_time' => array( 'totalsType' => '' ),
't_booking_destination' => array( 'totalsType' => '' ),
't_booking_remarks' => array( 'totalsType' => '' ),
'add_user' => array( 'totalsType' => '' ),
'add_date' => array( 'totalsType' => '' ),
'edit_user' => array( 'totalsType' => '' ),
'edit_date' => array( 'totalsType' => '' ),
't_booking_status' => array( 'totalsType' => '' ),
'm_vehicle_id' => array( 'totalsType' => '' ),
't_booking_user' => array( 'totalsType' => '' ),
'm_vehicle_driver' => array( 'totalsType' => '' ),
'Voucher' => array( 'totalsType' => '' ),
'fr_date' => array( 'totalsType' => '' ),
'flag' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 't_booking_user',
't_booking_from_date',
't_booking_to_date',
'fr_date',
't_booking_destination',
'm_vehicle_driver',
't_booking_remarks',
'm_vehicle_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'add_date',
'fr_date',
'Voucher',
'm_vehicle_driver',
't_booking_user',
't_booking_to_time',
't_booking_to_date',
't_booking_status',
't_booking_remarks',
't_booking_no',
't_booking_id',
't_booking_from_time',
't_booking_from_date',
't_booking_destination',
'm_vehicle_id',
'edit_user',
'edit_date',
'add_user' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 't_booking_from_date' => array( 'simple_grid_field2',
'simple_grid_field4' ),
't_booking_to_date' => array( 'simple_grid_field3' ),
't_booking_destination' => array( 'simple_grid_field6',
'simple_grid_field7' ),
't_booking_user' => array( 'simple_grid_field14',
'simple_grid_field16' ),
'm_vehicle_driver' => array( 'simple_grid_field15',
'simple_grid_field17' ),
't_booking_remarks' => array( 'grid_field_label1',
'grid_field1' ),
'm_vehicle_id' => array( 'grid_field_label',
'grid_field' ),
'fr_date' => array( 'grid_field2',
'grid_field_label2' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add',
'delete',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'notifications',
'loginform_login',
'username_button' ),
'grid' => array( 'grid_field_label1',
'grid_field1',
'simple_grid_field4',
'simple_grid_field2',
'text',
'simple_grid_field3',
'simple_grid_field7',
'simple_grid_field6',
'simple_grid_field17',
'simple_grid_field15',
'grid_field_label',
'grid_checkbox_head',
'grid_checkbox',
'grid_edit',
'grid_view',
'simple_grid_field16',
'simple_grid_field14',
'grid_field',
'grid_field_label2',
'grid_field2' ),
'top' => array(  ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'deleteselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'add' => 'above-grid',
'delete' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'notifications' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'grid_field_label1' => 'grid',
'grid_field1' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field2' => 'grid',
'text' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field15' => 'grid',
'grid_field_label' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_view' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field14' => 'grid',
'grid_field' => 'grid',
'grid_field_label2' => 'grid',
'grid_field2' => 'grid' ),
'itemLocations' => array( 'grid_field_label1' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'text' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'grid_field_label' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'grid_field_label2' => array( 'location' => 'grid',
'cellId' => 'headcell_field11' ),
'grid_field2' => array( 'location' => 'grid',
'cellId' => 'headcell_field12' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12',
'search_panel_field13',
'search_panel_field14',
'search_panel_field15',
'search_panel_field16',
'search_panel_field18' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'notifications' => array( 'notifications' ),
'add' => array( 'add' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'export_selected' => array( 'export_selected' ),
'import' => array( 'import' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field' => array( 'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field6',
'simple_grid_field14',
'simple_grid_field15',
'grid_field1',
'grid_field',
'grid_field2' ),
'grid_field_label' => array( 'simple_grid_field4',
'simple_grid_field7',
'simple_grid_field16',
'simple_grid_field17',
'grid_field_label1',
'grid_field_label',
'grid_field_label2' ),
'print_details' => array( 'print_details' ),
'text' => array( 'text' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 't_booking_user_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 't_booking_from_date_fieldheadercolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field11' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'fr_date_fieldheadercolumn' ),
'items' => array( 'grid_field_label2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 't_booking_destination_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'm_vehicle_driver_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 't_booking_remarks_fieldheadercolumn' ),
'items' => array( 'grid_field_label1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'm_vehicle_id_fieldheadercolumn' ),
'items' => array( 'grid_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'view_column' ),
'items' => array( 'grid_edit',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 't_booking_user_fieldcolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'simple_grid_field2',
'text',
'simple_grid_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'headcell_field12' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'fr_date_fieldcolumn' ),
'items' => array( 'grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 't_booking_destination_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'm_vehicle_driver_fieldcolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 't_booking_remarks_fieldcolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'm_vehicle_id_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field13' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 10,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => true ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'delete' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'notifications',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field11' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field7' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'headcell_field12' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field2' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'headcell_field13' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field2' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label1' ),
'field' => 't_booking_remarks',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'grid_field1' ),
'field' => 't_booking_remarks',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 't_booking_from_date',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2',
'text',
'simple_grid_field3' ),
'field' => 't_booking_from_date',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 't_booking_destination',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 't_booking_destination',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array(  ) ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array(  ) ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'm_vehicle_driver',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'm_vehicle_driver',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label' ),
'field' => 'm_vehicle_id',
'columnName' => 'field' ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 't_booking_user',
'columnName' => 'field' ),
'headcell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 't_booking_user',
'columnName' => 'field' ),
'headcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'm_vehicle_id',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field11' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label2' ),
'field' => 'fr_date',
'columnName' => 'field' ),
'headcell_field12' => array( 'model' => 'cell_field',
'items' => array( 'grid_field2' ),
'field' => 'fr_date',
'columnName' => 'field' ),
'headcell_field13' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field18',
'search_panel_field16',
'search_panel_field15',
'search_panel_field14',
'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'add_date',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field1' => array( 'field' => 'add_user',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field2' => array( 'field' => 'edit_date',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field3' => array( 'field' => 'edit_user',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field4' => array( 'field' => 'm_vehicle_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 't_booking_destination',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field6' => array( 'field' => 't_booking_from_date',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field7' => array( 'field' => 't_booking_from_time',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field8' => array( 'field' => 't_booking_id',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field9' => array( 'field' => 't_booking_no',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field10' => array( 'field' => 't_booking_remarks',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field11' => array( 'field' => 't_booking_status',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field12' => array( 'field' => 't_booking_to_date',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field13' => array( 'field' => 't_booking_to_time',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field14' => array( 'field' => 't_booking_user',
'type' => 'search_panel_field',
'required' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'notifications' => array( 'type' => 'notifications' ),
'add' => array( 'type' => 'add' ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => false,
'buttonStyle' => 'default',
'buttonSize' => 'small',
'label' => array( 'type' => 0,
'text' => 'Edit' ) ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => true,
'buttonStyle' => 'default',
'buttonSize' => 'small',
'label' => array( 'type' => 0,
'text' => 'View' ) ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_details',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field2' => array( 'field' => 't_booking_from_date',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field3' => array( 'field' => 't_booking_to_date',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field4' => array( 'type' => 'grid_field_label',
'field' => 't_booking_from_date',
'clickSort' => true,
'label' => array( 'field' => 't_booking_from_date',
'table' => 't_booking_inquiry',
'type' => 3 ) ),
'simple_grid_field6' => array( 'field' => 't_booking_destination',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 't_booking_destination',
'clickSort' => true,
'label' => array( 'field' => 't_booking_destination',
'table' => 't_booking_inquiry',
'type' => 3 ) ),
'simple_grid_field14' => array( 'field' => 't_booking_user',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field15' => array( 'field' => 'm_vehicle_driver',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'search_panel_field15' => array( 'field' => 'm_vehicle_driver',
'type' => 'search_panel_field',
'required' => false ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 't_booking_user',
'clickSort' => true,
'label' => array( 'field' => 't_booking_user',
'table' => 't_booking_inquiry',
'type' => 3 ) ),
'search_panel_field16' => array( 'field' => 'Voucher',
'type' => 'search_panel_field',
'required' => false ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'm_vehicle_driver',
'clickSort' => true,
'label' => array( 'field' => 'm_vehicle_driver',
'table' => 't_booking_inquiry',
'type' => 3 ) ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'm_disposition' => true ) ),
'grid_field_label1' => array( 'type' => 'grid_field_label',
'field' => 't_booking_remarks',
'label' => array( 'field' => 't_booking_remarks',
'table' => 't_booking_inquiry',
'type' => 3 ),
'clickSort' => true ),
'grid_field1' => array( 'field' => 't_booking_remarks',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => '-',
'type' => 0 ),
'editedByRte' => false ),
'grid_field_label' => array( 'type' => 'grid_field_label',
'field' => 'm_vehicle_id',
'clickSort' => true,
'label' => array( 'field' => 'm_vehicle_id',
'table' => 't_booking_inquiry',
'type' => 3 ) ),
'grid_field' => array( 'field' => 'm_vehicle_id',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field2' => array( 'field' => 'fr_date',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field_label2' => array( 'type' => 'grid_field_label',
'field' => 'fr_date',
'label' => array( 'field' => 'fr_date',
'table' => 't_booking_inquiry',
'type' => 3 ) ),
'search_panel_field18' => array( 'field' => 'fr_date',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>