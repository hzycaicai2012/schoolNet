<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/22
 * Time: 15:18
 */
class Grade_Model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getGradeList() {
        $sql = "SELECT * FROM `grades` WHERE 1";
        $query = $this->db->query($sql, array());
        return $query->result();
    }

    /**
     * @return array
     */
    public function getMergedGradeList() {
        $gradeList = $this->getGradeList();
        $result = array();
        foreach ($gradeList as $item) {
            if (!array_key_exists($item->school_id, $result)) {
                $result[$item->school_id] = array();
            }
            if (!array_key_exists($item->college_id, $result[$item->school_id])) {
                $result[$item->school_id][$item->college_id] = array();
            }
            $result[$item->school_id][$item->college_id][] = $item;
        }
        return $result;
    }

    /**
     * @param $collegeId
     * @return mixed
     */
    public function getGradeListByCollege($collegeId) {
        $sql = "SELECT * FROM `grades` WHERE college_id=? order by id desc";
        $query = $this->db->query($sql, array($collegeId));
        return $query->result();
    }

    /**
     * @param $collegeId
     * @param $name
     * @return mixed
     */
    public function getGradeByName($collegeId, $name) {
        $sql = "SELECT * FROM `grades` WHERE college_id = ? and name = ? order by id desc";
        $query = $this->db->query($sql, array($collegeId, $name));
        return $query->row();
    }

    /**
     * @param $data
     * @return bool
     */
    public function addNewGrade($data) {
        if (isset($data)) {
            $this->db->insert('grades', $data);
            return true;
        }
        return false;
    }
}