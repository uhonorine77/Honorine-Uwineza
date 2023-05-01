<html>
    <head>
        <title>Get a pdf copy.</title>
        <style>
            *{
                border: 10px;
                color: black;
            }
        </style>
    </head>
    <body onload="print()">
        <h2>Students List</h2>
        <hr>
        <table style="width:100%" cell-padding="0px" cell-spacing="0px">
    
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
        
    
            <?php
            include "connection.php";
            $list = mysqli_query($conn,"SELECT * FROM management");
            while($row = mysqli_fetch_array($list)){
            ?> 
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <?php
            }
            ?>
    
        </table>
    </body>
</html>