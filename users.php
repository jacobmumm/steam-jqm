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
            
        );
        break;
}