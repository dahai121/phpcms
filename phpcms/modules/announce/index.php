<?php
//公告模块
defined('IN_PHPCMS') or exit('No permission resources.');
class index {
	function __construct() {
		$this->db = pc_base::load_model('announce_model'); //连接数据库  选择数据表
	}
	
	public function init() {
		
	}
	
	/**
	/**
	 * 展示公告
	 */
	public function show() {
		if(!isset($_GET['aid'])) {
			showmessage(L('illegal_operation')); //非法操作
		}

		$_GET['aid'] = intval($_GET['aid']);
		$where = '';
		$where .= "`aid`='".$_GET['aid']."'";
		$where .= " AND `passed`='1' AND (`endtime` >= '".date('Y-m-d')."' or `endtime`='0000-00-00')";
        $r = $this->db->get_one($where);
		if($r['aid']) {
			$this->db->update(array('hits'=>'+=1'), array('aid'=>$r['aid']));//每次浏览点击量加1
			$template = $r['show_template'] ? $r['show_template'] : 'show';
			extract($r);//将数组中的元素转化为变量

			$SEO = seo(get_siteid(), '', $title);

			include template('announce', $template, $r['style']);
		} else {
			showmessage(L('no_exists'));//此公告不存在或已经删除
		}
	}
}
?>