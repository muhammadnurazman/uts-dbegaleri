<?php
        require_once "app/photos.php";

        $album = new photos();

        if (isset($_POST['btn_proses'])) {
            $album->input();
            header("location:index_photos.php");
        }
        
            if (isset($_POST['btn_update'])){
            $album->update();
            header("location:index_photos.php");
            }
            
        
        ?>