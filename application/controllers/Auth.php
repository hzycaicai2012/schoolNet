<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/20
 * Time: 23:33
 */
class Auth extends CI_Controller {

    public function _filter() {
        return array(
            '_postFilter' => array('login', 'register'),
        );
    }

    public function _postFilter() {
        if (($_SERVER['REQUEST_METHOD'] === 'POST')
            && (preg_match('/^application\/json/', $_SERVER['CONTENT_TYPE']) > 0)) {
            $str = file_get_contents('php://input');
            $_POST = json_decode($str, true);
        }
    }

    public function login() {
        $result = array('errno' => 0, 'msg' => 'success');
        if (!isset($this->session->user) || $this->session->user['id'] <= 0) {
            $user = $this->user_model->authUserByName($_POST['name'], $_POST['password']);
            if (!isset($user)) {
                $user = $this->user_model->authUserByEmail($_POST['name'], $_POST['password']);
            }
            if (!isset($user)) {
                $result['errno'] = -2;
                $result['msg'] = '用户名或密码错误~';
            } else {
                $this->session->user = array(
                    'name' => $user->name,
                    'nick' => $user->nick,
                    'id' => $user->id,
                    'phone' => $user->phone,
                    'email' => $user->email,
                    'is_admin' => $user->is_admin,
                );
                $result['errno'] = 0;
                $result['msg'] = 'success';
            }
        }
        echo json_encode($result);
    }

    public function register() {
        $userInfo = $this->user_model->getUserByName($_POST['nick']);
        if (isset($userInfo)) {
            echo json_encode(array('errno' => -1, 'msg' => '昵称已存在'));
        } else {
            $userInfo = $this->user_model->getUserByEmail($_POST['email']);
            if (isset($userInfo)) {
                echo json_encode(array('errno' => -1, 'msg' => '邮箱已存在'));
            } else {
                $data = array(
                    'name' => $_POST['name'],
                    'nick' => $_POST['nick'],
                    'password' => $_POST['password'],
                    'school_id' => $_POST['school']['id'],
                    'college_id' => $_POST['college']['id'],
                    'grade_id' => $_POST['grade']['id'],
                    'phone' => $_POST['phone'],
                    'email' => $_POST['email'],
                    'created' => date('Y-m-d H:i:s'),
                );
                $res = $this->user_model->addNewUser($data);

                if ($res === true) {
                    echo json_encode(array('errno' => 0, 'msg' => ''));
                } else {
                    echo json_encode(array('errno' => -1, 'msg' => '注册失败'));
                }
            }
        }

    }
}