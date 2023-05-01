<?php
include "connection.php";
if(isset($_POST['btnImport'])){
    $fileName = $_FILES['file']['name'];
    if($_FILES['file']['size']>0){
        $fileHandle = fopen($fileName, 'r');
        $sql = "LOAD DATA LOCAL INFILE'".$fileName."'INTO TABLE management FIELDS TERMINATE BY ','LINES TERMINATED BY '\n'IGNORE 1 LINES(firstame,lastname,email);";
        $upload_csv = $conn->query($sql);
        if($upload_csv){
            $message = "CSV data imported successfully";
        }else{
            $message = "Problem in importing CSV file";
        }
        }
    }
?>

<html>
    <link rel="stylesheet" href="styles.css">
    <body>
        <h2>Imnport csv into database</h2>
        <?php
        if(!empty(message)){
        ?>
        <?php
        }else{
        ?>  
        <?php  
         }
        ?>
        <div>
        <form action="" method="post"></form>
        <button type="submit" name="btnImport">Import</button>
        <br><br>
    </div>
    <div>
        <table width="100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlSelect="SELECT * FROM management";
                $result = mysqli_query($conn,$sqlSelect);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
                        ?>
<tr>
        <th><?php echo $row['id'];?></th>
        <th><?php echo $row['firstname'];?></th>
        <th><?php echo $row['lastname'];?></th>
        <th><?php echo $row['email'];?></th>
    </tr>
    <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    </body>
</html>