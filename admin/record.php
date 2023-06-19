<?php
include 'sidebar.php';
?>

<div id="page-wrapper" >              
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                          Feedback Details<small> </small>
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
                <h3> <b>New Market Hotel </b> </h3>
                <br><br>
                    <thead>

                        <tr>
                        <th>ID</th>

                            <th> Name</th>

                            <th>Email</th>

                            <th>Address</th>

                            <th>Phone No</th>

                            <th>Amount</th>

                            <th>Tip</th>

                            <th>Gender</th>

                            <th>Time</th>

                            <th>Size</th>

                           

                            <th>Age</th>
                            <!-- <th>Location</th> -->
                            <th>Food Quality</th>
                            
                            <!-- <th>Print Record</th> -->
                            <!-- <th>Smoker</th> -->
<!-- <th>Print Record</th> -->
                             </tr>

                    </thead>

                    <tbody>

                        

                    <?php

                        // include ('db.php');

                        // $sql="select * from record";

                        // $re = mysqli_query($con,$sql);

                        // while($row = mysqli_fetch_array($re))
                        // $fetch_query = "SELECT record.id ,record.custname,record.email,record.address,record.phone_no,record.totalamount,record.tip,record.gender,record.time,record.tablesize,record.age,  absport.spname ,record.fdquality FROM record INNER JOIN absport ON record.location_1 = absport.id WHERE record.location_1 = 1";
                        // $result = $con->query($fetch_query);
                        // while($row = $result->fetch_assoc())


                        include ('db.php');

                        $sql="select * from record2";

                        $re = mysqli_query($con,$sql);

                        while($row = mysqli_fetch_array($re))

                        
                        {

                        

                            $id = $row['id'];

                            

                            if($id % 2 ==1 )

                            {

                                echo"<tr class='gradeC'>
                                <td> ".$row['id']." </td>
                                    <td> ".$row['custname']."</td>

                                    <td>".$row['email']."</td>

                                    <td>".$row['address']."</td>

                                    <td>".$row['phone_no']."</td>

                                    <td>".$row['totalamount']."</td>

                                    <td>".$row['tip']."</td>

                                    <td> ".$row['gender']."</td>

                                    <td>".$row['time']."</td>

                                    <td>".$row['tablesize']."</td>

                                    <td>".$row['age']."</td>
                                   
                               
                            
                                    <td> ".$row['fdquality']." </td>
                                    <td><a href=printnewmarket.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                                    <td><a href=feedbackrecorddelete.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
                                    </tr>";

                            }

                            else

                            {

                                echo"<tr class='gradeU'>

                                <td> ".$row['id']." </td>
                                <td> ".$row['custname']."</td>

                                <td>".$row['email']."</td>

                                <td>".$row['address']."</td>

                                <td>".$row['phone_no']."</td>

                                <td>".$row['totalamount']."</td>

                                <td>".$row['tip']."</td>

                                <td> ".$row['gender']."</td>

                                <td>".$row['time']."</td>

                                <td>".$row['tablesize']."</td>

                                <td>".$row['age']."</td>
                             

                                <td> ".$row['fdquality']." </td>
                                <td><a href=printnewmarket.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
                                <td><a href=feedbackrecorddelete.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
                                  
</tr>";

                            

                            }

                        

                        }

                        

                    ?>

                        

                    </tbody>

                </table>




           

                <form action="excel.php" method="post">
    <input type="submit" name="export_excel" class="btn btn-sucess" value="Export to Excel">
</form>
    

</tbody>

</table>
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
<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>

