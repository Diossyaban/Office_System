<?php
$topssp_disposition_flow = array();
		$topssp_disposition_flow["selectList"] = array(
		"subtype" => "sql",
		"sql" => "call sp_disposition_follow_user_2 (':session.UserID')"
	);
		$tables_data["sp_disposition_flow"][".operations"] = &$topssp_disposition_flow;
?>