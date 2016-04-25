<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/22
 * Time: 8:57
 */
class Article_Model extends CI_Model {

    const SCHOOL_TYPE = 1;
    const COLLEGE_TYPE = 2;
    const GRADE_TYPE = 3;

    /**
     * Article_Model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $user
     * @param $data
     * @return array
     */
    public function addArticle($user, $data)
    {
        $userInfo = $this->user_model->getUserById($user['id']);
        if (!isset($userInfo)) {
            return array('errno' => -2, 'msg' => '找不到该用户');
        }
        if (intval($userInfo->is_valid) === 0) {
            return array('errno' => -3, 'msg' => '未通过审核前无法发送状态');
        }
        $type = intval($data['type']);
        $type = ($type >= 1 && $type <= 3) ? $type : 4;
        $insertData = array(
            'user_id' => $userInfo->id,
            'user_name' => $userInfo->nick,
            'type' => $type,
            'content' => $data['content'],
            'created' => date('Y-m-d H:i:s'),
        );
        switch ($type) {
            case 1;
                $insertData['school_id'] = $userInfo->school_id;
                break;
            case 2:
                $insertData['college_id'] = $userInfo->college_id;
                break;
            case 3:
                $this->message_model->notifyAll($userInfo->grade_id, $userInfo->nick, $data['content']);
                $insertData['grade_id'] = $userInfo->grade_id;
                break;
        }
        $this->db->insert('article', $insertData);
        return array('errno' => 0, 'msg' => '');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getArticleById($id) {
        $sql = "SELECT article.*, user.nick, user.avatar
            FROM article inner join user on article.user_id=user.id WHERE article.id = ?";
        $query = $this->db->query($sql, array(intval($id)));
        return $query->row();
    }

    public function getArticleByUser($user_id) {
        $sql = "SELECT article.*, user.nick, user.avatar
            FROM article inner join user on article.user_id=user.id WHERE article.user_id = ?";
        $query = $this->db->query($sql, array(intval($user_id)));
        return $query->result();
    }

    /**
     * @param $type
     * @param $user
     * @return array
     */
    public function  getArticleList($type, $user)
    {
        $result = array();
        if (!isset($user) || !isset($user['id'])) {
            return $result;
        }
        $userInfo = $this->user_model->getUserById($user['id']);
        if (!isset($userInfo)) {
            return $result;
        }
        $type = intval($type);
        $type = ($type >= 1 && $type <= 3) ? $type : 4;
        switch ($type) {
            case 1;
                $result = $this->getSchoolArticleList($userInfo);
                break;
            case 2:
                $result = $this->getCollegeArticleList($userInfo);
                break;
            case 3:
                $result = $this->getGradeArticleList($userInfo);
                break;
            case 4:
                $result = $this->getFriendArticleList($userInfo);
                break;
        }
        return $result;
    }

    /**
     * @param $user
     * @return mixed
     */
    public function getFriendArticleList($user) {
        $sql = "SELECT article.*, user.nick, user.avatar
            FROM article inner join user on article.user_id = user.id
            inner join friends on user.id=friends.friend_id
            where friends.user_id=? and article.type = 4 order by article.id desc";
        $query = $this->db->query($sql, array($user->id));
        return $query->result();
    }

    /**
     * @param $user
     * @return mixed
     */
    public function getSchoolArticleList($user) {
        $schoolId = intval($user->school_id);
        $sql = "SELECT article.*, user.nick, user.avatar FROM article inner join user
            on article.user_id=user.id WHERE article.type = ? and article.school_id = ?
            order by article.id desc";
        $query = $this->db->query($sql, array(self::SCHOOL_TYPE, $schoolId));
        return $query->result();
    }

    /**
     * @param $user
     * @return mixed
     */
    public function getCollegeArticleList($user) {
        $collegeId = intval($user->college_id);
        $sql = "SELECT article.*, user.nick, user.avatar FROM article inner join user
            on article.user_id=user.id WHERE article.type = ? and article.college_id = ?
            order by article.id desc";
        $query = $this->db->query($sql, array(self::COLLEGE_TYPE, $collegeId));
        return $query->result();
    }

    /**
     * @param $user
     * @return mixed
     */
    public function getGradeArticleList($user) {
        $gradeId = intval($user->grade_id);
        $sql = "SELECT article.*, user.nick, user.avatar FROM article inner join user
            on article.user_id=user.id WHERE article.type = ? and article.grade_id = ?
            order by article.id desc";
        $query = $this->db->query($sql, array(self::GRADE_TYPE, $gradeId));
        return $query->result();
    }
}