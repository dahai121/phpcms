<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class test extends admin{
    function init(){
        echo "11";
    }
}