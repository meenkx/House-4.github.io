<?php
class userClass
{
  /* User Login */
  public function userLogin($usernameEmail)
  {
    try{
      $db = getDB();
      $stmt = $db->prepare("SELECT Username FROM member WHERE (Username=:usernameEmail or Name=:usernameEmail) ");
      $stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;
      $stmt->execute();
      $count=$stmt->rowCount();
      $data=$stmt->fetch(PDO::FETCH_OBJ);
      $db = null;
      if($count)
      {
        $_SESSION['Username']=$data->Username; // Storing user session value
        return true;
      }
      else
      {
        return false;
      }
    }
    catch(PDOException $e) {
      echo '{"error":{"text":'. $e->getMessage() .'}}';
      return false;
    }

  }


  /* User Details */
  public function userDetails($Username)
  {
    try{
      $db = getDB();
      $stmt = $db->prepare("SELECT * FROM member WHERE Username=:Username");
      $stmt->bindParam("Username", $Username,PDO::PARAM_INT);
      $stmt->execute();
      $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
      return $data;
    }
    catch(PDOException $e) {
      echo '{"error":{"text":'. $e->getMessage() .'}}';
      return false;
    }
  }
}

?>
