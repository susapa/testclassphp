 <?php
        class user{
            public $firstname;
            public $lastname;
            public $address;
            public $tel;
            public $user;
            public $pass;
            public function add(){
                $sql = "INSERT INTO user (firstname,lastname,address,tel,user,password)
                    VALUES ('$firstname','$lastname','$address','$tel','$user','$pass')";
              if(!mysql_query($sql)){
                  die('ERROR: '.mysql_error($sql));
              }
            }
        }
        ?>
        
 