<?php
include_once 'db.php';

function handleError ($sql_name)
{
    global $conn;
    try {
        if ($conn -> query($sql_name)) 
        {
            header("Refresh:0; url=index.php");
        } else 
        {
            throw new Exception ('Something went wrong with the connection to the database.');
        } 
      } catch (Exception $ex) 
      {
        die ('Error: '.$ex->getMessage());
      }
}