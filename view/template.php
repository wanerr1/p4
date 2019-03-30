<!-- TEMPLATE HTML-->

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> 
    <link rel="stylesheet" href="public/css/style.css"/>   
  </head>

  <body>
    <?php require('nav.php');?>
    <?php require('header.php'); ?>
    <div class="bodyContent">
      <div class="container">
        <div class="row">
          <section class="col-md-9">
            <div class="mainContent">
              <?php echo $content ?>
            </div>
          </section>
          <?php require('aside.php'); ?>
        </div>
      </div>
    </div>
    <?php require('footer.php'); ?>
  </body>
  
</html>