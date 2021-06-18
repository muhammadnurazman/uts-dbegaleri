<link rel="stylesheet" href="assets/css/style.css">
<form action="proses_photos.php"  method="POST">
<h2>INPUT FILE</h2>
<a href="index_album.php">Album</a> |
 <a href="index_category.php">Category</a> |
 <a href="index_photos.php">Photos</a> |
 <a href="index_post.php">Post</a> |
 <a href="input_photos.php">Tambah Category</a> |
    <table>
    <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $row['id'];?>"></td>
        </tr>
        <tr>
            <td>TANGGAL</td>
            <td><input type="text" name="tgl"></td>
        </tr>
        <tr>
            <td>TITLE</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>TEXT</td>
            <td><input type="text" name="text"></td>
        </tr>
        <tr>
            <td>POST_ID</td>
            <td><input type="text" name="post_id"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_proses" value="SIMPAN"></td>
        </tr>
    </table>
    </form>