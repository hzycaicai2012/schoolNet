<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/22
 * Time: 15:18
 */
class College_Model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getCollegeList() {
        $sql = "SELECT * FROM `college` WHERE 1 order by id desc";
        $query = $this->db->query($sql, array());
        return $query->result();
    }

    /**
     * @return array
     */
    public function getMergedCollegeList() {
        $collegeList = $this->getCollegeList();
        $result = array();
        foreach ($collegeList as $item) {
            if (!array_key_exists($item->school_id, $result)) {
                $result[$item->school_id] = array();
            }
            $result[$item->school_id][] = $item;
        }
        return $result;
    }

    /**
     * @param $schoolId
     * @param $name
     * @return mixed
     */
    public function getCollegeByName($schoolId, $name) {
        $sql = "SELECT * FROM `college` WHERE school_id = ? and name = ? order by id desc";
        $query = $this->db->query($sql, array($schoolId, $name));
        return $query->row();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getCollegeById($id) {
        $sql = "SELECT * FROM `college` WHERE id = ? order by id desc";
        $query = $this->db->query($sql, array($id));
        return $query->row();
    }

    /**
     * @param $schoolId
     * @return mixed
     */
    public function getCollegeListBySchool($schoolId) {
        $sql = "SELECT * FROM `college` WHERE school_id=? order by id desc";
        $query = $this->db->query($sql, array($schoolId));
        return $query->result();
    }

    /**
     * @param $data
     * @return bool
     */
    public function addNewCollege($data) {
        if (isset($data)) {
            $this->db->insert('college', $data);
            return true;
        }
        return false;
    }
}