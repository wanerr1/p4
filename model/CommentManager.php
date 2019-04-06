<?php

class CommentManager extends DbConnexion
{
    public function create($commentData)
    {
        $req = self::$_db->prepare('INSERT INTO Comments(postID, content, commentDate) 
        VALUES(:postID, :content, CURDATE())');
        $req->execute(array(
            'postID' => $commentData['postIDinput'],
            'content' => $commentData['formContent']
        ));
        header("Refresh:0");
    }
    public function report($commentID)
    {
        $req = self::$_db->prepare('UPDATE Comments SET report = report+1 WHERE ID = :commentID');
        $req->execute(array(
            'commentID' => $commentID
        ));
        $req->closeCursor();
    }
    public function read()
    {

    }
    public function select()
    {   

    }
    // !!! 'CHAP' IS NOT 'ID'
    public function selectAll($chap)
    {   
        $req = self::$_db->prepare('SELECT Comments.*, DATE_FORMAT(commentDate, "%d/%m/%Y") AS commentDate FROM Comments INNER JOIN Posts ON Comments.postID = Posts.ID WHERE Posts.Chapter = :chap');
        $req->bindValue('chap', $chap, PDO::PARAM_INT);
        $req->execute();
        
        while($row = $req->fetch())
        {
            $comment = new Comment($row);
            $allComments[] = $comment;
        }
        if(isset($allComments))
        {
            return $allComments;
        }
        $req->closeCursor();
    }
    public function delete()
    {

    }
} 
