<?php
class Town{

    public $id;
    public $name;
    public $parent_id;

    public static function get_all_towns(){
        return self::query("SELECT * FROM towns");
    }

    public static function get_region_towns($id){
        return self::query("SELECT * FROM towns WHERE parent_id='".$id."' ");
    }

    public static function find_user_by_id($id){
        $the_result_array = self::query("SELECT * FROM user WHERE id='".$id."' LIMIT 1");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function query($sql){
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

$town = new Town;
?>