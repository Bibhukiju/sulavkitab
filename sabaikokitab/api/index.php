<?php
require_once __DIR__ .'/config.php';
class API{
  function Select()
  {
    $db=new Connect;
    $users = array();
    $data=$db->prepare('SELECT * FROM bookinfo');
    $data->execute();
    while($Output=$data->fetch(PDO::FETCH_ASSOC))
    {
      array_push($users, array(
        'id'=>$Output['bookid'],
        'name'=>$Output['bookname'],
        'org'=>$Output['orgprice'],
        'mprice'=>$Output['myprice'],
      )
    );
    }
    return json_encode($users);
  }
}
$API = new API;
header('Content-Type: application/json');
echo $API->Select();
?>
