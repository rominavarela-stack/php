<?php
  if($_POST["url"])
  {
    $url = htmlspecialchars($_POST["url"]);

    try
    {
        $connection = &$_GLOBALS['connection'];

        $query = $connection->prepare("call urls.INSERT_SHORTCUT(?)");
        $query->bindParam(1, $url, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);

        $shortcut = $_GLOBALS['servicesUrl'] . '/' . $result->id;
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }

  }
?>
