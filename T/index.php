<?php
include "config.php";
include "connexion.php";
	//-------------------ROUTER-------------------//
	if (isset($_GET['page']) && !empty($_GET['page'])) {
		switch ($_GET['page']) {
			case 'home':
				$view = "view/home.php";
				include "model/dbHiking_home.php";
				require "controller/display_home_datas.php";
				break;

			case 'left-sidebar':
				$view = "view/left-sidebar.php";
				break;

			case 'no-sidebar':
				$view = "view/no-sidebar.php";
				break;

			case 'right-sidebar':
				$view = "view/right-sidebar.php";
				break;

			case 'no-sidebar':
				$view = "view/two-sidebar.php";
				break;
			case 'hike':
				$view = "view/hike.php";
				include "model/dbHiking_hike.php";
				require "controller/display_hike_hikingID.php";
				break;

			default:
				$view = "view/home.php";
				break;
		}
	} else {
		$view = "view/home.php";
		include "model/dbHiking_home.php";
		require "controller/display_home_datas.php";

	}

	//-------------------RENDER--------------------//

	include "view/head.php";
	include "view/header.php";
	include $view;
	include "view/footer.php";
 ?>
