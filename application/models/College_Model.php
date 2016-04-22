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
        $sql = "SELECT * FROM `college` WHERE 1";
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
}