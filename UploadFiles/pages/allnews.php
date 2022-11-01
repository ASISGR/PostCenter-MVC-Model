<?php
//error_reporting (E_ALL ^ E_NOTICE); // kleinei ta warnings

include_once '../classes/dbh.classes.php'; // sundesh sthn vash dedomenwn 
include_once '../classes/posts.classes.php';
include_once '../classes/postsview.classes.php';
include_once '../include/post.inc.php';
?>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Center Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <nav>
        <div class="logo">WebDevProject</div>
        <ul>
        <li><a href="/index.php">Ανάρτηση</a></li>
            <li><a href="/pages/allnews.php">Δημοσιεύσεις</a></li>
        </ul>
    </nav>

    <div class="container">
    <h1>Αναρτήσεις στο Post Center</h1>
    <?php 
            include_once '../include/errorhandler.inc.php';
            $OjbectViewPosts = new PostView();
            echo '<div class="alert alert-info" role="alert"><i class="fa fa-address-book" style="color:black"aria-hidden="true">
            </i> Συνολικές δημοσιεύσης: ('. $OjbectViewPosts->PostsCount() .')
            </div>';
            $OjbectViewPosts->showAllPosts();
        ?>
    </div>
</body>

</html>