<?php
    //INDEX (ROUTER) + CONTROLLERS

    session_start();

    //CLASS LOADING FROM ../MODEL/
    spl_autoload_register(function($class)
    {
        require(__DIR__.'/model/'.$class.'.php');
    });

    //LOADING TEMPORARY ROUTER FILE (WILL BE A CLASS)
    require(__DIR__.'/controller/router.php');
    
   


