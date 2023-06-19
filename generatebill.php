<!-- <?php

include('db.php')

?> -->



<body>



<?php

include 'header.php';

?>



<!-- header_end  -->



<section style='margin: 102px 0px 115px 0px;'>

                 <div class="container">                

            <div class="row">

                

                <div class="col-md-5 col-sm-5">

                    <div class="panel panel-warning">

                        <div class="panel-heading">

                            <!-- PERSONAL INFORMATION -->

                        </div>

                        <div class="panel-body">

						<form name="form" method="post">

                   

                   <?php

                        date_default_timezone_set("Asia/kolkata");

                            $Format = 'Y-m-d';

                            $FDT = date($Format);

                    ?>

					

                    <div class="form-group">

                                            <label>Name</label>

                                            <input name="fname" class="form-control" placeholder="Enter First Name" required>

                                            

                               </div>

							   <!-- <div class="form-group">

                                            <label>Last Name</label>

                                            <input name="lname" class="form-control" placeholder="Enter Last Name " required>

                                            

                               </div> -->

							   <div class="form-group">

                                            <label>Email</label>

                                            <input name="email_1" type="email" class="form-control" placeholder="Enter Email Id" required>

                                            

                               </div>



                               
								<div class="form-group">

<label>Location You Visited</label>

<select name="location"  class="form-control"  required>

    <!-- <option value selected ></option> -->

    <option value="1">MP Nagar</option>
    <option value="2">New Market</option>
    <option value="3">Katara Hills</option>

</select>

</div>

							  

						

								<div class="form-group">

                                            <label>Address</label>

                                            <input name="address" type="text" class="form-control" placeholder="Enter Address" required>

                                           

								</div>

								<div class="form-group">

                                            <label>Phone Number</label>

                                            <input name="phone" type ="number" class="form-control" placeholder="Enter Phone No" required>

                                            

                               </div>



                               <div class="form-group">

                                        
<label>Location You Visited</label>

<select name="age_1"  class="form-control"  required>

<option value="Under-13">Under-13</option>
              <option value="13-17">13-17</option>
              <option value="18-22">18-22</option>
              <option value="23-27">23-27</option>
              <option value="28-32">28-32</option>
              <option value="33-37">33-37</option>
              <option value="38-42">38-42</option>
              <option value="above-42">above-42</option>
            

</select>
                                            

                               </div>

                     

							  
                            

							   

                        </div>

                        

                    </div>

                </div>

                
                

                <div class="col-md-5 col-sm-5">

                    <div class="panel panel-warning">

                        <div class="panel-heading">

                            <!-- PERSONAL INFORMATION -->

                        </div>

                        <div class="panel-body">

						<form name="form" method="post">

                   

                   <?php

                        date_default_timezone_set("Asia/kolkata");

                            $Format = 'Y-m-d';

                            $FDT = date($Format);

                    ?>

<div class="form-group">

<label>Total</label>

<input name="total_amount" type ="number" class="form-control" placeholder="Toatl Amount" required>

</div>


                    <div class="form-group">

                                            <label>Tip</label>

                                            <input  type="text" name="total_tip" class="form-control" placeholder="Enter Tip Amount"/>
        
                                            

                               </div>

							   <!-- <div class="form-group">

                                            <label>Last Name</label>

                                            <input name="lname" class="form-control" placeholder="Enter Last Name " required>

                                            

                               </div> -->

							   <div class="form-group">

                                          
<label>Gender</label>

<select name="sex"  class="form-control"  required>

<!-- <option value="under 13">Under 13</option> -->
              <option value="male">Male</option>
            <option value="female">Female</option>
            </select>                 

                               </div>



                               
								
							   <div class="form-group">

                                          
<label>Time</label>

<select name="time"  class="form-control"  required>

<!-- <option value="under 13">Under 13</option> -->
<option value="lunch">Lunch</option>
              <option value="dinner">Dinner</option>
              <!-- <option value="snacks">Snacks</option> -->
              </select>            

                               </div>

							  

                               <label>Size of Table</label>

<select name="size"  class="form-control"  required>

<!-- <option value="under 13">Under 13</option> -->
<option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">5</option>
              
              </select>            

                               </div>	

								<div class="form-group">

                                            <label>Enter day</label>
                                            <select name="day"  class="form-control"  required>
                                            <option value="sun">Sunday</option>
              <option value="mon">Monday</option>
              <option value="tue">Tuesday</option>
              <option value="wed">Wednesday</option>
              <option value="thu">Thrusday</option>
              <option value="fri">Friday</option>
              <option value="sat">Saturday</option>
              </select>  
								</div>



                                <div class="form-group">

                                          
<label>Food quality</label>

<select name="fdq"  class="form-control"  required>

<!-- <option value="under 13">Under 13</option> -->
              <option value="excellent">excellent</option>
            <option value="Good">Good</option>
            <option value="Average">Average</option>
            <option value="Poor">Poor</option>
            </select>                 

                               </div>                               
<!--                             
                                <div class="form-group">

<label>Smoker</label>
<select name="smoker"  class="form-control"  required>
<option value="no">No</option>
<option value="yes">Yes</option>
</select>  
</div> -->

							   

                        </div>

                        

                    </div>

                </div>

                

                

            
               		<input  style="margin-left: 300px;"type="submit" name="submit" class="btn btn-warning">





             



<!-- Code For send mail to admin -->



















						<?php

							
if(isset($_POST['submit']))

{			$newUser="INSERT INTO record( custname, email, address, phone_no, totalamount, tip, gender, time, tablesize,age,day_1,location_1,fdquality) VALUES ('$_POST[fname]','$_POST[email_1]','$_POST[address]','$_POST[phone]','$_POST[total_amount]','$_POST[total_tip]','$_POST[sex]','$_POST[time]','$_POST[size]','$_POST[age_1]','$_POST[day]','$_POST[location]','$_POST[fdq]')";

      if (mysqli_query($con,$newUser))

      {

        echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";

        

      }

      else

      {

        echo "<script type='text/javascript'> alert('Error adding user in database')</script>";

        

      }

    }
?>
						</form>

							

                    </div>

                </div>

            </div>

           

                

                </div>

                

                

                </section>

                       

          

    <!-- header_start  -->



    <?php

include '../footer.php';

?>



<!-- header_end  -->

<script>

    

    $(".output_date").on("click",() => {

       var input_val = $(".input_date").val();

       var output_date = document.getElementsByClassName("output_date")[0];

       output_date.min = input_val;

    })

    

   </script>			

   

</body>

</html>

