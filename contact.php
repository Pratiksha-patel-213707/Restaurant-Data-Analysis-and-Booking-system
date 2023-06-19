<?php
include 'header.php'
?>
<?php
include 'admin/db.php'
?>

<!-- 
<div class="bradcam_area breadcam_bg-green">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3 style="color: white;">CONTACT US</h3>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

            </div>
            <div style="margin-top: 150px; margin-bottom: 393px;" class="container-fluid padddd">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
                    <div class="map_section">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                    <form class="main_form" method="post">
                                        <div class="row">

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Name" type="text" name="first_name" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Email" type="text" name="email" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Phone" type="number" name="contact_datail" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Address" type="text" name="address1" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <textarea class="textarea" placeholder="Message" type="text" name="Message" required></textarea>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <button name="submit" type="submit" class="btn btn-warning">Submit</button>
                                            </div>
                                        </div>
                                        </form> 
                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>


        <?php
        
if(isset($_POST['submit']))
{
            $newUser="INSERT INTO contact( Fname, Email,cdetail	,	Addresss	 , Message_1) VALUES ('$_POST[first_name]','$_POST[email]','$_POST[contact_datail]','$_POST[address1]','$_POST[Message]')";
       if(mysql_query($con,$data)){
        echo "<script type='text/javascript'> alert('your record sent to database')</script>";
       }else{
        echo "<script type='text/javascript'> alert('error in code')</script>";
       }
        }

$msg="Your code is correct";

?>
</form> 
</div>








<?php
include 'footer.php'
?>


