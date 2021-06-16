<?php
$fields = array(  'connections','site','education','contacts','photo_max','status','city'
);
$request_params=array(
  'group_id' => 'apiclub',
  'sort'=>'id_asc',
  'offset'=>0,
  'count' => 30,
  'fields'=> implode (',', $fields),

  'acces_token' =>"30853a1830853a1830853a18cc30fd7b783308530853a18504c0a6e0ab273e2e159cd1f"
);
$url="https://api.vk.com/method/groups.getMembers?" . http_build_query($request_params);
$result=file_get_contents($url);
echo $result;
?>
