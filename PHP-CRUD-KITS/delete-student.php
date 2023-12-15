//delete-student.php.
<?php
include "dbconfig.php";
if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];
    $sql = "DELETE FROM customer WHERE cid ='$stu_id'";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        echo "Record deleted successfully.";
        header('Location: view-student.php');
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>