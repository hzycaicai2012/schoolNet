<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/22
 * Time: 4:42
 */
class Article extends CI_Controller {
    public function _filter() {
        return array(
            '_postDataFilter' => array('addarticle', 'addcomment'),
        );
    }

    public function _postDataFilter() {
        if (($_SERVER['REQUEST_METHOD'] === 'POST')
            && (preg_match('/^application\/json/', $_SERVER['CONTENT_TYPE']) > 0)) {
            $str = file_get_contents('php://input');
            $_POST = json_decode($str, true);
        }
    }

    public function addArticle() {
        $user = $this->session->user;
        if (!isset($user) || $user['id'] <= 0) {
            echo json_encode(array('errno' => -1, 'msg' => '请先登录'));
        } else {
            $result = $this->article_model->addArticle($user, $_POST);
            echo json_encode($result);
        }
    }

    /**
     *
     */
    public function addComment() {
        $user = $this->session->user;
        if (!isset($user) || $user['id'] <= 0) {
            echo json_encode(array('errno' => -1, 'msg' => '请先登录'));
        } else {
            $result = $this->comment_model->addComment($user, $_POST);
            echo json_encode($result);
        }
    }

    /**
     *
     */
    public function getArticleItem() {
        $id = intval($_GET['id']);
        $article = $this->article_model->getArticleById($id);
        if (!isset($article)) {
            echo json_encode(array('errno' => -1));
        } else {
            $articleRow = array(
                'article' => $article,
                'comment' => array(),
            );
            $articleRow['comment'] = $this->comment_model->getCommentList($article->id);
            echo json_encode(array('errno' => 0, 'data' => $articleRow));
        }
    }

    public function getArticleList() {
        $type = intval($_GET['type']);
        $user = $this->session->user;
        $articleList = $this->article_model->getArticleList($type, $user);
        $result = array('errno' => 0, 'data' => array());
        foreach ($articleList as $item) {
            $articleRow = array(
                'article' => $item,
                'comment' => array(),
            );
            $articleRow['comment'] = $this->comment_model->getCommentList($item->id);
            $result['data'][] = $articleRow;
        }
        echo json_encode($result);
    }
}