<?php

    //POST MANAGER TEST
    $test = new PostManager;
    $allPosts = $test->selectAll(); // ASIDE

    //COMMENT MANAGER TEST
    $commentsManage = new CommentManager;

    //ISSET GET 'PAGE' -> ALLPOSTSVIEW
    if(isset($_GET['page'])) 
    {
        $page = $_GET['page'];
        $firstPostByPage = ($page - 1) * 3;
        $posts = $test->select($firstPostByPage);
        require('view/allPostsView.php');
    }
    //ISSET GET 'CHAP' -> POSTVIEW
    elseif(isset($_GET['chap']))
    {
        $chap = $_GET['chap'];
        $post = $test->read($chap);

        $allComments = $commentsManage->selectAll($chap);
        
        //POST NEW COMMENT
        if(!empty($_POST))
        {
            $commentData = $_POST;
            $commentsManage->create($commentData);
        }
        require('view/postView.php');

    }
    //DEFAULT -> ALLPOSTSVIEW PAGE 1
    else
    {
        $page = 1;
        $firstPostByPage = 0;
        $posts = $test->select($firstPostByPage);
        require('view/allPostsView.php');
    }
 
