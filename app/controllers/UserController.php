<?php

require_once "../app/models/User.php";


class UserController{
    private $userModel;

    public function __construct(){
        $this -> userModel = new User();
    }

    public function index(){
        $users = $this -> userModel ->getAllUsers();
        require_once "../app/views/users/index.php";
    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $this->userModel->createUser($name, $email, $password);

            header("Location: /");
            exit();
        }
            require_once "../app/views/users/create.php";
    }

    public function delete($id){
        $this -> userModel -> deleteUser($id);
        header("Location: /");
    }

    public function edit($id) {
        $user = $this->userModel->getUserById($id);

        if (!$user) {
            echo "User not found!";
            return;
        }

        require_once "../app/views/users/edit.php";
    }

    public function update($id) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];

            $this->userModel->updateUser($id, $name, $email);
            header("Location: /");
            exit();
        }
    }




}