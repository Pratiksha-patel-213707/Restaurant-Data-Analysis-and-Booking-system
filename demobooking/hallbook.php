<?php
include 'db.php'
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


           <div class="col-md-6 col-md-offset-3">
<br><br><br><br><br>
               <form action="" method="post">
                   <div class="form-group">
                       <label for="">Name</label>
                       <input required type="text" class="form-control" name="name">
                   </div>
                   <div class="form-group">
                       <label for="">Email</label>
                       <input required type="email" class="form-control" name="email">
                   </div>
                   
                   <div class="form-group">
                                    <label for="">phone</label>
                                    <input required type="number" class="form-control" name="phone">
                                </div>

                  
                                <div class="form-group">
                                    <label for="">Why You Book Ex: Birthday party</label>
                                    <input required type="text" class="form-control" name="why">
                                </div>
                   <div class="form-group">
                       <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                   </div>
               </form>
           </div>
            
        </div>
    </div>

    <?php
    // include 'header.php'




    if(isset($_POST['submit']))
{
            $newUser="INSERT INTO hallbook( name, gmail,phone_no	,why_1) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[why]')";
            if (mysqli_query($con,$newUser))
            {
                echo "<script type='text/javascript'> alert('Your Details has been sent')</script>";
                
            }
            else
            {
                echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
          }
        }
$msg="Your code is correct";

?>
</form> 

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