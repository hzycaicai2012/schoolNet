<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/23
 * Time: 22:59
 */
class Message_Model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function getUnreadMessageCount($user_id) {
        $sql = "SELECT count(*) as c FROM `message` WHERE user_id=? and status=0";
        $query = $this->db->query($sql, array($user_id));
        return $query->row();
    }

    public function getAllMessage($user_id) {
        $sql = "SELECT * FROM `message` WHERE user_id=?";
        $query = $this->db->query($sql, array($user_id));
        return $query->result();
    }

    public function updateMessageStatus($id, $status) {
        $data = array(
            'status' => $status,
        );
        $this->db->where('id', $id);
        $this->db->update('message', $data);
    }
}