<?php
require('top.inc.php');
?>
    <div class="container bg-light my-5">
        <!-- <div class="title">Register</div> -->
        <form action="log.php" method="post">
            <div class="user-detail d-block">
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your name" style="width:350px;"  name="username" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password"  style="width:350px;" required>
                    
                </div>
            </div>
           
            <div class="button">
                <input type="submit"  name="submit" value="login">
            </div>
            <div class="button">
            
            </div>
        </form>
        <div class=" move py-5">
        <a href="admin/login.php">
                <button type="submit"name="submit">Login as admin</button>
        </a>
        </div>
    </div>
    <?php
    require('footer.php');

    ?>