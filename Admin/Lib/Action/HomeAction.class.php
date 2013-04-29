<?php

class HomeAction extends Action {

    public function home() {
        $checkLogin = A('Login/checkLogin');
        $UserContent = M("content");
        $UserName=M("user");
        $id=$_SESSION['uid'];
        $vn=$UserName->where(array("id"=>$id))->find();
        $vo = $UserContent->where(array("id"=>$id))->find();
        $this->assign('vo',$vo);
        $this->assign('vn',$vn);
        $this->display(home);
    }
}

?>
