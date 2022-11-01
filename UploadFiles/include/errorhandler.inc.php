<?php 

 if (isset($_GET['errorChar'])){
    echo '<div class="alert alert-warning" role="alert">
        Συμπλήρωσε πρώτα την φόρμα δημοσίευσης!</div>';
 }

 if (isset($_GET['UpdatedPost'])){
    echo '<div class="alert alert-success" role="alert">
        <p>Επεξεργαστήκατε το άρθρο.</p>
        </div>';
 }
 if (isset($_GET['CreatePostSuccesful'])){
    echo '<div class="alert alert-success" role="alert">
        <p>Δημιουργήσατε νέα δημοσίευση!</p>
        </div>';
 }
 if (isset($_GET['deletedPost'])){
    echo '<div class="alert alert-success" role="alert">
        <p>Αφαιρέσατε μια δημοσίευση!</p>
        </div>';
 }

?>