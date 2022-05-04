<style>
    body{
        background-color: silver;
    }
</style>
<?php
require_once('init.php');
// $users = User::find_all_users();
// foreach($users as $user){
//     echo $user->first_name;
// }
User::find_this_query("select * from user");

?>
