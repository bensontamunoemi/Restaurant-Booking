<?php

require 'credentials.php';

        $db=mysqli_connect($host,$user,$password,$database) or die(mysqli_error($connection));
        //mysql_select_db($database);

        $id = $_GET["eid"];
        $query = sprintf("DELETE FROM login WHERE id = $id");
        if(mysqli_query($db,$query))
        {
            echo' <script language="javascript" type="text/javascript"> alert("Deleted") </script>';
            mysqli_close($db);
        }
        echo '<meta http-equiv="refresh" content="1; URL=usersettings.php" />';
?>
