<?php  

 include( 'sidebar.php');

?>

        <!-- /. NAV SIDE  -->

       

        <div id="page-wrapper" >

            <div id="page-inner">

			 <div class="row">

                    <div class="col-md-12">

                        <h1 class="page-header">

                          EMPLOYEE ADMINISTRATOR<small> accounts </small>

                        </h1>

                    </div>

                </div> 

                 

                                 

            <?php

						include ('db.php');

						$sql = "SELECT * FROM `employee_login`";

						$re = mysqli_query($con,$sql);

				// 		var_dump();

				?>

                

            <div class="row">

                <div class="col-md-12">

                    <!-- Advanced Tables -->

                    <div class="panel panel-default">

                        <div class="panel-body">

                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>

                                        <tr>

                                            <th>User ID</th>

											<th>User name</th>

                                            <th>Password</th>

                                            

											<!-- <th>Update</th> -->

											<th>Remove</th>

                                            

                                        </tr>

                                    </thead>

                                    <tbody>

                                        

									<?php

										while($row = mysqli_fetch_array($re))

										{

										

											$id = $row['id'];

											$us = $row['usname'];

											$ps = $row['pass'];

											if($id % 2 ==0 )

											{

												echo"<tr class='gradeC'>

													<td>".$id."</td>

													<td>".$us."</td>

													<td>".$ps."</td>

													

										

                                                    <td><a href=employeeusersettingdel.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>

                                              

												</tr>";

											}

											else

											{

												echo"<tr class='gradeU'>

													<td>".$id."</td>

													<td>".$us."</td>

													<td>".$ps."</td>

													

												

                            <td><a href=employeeusersettingdel.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>

                            </tr>";

											

											}

										

										}

										

									?>

                                        

                                    </tbody>

                                </table>

                            </div>

                            

                        </div>

                    </div>

                    <!--End Advanced Tables -->

					<div class="panel-body">

                            <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal1">

															Add New Employee Id

													</button>

                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                <div class="modal-dialog">

                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                            <h4 class="modal-title" id="myModalLabel">Add the User name and Password</h4>

                                        </div>

										<form method="post">

                                        <div class="modal-body">

                                            <div class="form-group">

                                            <label>Add new User name</label>

                                            <input name="newus"  class="form-control" placeholder="Enter User name">

											</div>

										</div>

										<div class="modal-body">

                                            <div class="form-group">

                                            <label>New Password</label>

                                            <input name="newps"  class="form-control" placeholder="Enter Password">

											</div>

                                        </div>

										

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

											

                                           <input type="submit" name="in" value="Add" class="btn btn-primary">

										  </form>

										   

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

						<?php

						if(isset($_POST['in']))

						{

							$newus = $_POST['newus'];

							$newps = $_POST['newps'];

							

							$newsql ="Insert into employee_login (usname,pass) values ('$newus','$newps')";

							if(mysqli_query($con,$newsql))

							{

							echo' <script language="javascript" type="text/javascript"> alert("User name and password Added") </script>';

							

							

						

							}

						// header("Location: usersetting.php");

						}

						?>

						

					<div class="panel-body">

                            

                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                <div class="modal-dialog">

                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                            <h4 class="modal-title" id="myModalLabel">Change the User name and Password</h4>

                                        </div>

										<form method="post">

                                        <div class="modal-body">

                                            <div class="form-group">

                                            <label>Change User name</label>

                                            <input name="usname" value="<?php echo $us; ?>" class="form-control" placeholder="Enter User name">

											</div>

										</div>

										<div class="modal-body">

                                            <div class="form-group">

                                            <label>Change Password</label>

                                            <input name="pasd" value="<?php echo $ps; ?>" class="form-control" placeholder="Enter Password">

											</div>

                                        </div>

										

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

											

                                           <input type="submit" name="up" value="Update" class="btn btn-primary">

										  </form>

										   

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                </div>

            </div>

               

                <!-- /. ROW  -->

                <?php 

				if(isset($_POST['up']))

				{

					$usname = $_POST['usname'];

					$passwr = $_POST['pasd'];

					

					$upsql = "UPDATE `admin_login` SET `usname`='$usname',`pass`='$passwr' WHERE id = '$id'";

					if(mysqli_query($con,$upsql))

					{

					echo' <script language="javascript" type="text/javascript"> alert("User name and password update") </script>';

					

				

					}

				

				header("Location: usersetting.php");

				

				}

				ob_end_flush();

				

				

				

				

				?>

                                

                  

            

			 <!-- /. PAGE INNER  -->

            </div>

         <!-- /. PAGE WRAPPER  -->

        </div>

   <?php  

 include( 'footer.php');



?>		
	<!-- <td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>

Update 

</button></td> -->