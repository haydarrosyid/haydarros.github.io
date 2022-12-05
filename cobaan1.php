<html>
    <head>
        <title>PLC</title>
        <link href="css\cobaan1cre.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include_once 'konek.php';
        if(isset($_POST['submit'])) {
            $q = $_POST['username'];
            $s = $_POST['password'];
            echo 'Nama yang masuk ='.$q .'<br>';
            echo 'Pass yang masuk =' .$s;
            $sql = "SELECT * 
                    FROM usercobain 
                    WHERE username='$q' && password='$s'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                header('Location: index.html');
            } 
            else {
                //echo "Username dan Password Tidak Sesuai";
            }
        }
        ?>
        <input type="radio" checked id="toggle--login" name="toggle" class="ghost" />
        <input type="radio" id="toggle--signup" name="toggle" class="ghost" />

        <form action="cobaan1.php" method="post" class="form form--login framed">
        
            <input type="text" id="username" name="username" value="" placeholder="Username" class="input input--top" />
            <input type="password" id="password" name="password" value="" placeholder="Password" class="input" />
            <input type="submit" id="submit" name="submit" value="Submit" class="input input--submit" />
    
            <label for="toggle--signup" class="text text--small text--centered">New? <b>Sign up</b></label>
        </form>
        
        <form class="form form--signup framed">
            <!-- <h2 class="text text--centered text--omega">Join the other <b>152.6 million</b> blogs and</br>share all that you love.</h2> -->

            <input type="email" placeholder="Email" class="input input--top" />
            <input type="password" placeholder="Password" class="input" />
            <input type="text" placeholder="Username" class="input" />
            <input type="submit" value="Sign up" class="input input--submit" />
            
            <label for="toggle--login" class="text text--small text--centered">Not new? <b>Log in</b></label>
        </form>

        <!-- <div class="legal">
            <a class="text text--small text--border-right" href="javascript:;">Terms</a>
            <a class="text text--small text--border-right" href="javascript:;">Privacy</a>
            <a class="text text--small" href="javascript:;">Password help</a>
        </div>

        <div class="photo-cred">
            <a class="text text--small" title="Check out their blog." href="http://cabinporn.com/post/125371354365/the-cabin-book-book-in-the-wild-21-in-the-us" target="_blank">Photo posted by <b>cabinporn</b></a>
        </div> -->

        <div class="fullscreen-bg"></div>
    </body>
</div>
</html>