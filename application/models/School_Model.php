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
        $sql = "SELECT * FROM `school` WHERE 1 order by id desc";
        $query = $this->db->query($sql, array());
        return $query->result();
    }

    /**
     * @param $name
     * @return mixed
     */
    public function getSchoolByName($name) {
        $sql = "SELECT * FROM `school` WHERE name = ? order by id desc";
        $query = $this->db->query($sql, array($name));
        return $query->row();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getSchoolById($id) {
        $sql = "SELECT * FROM `school` WHERE id = ? order by id desc";
        $query = $this->db->query($sql, array($id));
        return $query->row();
    }

    /**
     * @param $data
     * @return bool
     */
    public function addNewSchool($data) {
        if (isset($data)) {
            $this->db->insert('school', $data);
            return true;
        }
        return false;
    }
}