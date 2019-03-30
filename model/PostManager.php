<?php

class PostManager extends DbConnexion
{
    public function create()
    {
        $req = self::$_db->prepare('INSERT INTO Posts');
    }
    public function update()
    {

    }
    public function read($chap)
    {
        $req = self::$_db->prepare('SELECT * FROM Posts WHERE chapter = :chapter');
        $req->bindValue('chapter', $chap, PDO::PARAM_INT);
        $req->execute();
        $row = $req->fetch();
        $post = new Post($row);
        return $post;
        $req->closeCursor();
    }
    public function select($firstPostSelect)
    {   
        $req = self::$_db->prepare('SELECT * FROM Posts ORDER BY chapter ASC LIMIT :firstPostSelect, 3');
        $req->bindValue('firstPostSelect', $firstPostSelect, PDO::PARAM_INT);
        $req->execute();
        while($row = $req->fetch())
        {
            $post = new Post($row);
            $posts[] = $post;
        }
        return $posts;
        $req->closeCursor();
    }
    // ASIDE DISPLAYING
    public function selectAll()
    {   
        $req = self::$_db->query('SELECT * FROM Posts ORDER BY chapter');
        while($row = $req->fetch())
        {
            $post = new Post($row);
            $allPosts[] = $post;
        }
        return $allPosts;
        $req->closeCursor();
    }
    public function delete()
    {

    }
}