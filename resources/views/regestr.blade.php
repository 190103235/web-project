<!DOCTYPE html>
<html>
<head>
	<title>Регестрация номера</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/regestr.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>
<body>
	<h1>{{__('Заявка на регистрацию')}} <br> {{__('абонентского номера')}}</h1>
	<p class="sub">{{__('Команда проверки регистрации номера')}} *835#</p>
	<div>
		<h3>{{__('Просим обратить внимание')}}!</h3>
<p id="text1">{{__('В соответствии с пунктом 9 Правил оказания услуг сотовой связи, утвержденного постановлением Правительства Республики Казахстан от 30 декабря 2011 года № 1718, услуги сотовой связи оказываются абоненту только после заключения с ним договора об оказании услуг сотовой связи')}}.</p>
<p id="text2">{{__('Формой регистрации могут воспользоваться только абоненты')}} Tele2.</p>
	</div>
	 
	
	<div>
	<form method = "POST" action="{{ route('add-user2') }}" enctype="multipart/form-data">
        @csrf
		<label>{{__('Ваши данные ')}}<span>*</span></label>
		<br>
		<div class="inpu">
		<input type="text" name="name" placeholder="{{__('Введите имя')}}">
		<input type="text" name="surname" placeholder="{{__('Введите фамилию')}}">
		<input type="text" name="iin" placeholder="{{__('Введите ИИН')}}">
		<input type="text" name="number" placeholder="{{__('Введите номер')}}">
		<button onclick="myf()" class="btn btn-outline-light" type="submit">{{__('Зарегестрироваться')}}</button>
		</div>
	</div>
	<img src="https://old.tele2.kz/media/static/images/Tele2_1194%D1%85500_KioZk_Site_RU.jpg">

	<script type="text/javascript">
		function myf() {
			alert("{{__('Зарегестрировано')}}!");
		}
	</script>
</body>
</html>