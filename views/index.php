<?php include '../init.php' ?>
<?php include '../controllers/index.php' ?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title>URLs - URL shortcuts</title>
        <!--css-->
        <link rel="stylesheet" type="text/css" href="../lib/bootstrap/dist/css/bootstrap.min.css">
    </head>

    <body>

        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-header">
              SHORT URLs
            </div>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#/create">Create</a></li>
              <li><a href="#/all">List all</a></li>
            </ul>
          </div>
        </nav>

        <div id="content" class="container-fluid">
          <form action='index.php' method='post' class='input-append'>
            <legend>
              <span>Your URL</span>
            </legend>
            <input type='text' name='url'
                class='span2' maxlength='2000'  autofocus/>
            <input type='submit' class='btn'
                value="GO!"/>
          </form>

          <?php if($_POST['url']): ?>
            <div class="input-append">
              <legend>
                  <i class='icon'></i>
                  <span>Your Shortcut</span>
              </legend>
              <span class="help-block">
                <?= $url ?>
              </span>
              <input class="span2" type="text"
                value="<?= $shortcut ?>" readonly/>
            </div>
          <?php endif ?>
          
        </div>

        <!--js-->
        <span>
            <script type="text/javascript" src="../lib/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="../js/index.js"></script>
        </span>

    </body>
</html>
