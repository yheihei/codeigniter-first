<?php
// class Sample extends MY_Controller {
class Sample extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('smarty');
        $this->smarty->template_dir = APPPATH . 'views/templates';
        $this->smarty->compile_dir  = APPPATH . 'views/templates_c';
    }

    public function my_action()
    {
        $this->smarty->assign('data', 'any data'); 
        $this->smarty->display('my_action.tpl'); 
    }
}