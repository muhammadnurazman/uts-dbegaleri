<?php
 class photos {
 private $db;
 public function __construct()
 {
 try {

 $this->db =
 new PDO("mysql:host=localhost;dbname=dbgaleri", "root", "");
 } catch (PDOException $e) {
 die ("Error " . $e->getMessage());
 }
 }
 
public function tampil()
{
$sql = "SELECT * FROM photos";
$stmt = $this->db->prepare($sql);
$stmt->execute();

$data = [];
while ($rows = $stmt->fetch()) {
$data[] = $rows;
}

 return $data;
 }

public function input()
{
    $_id = $_POST['id'];
    $_tgl = $_POST['tgl'];
    $_title = $_POST['title'];
    $_text = $_POST['text'];
    $_post = $_POST['post_id'];


    $sql = " INSERT INTO photos VALUES ( :id, :tgl, :title, :text, :post_id)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":tgl", $tgl);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":text", $text);
    $stmt->bindParam(":post_id", $post);
    $stmt->execute();
    
}
public function edit($id)
{
    $sql = "SELECT * FROM photos WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $row = $stmt->fetch();

    return $row;
}

public function update()
{
    $id = $_POST['id'];
    $name = $_POST['tgl'];
    $text = $_POST['title'];
    $text = $_POST['text'];
    $text = $_POST['post_id'];


    $sql = "UPDATE photos SET id=:id, tgl=:tgl, title=:title, text=:text, post_id=:post_id WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":tgl", $tgl);
    $stmt->bindParam(":title", $tile);
    $stmt->bindParam(":text", $text);
    $stmt->bindParam(":post_id", $post_id);

    $stmt->execute();
    
}

public function hapus($id)
{
    $sql = "DELETE FROM photos WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    
}
}