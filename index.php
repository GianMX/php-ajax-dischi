<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <!-- CSS DIST FROM SCSS -->
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="logo">
          <img src="img/logo.png" alt="logo">
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <ul>
          <?php foreach ($database as $cd) { ?>
          <li>
            <img src="<?php echo $cd["poster"];?>" alt="copertina album">
            <h3><?php echo $cd["title"];?></h3>
            <p><?php echo $cd["author"];?></p>
            <p><?php echo $cd["year"];?></p>
          </li>
          <?php } ?>
        </ul>
      </div>
    </main>
  </body>
</html>
