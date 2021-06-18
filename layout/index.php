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
            <li>
                <a href="index.php"class="active">HOME</a> 
            </li>
            <li>
                <a href="index.php?page=login_form ">LOGIN</a> 
            </li>
          
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_index.php ";
        }
        ?>
    </section>
    
    <footer>
        Copyright &copy; 2021 Muhammad Nurazman
    </footer>
      
   
    </main>
</body>
</html>