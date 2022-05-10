<?php

class User{

    public $id;
    public $role;
    public $username;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $phone;
    public $account_type;
    public $address;
    public $region;
    public $town;
    public $zip_code;
    public $business_name;
    public $business_logo;

    public static function find_all_users(){
        return self::find_this_query("SELECT * FROM user");
    }

    public static function find_user_by_id($id){
        $the_result_array = self::find_this_query("SELECT * FROM user WHERE id='".$id."' LIMIT 1");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function update_user($address, $region, $town, $zip_code, $phone){
        global $database;
        $database->query("UPDATE user SET address='$address', region='$region', town='$town', zip_code='$zip_code', phone='$phone' WHERE id=1 ");
    }

    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        
        $the_object_array = array();
        while($row = mysqli_fetch_array($result_set)){
            $the_object_array[] = self::instantiation($row);
        }
        return $the_object_array;
    }
    public static function verify_user($username, $password){
        global $database;
        $username = $database->escape_string($username);
        $password = $database->escape_string($password);

        $sql = "SELECT * FROM user WHERE username='".$username."' AND password='".$password."' LIMIT 1";

        $the_result_array = self::find_this_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function instantiation($the_record){
        $the_object = new self;
        foreach($the_record as $the_attribute => $value){
            if($the_object->has_the_attribute($the_attribute)){
                $the_object->$the_attribute = $value;
            }
        }
        return $the_object;
    }

    private function has_the_attribute($the_attribute){
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute, $object_properties);
    }

}










?>