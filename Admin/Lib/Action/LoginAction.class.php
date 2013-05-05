<?php

class LoginAction extends Action {

    //判断是否登录
    public function checkLogin() {
        if (!isset($_SESSION['username']) || $_SESSION['username'] == "" || !isset($_SESSION['password']) || $_SESSION['password']) {
            $this->redirect(U('Index/index'));
        }
        $User = M("user");
        $condition['username'] = $_SESSION['username'];
        $condition['password'] = md5($_SESSION['password']);
        $list = $User->where($condition)->select();
        if (count($list) == 0) {
            $this->clearLogin();
            $this->redirect(U('Index/index'));
        }
    }

    public function afterLogin() {
        $dmUser = M(user);
        if (empty($_POST['username'])) {
            $this->error('username empty');
        } elseif (empty($_POST['password'])) {
            $this->error('password empty');
        }
        $url = U('Home/home');
        $map['username'] = $_POST['username'];
        $map['password'] = md5($_POST['password']);
        $authInfo = $dmUser->where($map)->find();
        if (FALSE == $authInfo) {
            $this->error("error");
        } else {
            if (!$dmUser->autoCheckToken($_POST)) {
                $this->error("fuck!!");
            } else {
                $_SESSION["uid"] = $authInfo['id'];
                $_SESSION["username"] = $authInfo['username'];
                $_SESSION["password"] = $authInfo['password'];
                $this->assign('waitSecond', 2);
                $this->success('success', "$url");
            }
        }
    }

    public function loginOut() {
        $this->clearLogin();
        $this->redirect("Index/index");
    }

    public function clearLogin() {
        $_SESSION['uid'] = '';
        $_SESSION['username'] = '';
        $_SESSION['password'] = '';
    }

}

?>
