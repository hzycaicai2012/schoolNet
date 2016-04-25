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
        $sql = "SELECT count(*) as c FROM `message` WHERE user_id=? and status=0 order by id desc";
        $query = $this->db->query($sql, array($user_id));
        return $query->row();
    }

    public function getAllMessage($user_id) {
        $sql = "SELECT * FROM `message` WHERE user_id=? order by id desc";
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

    /**
     * @param $gradeId
     * @param $user
     * @param $content
     */
    public function notifyAll($gradeId, $user, $content) {
        $sql = "SELECT * FROM `user` WHERE grade_id=?";
        $query = $this->db->query($sql, array($gradeId));
        $userList = $query->result();
        foreach ($userList as $item) {
            if (intval($item->id) === intval($user->id)) {
                continue;
            }
            $title = '您的同班同学 ' . $user->nick . '发布了新状态~';
            $content = $user->nick . '发布了新状态：' . $content . '。快去看看吧~';
            $data = array(
                'user_id' => $item->id,
                'title' => $title,
                'content' => $content,
                'created' => date('Y-m-d H;i:s'),
            );
            $this->db->insert('message', $data);
        }
    }

    public function insertCommentMessage($articleId, $userId, $comment) {
        $replyUser = $this->user_model->getUserById($userId);
        $article = $this->article_model->getArticleById(intval($articleId));
        if (!isset($replyUser)) {
            $replyUser = $this->user_model->getUserById($article->user_id);
        }
        $user = $this->session->user;
        $title = $user['nick'] . '回复了您';
        $content = $user['nick'] . '在状态“' . $article->content . '”中回复了您： ' . $comment;
        $data = array(
            'user_id' => $replyUser->id,
            'title' => $title,
            'content' => $content,
            'created' => date('Y-m-d H;i:s'),
        );
        $this->db->insert('message', $data);
    }
}