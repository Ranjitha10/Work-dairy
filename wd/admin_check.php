<?php
if ($_POST['action'] == 'Department') {
    header('Location:report.php');
} 
else {
    header('Location:reportall.php');
}
?>
