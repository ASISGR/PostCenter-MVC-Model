<?php 
//sto class auto emfanizw ta posts sthn selida ta opoia uparxoun mesa sto stable posts

class PostView extends Posts{
    
    public function showAllPosts(){
        $this->getPostContents();
    }

    public function PostsCount(){
        return $this->getAllRows();
    }
    
}
?>