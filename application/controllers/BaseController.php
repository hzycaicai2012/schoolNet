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
        $this->smarty3->assign('BASE_URL', base_url());
        $this->smarty3->assign('user', $user);

    }
}