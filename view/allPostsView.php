
<?php ob_start(); ?>

    <?php 
    //COUNT POSTS
    $count = count($allPosts);
    //POSTS DISPLAYING
    foreach($posts as $post)
    {
    ?>
        <article class="post">
            <a href="index.php?chap=<?php echo $post->chapter();?>">  <!-- !!!! ID =/= CHAPTER -->
                <span class="postChapter">
                    CHAPITRE <?php echo $post->chapter();?> : 
                </span>
                <span class="postTitle">
                    <?php echo $post->title();?>
                </span>
            </a>
            <div class="postDetails">AUTEUR:
                <?php echo $post->author();?>
            </div>
            <div class="postContent">CONTENT:
                <?php echo $post->content();?>
            </div>
        </article>
    <?php    
    }
    ?>
    <!--PAGINATION-->
    <div class="postPagination">
        <?php
        if(($page - 1) > 0)
        {
        ?>
            <a href="index.php?page=<?php echo ($page - 1)?>"><i class="fas fa-chevron-left"></i></a>
        <?php
        };
        if(($page + 1) < ($count - 3))
        {
        ?>
            <a href="index.php?page=<?php echo ($page + 1)?>"><i class="fas fa-chevron-right"></i></a>
        <?php
        }
        ?>
    </div>
 
<?php $content = ob_get_clean(); ?>

<?php 

  // TEMPORARY VAR $TITLE (TEST)
  $title = 'HOME';
  require('view/template.php');


?>