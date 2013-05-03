<?php

class HomeAction extends Action {

    public function home() {
        $UserArticle = M("Article");
        $UserName = M("user");
        $id = $_SESSION['uid'];
        $vn = $UserName->where(array("id" => $id))->find();
        $list = $UserArticle->where(array("id" => $id))->select();
        $this->assign('vn', $vn);
        $this->assign('list', $list);
        $this->display();
    }
    public function delete(){
        $userArticle=M("Article");
        $userContent=M("Content");
        $Aid=$_GET["Aid"];
        $userArticle->where(array("Aid"=>$Aid))->delete();
        $userContent->where(array("Aid"=>$Aid))->delete();
        $this->success("delete success",U('Home/home'));
    }
}
?>
