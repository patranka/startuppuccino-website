<?php

    $CONTROLLERS_DIR = dirname( __DIR__ );
    $APP_DIR = dirname( $CONTROLLERS_DIR );


	require_once $CONTROLLERS_DIR . '/session.php';

	// Redirect to home if user is not logged
	if(!$userLogged){
		header("Location: ../");
		exit;
	}


	// Include and Initialize People Functions
	require_once $APP_DIR . '/models/People_Functions.php';
	$people_func = new People_Functions($_SESSION['id']);

	$ideas = [];

	$currentPage = "community";
	$page_title = "Community - Startuppuccino";
	$metatags = [
					[
						"kind" => "link",
						"type" => "text/css",
						"rel"  => "stylesheet",
						"href" => "app/assets/css/people.css"
					]
				];
	$footer_scripts = ["app/assets/js/people.js", 
	                   "app/assets/js/manage_mentor_chooser.js"];


	/* 
	 * If isset the get parameter 'user_id' ( ../index.php?user_id=xxxx )
	 * then the user details are diplayed instead of the list of users and mentors 
	 */
	$isnotset_user = false;
	if (isset($_GET['user_id'])){

		// Set the account_id of the person to show
		$people_func->setPerson($_GET['user_id']);

		if ($user = $people_func->getPersonInfo()){

			include $CONTROLLERS_DIR . '/community__profile.php';

		} else {
	
			$isnotset_user = true;

		}

	}

	$residence_mentors = $people_func->getResidenceMentors();


    // Include header and footer controllers
    include 'page__init.php';


	// Set template name and variables
	
	$template_file = "community.twig";

	$template_variables['sess'] = $_SESSION;
	$template_variables['userLogged'] = $userLogged;
	$template_variables['page_title'] = $page_title;
	$template_variables['metatags'] = $metatags;
	$template_variables['footer_scripts'] = $footer_scripts;
	$template_variables['rel_path'] = '..';
	$template_variables['default_avatar'] = "avatar.svg";
	$template_variables['residence_mentors'] = $residence_mentors;
	
	// Prevent to load all the users data if only one profile is required
	if($isnotset_user){
		$template_variables['user'] = '404';
	} else {
	    $people = $people_func->getAllPeople();
	    shuffle($people);
		$template_variables['users'] = $people;
	}

    // Render the template
    require_once $CONTROLLERS_DIR . '/Twig_Loader.php';
    Twig_Loader::show($template_file, $template_variables);


?>