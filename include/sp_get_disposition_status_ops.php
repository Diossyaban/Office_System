<?php
$topssp_get_disposition_status = array();
		$topssp_get_disposition_status["selectList"] = array(
		"subtype" => "sql",
		"sql" => "call sp_get_disposition_status(':session.UserID',1,':session.ticketId')"
	);
		$tables_data["sp_get_disposition_status"][".operations"] = &$topssp_get_disposition_status;
?>