<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/19
 * Time: 22:25
 */
class UserHelper extends CIHelper {
    public function auth($userName, $passWord) {
        return $userName . $passWord;
    }
}