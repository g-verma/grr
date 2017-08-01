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
            <!-- search bar  -->
            <div class="search_bar">
                <form method="get" action="results.php" id="form1">
                    <input type="text" name="user_query" placeholder="search here" />
                    <input type="submit" name="search" value="search" />
                    
                    
                </form>
            </div>
            
        </div>
    </div>
</div>
<h1>Welcome, <?php echo $_SESSION['user_email']; ?></h1>

<div class="content">
    <div class="user_timeline">
        <div class="user_details">
            <!-- fetching details of the user from database but only those user which is logged in -->
            <?php
            
            $user =$_SESSION['user_email'];
            
            $get_user = "select * from users where user_email='$user'";
            $run_user = mysqli_query($con,$get_user);
            
            $row=mysqli_fetch_array($run_user);
            
            $user_id=$row['user_id'];
            $user_name=$row['user_name'];
            $user_country=$row['user_country'];
            $user_image=$row['user_image'];
            $register_date=$row['register_date'];
            $last_login=$row['last_login'];
            
            
            echo "
            <p><img src='user/user_images/$user_image' width='200' height='200' /></p>
            <p>name: $user_name</p>
            <p>country: $user_country</p>
            <p>Last Login: $last_login</p>
            <p>member since: $register_date</p>
            <p><a href='my_messages.php'>Messages</a></p>
            <p><a href='my_posts.php'>My Posts</a></p>
            <p><a href='edit_profile.php'>Edit My Account</a></p>
            <p><a href='logout.php'>Logout</a></p>
            
            ";
            
            ?>
            
        </div>
    </div>
</div>


</body>


</html>

