
<?php
if (isset($_GET['file'])) {
    echo system("php xxe.php $file");

} else {
   echo system("php xxe.php test.xml");

}
 


?>
