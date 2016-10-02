<?php

function StartConnection() {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "honeywell";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
    } 
    return $conn;
    
}

function isAlive($ip){
    $ping = exec("ping -c 1 ".$ip);
    return $ping;

}


/*function GetNumberOfArtilces($conn) {
    $sql="SELECT * FROM `topics`";
     $result = $conn->query($sql);
     
     return $result->num_rows ;
    
}*/
/*
function GetLatestTopics($conn) {
    $sql="SELECT * FROM `topics` ORDER BY `date` LIMIT 0,3";
    $result = $conn->query($sql);
    
     if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                 $debate[]=new debate($row['sr'], $row['topic'],$row['by'],$row['link'],$row['catagory'],$row['wiki'],$row['hits'],$row['date']);
             }
        }
        
        
        return $debate;
}
*/
/*function GetBestTopics($conn) {
    $sql="SELECT * FROM `topics` ORDER BY `hits` LIMIT 0,3";
    $result = $conn->query($sql);
    
     if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                 $debate[]=new debate($row['sr'], $row['topic'],$row['by'],$row['link'],$row['catagory'],$row['wiki'],$row['hits'],$row['date']);
             }
        }
        
        
        return $debate;
}
*/
/*function SelectedTopic($conn,$sr) {
    $sql="SELECT * FROM `topics` WHERE `sr`=$sr";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                 $debate=new debate($row['sr'], $row['topic'],$row['by'],$row['link'],$row['catagory'],$row['wiki'],$row['hits'],$row['date']);
             }
        }
        
        return $debate;
}


function AddTopic($conn,$topic,$by,$link,$catagory,$wiki) {
    $sql="INSERT INTO `debate1`.`topics` (`sr`, `topic`, `by`, `link`, `catagory`, `wiki`) VALUES (NULL, '$topic', '$by', '$link', '$catagory', '$wiki')";
    
    
    $conn->query($sql);
   
        
    
}*/