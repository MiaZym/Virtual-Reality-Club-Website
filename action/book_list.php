
<!DOCTYPE html>
<html lang="en-ru">
<head>
	<meta charset="UTF-8"/>
	<title>За гранью реальности</title>
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="scripts.js"></script>
	<link rel="icon" href="image/icon.png" sizes="128x128" type="image/png">
	<script src="https://cdn.jsdelivr.net/npm/three@0.136.0/build/three.min.js"></script>
</head>
<body>
    <div id="loading-screen">
		<div class="loading-animation"></div>
		<p class="loading-text">Загрузка...</p>
	  </div>

	<header>

		<div class="nav-bar">
			<div class="nav-bar h2">
				За гранью реальности
			</div>
		</div>	
    		

			<nav class="nav_2">
					<ul>
                        <li class="dropdown">

                            <img class="user-profile " src="image/icon.jpg"  alt="">

                            <ul class="dropdown-menu">
                                <li><a href="action/book_list.php">История</a></li>
                                <li><a href="action/exit.php">Выход</a></li>
                            </ul>

                        </li>
					</ul>
			

			</nav>

	</header>

    <main>
        
            <?php
                date_default_timezone_set('Russia/Moscow');
                $date = date('Y-m-d');


                $mysql = new mysqli('localhost', 'root', '', 'registervr-bd');

                $result = $mysql->query("SELECT * FROM `booking` WHERE `date`>='$date' ORDER BY `date` ");
                ?>
                
                
                <p style="padding-top:120px; padding-bottom:10px;"> 
                    <button class="btn" style="color: black; padding-bottom:0px; width: 40px; align-items:center; height: 40px;" onclick=" window.location.href = 'index.php' "><</button> 
                    <h2 style=" color:pink; text-align: center;">Ближайшие даты</h2><br>
                </p>

                <div class="forcontain" style="padding-bottom:30px; padding-top: 40px; padding-left: 30px; padding-bottom:20px;">
						<table class="contain" style="padding: 0 0 2em 0;margin: 0 0 0 10em;">
							<thead>
                                
								<tr>
									<th><h1> Имя </h1></th>
									<th><h1>Время </h1></th>
									<th><h1>Кол-во</h1></th>
								</tr>
							</thead>
							<tbody>
                <?php
                     while ($book = $result->fetch_assoc()){

                    ?>


                    <tr>            
                        <td> <?= $book['name'];?></td>
                        <td> <?= $book['date'];?></td>
                        <td> <?= $book['num_glasses'];?></td>

                     </tr>
                    
                    <?php }  ?>
                
                
                            </tbody>
					    </table>
					</div>   
         

                

                <?php
                $mysql->close();

                ?>

                
    
     </main>
    


    
</body>
</html>