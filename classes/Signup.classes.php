<?php

class Signup extends Dbh {

    protected function setUser($username, $email, $password) {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_username, users_email, users_password) VALUES (?, ?, ?);'); // statement class (stmt)

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($username, $email, $hashedPassword))) {
            $stmt = null;
            header('location: ../Home.php?error=stmtfailed');
            exit(); 
        }

        $stmt = null;
    }



    protected function checkUser($username, $email) {
        $stmt = $this->connect()->prepare('SELECT users_username FROM users WHERE users_username = ? or users_email = ?;'); // statement class (stmt)

        if(!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header('location: ../Home.php?error=stmtfailed');
            exit(); 
        }

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

}