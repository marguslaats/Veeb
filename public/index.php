
<?php
require_once '../app/bootstrap.php';
require_once '../app/libs/Database.php';

$init = new Core();

$db = new Database();
//$sql = 'INSERT INTO users SET '.
  //      'name=:name, '.
    //    'email=:email, '.
     //   'pass=:pass ';
//
//$db->query($sql);
//$db->bind(':name', 'Margus Lääts');
//$db->bind(':email', 'margus@host.loc');
//$db->bind(':pass', 'qwerty');
//$db->execute();
echo '<pre>';
print_r($db);
echo '</pre>';
