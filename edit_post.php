<?php

require_once "app/post.php";

$id = $_GET['id'];

$album = new post();
$row = $album->edit($id);


?>

<form action="proses_post.php"  method="POST">
<h2>INPUT KATEGORI</h2>

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
            <td>SLUG</td>
            <td><input type="text" name="slug"></td>
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
            <td>CAT_ID</td>
            <td><input type="text" name="cat_id"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
    </form>