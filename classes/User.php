<?php

class User
{
    public $id;
    public $name;
    public $password;

    public static function authenticateUser($conn, $email, $password)
    {
        $sql = 'SELECT * FROM user WHERE email = :email ';

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':email', $email, PDO::PARAM_STR);

        $stmt->execute();

        if ($user = $stmt->fetch()) {
            return password_verify($password, $user['password']);
        }
    }

    public static function getAllUsers($conn, $column = "*")
    {
        $sql = "SELECT $column FROM `user`";

        $stmt = $conn->prepare($sql);

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }


    public static function checkUserEmail($conn, $email)
    {
        $sql = 'SELECT * 
                FROM user
                WHERE email = :email ';

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':email', $email, PDO::PARAM_STR);

        $stmt->execute();

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function getUser($conn, $id, $column = "*")
    {
        $sql = "SELECT $column FROM user WHERE id = $id ";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}
