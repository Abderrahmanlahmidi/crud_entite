<?php

require_once "../app/config/database.php";


class User {
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    public function getAllUsers() {
        $stmt = $this->db->query("SELECT * FROM utilisateurs");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($name, $email, $password) {
        $stmt = $this->db->prepare("INSERT INTO utilisateurs (nom, email, password) VALUES (?, ?, ?)");
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        return $stmt->execute([$name, $email, $hashedPassword]);
    }


    public function deleteUser($id) {
        $stmt = $this->db->prepare("DELETE FROM utilisateurs WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getUserById($id) {
        $stmt = $this->db->prepare("SELECT * FROM utilisateurs WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function updateUser($id, $name, $email) {
        $stmt = $this->db->prepare("UPDATE utilisateurs SET nom = ?, email = ? WHERE id = ?");
        return $stmt->execute([$name, $email, $id]);
    }









}