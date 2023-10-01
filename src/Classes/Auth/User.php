<?php

namespace src\classes\Auth;


use src\classes\Database\Database;


class User extends Database
{
    public function registration($formData)
    {
        $name = $formData['name'];
        $email = $formData['email'];
        $password = md5($formData['password']);
        $password = $password;
        $role = $formData['role'];

        $result = $this->connection->query("INSERT INTO user (name,email,password,role) VALUES('$name','$email','$password','$role')");

        if ($result) {
            echo '<div class="bg-green-100 border border-black-400 text-black-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Welcome BanguBank!</strong>
            <span class="block sm:inline">Please keep safe your email and password.</span>
          </div>';
        } else {
            echo "Not";
        }
    }

    public function login($formData)
    {
        $email = $formData['email'];
        $password = md5($formData['password']);
        $password = $password;
        $result = $this->connection->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            session_start();
            $_SESSION['email'] = $data['email'];
            $_SESSION['role'] = $data['role'];
            //$_SESSION['user'] = $data['name'];
            //$_SESSION['email'] = $formData['email'];
            //$_SESSION['name'] = $formData['name'];
            header("location:customer/dashboard.php");
            // echo '<div class="alert alert-danger" role="alert">
            //         Data OK
            //         </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    Sorry! Invalid Information
                    </div>';
        }
    }
}
