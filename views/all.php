<?php require_once '../config.php' ?>
<?php require_once '../controllers/all.php' ?>

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
          <div class="col-md-12">
            <table class="table">
                <tbody>

                  <tr>
                    <th> your shortcut </th>
                    <th> original url </th>
                    <th> timestamp </th>
                  </tr>

                  <?php foreach($shortcuts as $shortcut): ?>
                        <tr>
                          <td>
                            <i class='icon'></i>
                            <span> <?= Config::servicesUrl . '/' . $shortcut->id ?> </span>
                          </td>
                          <td>
                            <span> <?= $shortcut->url ?> </span>
                          </td>
                          <td>
                            <span> <?= $shortcut->timestamp ?> </span>
                          </td>
                        </tr>
                  <?php endforeach ?>
                </tbody>
            </table>

          </div>
        </div>

        <!--js-->
        <span>
            <script type="text/javascript" src="../lib/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="../js/index.js"></script>
        </span>

    </body>
</html>
