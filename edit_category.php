<?php

require_once "app/category.php";

$id = $_GET['id'];

$album = new category();
$row = $album->edit($id);
?>

<form action="proses_category.php"  method="POST">
<h2>INPUT KATEGORI</h2>

    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $row['id'];?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>TEXT</td>
            <td><input type="text" name="text"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
    </form>