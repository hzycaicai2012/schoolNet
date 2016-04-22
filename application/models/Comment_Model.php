<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/22
 * Time: 9:54
 */
class Comment_Model extends CI_Model {

    /**
     * Comment_Model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $articleId
     * @return mixed
     */
    public function getCommentList($articleId) {
        $articleId = intval($articleId);
        $sql = "SELECT * FROM article_comment WHERE article_id = ?";
        $query = $this->db->query($sql, array($articleId));
        return $query->result();
    }

    /**
     * @param $user
     * @param $data
     * @return array
     */
    public function addComment($user, $data) {
        $userInfo = $this->user_model->getUserById($user['id']);
        if (!isset($userInfo)) {
            return array('errno' => -2, 'msg' => '找不到该用户');
        }
        $articleId = intval($data['id']);
        $content = $data['content'];
        $article = $this->article_model->getArticleById($articleId);
        if (!isset($article)) {
            return array('errno' => -2, 'msg' => '找不到该状态');
        }

        $insertData = array(
            'user_id' => $userInfo->id,
            'user_name' => $userInfo->nick,
            'article_id' => $articleId,
            'content' => $content,
            'created' => date('Y-m-d H:i:s'),
        );
        $this->db->insert('article_comment', $insertData);
        return array('errno' => 0, 'msg' => '');
    }
}