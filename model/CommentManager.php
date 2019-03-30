<?php

class CommentManager extends DbConnexion
{
    public function create($commentData)
    {
        $req = self::$_db->prepare('INSERT INTO Comments(postID, content) 
        VALUES(:postID, :content)');
        $req->execute(array(
            'postID' => $commentData['postIDinput'],
            'content' => $commentData['formContent']
        ));
        header("Refresh:0");
    }
    public function update()
    {

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
        $req = self::$_db->prepare('SELECT Comments.* FROM Comments INNER JOIN Posts ON Comments.postID = Posts.ID WHERE Posts.Chapter = :chap');
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
