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
        $sql = "SELECT user.*, school.name as school_name,
            college.name as college_name, grades.name as grade_name
            FROM user inner join school on user.school_id = school.id
            inner join college on user.college_id=college.id
            inner join grades on user.grade_id = grades.id WHERE user.id = ?";
        $query = $this->db->query($sql, array(intval($user_id)));
        return $query->row();
    }

    /**
     * @param $name
     * @param $password
     * @return mixed
     */
    public function authUserByName($name, $password) {
        $sql = "SELECT * FROM user WHERE nick = ? AND password = ?";
        $query = $this->db->query($sql, array($name, $password));
        return $query->row();
    }

    /**
     * @param $name
     * @param $password
     * @return mixed
     */
    public function authUserByEmail($name, $password) {
        $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
        $query = $this->db->query($sql, array($name, $password));
        return $query->row();
    }

    /**
     * @param $nick
     * @return mixed
     */
    public function getUserByName($nick) {
        $sql = "SELECT * FROM user WHERE nick = ?";
        $query = $this->db->query($sql, array($nick));
        return $query->row();
    }

    /**
     * @param $email
     * @return mixed
     */
    public function getUserByEmail($email) {
        $sql = "SELECT * FROM user WHERE email = ?";
        $query = $this->db->query($sql, array($email));
        return $query->row();
    }

    public function addNewUser($data) {
        if (isset($data)) {
            $num = rand(1, 12);
            $avatar = 'static/img/avatar/';
            if ($num > 6) {
                $avatar .= 'girl';
                $num -= 6;
            } else {
                $avatar .= 'boy';
            }
            $avatar .= ($num . '.jpg');
            $data['avatar'] = $avatar;
            $this->db->insert('user', $data);
            return true;
        }
        return false;
    }

    /**
     * @param int $school_id
     * @param int $college_id
     * @param int $grade_id
     * @param string $user_name
     * @return mixed
     */
    public function getUserList($school_id=-1, $college_id=-1, $grade_id=-1, $user_name = '') {
        $sql = "SELECT user.*, school.name school_name,
            college.name college_name, grades.name grade_name FROM user
            inner join school on user.school_id=school.id
            inner join college on user.college_id=college.id
            inner join grades on user.grade_id=grades.id where 1 ";
        $params = array();
        if ($school_id > 0) {
            $sql .= ' and school_id=?';
            $params[] = intval($school_id);
        }
        if ($college_id > 0) {
            $sql .= ' and college_id=?';
            $params[] = intval($college_id);
        }
        if ($grade_id > 0) {
            $sql .= ' and grade_id=? ';
            $params[] = $grade_id;
        }
        if ($user_name !== '') {
            $sql .= 'and nick like "%' . mysqli_escape_string($user_name) . '%"';
        }
        $sql .= ' order by user.id desc';
        $query = $this->db->query($sql, $params);
        return $query->result();
    }
}