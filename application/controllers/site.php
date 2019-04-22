<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index(){
		// echo "hello world";
		// $this->load->view("view_home");
		$this->home();	//以下で定義した、home functionを読み込む
	}

	public function home(){
		$this->load->view("site_header");	//site_headerの読み込み
		$this->load->view("site_nav");		//site_navの読み込み
		$this->load->view("content_home");	//content_homeの読み込み。
		//コンテンツ部分はページ毎に共通ではないので、名称をsite_contentにはしていません。
		$this->load->view("site_footer");	//site_footerの読み込み
    }
    
    public function about(){	//アバウトページの読み込み
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_about");
		$this->load->view("site_footer");
	}
}