<?php  

 include( 'sidebar.php');



?>

       

        <div id="page-wrapper">

            <div id="page-inner">

			 <div class="row">

             <div class="col-md-3">

                </div>

                    <div class="col-md-8">

                    <?php

include("db.php");

error_reporting(0);

$id=$_GET['id'];

$query = "DELETE FROM booking_bhopal_1_2 where id='$id'";

$data=mysqli_query($con,$query);

if($data)

{

    echo "<font color='green'> Record DELETED from Database";

}

else

{

    echo "<font color='red'>Failed to delete Record DELETED from Database";

}

?>

                    </div>

                </div> 

                 

                                 

            </div>

<?php  

 include( 'footer.php');



?>





