<?php
function encode($id){
    $ci = &get_instance();
    return $id;
}

function decode($id){
    return $id;
}
function label($value = '',$class='success',$tag = 'label'){
    return "<$tag class='label label-$class'>$value</$tag>";
}
function alert($message, $class = 'success'){
    return "<div class='alert alert-$class'>$message</div>";
}
?>