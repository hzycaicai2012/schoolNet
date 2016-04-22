<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/22
 * Time: 15:18
 */
class School_Model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getSchoolList() {
        $sql = "SELECT * FROM `school` WHERE 1";
        $query = $this->db->query($sql, array());
        return $query->result();
    }
}