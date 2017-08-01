<?php

$con = mysqli_connect("localhost","root","","fbdb") or die("Mujhko Ranna ji maaf karna DB connection failed ho gya");


//creating function getTopics

function getTopics(){
    global $con;
    
    $get_topics="select * from topics";
    $run_topics=mysqli_query($con,$get_topics);
                
    while($row=mysqli_fetch_array($run_topics)){
                    
    //both the parameters in brackets are field name from  database
    $topic_id=$row['topic_id'];
    $topic_title=$row['topic_title'];
            
    //here we are show title  of the  topics from database
    echo "<option value='$topic_id'>$topic_title</option>";
                    
    
    }
} //closing function gettopics


// function to insert posts in database 

function insertPost(){
    if(isset($_POST['sub'])){
        global $con;
        global $user_id;
        
        $title=$_POST['title'];
        $content=$_POST['content'];
        $topic=$_POST['topic'];
        
        
        $insert = "insert into posts (user_id,topic_id,post_title,post_content,post_date) values ('$user_id','$topic','$title','$content',NOW())";
        $run=mysqli_query($con,$insert);
        
        if($run)
        {
            echo "successfully posted on  timeline";
            
        }
        
        
    }
    
}


//insert function ends here


?>
