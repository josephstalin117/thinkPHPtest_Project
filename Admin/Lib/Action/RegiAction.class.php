<?php

class RegiAction extends Action {

    public function regi() {
        $this->display();
    }

    public function addUser() {
        $dmUser = M('user');
        $dmContent=M('content');
        $Data['username'] = $_POST['username'];
        $Data['password'] = $_POST['password'];
        $name=$Data['username'];
        if (empty($Data['username'])) {
            $this->error("username error");
        } elseif (empty($Data['password'])) {
            $this->error("请填写密码");
        } else {
            if ($dmUser->where(array("username"=>$name))->find()) {
                $this->error("用户名已存在");
            } else {
                $dmUser->add($Data);
                $content['id']=$dmUser->where(array("username"=>$name))->getField('id');
                dump($content);
                $dmContent->add($content);
                $this->success("success", U('Index/index'));
            }
        }
    }

}

?>
