
<!DOCTYPE html>
<html lang="en-ru">
<head>
	<meta charset="UTF-8"/>
	<title>За гранью реальности</title>
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="styles/animation_main.css">
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
    		

			<nav class="nav_1">
				<ul>
					<li><a href="#about">О нас</a></li>
					<li class="dropdown"><a href="#services">Предложения</a>
						<ul class="dropdown-menu2">
							<li><a href="">Игры</a></li><br>
							<li><a href="">Праздники</a></li><br>
							<li><a href="">Соревнования</a></li>
						</ul>
					</li>


					<li><a href="#events">События</a></li>
					<li><a href="#membership">Фотогалерея</a></li>
					<li><a href="#contact">Контакты</a></li>
				</ul>
			</nav>

			<nav class="nav_2">
					<ul>
						<?php 
							if ($_COOKIE['user']==''):
					
							?>
								<li> <button type="button" class="btn" onclick="JoinBtn()"> 
								<img class="user-profile " src="image/icon_user.png" style="padding:0; margin:0; width: 30px;height: 30px;" alt=""></button></li>
							
								<?php else: ?> 
								
									<!-- есть идея связанное с иконкой уведомления
										можно не делать личный кабинет, но сделать запись клиента в клуб 
										и в итогу как запис будет готова в строке уведомления это будет видно, 
										чтоб как уведомления бы приходило
										-->

									<li class="dropdown">

										<img class="user-profile " src="image/icon.jpg"  alt="">

										<ul class="dropdown-menu">
											<li><a href="action/book_list.php">История</a></li>
											<li><a href="action/exit.php">Выход</a></li>
										</ul>

									</li>
							<?php endif ?> 
					</ul>
			

			</nav>

	</header>

	<main>
		<!-- Modal -->
		
        <?php 
		if ($_COOKIE['user']==''):
		
		?>

		<section id="modal">
			<div class="flex">
				<button class="btn-close" onclick="Close()">X</button>
			  </div>
			<form id ="frm" action="action/intoweb.php" method="post">

					<label id="lbl_signup">Добро пожаловать!</label>
					<br><br>
					<label></label>
					<input type="text" name="name" placeholder="введите логин"><br>
					<input type="password" name="password" size="30" id="pass" placeholder="введите пароль" maxlength="30"><br><br>

					<br>
					
					<input type="submit" value="войти">

					<label><br> Хотите стать нашим постоянным клиентом?<br> <a>Отправьте заявку</a></label>

					<br><br>
			</form>
			

		</section>
		<div id="overlay"></div>

		<?php endif; ?>
		

		
		<section id="hero">

		<!-- плавающие точки -->
		<div class="bg">
			<div class="dotWrapper dotWrapper-1">
				<div class="dot dot-1"></div>
			</div>
			<div class="dotWrapper dotWrapper-2">
				<div class="dot dot-2"></div>
			</div>
			<div class="dotWrapper dotWrapper-3">
				<div class="dot dot-3"></div>
			</div>
			<div class="dotWrapper dotWrapper-4">
				<div class="dot dot-4"></div>
			</div>
			<div class="dotWrapper dotWrapper-5">
				<div class="dot dot-5"></div>
			</div>
			<div class="dotWrapper dotWrapper-6">
				<div class="dot dot-6"></div>
			</div>
			<div class="dotWrapper dotWrapper-7">
				<div class="dot dot-7"></div>
			</div>
			<div class="dotWrapper dotWrapper-8">
				<div class="dot dot-8"></div>
			</div>
			<div class="dotWrapper dotWrapper-9">
				<div class="dot dot-9"></div>
			</div>
			<div class="dotWrapper dotWrapper-10">
				<div class="dot dot-10"></div>
			</div>
			<div class="dotWrapper dotWrapper-11">
				<div class="dot dot-11"></div>
			</div>
			<div class="dotWrapper dotWrapper-12">
				<div class="dot dot-12"></div>
			</div>
			<div class="dotWrapper dotWrapper-13">
				<div class="dot dot-13"></div>
			</div>
			<div class="dotWrapper dotWrapper-14">
				<div class="dot dot-14"></div>
			</div>
			<div class="dotWrapper dotWrapper-15">
				<div class="dot dot-15"></div>
			</div>
			<div class="dotWrapper dotWrapper-16">
				<div class="dot dot-16"></div>
			</div>
			<div class="dotWrapper dotWrapper-17">
				<div class="dot dot-17"></div>
			</div>
			<div class="dotWrapper dotWrapper-18">
				<div class="dot dot-18"></div>
			</div>
			<div class="dotWrapper dotWrapper-19">
				<div class="dot dot-19"></div>
			</div>
			<div class="dotWrapper dotWrapper-20">
				<div class="dot dot-20"></div>
			</div>
			<div class="dotWrapper dotWrapper-21">
				<div class="dot dot-21"></div>
			</div>
			<div class="dotWrapper dotWrapper-22">
				<div class="dot dot-22"></div>
			</div>
			<div class="dotWrapper dotWrapper-23">
				<div class="dot dot-23"></div>
			</div>
			<div class="dotWrapper dotWrapper-24">
				<div class="dot dot-24"></div>
			</div>
			<div class="dotWrapper dotWrapper-25">
				<div class="dot dot-25"></div>
			</div>
			<div class="dotWrapper dotWrapper-26">
				<div class="dot dot-26"></div>
			</div>
			<div class="dotWrapper dotWrapper-27">
				<div class="dot dot-27"></div>
			</div>
			<div class="dotWrapper dotWrapper-28">
				<div class="dot dot-28"></div>
			</div>
			<div class="dotWrapper dotWrapper-29">
				<div class="dot dot-29"></div>
			</div>
			<div class="dotWrapper dotWrapper-30">
				<div class="dot dot-30"></div>
			</div>
			<div class="dotWrapper dotWrapper-31">
				<div class="dot dot-31"></div>
			</div>
			<div class="dotWrapper dotWrapper-32">
				<div class="dot dot-32"></div>
			</div>
			<div class="dotWrapper dotWrapper-33">
				<div class="dot dot-33"></div>
			</div>
			<div class="dotWrapper dotWrapper-34">
				<div class="dot dot-34"></div>
			</div>
			<div class="dotWrapper dotWrapper-35">
				<div class="dot dot-35"></div>
			</div>
			<div class="dotWrapper dotWrapper-36">
				<div class="dot dot-36"></div>
			</div>
			<div class="dotWrapper dotWrapper-37">
				<div class="dot dot-37"></div>
			</div>
			<div class="dotWrapper dotWrapper-38">
				<div class="dot dot-38"></div>
			</div>
			<div class="dotWrapper dotWrapper-39">
				<div class="dot dot-39"></div>
			</div>
			<div class="dotWrapper dotWrapper-40">
				<div class="dot dot-40"></div>
			</div>
			<div class="dotWrapper dotWrapper-41">
				<div class="dot dot-41"></div>
			</div>
			<div class="dotWrapper dotWrapper-42">
				<div class="dot dot-42"></div>
			</div>
			<div class="dotWrapper dotWrapper-43">
				<div class="dot dot-43"></div>
			</div>
			<div class="dotWrapper dotWrapper-44">
				<div class="dot dot-44"></div>
			</div>
			<div class="dotWrapper dotWrapper-45">
				<div class="dot dot-45"></div>
			</div>
			<div class="dotWrapper dotWrapper-46">
				<div class="dot dot-46"></div>
			</div>
			<div class="dotWrapper dotWrapper-47">
				<div class="dot dot-47"></div>
			</div>
			<div class="dotWrapper dotWrapper-48">
				<div class="dot dot-48"></div>
			</div>
			<div class="dotWrapper dotWrapper-49">
				<div class="dot dot-49"></div>
			</div>
			<div class="dotWrapper dotWrapper-50">
				<div class="dot dot-50"></div>
			</div>
			<div class="dotWrapper dotWrapper-51">
				<div class="dot dot-51"></div>
			</div>
			<div class="dotWrapper dotWrapper-52">
				<div class="dot dot-52"></div>
			</div>
			<div class="dotWrapper dotWrapper-53">
				<div class="dot dot-53"></div>
			</div>
			<div class="dotWrapper dotWrapper-54">
				<div class="dot dot-54"></div>
			</div>
			<div class="dotWrapper dotWrapper-55">
				<div class="dot dot-55"></div>
			</div>
			<div class="dotWrapper dotWrapper-56">
				<div class="dot dot-56"></div>
			</div>
			<div class="dotWrapper dotWrapper-57">
				<div class="dot dot-57"></div>
			</div>
			<div class="dotWrapper dotWrapper-58">
				<div class="dot dot-58"></div>
			</div>
			<div class="dotWrapper dotWrapper-59">
				<div class="dot dot-59"></div>
			</div>
			<div class="dotWrapper dotWrapper-60">
				<div class="dot dot-60"></div>
			</div>
			<div class="dotWrapper dotWrapper-61">
				<div class="dot dot-61"></div>
			</div>
			<div class="dotWrapper dotWrapper-62">
				<div class="dot dot-62"></div>
			</div>
			<div class="dotWrapper dotWrapper-63">
				<div class="dot dot-63"></div>
			</div>
			<div class="dotWrapper dotWrapper-64">
				<div class="dot dot-64"></div>
			</div>
			<div class="dotWrapper dotWrapper-65">
				<div class="dot dot-65"></div>
			</div>
			<div class="dotWrapper dotWrapper-66">
				<div class="dot dot-66"></div>
			</div>
			<div class="dotWrapper dotWrapper-67">
				<div class="dot dot-67"></div>
			</div>
			<div class="dotWrapper dotWrapper-68">
				<div class="dot dot-68"></div>
			</div>
			<div class="dotWrapper dotWrapper-69">
				<div class="dot dot-69"></div>
			</div>
			<div class="dotWrapper dotWrapper-70">
				<div class="dot dot-70"></div>
			</div>
			<div class="dotWrapper dotWrapper-71">
				<div class="dot dot-71"></div>
			</div>
			<div class="dotWrapper dotWrapper-72">
				<div class="dot dot-72"></div>
			</div>
			<div class="dotWrapper dotWrapper-73">
				<div class="dot dot-73"></div>
			</div>
			<div class="dotWrapper dotWrapper-74">
				<div class="dot dot-74"></div>
			</div>
			<div class="dotWrapper dotWrapper-75">
				<div class="dot dot-75"></div>
			</div>
			<div class="dotWrapper dotWrapper-71">
				<div class="dot dot-71"></div>
			</div>
			<div class="dotWrapper dotWrapper-72">
				<div class="dot dot-72"></div>
			</div>
			<div class="dotWrapper dotWrapper-73">
				<div class="dot dot-73"></div>
			</div>
			<div class="dotWrapper dotWrapper-74">
				<div class="dot dot-74"></div>
			</div>
			<div class="dotWrapper dotWrapper-75">
				<div class="dot dot-75"></div>
			</div>
			<div class="dotWrapper dotWrapper-71">
				<div class="dot dot-71"></div>
			</div>
			<div class="dotWrapper dotWrapper-72">
				<div class="dot dot-72"></div>
			</div>
			<div class="dotWrapper dotWrapper-73">
				<div class="dot dot-73"></div>
			</div>
			<div class="dotWrapper dotWrapper-74">
				<div class="dot dot-74"></div>
			</div>
			<div class="dotWrapper dotWrapper-75">
				<div class="dot dot-75"></div>
			</div>
			<div class="dotWrapper dotWrapper-71">
				<div class="dot dot-71"></div>
			</div>
			<div class="dotWrapper dotWrapper-72">
				<div class="dot dot-72"></div>
			</div>
			<div class="dotWrapper dotWrapper-73">
				<div class="dot dot-73"></div>
			</div>
			<div class="dotWrapper dotWrapper-74">
				<div class="dot dot-74"></div>
			</div>
			<div class="dotWrapper dotWrapper-75">
				<div class="dot dot-75"></div>
			</div>
			<div class="dotWrapper dotWrapper-71">
				<div class="dot dot-71"></div>
			</div>
			<div class="dotWrapper dotWrapper-72">
				<div class="dot dot-72"></div>
			</div>
			<div class="dotWrapper dotWrapper-73">
				<div class="dot dot-73"></div>
			</div>
			<div class="dotWrapper dotWrapper-74">
				<div class="dot dot-74"></div>
			</div>
			<div class="dotWrapper dotWrapper-75">
				<div class="dot dot-75"></div>
			</div>
			</div>
		<!--  -->
			
			<div class="container">
				
				<img data-speed=".6" class="hero" src="image/hero.png" alt="Alt">

						<div data-speed=".75" class="main-header">
							<h1 class="main-title" style="font-size: 30px;">
							Открой новые миры и переступи <br>
							границы реальности вместе с нами!<br><br>
							<button class="button type3" onclick="booking()">
							Записаться!
							</button>
							</h1>
							
						</div>
						
				</img>
				
			</div>


				<div id="modal_book">
					<div class="flex">
						<button class="btn-close" onclick="book_close()">X</button>
					</div>
					<form id ="frm2" action="action/booking.php" method="post">

							<label id="lbl_signup">Записаться</label>
							<br><br>
							<label></label>
							<input type="text" id="name_book" name="name_book" placeholder="Введите ваше имя"><br>

							<input type="text" id="phone_book" name="phone_book" placeholder="+7(123)456-78-90"><br>

							<label>Когда начнем?<br></label>
							<input type="date" id="date_book" name="date_book" style="width: 208px;">
							
							<br><br>
							<label>Кол-во шлемов: 
							<input id="glasses_book" type="number" name="glasses_book" size="10" style="
										width: 68px;
										border-left-width: 0px;
										border-bottom-width: 0px;
									"><br></label>
							<br>
							<label>Оплата:</label>
							<select name="payradio" id="payradio">
								<option value="карта" selected>Картой</option>
								<option value="наличные">Наличными</option>

							</select>

							
								<br><br>

							<input type="submit" value="подтвердить">

							<br><br>
					</form>
			

				</div>

				
			


		</section>


		

		<section id="about">
			<div class="container">
				<h2 style="font-size:44px;">О нас</h2>
				<br>
				 <p>Клуб виртуальной реальности "За гранью реальности" - это уникальное место для тех, кто хочет окунуться в мир виртуальных приключений и открыть для себя новые грани реальности. <br><br>
				 У нас есть самое современное оборудование, разнообразные программы и игры, а также опытные инструкторы, которые помогут вам освоиться в этом мире и получить максимум удовольствия. 
				 <br><br>Мы также предлагаем организацию корпоративных мероприятий, детских праздников и частных вечеринок в нашем клубе.<br> <br>
					
					<h2 style="padding-top:40px; color:pink; text-align: center;">Цены</h2>

					<div class="forcontain">
						<table class="contain">
							<thead>
								<tr>
									<th><h1> </h1></th>
									<th><h1>Будни пн-пт (пт до 18:00)</h1></th>
									<th><h1>Выходные сб-вс (пт после 18:00)</h1></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>30 минут</td>
									<td>450₽</td>
									<td>700₽</td>

								</tr>
								<tr>
									<td>60 минут</td>
									<td>800₽</td>
									<td>1200₽</td>

								</tr>
								<tr>
									<td>4 шлема 1 час</td>
									<td>3200₽</td>
									<td>4800₽</td>

								</tr>
							<tr>
									<td>8 шлемов 1 час</td>
									<td>6800₽</td>
									<td>9600₽</td>

								</tr>

							</tbody>
						</table>
					</div>


					<h2 style="padding-top:40px; color:pink; text-align: center;">VIP комнаты</h2>
					<div class="forcontain">
						<table class="contain">

							<tbody>
								<tr>
									<td>VIP комнаты</td>
									<td>700₽ (1 час)</td>

								</tr>


							</tbody>
						</table>
					</div>


					<h2 style="padding-top:40px;color:pink; text-align: center;">Антикафе</h2>

					<div class="forcontain">
					<table class="contain">
						<thead>
							<tr>
								<th><h1> </h1></th>
								<th><h1>10:00-24:00</h1></th>
								<th><h1>После 24:00 (по записи)</h1></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1 минута</td>
								<td>2,5₽</td>
								<td>3₽</td>

							</tr>
							<tr>
								<td>1 час</td>
								<td>150₽</td>
								<td>180₽</td>

							</tr>


						</tbody>
					</table>
					</div>

			</div>
		</section>

		<section id="services">
			<div class="container">
				<br>
				<h2 style="font-size:44px;">Предложения</h2>
				<br><br>
				<!-- <ul>
					<li>Игры в виртуальной реальности</li>
					<li>Впечатления от VR-фильмов</li>
					<li>Командные соревнования</li>
					<li>Тематические комнаты для дня рождения</li>
				</ul> -->


				<div class="page-content">
					<div class="card">
						<div class="content">
						<h2 class="title">Игры</h2>
						<p class="copy">Открой для себя мир бесконечных возможностей: исследуй сотни игр в виртуальной реальности!</p>
						<button class="btn2">Посмотреть</button>
						</div>
					</div>
					<div class="card">
						<div class="content">
						<h2 class="title">Праздники</h2>
						<p class="copy">Уникальная атмосфера и индивидуальный подход к каждому клиенту с организацией праздника на высшем уровне.</p>
						<button class="btn2">Посмотреть</button>
						</div>
					</div>
					<div class="card">
						<div class="content">
						<h2 class="title">Соревнования</h2>
						<p class="copy">Примите участие в захватывающих соревнованиях виртуальной реальности в нашем клубе и покажите свои навыки в самых популярных играх!</p>
						<button class="btn2">Посмотреть</button>
						</div>
					</div>
					
				</div>














			</div>
		</section>

		<section id="events">
			<div class="container">
				<h2 style="font-size:44px;">Предстоящие события</h2>
				
				
				<ul>
					<li>"VR Arena Battle" - битва на арене виртуальной реальности</li>
					<li>"Cyber Quest" - кибер-квест с использованием VR технологий</li>
					<li>"Virtual Speedway" - соревнования на виртуальных автодромах</li>
					<li>"Zero Gravity Challenge" - человек против гравитации в VR пространстве</li>
					<li>"Infinite Galaxy" - многопользовательская игра в открытом космосе</li>
					<li>"Virtual Reality Olympics" - олимпийские игры в виртуальной реальности.</li>
				</ul>
				
				
				
				
				<br><br>
				<h3 style="color:pink;">подробности по телефону</h3> <br>

			</div>
		</section>

		<section id="membership">
			<div class="container">
				<h2 style="font-size:44px;">Фотогалерея</h2>
				<div class="Gallery">

					<div>
						<img src='https://i.pinimg.com/564x/26/bc/71/26bc712daa4d341ad9a7a7cf72deeec7.jpg'>

					</div>
					<div>
						<img src='https://i.pinimg.com/564x/50/fc/95/50fc9555238c19534e454ba00f6fbb7c.jpg'>

					</div>
					<div>
						<img src='https://i.pinimg.com/564x/4a/31/bf/4a31bfab58bd9d7f36db695d011b2d7e.jpg'>

					</div>

					
					<div>
						<img src='https://i.pinimg.com/564x/be/e8/d6/bee8d6500eeda2d8926564e6a195d342.jpg' >

					</div>
					

					<div>
						<img src='https://i.pinimg.com/564x/35/67/d3/3567d390d9434f37c7782061b33e63b9.jpg'>

					</div>

					<div>
						<img src='https://i.pinimg.com/564x/a9/38/86/a9388631a94eb9a8276aa0f1eac00960.jpg'>

					</div>
					
					<div>
						<img  src='https://i.pinimg.com/564x/26/56/6b/26566b0e72c272046a19b742ccddd766.jpg' alt=''>

					</div>
					<div>
						<img src='https://i.pinimg.com/564x/06/66/cf/0666cf201891917fa46093899753dab1.jpg' alt='1'>

					</div>
					<div>
						<img  src='https://i.pinimg.com/564x/26/86/fe/2686fe6510c580a7a505302cddb4d001.jpg' alt=''>

					</div>
					<div>
						<img src='https://i.pinimg.com/236x/dc/5d/bc/dc5dbc70a57cd63751a9a0af5e1abb02.jpg'>

					</div>



					<div>
						<img  src='https://i.pinimg.com/736x/b1/d8/15/b1d815a301fc3a78a4564f78b8091ec4.jpg'>  

					</div>

				</div>
			</div>

		</section>

		<section id="contact">
			<div class="container">

			<div class="row">
				<div class="col-md-6">
					<p>&copy; 2023 За гранью реальности. Все права защищены.</p>
					<p>Контакты: info@virtualclub.com</p>
				</div>
			</div>

			
			</div>
		</section>
	</main>

</body>
</html>