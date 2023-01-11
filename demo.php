
                        <?php
                        $cookie_name = "user";
                        $cookie_value ="Yuvraj parmar";
                        setcookie($cookie_name,$cookie_value);
                        if(isset($COOKIE[$cookie_name])){
                        echo "cookie is not set";
                        }
                        else {
                        echo $_COOKIE[$cookie_name];
                        }
                        ?>