<?php
include "config.php";

$delete1 = mysqli_query($connect,"update student_download set fld_delete='1' where student_id='".$_GET['student_id']."' ")or die(mysqli_error($connect));


$back="student_view.php";

  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Student Download Section Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
          {
            echo '<script type="text/javascript">';
            echo "alert('Student Download Section not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

?>