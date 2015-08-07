<?php
	require '../libs/Smarty.class.php';
	session_start();
	//echo $_SESSION['UserName'];

	$smarty = new Smarty;

	// Global
	//$gDB_Path = "sqlite:../NetShop.db3";

	//$smarty->force_compile = true;
	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->cache_lifetime = 120;

	//	Check mobile
	if( strstr($_SERVER['HTTP_USER_AGENT'],'Android') ||
		strstr($_SERVER['HTTP_USER_AGENT'],'webOS') ||
		strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ||
		strstr($_SERVER['HTTP_USER_AGENT'],'iPod')
	){
		$isMobile = true;
	}
	$smarty->assign("isMobile", $isMobile);

	$OpMenu = array(	array("Value" => "Class", "Text" => "?c=class"),
                    	array("Value" => "Items", "Text" => "?c=items"),
                    	array("Value" => "Member", "Text" => "?c=member")
	                                  );
	$smarty->assign("MenuLink", array( 	
                                  	//array("menu" => "About", "link" => "About.php"),
                                  	//array("menu" => "Home", "link" => "Home.php"),
                                  	array("menu" => "1", "link" => "serviceCenter.php?c=status"),
                                  	array("menu" => "2", "link" => "serviceCenter.php?c=device"),
                                  	array("menu" => "3", "link" => "serviceCenter.php?c=manager")
                                  ));

	$smarty->assign("OpMenu", $OpMenu);
	//$smarty->display('header.tpl');
	//$smarty->display('menu.tpl');
	$smarty->display('COmboBoxTest.tpl');

 echo '<pre>';
 print_r($MenuLink);
 echo '</pre>';


?>