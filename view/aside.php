<aside class="col-md-3">
    <div class="asideContent"> 
        <h4><i class="fas fa-book-open"></i> Chapitres</h4>
        <table class="table-striped">
            <?php foreach($allPosts as $post)
            {
            ?>
                <tr>
                    <td><a href="index.php?chap=<?php echo $post->chapter();?>"><div><?php echo $post->chapter();?> - <?php echo $post->title();?></div></a></td>
                </tr>
            <?php    
            }
            ?>
        </table>
    </div>
    <div class="asideContent"> 
        <h4><i class="fas fa-feather"></i> L'Auteur</h4>
        </table>
    </div>
</aside> 
