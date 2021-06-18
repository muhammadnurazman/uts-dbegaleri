<link rel="stylesheet" href="assets/css/style.css">
<h2>SILAHKAN LIHAT POST SAYA </h2>
<?php
 require_once "app/post.php";

 $album = new post();
 $rows = $album->tampil();

 if  (isset($_GET['hapus'])){
     $id = $_GET['hapus'];
     $album->hapus($id);
     header("location:index_post.php");

 }

 ?>
 <a href="index_album.php">Album</a> |
 <a href="index_category.php">Category</a> |
 <a href="index_photos.php">Photos</a> |
 <a href="index_post.php">Post</a> |
 <br>
 <a href="input_post.php">Tambah KATEGORI</a> |

 

 <table border= "1" >
 <tr>
 <td> ID</td>
 <td>TANGGAL</td>
 <td>SLUG</td>
 <td>TITLE</td>
 <td>TEXT</td>
 <td>CAT_ID</td>
 <td>EDIT</td>
 <td>HAPUS</td>
 </tr>

 

 <?php foreach ($rows as $row) { ?>

 <tr>
 <td><?php echo $row['id']; ?></td>
 <td><?php echo $row['tgl']; ?></td>
 <td><?php echo $row['title']; ?></td>
 <td><?php echo $row['text']; ?></td>
 <td><?php echo $row['cat_id']; ?></td>
<td><a href="edit_post.php?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="index_post.php?hapus=<?php echo $row['id'];?>">Hapus</a></td>
 </tr>

 <?php } ?>
 </table>