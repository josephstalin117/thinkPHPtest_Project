<?php

class ArtiAction extends Action {

    public function arti() {
        $UserContent = M("content");
        $UserName = M("user");
        $id = $_SESSION['uid'];
        $vn = $UserName->where(array("id" => $id))->find();
        $vo = $UserContent->where(array("id" => $id))->find();
        $this->assign('vo', $vo);
        $this->assign('vn', $vn);
        $this->display();
    }

    public function newArti() {
        $UserContent=M("content");
        $data['title']=$_POST['title'];
        $data['content']=$_POST['content'];
        $id=$_SESSION['uid'];
        if($UserContent->create()){
            $result=$UserContent->where(array("id"=>$id))->save();
            if($result){
                $this->success('success',U('Home/home'));
            }  else {
                $this->error('write error');
            }
        }
    }

}

?>
