<?php
class Logout extends Controllers{
    public function __construct()
    {
        session_start();
		session_unset();
		session_destroy();
		header('location: '.base_url().'/login');
		die();

    }
    

}
?>