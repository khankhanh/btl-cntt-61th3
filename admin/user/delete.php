<?php
require_once(__DIR__ . '/../../lib/autoload.php');
if(isset($_GET['username']))
{
    $username=$_GET['username'];
    
    $sql= "DELETE FROM user WHERE username = '$username';";
    $delete=$db->delete($sql);
    if($delete>0)
    {
        $_SESSION['error']="xóa thành công";
        header('Location: ./index.php');
    } else
        $_SESSION['error']="không thành công";
}
?>
