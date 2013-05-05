<?php

class RegiAction extends Action {

    public function verify() {
        import("ORG.Util.Image");
        Image::buildImageVerify();
    }

    public function regi() {
        $this->display();
    }

    public function addUser() {
        $dmUser = M('user');
        $dmContent = M('content');
//        $dmArticle=M('article');
        $Data['username'] = $_POST['username'];
        $Data['password'] = md5($_POST['password']);
        $name = $Data['username'];
        if (empty($Data['username'])) {
            $this->error("username error");
        } elseif (empty($Data['password'])) {
            $this->error("请填写密码");
        } else {
            if ($dmUser->where(array("username" => $name))->find()) {
                $this->error("用户名已存在");
            } else {
                if (!$dmUser->autoCheckToken($_POST)) {
                    $this->error("please reflash html");
                } else {
                    if (md5($_POST['verify']) != $_SESSION['verify']) {
                        $this->error("verify error");
                    } else {
                        $dmUser->create();
                        $dmUser->add($Data);
                        $this->success("success", U('Index/index'));
                    }
                }
            }
        }
    }

}

?>
