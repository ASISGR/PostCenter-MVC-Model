<?php
include_once '../classes/dbh.classes.php'; // sundesh sthn vash dedomenwn 
include_once '../classes/posts.classes.php';
include_once '../classes/postscontr.classes.php';

if(isset($_POST["SubmitPost"]))
{
    $ContentPost = $_POST["ContentPost"];

    $CreatingPost = new PostsContr();
    $CreatingPost->CreatePost($ContentPost);
}

if(isset($_POST["Btn-Delete"]))
{
    $deletePost = new PostsContr();
    $deletePost->deletePost();
}
if(isset($_POST["Btn-Update"]))
{
    $updatePost = new PostsContr();
    $updatePost->OpenEditPostWindow();
}
if(isset($_POST["UpdatePost"]))
{
    $updatePost = new PostsContr();
    $updatePost->UpdatePostWindow();
}

?>