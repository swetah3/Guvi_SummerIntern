<?php
 $message = '';
 $error = '';
 if(isset($_POST["btn-save"]))
 {
           if(file_exists('Pro.json'))
           {
                $current_data = file_get_contents('PROFILE.json');
                $array_data = json_decode($current_data, true);
                $extra = array(
                     'first name'               =>     $_POST['f_name'],
                     'last name'          =>     $_POST["l_name"],
                     'email'     =>     $_POST["user_email"],
                     'github'               =>     $_POST['github'],
                     'nickname'          =>     $_POST["n_name"],
                     'username'     =>     $_POST["user_name"]
                );
                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents('PROFILE.json', $final_data))
                {
                     $message = "<label class='text-success'>File Appended Success fully</p>";
                }
           }
           else
           {
                $error = 'JSON File not exits';
           }
      }

 ?>
