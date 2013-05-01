<?php

class ArtiAction extends Action {

    public function arti() {
        $UserName = M("user");
        $id = $_SESSION['uid'];
        $vn = $UserName->where(array("id" => $id))->find();
        $this->assign('vn', $vn);
        $this->display('newArti');
    }

    public function newArti() {
        $UserArticle = D('Article');
        $data['id'] = $_SESSION['uid'];
        $data['Title'] = $_POST['title'];
        $data['Date'] = date('Y-M-D');
        $newArti['Content'] = $_POST['content'];
        $data['Content'] = array(
            'Content' => $newArti['Content'],
        );
        $id = $_SESSION['uid'];
        if (empty($data['Title'])) {
            $this->error('title couldn\'t be empty');
        } elseif (empty($newArti['Content'])) {
            $this->error('content could\'s be empty');
        } else {
            $result = $UserArticle->relation(TRUE)->add($data);
            $this->success('success', U('Home/home'));
        }
    }

    public function showArti() {
        $dmArticle = M('Article');
        $Aid["Aid"] = $_GET["Aid"];
//        $Aid = $dmArticle->where('$map')->getField('Aid');
        if ($Aid) {
            $dmContent = M('Content');
            $userCont = $dmContent->where($Aid)->find();
            $userArti=$dmArticle->where($Aid)->find();
            $this->assign("title", $userArti["Title"]);
            $this->assign("content", $userCont['Content']);
            $this->display();
        } else {
            $this->error("hehe~");
        }
    }
    public function reviArti(){
        
    }
    

}

?>
