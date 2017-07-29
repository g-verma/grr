<?php 

session_start();
include("includes/connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title> Welcome user </title>
	  <link rel="stylesheet" href="css/home_style.css" media="all" />
</head>

<body class="main_container">
<div class="container">
    <div id="head_wrap">
        <div id="header">
            <ul id="menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="members.php">members</a></li>
                <strong>Topics</strong>
                <?php
                
                $get_topics="select * from topics";
                $run_topics=mysqli_query($con,$get_topics);
                
                while($row=mysqli_fetch_array($run_topics)){
                    
                    //both the parameters in brackets are field name from  database
                    $topic_id=$row['topic_id'];
                    $topic_title=$row['topic_title'];
                    
                    //here we are show title  of the  topics from database
                    echo "<li> <a href='home.php?$topic_id'>$topic_title</a> </li>";
                    
                }
                
                ?>
            </ul>
        </div>
    </div>
</div>
<h1>Welcome New User! <?php echo $_SESSION['user_email']; ?></h1>


</body>


</html>

