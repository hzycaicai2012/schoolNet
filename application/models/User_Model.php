<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/21
 * Time: 23:31
 */
class User_Model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserByName($name, $password) {
        $sql = "SELECT * FROM user WHERE nick = ? AND password = ?";
        $query = $this->db->query($sql, array($name, $password));
        return $query->row();
    }

    public function getUserByEmail($name, $password) {
        $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
        $query = $this->db->query($sql, array($name, $password));
        return $query->row();
    }
}