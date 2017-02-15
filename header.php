<?php 
require_once("includes/database.php");
?>
<link href="css/bootsrap.css" rel="stylesheet" type="text/css"/>
<style>
    
#divider
{
   padding-left: 500px;
}

#login,#signup,#cart
{
    font-size: medium;
}
</style>



<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner ">
                    <div class="container">
                        <li class="brand">Language Courses</li>
                        <ul class="nav pull-left">
                            <li id="divider" class="divider-vertical"></li>
                            <li id="login"><a href="#">Login</a></li>
                            <li id="signup"><a href="#">Sign Up</a></li>
                            <li id="cart"><a href="#">Cart</a></li>
                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
