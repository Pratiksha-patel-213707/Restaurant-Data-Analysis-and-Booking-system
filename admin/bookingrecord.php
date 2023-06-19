<?php
include 'sidebar.php';
?>

<div id="page-wrapper" >              
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                         BOOKING RECORD <small> </small>
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
<br><br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <h2> <b>New Market Hotel </b> </h2>

                                <br><br>
                                <h4><b>Table Size 1 data</b></h4>
                                
                                    <thead>
                                        <tr>
                                            
                                            <th>ID</th>
                                            <th>Name</th>
                                             <th>Phone</th>
                                            <th>email</th>
                                            <th>Date</th>
                                           
                                            <th>Timeslot</th>
                                             <th>BHOPAL_1</th>
                                             <th>Table Size</th>
                                            <th></th>
                                             <!--                                            
                                            <th>Amount Paid</th>
                                            <th>Remaining Amount</th>  -->
                                            
                                            <!-- <th>Delete</th> -->
                                           
									       
                                             </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
                                    
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_1.id ,booking_bhopal_1_1.name,booking_bhopal_1_1.phone,booking_bhopal_1_1.email,booking_bhopal_1_1.date,booking_bhopal_1_1.timeslot,  absport.spname,booking_bhopal_1_1.table_size FROM booking_bhopal_1_1 INNER JOIN absport ON booking_bhopal_1_1.location = absport.id WHERE booking_bhopal_1_1.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
    $id = $row['id'];
                                           
    if($id % 2 ==1 )
    {
        echo"<tr class='gradeC'>
        <td> ".$row['id']." </td>
        <td> ".$row['name']." </td>
        <td> ".$row['phone']." </td>
        <td> ".$row['email']." </td>
        <td> ".$row['date']." </td>

        <td> ".$row['timeslot']." </td>
        <td> ".$row['spname']." </td>
        <td> ".$row['table_size']." </td>
       
        <td><a href=table1deleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
        </tr>";
            }
    else
    {
        echo"<tr class='gradeC'>
        <td> ".$row['id']." </td>
        <td> ".$row['name']." </td>
        <td> ".$row['phone']." </td>
        <td> ".$row['email']." </td>
        <td> ".$row['date']." </td>
        <td> ".$row['timeslot']." </td>
        <td> ".$row['spname']." </td>
        <td> ".$row['table_size']." </td>
        <td><a href=table1deleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
            </tr>";
    }

}

                                		
									?>
                               			
                                    </tbody>
                                </table>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                                <h4><b>Table Size 2 data</b></h4>
                                
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Name</th>
                                         <th>Phone</th>
                                        <th>email</th>
                                        <th>Date</th>
                                       
                                        <th>Timeslot</th>
                                         <th>BHOPAL_1</th>
                                         <th>Table Size</th>
                                        <th></th>
                                         <!--                                            
                                        <th>Amount Paid</th>
                                        <th>Remaining Amount</th>  -->
                                        
                                        <!-- <th>Delete</th> -->
                                       
                                       
                                         </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_2.id ,booking_bhopal_1_2.name,booking_bhopal_1_2.phone,booking_bhopal_1_2.email,booking_bhopal_1_2.date,booking_bhopal_1_2.timeslot,  absport.spname,booking_bhopal_1_2.table_size FROM booking_bhopal_1_2 INNER JOIN absport ON booking_bhopal_1_2.location = absport.id WHERE booking_bhopal_1_2.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
$id = $row['id'];
                                       
if($id % 2 ==1 )
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>

    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=table2deleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
    </tr>";
        }
else
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>
    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=table2deleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
        </tr>";
}

}

                                    
                                ?>
                                       
                                </tbody>
                            </table>











                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                                <h4><b>Table Size 3 data</b></h4>
                                
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Name</th>
                                         <th>Phone</th>
                                        <th>email</th>
                                        <th>Date</th>
                                       
                                        <th>Timeslot</th>
                                         <th>BHOPAL_1</th>
                                         <th>Table Size</th>
                                        <th></th>
                                         <!--                                            
                                        <th>Amount Paid</th>
                                        <th>Remaining Amount</th>  -->
                                        
                                        <!-- <th>Delete</th> -->
                                       
                                       
                                         </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_3.id ,booking_bhopal_1_3.name,booking_bhopal_1_3.phone,booking_bhopal_1_3.email,booking_bhopal_1_3.date,booking_bhopal_1_3.timeslot,  absport.spname,booking_bhopal_1_3.table_size FROM booking_bhopal_1_3 INNER JOIN absport ON booking_bhopal_1_3.location = absport.id WHERE booking_bhopal_1_3.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
$id = $row['id'];
                                       
if($id % 2 ==1 )
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>

    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=table3deleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
    </tr>";
        }
else
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>
    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=table3deleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
        </tr>";
}

}

                                    
                                ?>
                                       
                                </tbody>
                            </table>











                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                              <h4><b>Table Size 4 data</b></h4>
                              
                              <thead>
                                  <tr>
                                      
                                      <th>ID</th>
                                      <th>Name</th>
                                       <th>Phone</th>
                                      <th>email</th>
                                      <th>Date</th>
                                     
                                      <th>Timeslot</th>
                                       <th>BHOPAL_1</th>
                                       <th>Table Size</th>
                                      <th></th>
                                       <!--                                            
                                      <th>Amount Paid</th>
                                      <th>Remaining Amount</th>  -->
                                      
                                      <!-- <th>Delete</th> -->
                                     
                                     
                                       </tr>
                              </thead>
                              <tbody>
                                  
                              <?php
                              
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_4.id ,booking_bhopal_1_4.name,booking_bhopal_1_4.phone,booking_bhopal_1_4.email,booking_bhopal_1_4.date,booking_bhopal_1_4.timeslot,  absport.spname,booking_bhopal_1_4.table_size FROM booking_bhopal_1_4 INNER JOIN absport ON booking_bhopal_1_4.location = absport.id WHERE booking_bhopal_1_4.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
$id = $row['id'];
                                     
if($id % 2 ==1 )
{
  echo"<tr class='gradeC'>
  <td> ".$row['id']." </td>
  <td> ".$row['name']." </td>
  <td> ".$row['phone']." </td>
  <td> ".$row['email']." </td>
  <td> ".$row['date']." </td>

  <td> ".$row['timeslot']." </td>
  <td> ".$row['spname']." </td>
  <td> ".$row['table_size']." </td>
  <td><a href=table4deleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
  </tr>";
      }
else
{
  echo"<tr class='gradeC'>
  <td> ".$row['id']." </td>
  <td> ".$row['name']." </td>
  <td> ".$row['phone']." </td>
  <td> ".$row['email']." </td>
  <td> ".$row['date']." </td>
  <td> ".$row['timeslot']." </td>
  <td> ".$row['spname']." </td>
  <td> ".$row['table_size']." </td>
  <td><a href=table4deleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
      </tr>";
}

}

                                  
                              ?>
                                     
                              </tbody>
                          </table>




















                          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                                <h4><b>Table Size 5 data</b></h4>
                                
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Name</th>
                                         <th>Phone</th>
                                        <th>email</th>
                                        <th>Date</th>
                                       
                                        <th>Timeslot</th>
                                         <th>BHOPAL_1</th>
                                         <th>Table Size</th>
                                        <th></th>
                                         <!--                                            
                                        <th>Amount Paid</th>
                                        <th>Remaining Amount</th>  -->
                                        
                                        <!-- <th>Delete</th> -->
                                       
                                       
                                         </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_5.id ,booking_bhopal_1_5.name,booking_bhopal_1_5.phone,booking_bhopal_1_5.email,booking_bhopal_1_5.date,booking_bhopal_1_5.timeslot,  absport.spname,booking_bhopal_1_5.table_size FROM booking_bhopal_1_5 INNER JOIN absport ON booking_bhopal_1_5.location = absport.id WHERE booking_bhopal_1_5.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
$id = $row['id'];
                                       
if($id % 2 ==1 )
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>

    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
    </tr>";
        }
else
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>
    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
        </tr>";
}

}

                                    
                                ?>
                                       
                                </tbody>
                            </table>




















                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                                <h4><b>Table Size 6 data</b></h4>
                                
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Name</th>
                                         <th>Phone</th>
                                        <th>email</th>
                                        <th>Date</th>
                                       
                                        <th>Timeslot</th>
                                         <th>BHOPAL_1</th>
                                         <th>Table Size</th>
                                        <th></th>
                                         <!--                                            
                                        <th>Amount Paid</th>
                                        <th>Remaining Amount</th>  -->
                                        
                                        <!-- <th>Delete</th> -->
                                       
                                       
                                         </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_6.id ,booking_bhopal_1_6.name,booking_bhopal_1_6.phone,booking_bhopal_1_6.email,booking_bhopal_1_6.date,booking_bhopal_1_6.timeslot,  absport.spname,booking_bhopal_1_6.table_size FROM booking_bhopal_1_6 INNER JOIN absport ON booking_bhopal_1_6.location = absport.id WHERE booking_bhopal_1_6.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
$id = $row['id'];
                                       
if($id % 2 ==1 )
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>

    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
    </tr>";
        }
else
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>
    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
        </tr>";
}

}

                                    
                                ?>
                                       
                                </tbody>
                            </table>









                            

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                                <h4><b>Table Size 7 data</b></h4>
                                
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Name</th>
                                         <th>Phone</th>
                                        <th>email</th>
                                        <th>Date</th>
                                       
                                        <th>Timeslot</th>
                                         <th>BHOPAL_1</th>
                                         <th>Table Size</th>
                                        <th></th>
                                         <!--                                            
                                        <th>Amount Paid</th>
                                        <th>Remaining Amount</th>  -->
                                        
                                        <!-- <th>Delete</th> -->
                                       
                                       
                                         </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_7.id ,booking_bhopal_1_7.name,booking_bhopal_1_7.phone,booking_bhopal_1_7.email,booking_bhopal_1_7.date,booking_bhopal_1_7.timeslot,  absport.spname,booking_bhopal_1_7.table_size FROM booking_bhopal_1_7 INNER JOIN absport ON booking_bhopal_1_7.location = absport.id WHERE booking_bhopal_1_7.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
$id = $row['id'];
                                       
if($id % 2 ==1 )
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>

    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
    </tr>";
        }
else
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>
    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
        </tr>";
}

}

                                    
                                ?>
                                       
                                </tbody>
                            </table>








                            
                            

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                                <h4><b>Table Size 8 data</b></h4>
                                
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Name</th>
                                         <th>Phone</th>
                                        <th>email</th>
                                        <th>Date</th>
                                       
                                        <th>Timeslot</th>
                                         <th>BHOPAL_1</th>
                                         <th>Table Size</th>
                                        <th></th>
                                         <!--                                            
                                        <th>Amount Paid</th>
                                        <th>Remaining Amount</th>  -->
                                        
                                        <!-- <th>Delete</th> -->
                                       
                                       
                                         </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_8.id ,booking_bhopal_1_8.name,booking_bhopal_1_8.phone,booking_bhopal_1_8.email,booking_bhopal_1_8.date,booking_bhopal_1_8.timeslot,  absport.spname,booking_bhopal_1_8.table_size FROM booking_bhopal_1_8 INNER JOIN absport ON booking_bhopal_1_8.location = absport.id WHERE booking_bhopal_1_8.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
$id = $row['id'];
                                       
if($id % 2 ==1 )
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>

    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
    </tr>";
        }
else
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>
    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
        </tr>";
}

}

                                    
                                ?>
                                       
                                </tbody>
                            </table>






                            

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                                <h4><b>Table Size 9 data</b></h4>
                                
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Name</th>
                                         <th>Phone</th>
                                        <th>email</th>
                                        <th>Date</th>
                                       
                                        <th>Timeslot</th>
                                         <th>BHOPAL_1</th>
                                         <th>Table Size</th>
                                        <th></th>
                                         <!--                                            
                                        <th>Amount Paid</th>
                                        <th>Remaining Amount</th>  -->
                                        
                                        <!-- <th>Delete</th> -->
                                       
                                       
                                         </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_9.id ,booking_bhopal_1_9.name,booking_bhopal_1_9.phone,booking_bhopal_1_9.email,booking_bhopal_1_9.date,booking_bhopal_1_9.timeslot,  absport.spname,booking_bhopal_1_9.table_size FROM booking_bhopal_1_9 INNER JOIN absport ON booking_bhopal_1_9.location = absport.id WHERE booking_bhopal_1_9.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
$id = $row['id'];
                                       
if($id % 2 ==1 )
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>

    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
    </tr>";
        }
else
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>
    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
        </tr>";
}

}

                                    
                                ?>
                                       
                                </tbody>
                            </table>















                     

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                                <h4><b>Table Size 10 data</b></h4>
                                
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Name</th>
                                         <th>Phone</th>
                                        <th>email</th>
                                        <th>Date</th>
                                       
                                        <th>Timeslot</th>
                                         <th>BHOPAL_1</th>
                                         <th>Table Size</th>
                                        <th></th>
                                         <!--                                            
                                        <th>Amount Paid</th>
                                        <th>Remaining Amount</th>  -->
                                        
                                        <!-- <th>Delete</th> -->
                                       
                                       
                                         </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_10.id ,booking_bhopal_1_10.name,booking_bhopal_1_10.phone,booking_bhopal_1_10.email,booking_bhopal_1_10.date,booking_bhopal_1_10.timeslot,  absport.spname,booking_bhopal_1_10.table_size FROM booking_bhopal_1_10 INNER JOIN absport ON booking_bhopal_1_10.location = absport.id WHERE booking_bhopal_1_10.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
$id = $row['id'];
                                       
if($id % 2 ==1 )
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>

    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
    </tr>";
        }
else
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>
    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
        </tr>";
}

}

                                    
                                ?>
                                       
                                </tbody>
                            </table>











                     

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                                <h4><b>Table Size 11 data</b></h4>
                                
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Name</th>
                                         <th>Phone</th>
                                        <th>email</th>
                                        <th>Date</th>
                                       
                                        <th>Timeslot</th>
                                         <th>BHOPAL_1</th>
                                         <th>Table Size</th>
                                        <th></th>
                                         <!--                                            
                                        <th>Amount Paid</th>
                                        <th>Remaining Amount</th>  -->
                                        
                                        <!-- <th>Delete</th> -->
                                       
                                       
                                         </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_11.id ,booking_bhopal_1_11.name,booking_bhopal_1_11.phone,booking_bhopal_1_11.email,booking_bhopal_1_11.date,booking_bhopal_1_11.timeslot,  absport.spname,booking_bhopal_1_11.table_size FROM booking_bhopal_1_11 INNER JOIN absport ON booking_bhopal_1_11.location = absport.id WHERE booking_bhopal_1_11.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
$id = $row['id'];
                                       
if($id % 2 ==1 )
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>

    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
    </tr>";
        }
else
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>
    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
        </tr>";
}

}

                                    
                                ?>
                                       
                                </tbody>
                            </table>








                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              
                                <h4><b>Table Size 12 data</b></h4>
                                
                                <thead>
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Name</th>
                                         <th>Phone</th>
                                        <th>email</th>
                                        <th>Date</th>
                                       
                                        <th>Timeslot</th>
                                         <th>BHOPAL_1</th>
                                         <th>Table Size</th>
                                        <th></th>
                                         <!--                                            
                                        <th>Amount Paid</th>
                                        <th>Remaining Amount</th>  -->
                                        
                                        <!-- <th>Delete</th> -->
                                       
                                       
                                         </tr>
                                </thead>
                                <tbody>
                                    
                                <?php
                                
include ('db.php');
$fetch_query = "SELECT booking_bhopal_1_12.id ,booking_bhopal_1_12.name,booking_bhopal_1_12.phone,booking_bhopal_1_12.email,booking_bhopal_1_12.date,booking_bhopal_1_12.timeslot,  absport.spname,booking_bhopal_1_12.table_size FROM booking_bhopal_1_12 INNER JOIN absport ON booking_bhopal_1_12.location = absport.id WHERE booking_bhopal_1_12.location = 1";
$result = $con->query($fetch_query);
while($row = $result->fetch_assoc())

{
$id = $row['id'];
                                       
if($id % 2 ==1 )
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>

    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	    
    </tr>";
        }
else
{
    echo"<tr class='gradeC'>
    <td> ".$row['id']." </td>
    <td> ".$row['name']." </td>
    <td> ".$row['phone']." </td>
    <td> ".$row['email']." </td>
    <td> ".$row['date']." </td>
    <td> ".$row['timeslot']." </td>
    <td> ".$row['spname']." </td>
    <td> ".$row['table_size']." </td>
    <td><a href=abidsdeleterecord.php?id=".$id." <button class='btn btn-primary'> <i class='fa fa-dekete' ></i> DELETE</button></td>	  
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
            
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
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

