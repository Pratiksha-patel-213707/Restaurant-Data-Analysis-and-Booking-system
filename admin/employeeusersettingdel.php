<?php
include('db.php')
?>
<?php
include 'sidebar.php';
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
$query = "DELETE FROM employee_login where id='$id'";
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
                 
                                 
     

    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    

</body>
</html>




