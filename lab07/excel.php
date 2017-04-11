<?php
//export.php
$connect = mysqli_connect("localhost", "root", "", "dreamhome");
$output = '';
 $query = "SELECT client.clientno, client.fname, client.lname, viewing.viewdate FROM client INNER JOIN viewing ON client.clientno = viewing.clientno";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">
                    <tr>
                         <th>Clineno</th>
                         <th>Fname</th>
                         <th>Lname</th>
                         <th>Viewdate</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
                         <td>'.$row["clientno"].'</td>
                         <td>'.$row["fname"].'</td>
                         <td>'.$row["lname"].'</td>
                         <td>'.$row["viewdate"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
?>
