<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_t_in_mail  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["ProcessValuesView"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesView(&$values, $pageObject)
{

		$userData = Security::getUserName();

if ($values['last_user'] == $userData)
{
		$pageObject->showItem("custom_button");

}
else
if ($values['last_user'] != $userData)
{
	
	$pageObject->hideItem("custom_button");

}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function ProcessValuesView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>