<?php
require 'Entity/NewsLetterEntity.php';

class NewsLetterModel {

    function InsertNewsLetters(NewsLetterEntity $news)
    {
        require 'credentials.php';

        $db=mysqli_connect($host,$user,$password,$database) or die(mysqli_error($connection));
        //mysql_select_db($database);
        $query = sprintf("INSERT INTO newsletterlog(title,subject,news)VALUES('%s','%s','%s')",
                mysqli_real_escape_string($db,$news->title),
                mysqli_real_escape_string($db,$news->subject),
                mysqli_real_escape_string($db,$news->news));
        if(mysqli_query($db,$query))
        {
            echo "<script type='text/javascript'> alert('NewsLetter has been sent')</script>";
            mysqli_close($db);
        }
        else
        {
            echo "<script type='text/javascript'> alert('Something might not right')</script>";
        }
    }
}
