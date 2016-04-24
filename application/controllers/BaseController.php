<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/20
 * Time: 22:34
 */
class BaseController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $user = $this->user->getCurrentUser();
        if ($user != null) {
            $userInfo = $this->user_model->getUserById($user['id']);
            $user['avatar'] = $userInfo->avatar;
            $user['school_name'] = $userInfo->school_name;
            $user['college_name'] = $userInfo->college_name;
            $user['grade_name'] = $userInfo->grade_name;
            $message_count = $this->message_model->getUnreadMessageCount($userInfo->id);
            if (isset($message_count)) {
                $this->smarty3->assign('unread_count', $message_count->c);
            } else {
                $this->smarty3->assign('unread_count', 0);
            }
        } else {
            $this->smarty3->assign('unread_count', 0);
        }
        $this->smarty3->assign('BASE_URL', base_url());
        $this->smarty3->assign('user', $user);

    }
}