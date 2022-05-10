<?php
function redirect($location, $message = ''){
    if($message != ''){
        $location = $location . '?' . $message;
    }
    
    header("Location: {$location}");
}
?>