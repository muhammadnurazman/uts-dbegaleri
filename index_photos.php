<link rel="stylesheet" href="assets/css/style.css">
<h2>SILAHKAN LIHAT PHOTO SAYA </h2>
<?php
 require_once "app/photos.php";

 $album = new photos();
 $rows = $album->tampil();

 if  (isset($_GET['hapus'])){
     $id = $_GET['hapus'];
     $album->hapus($id);
     header("location:index_photos.php");

 }

 ?>
 <a href="index_album.php">Album</a> |
 <a href="index_category.php">Category</a> |
 <a href="index_photos.php">Photos</a> |
 <a href="index_post.php">Post</a> |
 <br>
 <a href="input_photos.php">Tambah KATEGORI</a> |

 

 <table border= "1" >
 <tr>
 <td> ID</td>
 <td>TANGGAL</td>
 <td>TITLE</td>
 <td>TEXT</td>
 <td>POST_ID</td>
 <td>EDIT</td>
 <td>HAPUS</td>
 </tr>


 <?php foreach ($rows as $row) { ?>

 <tr>
 <td><?php echo $row['id']; ?></td>
 <td><?php echo $row['tgl']; ?></td>
 <td><?php echo $row['title']; ?></td>
 <td><?php echo $row['text']; ?></td>
 <td><?php echo $row['post_id']; ?></td>
<td><a href="edit_photos.php?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="index_photos.php?hapus=<?php echo $row['id'];?>">Hapus</a></td>
 </tr>

 <?php } ?>
 </table>