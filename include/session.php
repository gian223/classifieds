<?php
class Session{

    private $signed_in = false;
    private $is_admin = false;
    public $user_id;

    function __construct(){
        session_start();
        $this->check_the_login();
    }

    public function is_signed_in(){
        return $this->signed_in;
    }
    public function is_admin(){
        // return $this->signed_in;
        if(isset($_SESSION['user_id'])){
            $user = User::find_user_by_id($_SESSION['user_id']);
            if($user->role == 1){
                $this->is_admin = true;
            }else{
                $this->is_admin = false;
            }
            return $this->is_admin;
        }
    }

    private function check_the_login(){
        if(isset($_SESSION['user_id'])){
            $this->user_id = $_SESSION['user_id'];
            $this->signed_in = true;
        }else{
            unset($this->user_id);
            $this->signed_in = false;
        }
    }

    public function login($user){
        if($user){
            $this->user_id = $_SESSION['user_id'] = $user->id;
            $this->signed_in = true;
        }
    }
    
    public function logout(){
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->signed_in = false;
    }
}


$session = new Session();
