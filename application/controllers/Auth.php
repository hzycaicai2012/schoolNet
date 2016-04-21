<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/20
 * Time: 23:33
 */
class Auth extends CI_Controller {
    public function login() {
        if (($_SERVER['REQUEST_METHOD'] === 'POST')
            && (preg_match('/^application\/json/', $_SERVER['CONTENT_TYPE']) > 0)) {
            $str = file_get_contents('php://input');
            $_POST = json_decode($str, true);
        }
        echo json_encode(array('errno' => 0, 'data' => $this->user->getCurrentUser()));
    }
}