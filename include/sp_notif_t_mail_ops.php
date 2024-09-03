<?php
$topssp_notif_t_mail = array();
		$topssp_notif_t_mail["selectList"] = array(
		"subtype" => "sql",
		"sql" => "call sp_notif_t_mail (':session.UserID')"
	);
		$tables_data["sp_notif_t_mail"][".operations"] = &$topssp_notif_t_mail;
?>