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
        $sql = "SELECT article_comment.*, user.avatar, user.nick FROM article_comment
            inner join user on article_comment.user_id=user.id WHERE article_comment.article_id = ?";
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
        if (intval($userInfo->is_valid) === 0) {
            return array('errno' => -3, 'msg' => '未通过审核前无法评论');
        }
        $articleId = intval($data['id']);
        $content = $data['content'];
        $reply_user = intval($data['reply_user']);
        $article = $this->article_model->getArticleById($articleId);
        if (!isset($article)) {
            return array('errno' => -2, 'msg' => '找不到该状态');
        }

        $insertData = array(
            'user_id' => $userInfo->id,
            'user_name' => $userInfo->nick,
            'article_id' => $articleId,
            'content' => $content,
            'reply_user' => $reply_user,
            'created' => date('Y-m-d H:i:s'),
        );
        $this->db->insert('article_comment', $insertData);
        return array('errno' => 0, 'msg' => '');
    }
}