<html>
  <head>
    <style>
      a{
        color:brown;
        text-decoration: none;
      }
      tr{
        background-color: grey;
      }
    </style>
  </head>



<?php

include 'connection.php';

$create='form.html';
echo "<p><a href=".$create.">Create new user</a></p>";

$sql="SELECT * FROM management"; 
$result= $conn->query($sql);
$update='./update.html';
$delete='./delete.php'; 

if ($result->num_rows > 0) {
    echo "<table>";
    echo "
    <tr>
    <th>id</th>
    <th>firstname</th>
    <th>lastname</th>
    <th>Email</th>
    <th>Delete</th>
    <th>Update</th>
    </tr>";

    //to fetch the result row
    while($row = $result->fetch_assoc()) { 
      echo "
      <tr>
      <td>". $row["id"] .
       "</td><td>" . $row["firstname"] . 
       "</td><td>". $row["lastname"] . 
       "</td><td>" . $row["email"] . 
       "</td><td><a href=".$delete."?id=". $row["id"] .">Delete</a>". 
       "</td><td><a href=".$update."?id=". $row["id"] .">Update</a>"."</td>
       </tr>"; 
    }
    echo "</table>";
  } else {
    echo "No users";
  }
  
$conn->close();

?>
<br>
<div>
        <a href="pdf.php" name="view"class="btn btn-info">Get pdf document</a><br>
        <a href="export.php" class="btn btn-success"><i class="dwn"></i>Download csv</a>
</div>
</html>