<?php
  class User
  {
    function __construct($name, $username, $email)
    {
      $this->name = $name;
      $this->username = $username;
      $this->email = $email;
    }

    function addFriend()
    {
      echo $this->name . " added a friend";
      echo "<br>";
    }

    function postStatus()
    {
      echo $this->name . " posted a status";
    }
  }

  $user = new User("Ed Mhar", "mhrapura", "mhar.apura@gmail.com");
  $user->addFriend();
  $user->postStatus();
?>
