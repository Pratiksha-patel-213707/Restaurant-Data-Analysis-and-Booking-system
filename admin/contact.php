<?php  

 include( 'sidebar.php');



?>







<div id="page-wrapper" >              

            <div id="page-inner">

			 <div class="row">

                    <div class="col-md-12">

                        <h1 class="page-header">

                           Contact Details<small> </small>

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

                                            <th>Phone No</th>

                                            <th>Address</th>

                                            <th>Email</th>

                                            <th>Message</th>

                                           

									       

                                             </tr>

                                    </thead>

                                    <tbody>

                                        

									<?php

                                    

										include ('db.php');

										$sql="select * from contact";

                                  

										$re = mysqli_query($con,$sql);

										while($row = mysqli_fetch_array($re))

										

                                        

                                        {

 											$id = $row['id'];

                                           

											if($id % 2 ==1 )

											{

												echo"<tr class='gradeC'>

													<td> ".$row['Fname']." </td>

                                                    <td>".$row['cdetail']."</td>

													<td>".$row['Addresss']."</td>

													<td>".$row['Email']."</td>

													<td>".$row['Message_1']."</td>

                                                    </tr>";



                                                    

											}

											else

											{

												echo"<tr class='gradeU'>

                                                <td> ".$row['Fname']." </td>

                                                <td>".$row['cdetail']."</td>

                                                <td>".$row['Addresss']."</td>

                                                <td>".$row['Email']."</td>

                                                <td>".$row['Message_1']."</td>

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

            </div>

<?php  

 include( 'footer.php');



?>