<?php

include_once __DIR__ . "/../Controllers/Controller.php";
include_once __DIR__ . "/../Models/User.php";

class HomeController extends Controller {

    function route() {
        parent::route(); // Call the route method of the parent Controller class
        global $view;
        //FEEL FREE TO MODIFY - I GAVE UP!
        // Additional logic for the home controller
        // You can set data and call render as needed
        $data = [
            'message' => 'Welcome to the home page!',
            // Add other data as needed
        ];

        // view validation
        if ($view == "list")
        {
            $this->render('Home', $view, $data);

        }
        else
        {
            $this->render('Home', 'index', $data);

        }
    }

    // You can add other methods specific to the HomeController if needed
}

?>
