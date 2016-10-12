<?php require_once '../config.php' ?>

<?php
  class ShortcutDAO {

    /**
    * @method insertShortcut
    * @param url string
    * @return Shortcut Object { id , url }
    **/
    public static function insertShortcut($url) {
      $connection = new PDO( Config::connString, Config::connUser, Config::connPass);

      $query = $connection->prepare("call urls.INSERT_SHORTCUT(?)");
      $query->bindParam(1, $url, PDO::PARAM_STR);
      $query->execute();
      $result = $query->fetch(PDO::FETCH_OBJ);

      return $result;
    }

    /**
    * @method getShortcuts
    * @return Shortcut Object Array [] { id , url , timestamp }
    **/
    public static function getShortcuts() {
      $connection = new PDO( Config::connString, Config::connUser, Config::connPass);

      $query = $connection->prepare('SELECT * FROM urls.SHORTCUT');
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_OBJ);

      /*foreach($results as $res) {
        echo $res->id;
      }*/

      return $results;
    }

  }
?>
