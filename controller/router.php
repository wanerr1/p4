<?php

    require('controller/controller.php');

    //ISSET GET 'PAGE' -> ALLPOSTSVIEW
    if(isset($_GET['page'])) 
    {
        definePage($_GET['page']);
    }
    //ISSET GET 'CHAP' -> POSTVIEW
    elseif(isset($_GET['chap']))
    {
        //PUT THE IF + DISPLAYPOST IN ONE FUNCTION ?
        if(isset($_GET['report']))
        {
            report($_GET['report']);
        }
        displayPost($_GET['chap']);
    }
    //DEFAULT -> ALLPOSTSVIEW PAGE 1
    else
    {
        definePage(1);
    }
 
