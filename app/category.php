<?php
 class category {
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
$sql = "SELECT * FROM category";
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
    $_name = $_POST['name'];
    $_text = $_POST['text'];

    $sql = " INSERT INTO category VALUES ( :id, :name, :text)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":text", $text);
    $stmt->execute();
    
}
public function edit($id)
{
    $sql = "SELECT * FROM category WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $row = $stmt->fetch();

    return $row;
}

public function update()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $text = $_POST['text'];

    $sql = "UPDATE artist SET id=:id, name=:name WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":text", $text);
    $stmt->execute();
    
}

public function hapus($id)
{
    $sql = "DELETE FROM category WHERE id=:id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    
}
}