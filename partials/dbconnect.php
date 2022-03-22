<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "crud_by_pdo";
$conn = new PDO("mysql:host=$server;dbname=$database",$user,$password);
if(!$conn){
    echo '<script>
    alert("There are some technical issue");
</script>';
}
?>
