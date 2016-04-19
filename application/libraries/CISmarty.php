<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/19
 * Time: 22:57
 */
if (!defined('BASEPATH')) EXIT('No direct script asscess allowed');

require_once(APPPATH . 'libraries/smarty3/Smarty.class.php');

class CISmarty extends Smarty
{
    protected $ci;

    public function __construct()
    {
        parent::__construct();

        $this->ci = &get_instance();
        // 加载smarty的配置文件
        $this->ci->load->config('smarty');

        // 获取相关的配置项
        $this->setTemplateDir($this->ci->config->item('template_dir'));
        $this->setCompileDir($this->ci->config->item('compile_dir'));
        $this->setConfigDir($this->ci->config->item('config_dir'));
        $this->setCacheDir($this->ci->config->item('cache_dir'));
        $this->caching = false;

        // 修改分隔符
        $this->left_delimiter = '{%';
        $this->right_delimiter = '%}';
        // 打开默认过滤
        $this->escape_html = true;
    }
}