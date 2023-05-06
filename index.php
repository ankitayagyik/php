<?php
class fruits{
    var $name;
    var $val;
     function set_name($name){
        $this->name = $name;
        return $this->name;
    }
    //  function get_name(){
    //     return $this->name;
    // }
}
$obj1 = new fruits;
$val = $obj1->set_name('orange');
// $val = $obj1->get_name();
echo $val;
?>