<?php
class users{
    private $id;
    private $username;
    private $email;
    private $password;
    private $role;

    public function __construct($username, $email, $password, $role){
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
        $this->role=$role;
    }

   public function getUserId(){
    return $this->id;
   }
    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }

    public function setUsername($username){
        $this->username=$username;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function setRole($role){
        $this->role=$role;
    }

    public function __toString(){
        return "Username:".$this->username." Privilege:".$this->role;
    }
}
?>