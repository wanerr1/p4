<?php

    function definePage($page)
    {
        $firstPostByPage = ($page - 1) * 3;

        //// !!!! CODE REPEAT !!!!

        $test = new PostManager;
        $allPosts = $test->selectAll();//ASIDE & COUNT   
        //// !!!!

        $posts = $test->select($firstPostByPage);
        require('view/allPostsView.php');
    }

    function displayPost($chap)
    {
        $commentsManage = new CommentManager;

        //// !!!! CODE REPEAT !!!!

        $test = new PostManager;
        $allPosts = $test->selectAll();//ASIDE & COUNT
        //// !!!!

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
    function report($commentID)
    {
        $commentsManage = new CommentManager;
        $commentsManage->report($commentID);
    }

