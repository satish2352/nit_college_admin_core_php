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

           $delete1 = mysqli_query($connect,"Update tbl_awards set fld_delete='1' where fld_gallery_id='".$_GET['fld_gallery_id']."'")or die(mysqli_error($connect));

$back="achievements_view.php";
  if($delete1)

          {
            echo '<script type="text/javascript">';
            echo "alert('Achievements And Awards Records Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Achievements And Awards Record Not Deleted');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

 ?>