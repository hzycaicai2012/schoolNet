<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/23
 * Time: 9:38
 */
class Friend_Model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $user_id
     * @param $friend_id
     * @return bool
     */
    public function isFriend($user_id, $friend_id) {
        $sql = "SELECT * FROM `friends` WHERE user_id = ? and friend_id = ?";
        $query = $this->db->query($sql, array(intval($user_id), intval($friend_id)));
        $result = $query->result();
        return (count($result) > 0);
    }

    /**
     * @param $userId
     */
    public function addOwnFriend($userId) {
        $sql = "SELECT * FROM `friends` WHERE user_id = ? and friend_id = ?";
        $query = $this->db->query($sql, array(intval($userId), intval($userId)));
        $friend = $query->row();
        if (!isset($friend)) {
            $data = array(
                'user_id' => $userId,
                'friend_id' => $userId,
                'created' => date('Y-m-d H;i:s'),
            );
            $this->db->insert('friends', $data);
        }
    }
}