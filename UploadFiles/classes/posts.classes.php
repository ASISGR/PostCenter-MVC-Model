<?php 
include_once 'dbh.classes.php'; // sundesh sthn vash dedomenwn 

//sto class auto pairnw users sthn vash kai vazw users apo thn vash 
class Posts extends Dbh{
    
    protected function setContent($postContent){
            //Sql protection form for sql ijection
            //sql command
            if(strlen($postContent) <= 0) // If comment contains <= 0 characters then
            {
                header('location: /index.php?errorChar');
                exit(); // Close the programm.
            }
    
            $sql = "INSERT INTO posts (POST) VALUES (?)"; // (?) means the unknown information until biding the information
            //preparing the command
            $stmt = $this->connection()->prepare($sql);
            //binding sql command with the information 
            $stmt->bindParam("s", $postContent);
            //executing the information 
            $stmt->execute([$postContent]);
            //close the connection after the execute
            $this->connection(NULL);
            header('location: ../index.php?CreatePostSuccesful');

    }

    protected function getPostContents(){
        $sql = "SELECT * FROM posts" ;
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute();
        $resultFetchAll = $stmt->fetchAll();
        foreach( $resultFetchAll as $row ) {
            echo '<form class="container-news" method="POST" action="../include/post.inc.php">
                <div class="extensions-buttons" >
                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
                <button class="btn" name="Btn-Update" formaction="allnews.php?ID='.$row['ID'].'" ><i class="fa fa-cog" aria-hidden="true"></i></button>
                <button class="btn" name="Btn-Delete" formaction="allnews.php?ID='.$row['ID'].'" ><i class="fa fa-trash"></i></button>
                </div>
                <p><i class="fa fa-envelope-open-o" aria-hidden="true"> </i> ' .$row['POST']. '</p>
                </form>'
                ;
        }
    }

    protected function permamentDeletePost(){
        $GetID = $_GET['ID'];
        $sql = "DELETE FROM posts WHERE ID = '".$GetID."'";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute();
        header('location: /pages/allnews.php?deletedPost');

    }
    protected function OpenEditWindow(){
        echo '<div class="container-update">
        <h1>Επεξεργασία άρθρου Post Center</h1>
          <form method="POST" action="">
            <div class="container-input">
                <input class="inputtext" name="Text-Update" type="text" placeholder="Νέο κείμενο..">
            </div>
            <div class="container-input">
                <button type="submit" name="UpdatePost" class="btn btn-primary">Επεξεργασία</button>
                <button type="submit" name="close" class="btn btn-primary">Ακυρο</button>
            </div>
        </form>
        </div>';
    }
    protected function UpdatePost(){
        $NewContentPost = $_POST['Text-Update'];
        $GetID = $_GET['ID'];
        $sql = "UPDATE posts set POST = '$NewContentPost' WHERE ID = $GetID "; 

     if(strlen($NewContentPost) <= 0) // If comment contains <= 0 characters then
        {
            header('location: /pages/allnews.php?errorChar');
            exit(); // Close the programm.
        }

        $stmt = $this->connection()->prepare($sql);
        $stmt->bindParam("s", $NewContentPost);
        $stmt->execute([$NewContentPost]);

        header('location: /pages/allnews.php?UpdatedPost');

        echo '<style>.container-update { display:none;}</style>'; 
    }
 
    protected function getAllRows(){
        $sql = "SELECT * FROM posts";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute();
        $CountRows = $stmt->rowCount();
        return $CountRows;
    }
}
