<?php
    defined('IN_PHPCMS') or exit('NO');
    //导入admin模块下的
    pc_base::load_app_class("admin","admin",0);

    class hello extends admin{
        function init(){
            pc_base::load_app_func("global","hello");
        }
        public function del(){

        }


    }