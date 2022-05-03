<?php

class User{

    public $id;
    public $username;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $phone;
    public $account_type;
    public $address;
    public $city;
    public $zip_code;
    public $business_name;
    public $business_logo;

    public static function find_all_users(){
        return self::find_this_query("SELECT * FROM user");
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