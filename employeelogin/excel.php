<?php
$connect = mysqli_connect("localhost","root","","PBL3");
$output = '';
if(isset($_POST["export_excel"]))
{
    $sql ="SELECT * FROM record ORDER BY id ";
    $result = mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $output .= '
        <table class = "table" bordered="1">
        <tr>
            <th> id</th>
            <th> name</th>
            <th> email</th>
            <th> address</th>
            <th> phone_no</th>
            <th> totalamount</th>
            <th> tip</th>
            <th> gender</th>
            <th> time</th>
            <th> tablesize</th>
            <th> age</th>
        
        </tr>
';
while($row = mysqli_fetch_array($result))
{
    $output .= ' 
    <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["custname"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["address"].'</td>
    <td>'.$row["phone_no"].'</td>
    <td>'.$row["totalamount"].'</td>
    <td>'.$row["tip"].'</td>
    <td>'.$row["gender"].'</td>
    <td>'.$row["time"].'</td>
    <td>'.$row["tablesize"].'</td>
    <td>'.$row["age"].'</td>
    


    




    </tr>
    ';
}
$output .= '</table>';
header("Content-Type: text/csv; charset=utf-8");
header('content-Disposition: attachment; filename="Billrecord1.csv"');
echo $output;
    }

}


// function array_to_csv_download($array, $filename = "export.csv", $delimiter=";") {
//     header('Content-Type: application/csv');
//     header('Content-Disposition: attachment; filename="'.$filename.'";');
