<?php

class ArtiAction extends Action {

    public function arti() {
        $UserName = M("user");
        $id = $_SESSION['uid'];
        $vn = $UserName->where(array("id" => $id))->find();
        $this->assign('vn', $vn);
        $this->display('newArti');
    }
   // 写新文章
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
    //展示文章
    public function showArti() {
        $dmArticle = M('Article');
        $Aid = $_GET["Aid"];
        $this->assign("Aid",$Aid["Aid"]);
        if ($Aid) {
            $dmContent = M('Content');
            $userCont = $dmContent->where(array("Aid"=>$Aid))->find();
            $userArti=$dmArticle->where(array("Aid"=>$Aid))->find();
            $this->assign("title", $userArti["Title"]);
            $this->assign("content", $userCont['Content']);
            $this->assign("Aid",$Aid);
            $this->display();
        } else {
            $this->error("hehe~");
        }
    }
    //进入修改界面
    public function reviArti(){
        $dmArticle=M("Article");
        $dmContent=M("Content");
        $Aid=$_GET["Aid"];
        if ($Aid){
            $userTitle=$dmArticle->where(array("Aid"=>$Aid))->find();
            $userContent=$dmContent->where(array("Aid"=>$Aid))->find();
            $this->assign('title',$userTitle["Title"]);
            $this->assign('content',$userContent["Content"]);
            $this->assign("Aid",$Aid);
            $this->display();
        }
        
    }
    //修改文章上传
    public function recoArti(){
        $dmArticle=M("Article");
        $dmContent= M("Content");
        $Aid=$_GET["Aid"];
        $reco["title"]=$_POST["title"];
        $reco["content"]=$_POST["content"];
        if($reco["title"]){
            if($reco["content"]){
                $dmArticle->where(array("Aid"=>$Aid))->find();
                $dmContent->where(array("Aid"=>$Aid))->find();
                $dmArticle->Title=$reco["title"];
                $dmContent->Content=$reco["content"];
                $dmArticle->save();
                $dmContent->save();
                 $this->success("success", U('Home/home'));
            }  else {
                $this->error("content counldm\' be  empty");
            }
        }  else {
            $this->error("we need title");
        }
    }
    

}

?>
