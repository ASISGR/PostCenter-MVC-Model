<?php 
//sto class auto dimiourgw neo post

class PostsContr extends Posts{

    public function CreatePost($postContent){
        $this->setContent($postContent);
    }

    public function deletePost(){
        $this->permamentDeletePost();

     }
    public function OpenEditPostWindow(){
        $this->OpenEditWindow();

     }
     public function UpdatePostWindow(){
        $this->UpdatePost();

     }


}
?>