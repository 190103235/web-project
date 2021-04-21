<!DOCTYPE html>
<html>

<head>
	<title>Tele2</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script> 
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body onload="load()">
	<script type="text/javascript" src="{{asset('/js/script.js')}}"></script>
	<div class="part1">
	<div class="nav">
			<label for="toggle">&#9776;</label>
	</div>
	<input type="checkbox" name="" id="toggle">

	<div id="head" class="header">
		<div><img id="logo" onclick="window.location.reload()"
				src="https://www.bestgamesworld.com/wp-content/uploads/2020/06/fas-ordered-tele2-to-cancel-the-increase-in-tariffs.jpg"
				width="140px" height="80px"></div>

		<div><a href="http://127.0.0.1:8000/lichnyi" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">{{__('Личный кабинет')}}</a></div>
		<div> <a href="http://127.0.0.1:8000/vibor" id="vibor" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">{{__('Выбор номера')}}</a></div>
		<div> <a href="http://127.0.0.1:8000/regestr" id="regestr" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">{{__('Регистрация номера')}}</a>
		</div>
		<div> <a href="http://127.0.0.1:8000/4g" id="g4" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">4G</a></div>
		<div> <a href="http://127.0.0.1:8000/covid" id="covid" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">COVID-19</a></div>
		<div class="verline"></div>
		
    	
		<div class="langs" id="app" onmouseover="big(this)" onmouseout="small(this)">
        	<nav class="navbar navbar-expand-lg navbar-dark container">
            	<div class="collapse navbar-collapse" id="navbarToggler" style="background-color: black;">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
                            @switch($locale)
                                @case('en')
                                <img width="20" src="{{asset('https://pngicon.ru/file/uploads/flag-velikobritanii.png')}}"> English
                                @break
                                @case('kz')
                                <img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/250px-Flag_of_Kazakhstan.svg.png')}}"> Қазақ тілі
                                @break
                                @case('ru')
                                <img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/250px-Flag_of_Russia.svg.png')}}"> Русский
                                @break
                                @default
                                <img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/250px-Flag_of_Russia.svg.png')}}"> Русский
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a style="color:black;" class="dropdown-item" href="/en"><img width="20" src="{{asset('https://pngicon.ru/file/uploads/flag-velikobritanii.png')}}"> English</a><br>
                            <a style="color:black;" class="dropdown-item" href="/kz"><img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/250px-Flag_of_Kazakhstan.svg.png')}}"> Қазақ тілі</a><br>
                            <a style="color:black;" class="dropdown-item" href="/ru"><img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/250px-Flag_of_Russia.svg.png')}}"> Русский язык</a>
                           
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

	</div>

	<div class="user_profile">
		<img src="https://thumbs.dreamstime.com/z/user-profile-my-account-avatar-login-icon-woman-female-face-smile-symbol-flat-vector-human-lady-person-member-sign-186506698.jpg"
			id="pro_img" alt="">
		<p id="user_name">Selena</p>
	</div>
	<div class="popup">
		<div class="popup-content">
			<img onclick="close_popup()" class="closed"
				src="data:image/png;base64,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"
				alt="" width="7%">
			<img src="data:image/png;base64,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"
				alt="" width="15%">
			<h1 style="color: black;">{{__('Войти в личный кабинет')}}</h1>
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn">Войти</button>
				<button type="button" class="toggle-btn">Рег</button>
			</div>
			<input id="username" type="text" name="username" placeholder="Username">
			<input type="password" id="pass" name="pass" placeholder="Password">
			<button onclick="login(username.value)" class="btn btn-outline-dark">Войти</button>

		</div>

	</div>
	<div>

	</div>
	<img id="img1" class="img1" src="https://old2018.tele2.kz/thumbs/1050x460c/2020-12/tele2-data-gift-sayt-1050x460-rus.jpg">
	<div class="part2">
		<h1 class="solution">{{__('Легко обменивай ресурсы в своем')}} <br>{{__('тарифном плане')}}</h1>

		<div class="container">
			<div class="card" style="width: 250px"> 
				<img class="card-img-top" src="https://old2018.tele2.kz/files/2018-02/tele2-3d-spalsh-ru-1-.jpg?db63fc3cf0" width="100%" height="50%"> 
				<div class="card-body">
					<h4 class="card-title">{{__('Тариф «Выгодный»')}}</h4>
    				<p class="card-text">1300 тг</p>
    				<button onclick="podklu()" class="btn btn-outline-dark btn-sm">{{__('Подключить')}}</button>
				</div>
			</div>
			<div class="card" style="width: 250px"> 
				<img class="card-img-top" src="https://simka.kz/wp-content/uploads/2018/01/vkljuchaisja_po_polnoij_ru.png" width="100%" height="50%">
				<div class="card-body">
					<h4 class="card-title">{{__('Тариф «Меняй всё»')}}</h4>
    				<p class="card-text">1000 тг</p>
    				<button onclick="podklu()" class="btn btn-outline-dark btn-sm">{{__('Подключить')}}</button>
				</div> 
			</div>
			<div class="card" style="width: 250px"> 
				<img class="card-img-top" src="data:image/jpeg;base64,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" width="100%" height="50%">
				<div class="card-body">
					<h4 class="card-title">{{__('Тариф «Возвратный»')}}</h4>
    				<p class="card-text">1500 тг</p>
    				<button onclick="podklu()" class="btn btn-outline-dark btn-sm">{{__('Подключить')}}</button>
				</div>
			</div>
			<div class="card" style="width: 250px"> 
				<img class="card-img-top" src="https://old2018.tele2.kz/files/2018-05/1525319700_-2-.png?4ad23bcbf2" width="100%" height="50%"> 
				<div class="card-body">
					<h4 class="card-title">{{__('Тариф «Оптимально»')}}</h4>
    				<p class="card-text">1100 тг</p>
    				<button onclick="podklu()" class="btn btn-outline-dark btn-sm">{{__('Подключить')}}</button>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
</div>
<div class="part3">
	<p id="uslugit">{{__('Услуги')}} Tele2</p>
	<div class="dives">

	<div class="pair1">
	<div id="div1" class="divv">
		<p>{{__('Поставь мелодию вместо гудка')}}</p>
		<h6>{{__('Поменяй монотонные гудки на любимую мелодию, шутку или оригинальный звук!')}}</h6>

	</div>
	<div id="div2" class="divv">
		<p>{{__('Доверительный платёж')}}</p>
		<h6>{{__('Если баланс твоего телефона близок к нулю, а пополнить счет нет возможности, с помощью услуги «Доверительный платеж» ты можешь зачислить платеж и продолжать общение')}}.</h6>
	</div>
	</div>

	<div class="pair2">
	<div id="div3" class="divv">
		<p>{{__('Роуминг. Путешествуя оставайся на связи!')}}</p>
		<h6>{{__('Роуминг – это возможность пользоваться услугами мобильной связи во время путешествий по всему миру, при любом положительном балансе')}}.</h6>
	</div>
	<div id="div4" class="divv">
		<p>{{__('Разовые интернет-пакеты')}}</p>
		<h6>{{__('Подключи разовый интернет пакет от Tele2 и получи 2, 4 или 8 Гб интернет трафика на месяц')}}</h6>
	</div>
</div>
	</div>
</div>

<div class="footer">
	<div class="pair3">
	<img id="logo2" src="https://www.bestgamesworld.com/wp-content/uploads/2020/06/fas-ordered-tele2-to-cancel-the-increase-in-tariffs.jpg" width="140px" height="80px">
	<span class="xx">{{__('Абонентская служба (бесплатно)')}} <br> 7-707-000-0707</span>
</div>
	<!-- <hr color="white">

<div class="addr">Мы находимся: <address>ул. Толе би, 101, БЦ Далич, центральный вход.
Открыт от 09:00 до 17:00</address>
<h3>Орентируйтесь по карте внизу </h3>
</div>

<div id="map"> 

</div> -->
<hr color="white">

	<p id="last">2018 © Tele2 {{__('Лицензия АБА № 000950 выдана АИС РК')}} <br>
{{__('Начиная с 28 июня 2019 г., ТОО <<Мобайл Телеком-Сервис>> больше не принадлежит и не является аффилированным лицом Tele2 Sverige AB или любого из аффилированных лиц такой компании')}}. <br>{{__('Товарный Знак и бренд Tele2 используется на основании лицензии, предоставленной Tele2 Sverige AB')}}</p>
</div>

</body>

</html>