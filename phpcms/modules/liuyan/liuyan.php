<?php
defined('IN_PHPCMS') or exit('No permission resources.');
//导入admin模块下的classes文件夹下的admin.class.php中的admin类
pc_base::load_app_class('admin','admin',0);
class liuyan extends admin {
    function __construct() {
        parent::__construct();
        $this->db = pc_base::load_model('liuyan_model');
    }

	public function init() {
        $infos = $this->db->listinfo();
        $pages = $this->db->pages;

        include $this->admin_tpl("liuyan_list");
	}

	/*
	 *判断标题重复和验证 
	 */
	public function public_name() {

	}
	 
	//添加分类时，验证分类名是否已存在
	public function public_check_name() {

	}
	 
	//添加友情链接
 	public function add() {


	}
	
	/**
	 * 说明:异步更新排序 
	 * @param  $optionid
	 */
	public function listorder_up() {

	}
	
	//更新排序
 	public function listorder() {

	}
	
	//添加友情链接分类
 	public function add_type() {

	}
	
	/**
	 * 删除分类
	 */
	public function delete_type() {

	}
	
	//:分类管理
 	public function list_type() {

	}
 
	public function edit() {



	}
	
	/**
	 * 修改友情链接 分类
	 */
	public function edit_type() {


	}

	/**
	 * 删除友情链接  
	 * @param	intval	$sid	友情链接ID，递归删除
	 */
	public function delete() {

	}
	 

  	//批量审核申请 ...
 	public function check_register(){

	}
	
 	//单个审核申请
 	public function check(){

	}

    
	
	/**
	 * 说明:对字符串进行处理
	 * @param $string 待处理的字符串
	 * @param $isjs 是否生成JS代码
	 */
	function format_js($string, $isjs = 1){

	}

	
}
?>