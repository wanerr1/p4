<?php ob_start(); ?>

    <?php $count = count($allPosts) ?>

    <article class="post">
        <span class="postChapter">
            CHAPITRE <?php echo $post->chapter();?> : 
        </span>
        <span class="postTitle">
            <?php echo $post->title();?>
        </span>
        <div class="postDetails">AUTEUR:
            <?php echo $post->author();?>
        </div>
        <div class="postContent">CONTENT:
            <?php echo $post->content();?>
        </div>
    </article>

    <!-- COMMENT AREA -->
    <!-- POST NEW COMMENT -->
    <div class="postComments">
        <form action="" method="post">
            <input name="postIDinput" type="hidden" value="<?php echo $post->ID()?>"/>
            <label for="formCommentContent">Poster un Commentaire</label>
            <textarea type="text" id="formCommentContent"name="formContent"></textarea>
            <input type="submit" value="Poster"/>
        </form>
    </div>
    <!-- LAST COMMENTS -->
    <?php 
    if(isset($allComments))
    {
        foreach($allComments as $comment)
        {
        ?>
            <div class="postComments">
                <span><?php echo $comment->author();?></span>
                <span><a href=''><i class="fas fa-exclamation-circle"></i> Signaler</a></span>
                <div><?php echo $comment->content();?></div>
            </div>
        <?php
        }
    }
    ?>

    <!-- PAGINATION -->
    <div class="postPagination">
        <?php
        if(($post->chapter() - 1) > 0)
        {
        ?>
            <a href="index.php?chap=<?php echo ($post->chapter() - 1)?>"><i class="fas fa-chevron-left"></i></a>
        <?php
        };
        if(($post->chapter() + 1) <= $count)
        {
        ?>
            <a href="index.php?chap=<?php echo ($post->chapter() + 1)?>"><i class="fas fa-chevron-right"></i></a>
        <?php
        };
        ?>
    </div>
<?php $content = ob_get_clean(); ?>

<?php 

  $title ='Chapitre '.$post->chapter();
  require('view/template.php');

?> 
