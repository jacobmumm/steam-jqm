<?php

// expect urls like this:
// users.php?q=users
// users.php?q=user&id=1

// isset($_GET['q']) // users.php?q=
// !empty($_GET['q']) // users.php?q=asdf

switch($_GET['q']){
    case 'users':
        $users = array(
          array('id'=>1, 'name'=>'Joe'),
          array('id'=>2, 'name'=>'Jake'),
          array('id'=>3, 'name'=>'Mark'),
          array('id'=>4, 'name'=>'Dave'),
          array('id'=>5, 'name'=>'Jason'),
          array('id'=>6, 'name'=>'Bill')
        );
        echo json_encode($users);
        break;
    case 'user':
        $user_details = array(
            1 => array('street'=>'123 Fourth Street', 'city'=>'City', 'zipcode'=>'90210'),
            2 => array('street'=>'543 21st Street', 'city'=>'Olean', 'zipcode'=>'14760'),
            3 => array('street'=>'274 West Fifth= Street', 'city'=>'Oswego', 'zipcode'=>'13126'),
            4 => array('street'=>'123 Fourth Street', 'city'=>'City', 'zipcode'=>'90210'),
            5 => array('street'=>'123 Fourth Street', 'city'=>'City', 'zipcode'=>'90210'),
            6 => array('street'=>'123 Fourth Street', 'city'=>'City', 'zipcode'=>'90210'),
        );
        echo json_encode($user_details[$_GET['id']]);
        break;
}