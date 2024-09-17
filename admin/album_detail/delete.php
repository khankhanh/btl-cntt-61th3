<?php
require_once(__DIR__ . '/../../lib/autoload.php');
if(isset($_GET['album_id']) && isset($_GET['music_id']) )
{
    $album_id=$_GET['album_id'];
    $music_id=$_GET['music_id'];
    
    $sql= "DELETE FROM `album_detail` WHERE album_id = $album_id and  music_id = $music_id";
    $delete=$db->delete($sql);
    if($delete>0)
    {
        $_SESSION['error']="xóa thành công";
        header('Location: ./index.php');
    } else
        $_SESSION['error']="không thành công";
}
?>
