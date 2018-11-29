<?php
class Dao {
  private $host = "us-cdbr-iron-east-01.cleardb.net";
  private $db = "heroku_a20041082db6dbf";
  private $user = "b1e57b46faa592";
  private $pass = "5802653c";
  private $log;

  public function getConnection () {
    $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
        $this->pass);
    return $conn;
  }
  //not finished
  public function saveComment ($username, $comment) {
  $conn = $this->getConnection();
  $saveQuery =
      "INSERT INTO ucomment
      (user_username, comment_body)
      VALUES
      (:uname, :usercomment)";
  $q = $conn->prepare($saveQuery);
  $q->bindParam(":uname", $username);
  $q->bindParam(":usercomment", $comment);
  $q->execute();
}

public function addUser ($email, $username, $password) {
  $conn = $this->getConnection();
  $saveQuery =
      "INSERT INTO user
      (email, username, password)
      VALUES
      (:email, :username, :password)";
  $q = $conn->prepare($saveQuery);
  $q->bindParam(":email", $email);
  $q->bindParam(":username", $username);
  $q->bindParam(":password", $password);
  $q->execute();
}
//get all comments
// public function getComments()
// 	{
// 		$conn = $this->getConnection();
// 		$stmt = $conn->prepare("SELECT user_username, comment_body, comment_date FROM comment order by comment_date desc");
// 		$stmt->execute();
// 		return $stmt->fetch();
// 	}

public function getComments()
	{
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT * FROM ucomment order by comment_date desc");
		$stmt->execute();
		return $stmt->fetchAll();
	}

public function getUser($username)
	{
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT * FROM user WHERE username = :uname");
		$stmt->bindParam(":uname", $username);
		$stmt->execute();
		return $stmt->fetch();
	}
  public function getEmail($username)
  	{
  		$conn = $this->getConnection();
  		$stmt = $conn->prepare("SELECT email FROM user WHERE username = :uname");
  		$stmt->bindParam(":uname", $username);
  		$stmt->execute();
  		return $stmt->fetch();
  	}

    public function getPassword($username)
      {
        $conn = $this->getConnection();
        $stmt = $conn->prepare("SELECT password FROM user WHERE username = :uname");
        $stmt->bindParam(":uname", $username);
        $stmt->execute();
        return $stmt->fetch();
      }


  public function checkEmail($email)
  	{
      $conn = $this->getConnection();
      $query = "SELECT * FROM user WHERE email = :uemail";
      $q = $conn->prepare($query);
      $q->bindParam(":uemail",$email);
      $q->execute();
      if($q->fetch()){
        return true;
      }else{
        return false;
      }
    }

    public function checkUsername($username)
      {
        $conn = $this->getConnection();
        $query = "SELECT * FROM user WHERE username = :uname";
        $q = $conn->prepare($query);
        $q->bindParam(":uname",$username);
        $q->execute();
        if($q->fetch()){
          return true;
        }else{
          return false;
        }
      }

  public function checkExists($username, $password){
    $conn = $this->getConnection();
    $query = "SELECT * FROM user WHERE username = :uname && password = :pword";
    $q = $conn->prepare($query);
    $q->bindParam(":uname",$username);
    $q->bindParam(":pword",$password);
    $q->execute();
    if($q->fetch()){
      return true;
    }else{
      return false;
    }
  }

} // end Dao
