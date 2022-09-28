<?php 

class SignupContr extends Signup {

     private $username;
     private $email;
     private $password; 
     private $password_check; 

     public function __construct($username, $email, $password, $password_check)
     {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->password_check = $password_check;

     }

     public function signupUser() {
        if($this->emptyInput() == false) {
            // echo empty input
            header('location: ../Home.php?error=emptyinput');
            exit();
        }
        if($this->invalidUsername() == false) {
            // echo invalid username
            header('location: ../Home.php?error=username');
            exit();
        }
        if($this->invalidEmail() == false) {
            // echo invalidEmail
            header('location: ../Home.php?error=Email');
            exit();
        }
        if($this->passwordCheck() == false) {
            // echo passwordCheck
            header('location: ../Home.php?error=passwordmatch');
            exit();
        }
        if($this->usernameTakenCheck() == false) {
            // echo username or email taken
            header('location: ../Home.php?error=usernameoremailtaken');
            exit();
        }
        
        $this->setUser($this->username, $this->email, $this->password);


        
     }


     private function emptyInput() {
        $result;
        if(empty($this->username) || empty($this->email) 
        || empty($this->password) || empty($this->password_check)){
            $result = false;

        }
        else {
            $result = true;
        }
        return $result;
     }

     private function invalidUsername() {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
     }

     private function invalidEmail() {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
     }

     private function passwordCheck() {
        $result;
        if($this->password !== $this->password_check) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
     }

     private function usernameTakenCheck() {
        $result;
        if (!$this->checkUser($this->username, $this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
     }

    }
