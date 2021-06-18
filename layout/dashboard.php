<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik UIN Sumatera Utara Medan</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    <main>
    <header>
        <img src="<?php echo ASSET; ?>image/galeri.jpg" alt="IMG" >   
    </header>
    <nav>
        <ul>
            <tr>
                <li>
                    <td><a href="index.php"class="active">DASHBOARD</a></td> 
                </li>
                <li>
                    <td><a href="index_album.php">ALBUM</a> </td>
                </li>
                <li>
                    <td><a href="index_category.php">CATEGORY</a></td> 
                </li>
                <li>
                    <td><a href="index_photos.php">PHOTOS</a></td> 
                </li>
                <li>
                    <td><a href="index_post.php">POST</a></td> 
                </li>
                <li>
                    <td><a href="login_logout.php ">LOGOUT</a> </td>
                </li>
            </tr>
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_dashboard.php ";
        }
        ?>
    </section>
    
    <footer>
        Copyright &copy; 2021 Muhammad Nurazman
    </footer>
      
   
    </main>
</body>
</html>