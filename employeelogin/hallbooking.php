<?php  

 include( 'sidebar.php');



?>







<div id="page-wrapper" >              

            <div id="page-inner">

			 <div class="row">

                    <div class="col-md-12">

                        <h1 class="page-header">

                         Hall Booking Details <small> </small>

                        </h1>

                    </div>

                </div> 

                 <!-- /. ROW  -->

				 

				 

            <div class="row">

                <div class="col-md-12">

                    <!-- Advanced Tables -->

                    <div class="panel panel-default">

                        <div class="panel-body">

                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>

                                        <tr>

                                            <th> Name</th>

                                            <th>Email</th>

                                            <th>phone_no</th>

                                            <th>why_1</th>

                                            <!-- <th>Message</th> -->

                                           

									       

                                             </tr>

                                    </thead>

                                    <tbody>

                                        

									<?php

                                    

										include ('db.php');

										$sql="select * from hallbook";

                                  

										$re = mysqli_query($con,$sql);

										while($row = mysqli_fetch_array($re))

										

                                        

                                        {

 											$id = $row['id'];

                                           

											if($id % 2 ==1 )

											{

												echo"<tr class='gradeC'>

													<td> ".$row['name']." </td>

                                                    <td>".$row['gmail']."</td>

													<td>".$row['phone_no']."</td>

													<td>".$row['why_1']."</td>

													

                                                    </tr>";



                                                    

											}

											else

											{

												echo"<tr class='gradeU'>

                                                <td> ".$row['name']." </td>

                                                <td>".$row['gmail']."</td>

                                                <td>".$row['phone_no']."</td>

                                                <td>".$row['why_1']."</td>

                                                
                                                </tr>";

											}

										

										}

										

									?>

                                     			

                                    </tbody>

                                </table>

                                <br><br>

         <button style="border: 2px solid black; background-color: #999; width: 80px; padding-bottom: 20px; height: 25px;  border-radius: 20px; margin-left: 500px; " onclick = "myfun()">Print</button>

         <Script >

            function myfun(){

                window.print();

            }



         </Script>

                            </div>

                            

                        </div>

                    </div>

                    <!--End Advanced Tables -->

                </div>

            </div>

                <!-- /. ROW  -->

            

                </div>

               

            </div>

        

               

    </div>

             <!-- /. PAGE INNER  -->

