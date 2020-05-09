<?php
require 'Entity/ContactEntity.php';

class ContactModel {
    
    function InsertContact(ContactEntity $contact)
    {
        require 'credentials.php';
        mysql_connect($host,$user,$password) or die(mysql_error());
        mysql_select_db($database);
        $query = sprintf("INSERT INTO `contact`(fullname, phoneno, email,approval)VALUES('%s','%s','%s','%s')",
                mysql_real_escape_string($contact->fullname),
                mysql_real_escape_string($contact->phoneno),
                mysql_real_escape_string($contact->email),
                mysql_real_escape_string($contact->approval));
        if(mysql_query($query))
        {
            echo "<script type='text/javascript'> alert('Newsletter subscription request sent')</script>";
            mysql_close();
        }
        else
        {
            echo "<script type='text/javascript'> alert('Something might not right')</script>";
        }
    }
}
