# vk
<?php header("Content-Type: text/html; charset=UTF-8");?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type:"css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"> 
	<title>Задание для ВК</title>
</head
<body>
<?php require "blocks/sod.php" ?> 
<?php
   $a = array('МЧС', 'J06 | B8', 'Команда ВКонтакте', 'RDS GP', 'a', 'HistoryPorn', 'dailysh',
	  'DANK MEMES AYY LMAO', 'Grizzly Knows No Remorse | GKNR','ITc | сообщество программистов');?> 
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Список рекомендованных мне групп, информацию о которых можно будет узнать.</h1>
<div class="d-flex flex-wrap">
			<?php for ($i=0; $i<=9; $i++):?> 
	<div class="card mb-4 rounded-3 shadow-sm">
			 <div class="card-header py-3">
				 <h4 class="my-0 fw-normal"><?php echo $a[$i];?></h4> 
			 </div>
			 <div class="card-body">
			 <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail"> 
				 <h1 class="card-title pricing-card-title"><small class="text-muted fw-light">Группа №<?php echo ($i+1) ?></small></h1> 
				 <ul class="list-unstyled mt-3 mb-4">
					
				 </ul>
<a href="group<?php echo ($i+1) ?>.php" class="w-100 btn btn-lg btn-outline-primary">Подброная информация о группе</a>
			 </div>
		 </div> <?php endfor?>
</div>
</div>
</body>
</html>
