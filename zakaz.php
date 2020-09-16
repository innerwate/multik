<!DOCTYPE html>
<html>
<head>
	<title>Оригинальный подарок для Вашего ребенка.</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="photo-list">
			<div class="img-demo"><img src="https://www.film.ru/sites/default/files/styles/thumb_1024x450/public/trailers_frame/mv5bmtk2.jpg"></div>
		</div>
		<p>Для получения наилучшего результата загрузите фотографию с учетом следующих требований:</p>
		<ul>
			<li>Фронтальная фотография</li>
			<li>Лицо должно быть хорошо освещено, без теней</li>
			<li>Выражение лица должно быть нейтральным</li>
			<li>Без очков</li>
			<li>Без прядей на лице (с открытым лицом)</li>
		</ul>
		<form method="post" enctype="multipart/form-data" action="zakaz-2.php">
			<input type="file" name="picture" required>
			<input type="text" name="name" placeholder="Имя ребенка" required>
			<input type="text" name="phone" placeholder="Телефон" required>
			<input type="email" name="email" placeholder="E-mail" required>
			<input type="number" name="age" placeholder="Возраст" required>
			<label><span>Выберите пол:</span>
				<select name="pol">
					<option value="1">Мальчик</option>
					<option value="0">Девочка</option>
				</select>
			</label>
			<label style="display:none;"><span>Выберите тип прически:</span>
				<select name="prich">
					<option value="1">Каре</option>
					<option value="2">Лысый</option>
				</select>
			</label>
			<!--<label><span>Выберите цвет прически:</span>
				<select name="color_prich">
					<option value="1">Брюнет</option>
					<option value="2">Блондин</option>
				</select>
			</label>
			-->
			<input type="hidden" name="seria" value="<?=$_GET['seria']?>">
			<label><input type="checkbox" name="soglas" checked="" required>Согласие на обработку персональных данных</label>
			<a target="_blank" href="soglas.php">Согласие на обработку персональных данных</a>
			<p>Стоимость услуги составляет 10 рублей</p>
			<input type="submit" value="Оплатить">
		</form>
	</div>
	<div class="footer">
		<div class="container">
			<div class="left">
				<p>Мы оказываем услуги по проведению детских праздников, а также предлагаем Вам в качестве подарка на день рождения приобрести персональные видеоролики. Для заказа видеоролика Вам необходимо загрузить фотографию, заполнить необходимые данные и произвести оплату на сайте.</p>

				<p>Обращаем Ваше внимание, что на сайте доступна только оплата услуг по изготовлению персональных видеороликов. Все остальные услуги оказываются по предварительной записи с оплатой в месте оказания услуг.</p>
			</div>
			<div class="right">
				<p>Индивидуальный предприниматель Шевень Василий Петрович</p>
				<p>ОГРНИП 311504408100027</p>
				<p>ИНН 771503168686</p>
				<p>e-mail: demchuk-v@yandex.ru</p>
				<p>контактный телефон: 89653276806</p>
			</div>
		</div>
	</div>
</body>
</html>