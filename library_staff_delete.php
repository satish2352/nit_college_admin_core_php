<?php
include "config.php";
// $sel=mysqli_query($connect,"select * from photo where photo_id='".$_GET['photo_id']."'") or die(mysqli_error($connect));
//         while ($fetch=mysqli_fetch_array($sel))
//          {
//                    $photo=$fetch["photo"];                   
//          }

//           $photo="images/gallery/".$photo;
//           unlink($photo);

//           $delete1 = mysqli_query($connect,"Delete from photo where photo_id='".$_GET['photo_id']."'")or die(mysqli_error($connect));

$delete1 = mysqli_query($connect,"Update library_staff set staff_delete='1' where library_staff_id='".$_GET['library_staff_id']."'")or die(mysqli_error($connect));

$back="library_staff_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Library Staff delete');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Library Staff not delete');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

 ?>