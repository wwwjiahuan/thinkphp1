<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	//$user=M('User');
    	//$arr=$user->select();
    	//dump($arr);
    	$this->assign('n','王佳欢');
		$this->display();
    }
    public function next(){
    	$this->display();
    }
}