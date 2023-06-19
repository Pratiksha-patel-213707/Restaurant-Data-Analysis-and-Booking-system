<?php
// include 'header.php'
?>

<?php
$mysqli = new mysqli('localhost', 'root', '', 'pbl3');



if(isset($_GET['date'])){
    $date = $_GET['date'];
    $stmt = $mysqli->prepare("select * FROM  booking_bhopal_1_2 where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        // if($result->num_rows>0){
        //     while($row = $result->fetch_assoc()){
        //         $bookings[] = $row['timeslot'];
        //     }
            $stmt->close();
        }
    }

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $timeslot = $_POST['timeslot'];
    $name2 = $_POST['name2'];
    $book = "1";
    $amount = "440";
    $table_size = "TABLE SIZE 2";
    $stmt = $mysqli->prepare("select * from booking_bhopal_1_2 where date = ?");
    $stmt->bind_param('s', $date);
    if($stmt->execute()){
        $result = $stmt->get_result();
        // if($result->num_rows>0){
        //     $msg = "<div class='alert alert-danger'>Already Booked</div>";
        // }
        {
            $stmt = $mysqli->prepare("INSERT INTO booking_bhopal_1_2 (name, email,phone,name2 , date,timeslot,location,amount,table_size) VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param('sssssssss', $name,  $email,$phone,$name2, $date,$timeslot,$book,$amount,$table_size);
            $stmt->execute();
            $msg = "<div class='alert alert-success'>Booking Successfull</div>";
            // $bookings[] = $timeslot;
            $stmt->close();
            $mysqli->close();
        }
    }
}


?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>

    <div style="margin-top: 170px; margin-bottom: 200px;" class="container">
        <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                               <div style="margin-left: 30px; margin-right: 30px; " class="form-group">
                                    <label style="margin-left: 30px;" for="">Time Slot</label>
                                    <input  type="text" class="form-control" id="timeslot" name="timeslot">
                                </div>
                                <div style="margin-left: 30px; margin-right: 30px; " class="form-group">
                                    <label style="margin-left: 30px;" for="">Name 1 </label>
                                    <input required type="text" class="form-control" name="name">
                                </div>
                                <div style="margin-left: 30px; margin-right: 30px; " class="form-group">
                                    <label style="margin-left: 30px;" for="">Email</label>
                                    <input required type="email" class="form-control" name="email">
                                </div>
                                <div style="margin-left: 30px; margin-right: 30px; " class="form-group">
                                    <label style="margin-left: 30px;" for="">phone</label>
                                    <input required type="number" class="form-control" name="phone">
                                </div>
                                <div style="margin-left: 30px; margin-right: 30px; " class="form-group">
                                    <label style="margin-left: 30px;" for="">Name 2 </label>
                                    <input required type="text" class="form-control" name="name2">
                                </div>

                                <div style="margin-left: 60px;" class="form-group">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
$(".book").click(function(){
    var timeslot = $(this).attr('data-timeslot');
    $("#slot").html(timeslot);
    $("#timeslot").val(timeslot);
    $("#myModal").modal("show");
});
</script> 
<?php
// include 'footer.php'
?>