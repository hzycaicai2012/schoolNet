<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/21
 * Time: 23:31
 */
class User_Model extends CI_Model {
    /**
     * User_Model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $user_id
     * @return mixed
     */
    public function getUserById($user_id) {
        $sql = "SELECT * FROM user WHERE id = ?";
        $query = $this->db->query($sql, array(intval($user_id)));
        return $query->row();
    }

    /**
     * @param $name
     * @param $password
     * @return mixed
     */
    public function getUserByName($name, $password) {
        $sql = "SELECT * FROM user WHERE nick = ? AND password = ?";
        $query = $this->db->query($sql, array($name, $password));
        return $query->row();
    }

    /**
     * @param $name
     * @param $password
     * @return mixed
     */
    public function getUserByEmail($name, $password) {
        $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
        $query = $this->db->query($sql, array($name, $password));
        return $query->row();
    }
}