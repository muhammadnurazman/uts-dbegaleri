<?php
 class album {
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
$sql = "SELECT * FROM album";
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
    $id = $_POST['id'];
    $name = $_POST['name'];
    $text = $_POST['text'];
    $photo_id = $_POST['photo_id'];


    $sql = " INSERT INTO album VALUES ( :id, :name, :text, :photo_id)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":text", $text);
    $stmt->bindParam(":photo_id", $photo);

    $stmt->execute();
    
}
public function edit($id)
{
    $sql = "SELECT * FROM album WHERE id =:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $row = $stmt->fetch();

    return $row;
}

public function update()
{
    $artist_id = $_POST['id'];
    $name = $_POST['name_id'];
    $text = $_POST['text'];
    $photo_id = $_POST['photo_id'];


    $sql = "UPDATE name SET id=:id, name=:name , text=:text, photo_id=:photo_id WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":text", $text);
    $stmt->bindParam(":photo_id", $photo_id);
    $stmt->execute();
    
}

public function hapus($id)
{
    $sql = "DELETE FROM album WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam("id", $id);
    $stmt->execute();

    
}
}