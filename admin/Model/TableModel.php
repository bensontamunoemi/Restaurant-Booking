<?php
require 'Entity/TableEntity.php';

class TableModel {

    function InsertTableRecord(TableEntity $table)
    {
        require 'credentials.php';
        $db=mysqli_connect($host,$user,$password,$database) or die(mysqli_error($connection));
        //mysql_select_db($database);
        $query = sprintf("INSERT INTO tablebook(Title,FName,LName,Email,National,Country,Phone,Tbltyp,Purpose,Meal,time,date,status)VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
                mysqli_real_escape_string($db,$table->Title),
                mysqli_real_escape_string($db,$table->FName),
                mysqli_real_escape_string($db,$table->LName),
                mysqli_real_escape_string($db,$table->Email),
                mysqli_real_escape_string($db,$table->National),
                mysqli_real_escape_string($db,$table->Country),
                mysqli_real_escape_string($db,$table->Phone),
                mysqli_real_escape_string($db,$table->Tbltyp),
                mysqli_real_escape_string($db,$table->Purpose),
                mysqli_real_escape_string($db,$table->Meal),
                mysqli_real_escape_string($db,$table->time),
                mysqli_real_escape_string($db,$table->date),
                mysqli_real_escape_string($db,$table->status));
        if(mysqli_query($db,$query))
        {
            echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
            mysqli_close($db);
        }
        else
        {
            echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
        }
    }
}
