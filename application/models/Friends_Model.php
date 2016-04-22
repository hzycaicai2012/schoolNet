<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/22
 * Time: 11:42
 */
class Friends_Model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $userId
     * @return mixed
     */
    public function getFriendsList($userId) {
        $sql = "SELECT distinct friend_id FROM `friends` WHERE user_id = ?";
        $query = $this->db->query($sql, array(intval($userId)));
        return $query->result();
    }
}