<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/19
 * Time: 22:29
 */
class CIHelper {
    /**
     * 实例生成
     * @param string $className
     * @return 返回当前Resource实例
     */
    public static function instance($className=__CLASS__) {
        $instance = new $className;
        return $instance;
    }
}