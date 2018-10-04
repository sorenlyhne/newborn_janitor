<?php
$access_item["/"] = false;
$access_item["/test1"] = true;
$access_item["/test2"] = true;

if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("");
$page->pageTitle("My first Janitor page");

if($action){
	if($action[count($action)-1] == "test1"){
		$page->page(array(
			"templates" => "pages/test1.php"
			)
		);
		exit();
	}

	elseif($action[count($action)-1] == "test2"){
		$page->page(array(
			"templates" => "pages/test2.php"
			)
		);
		exit();
	}
}

$page->page(array(
	"templates" => "pages/test.php"
	)
);
exit();

?>