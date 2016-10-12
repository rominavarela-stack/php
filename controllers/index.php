<?php require_once '../config.php' ?>
<?php require_once '../dao/shortcut.php' ?>

<?php

  if($_POST["url"])
    try
    {
        $url = htmlspecialchars($_POST['url']);
        $result = ShortcutDAO::insertShortcut($url);
        $shortcut = Config::servicesUrl . '/' . $result -> id;
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
?>
