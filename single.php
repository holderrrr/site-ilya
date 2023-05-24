<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
.butpopup {
    display: inline-block;
    background-image: url(https://nova-house.ru/wp-content/themes/doma/img/header-order-link.png);
    background-size: 100% 100%;
    padding: 7px 12px;
    color: #fff;
    font-size: 16px;
    border-radius: 5px;
}
.inputitem {

    display: block;
    width: 82%;
    height: 47px;
    margin-top: 15px;
    padding: 0 15px;
    border: 1px solid #aaa6a1;
    border-radius: 5px;
    outline: none;
    box-shadow: inset 3px 3px 9px 0px #d2d2d2;
    font-size: 19px;
    color: #786e64;
}
.butpopupmain {
    height: 48px;
    padding: 6 29px;
    margin: 0 auto;
    font-size: 33px;
    color: #fff;
    background-color: transparent;
    background-image: url(https://nova-house.ru/wp-content/themes/doma/img/send-request-button.png);
    background-size: 100% 100%;
    border: 0;
    outline: 0;
    text-transform: uppercase;
}

/*----------------------------------------------
POPUP
------------------------------------------------*/
#abc {
width:100%;
height:100%;
opacity:.95;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto;
z-index: 1;
}
img#close {
position:absolute;
right:-14px;
top:-14px;
cursor:pointer
}
div#popupContact {
width:600px;
position:absolute;
left:50%;
top:17%;
margin-left:-202px;
font-family:'Raleway',sans-serif
}
.formcalc {
//max-width:300px;
//min-width:250px;
padding:10px 50px;
border:2px solid gray;
border-radius:10px;
//font-family:raleway;
background-color:#fff
}
p {
margin-top:30px
}

</style>

<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<img id="close" width="30px" src="https://nova-house.ru/wp-content/uploads/2017/06/close-1.png" onclick ="div_hide()">

<form class = "formcalc" id = "formpopup"  onsubmit="paramsF()" name="calc">
<center>
	<h1>Рассчитать стоимость</h1>

 <div class="form-item">
	<input type="text" id="long" name="long" onkeyup="onLong()" value="" class="inputitem" placeholder="Длинна в метрах" required>
</div> 
	<div class="form-item">
	<input type="text" id="width" name="width" onkeyup="onLong()" class="inputitem" placeholder="Ширина в метрах" required>
</div>

	<h1>Цена: <span id = "editSumma" name="editSumma"></span></h1>
	<br/>

	
	<h1>Кровля</h1>
	
	<div class="butpopup" onclick="krov1Sum()" id="kanal"> <i class=" fa fa-check fa-lg" id="krov1icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Двускатная</div>
	<div class="butpopup" onclick="krov2Sum()" id="kanal"> <i class=" fa fa-check fa-lg" id="krov2icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Шатровая</div>
	<div class="butpopup" onclick="krov3Sum()" id="kanal"> <i class=" fa fa-check fa-lg" id="krov3icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Плоская</div>
	<br/>
	<h1>Утепление</h1>
	<div class="butpopup" onclick="utepl1Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="utepl1icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Дачный 100мм</div>
	<div class="butpopup" onclick="utepl2Sum()" id="kanal"><i class=" fa fa-check fa-lg" id="utepl2icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Зимний 150мм</div>
	<div class="butpopup" onclick="utepl3Sum()" id="kanal"><i class=" fa fa-check fa-lg" id="utepl3icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Энергоэффективный</div>
	<br/>
	<h1>Окна</h1>
	<div class="butpopup" onclick="okna1Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="okna1icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Однокамерные</div>
	<div class="butpopup" onclick="okna2Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="okna2icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Двухкамерные</div>
	<div class="butpopup" onclick="okna3Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="okna3icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Энергоэффективные</div>
	<br/>
	<h1>Коммуникации</h1>
	<div type="div" class="butpopup" onclick="electroSum()" id="kanal" ><i class=" fa fa-check fa-lg" id="electroicon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Электричество</div>

	
	<div type="div" class="butpopup" onclick="vodaSum()" id="kanal" ><i class=" fa fa-check fa-lg" id="vodaicon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Водоснабжение</div>


	<div type="div" class="butpopup" onclick="kanalSum()" id="kanal" ><i class=" fa fa-check fa-lg" id="kanalicon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Канализация</div>


	<br/>
	<h1>Отопление</h1>
	<div type="div" class="butpopup" onclick="otopl1Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="otopl1icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>ИК-теплые полы</div>
	<div type="div" class="butpopup" onclick="otopl2Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="otopl2icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Водяное</div>
	<br/>
	<h1>Внутренняя отделка</h1>
		<div type="div" class="butpopup" onclick="vnotdel1Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="vnotdel1icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Эконом</div>
		<div type="div" class="butpopup" onclick="vnotdel2Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="vnotdel2icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Стандарт</div>
		<div type="div" class="butpopup" onclick="vnotdel3Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="vnotdel3icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Премиум</div>
		<br/>
	<h1>Фасад</h1>
		<div type="div" class="butpopup" onclick="fasad1Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="fasad1icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Вент. Фасад</div>
		<div type="div" class="butpopup" onclick="fasad2Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="fasad2icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Штукатурный</div>
		<div type="div" class="butpopup" onclick="fasad3Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="fasad3icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Фах. Верк</div>
		<br/>
	<h1>Фундамент</h1>
		<div type="div" class="butpopup" onclick="fund1Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="fund1icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Свайный</div>
		<div type="div" class="butpopup" onclick="fund2Sum()" id="kanal" ><i class=" fa fa-check fa-lg" id="fund2icon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Ленточный</div>
	<br/>
	<br/>
 <div type="div" class="butpopup" onclick="septikSum()" id="kanal" ><i class=" fa fa-check fa-lg" id="septikicon" aria-hidden="true" style="margin-right: 5px;display: none;" ></i>Септик</div>
	

<div class="form-item">
	<input type="email" name="email" class="inputitem" placeholder="Ваш email" required>
</div> 
<div class="form-item">
	<input type="phone" name="phone" class="inputitem" placeholder="Ваш телефон" required>
</div> 
	<br/>
<br/>
<div class="g-recaptcha" data-sitekey="6LdM3CYUAAAAAHS8Kd-lZ7YQCcd19Wh-joiKTmJk"></div>
<br/>
<div class="text-danger" id="recaptchaError"></div>
<br/>
	<input type="submit" class="butpopupmain" value = "Отправить">
<br/>
<br/>

<input type="hidden" id="elseParam" name="paramElse" value="">
</center>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>

<script>
  $(document).ready(function() { // вся мaгия пoслe зaгрузки стрaницы
	$("#formpopup").submit(function() {

var captcha = grecaptcha.getResponse();
 
// 2. Если ответ пустой, то выводим сообщение о том, что пользователь не прошёл тест.
// Такую форму не будем отправлять на сервер.
if (!captcha.length) {
  // Выводим сообщение об ошибке
  $('#recaptchaError').text('Вы не прошли проверку "Я не робот"');
	return false;
} else {
  // получаем элемент, содержащий капчу
  $('#recaptchaError').text('');
}
 

			$.ajax({
            type: "POST", //Метод отправки
            url: "https://nova-house.ru/wp-content/themes/doma/js/form_calc.php", 
            data: $(this).serialize()
			}).done(function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   alert("Спасибо! Ваша заявка отправлена, наш менеджер скоро свяжется с Вами.");
					document.getElementById('abc').style.display = "none";
				});
			return false;


	});
});   

</script>

<script>

function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}

//Calculator
var summa = 0;

var longEl = document.getElementById("long");
var widthEl = document.getElementById("width");
var long = 0;
var width = 0;
var summaBase = 0;

var electroBool = false;
var sumElectro = 0;
var vodaBool = false;
var sumVoda = 0;
var kanalBool = false;
var sumKanal = 0;
var septikBool = false;
var sumSeptik = 0;

var krov1Bool = false;
var sumKrov1 = 0;
var krov2Bool = false;
var sumKrov2 = 0;
var krov3Bool = false;
var sumKrov3 = 0;

var utepl1Bool = false;
var sumUtepl1 = 0;
var utepl2Bool = false;
var sumUtepl2 = 0;
var utepl3Bool = false;
var sumUtepl3 = 0;

var okna1Bool = false;
var sumOkna1 = 0;
var okna2Bool = false;
var sumOkna2 = 0;
var okna3Bool = false;
var sumOkna3 = 0;

var otopl1Bool = false;
var sumOtopl1 = 0;
var otopl2Bool = false;
var sumOtopl2 = 0;

var vnotdel1Bool = false;
var sumVnotdel1 = 0;
var vnotdel2Bool = false;
var sumVnotdel2 = 0;
var vnotdel3Bool = false;
var sumVnotdel3 = 0;

var fasad1Bool = false;
var sumFasad1 = 0;
var fasad2Bool = false;
var sumFasad2 = 0;
var fasad3Bool = false;
var sumFasad3 = 0;

var fund1Bool = false;
var sumFund1 = 0;
var fund2Bool = false;
var sumFund2 = 0;

var s = "";

function sumAll(){
	return summaBase + sumElectro + sumVoda + sumKanal + sumSeptik + sumKrov1 + sumKrov2 + sumKrov3 + sumUtepl1 + sumUtepl2 + sumUtepl3+sumOkna1 + sumOkna2 + sumOkna3 + sumOtopl1 + sumOtopl2 + sumVnotdel1 + sumVnotdel2 + sumVnotdel3 + sumFasad1 + sumFasad2 + sumFasad3 + sumFund1 + sumFund2;
}

function paramsF() {

	var s = "";
	if (electroBool) {
		s = s + "Электричество:" + Math.round(sumElectro) + '\n';
	}
	if (vodaBool) {
		s = s + "Водоснабжение:" + Math.round(sumVoda) + '\n';
	}
	if (kanalBool) {
		s = s + "Канализация:" + Math.round(sumKanal) + '\n';
	}
	if (septikBool) {
		s = s + "Септик:" + Math.round(sumSeptik) + '\n';
	}
	if (krov1Bool) {
		s = s + "Кровля Двускатная :" + Math.round(sumKrov1) + '\n';
	}
	if (krov2Bool) {
		s = s + "Кровля Шатровая:" + Math.round(sumKrov2) + '\n';
	}
	if (krov3Bool) {
		s = s + "Кровля Плоская:" + Math.round(sumKrov3) + '\n';
	}
	if (utepl1Bool) {
		s = s + "Утепление Дачный 100мм:" + Math.round(sumUtepl1) + '\n';
	}
	if (utepl2Bool) {
		s = s + "Утепление Зимний 150мм:" + Math.round(sumUtepl2) + '\n';
	}
	if (utepl3Bool) {
		s = s + "Утепление Энергоэффективный:" + Math.round(sumUtepl3) + '\n';
	}
	if (okna1Bool) {
		s = s + "Окна Однокамерные:" + Math.round(sumOkna1) + '\n';
	}
	if (okna2Bool) {
		s = s + "Окна Двухкамерные:" + Math.round(sumOkna2) + '\n';
	}
	if (okna3Bool) {
		s = s + "Окна Энергоэффективные:" + Math.round(sumOkna3) + '\n';
	}
	if (otopl1Bool) {
		s = s + "Отопление ИК-теплые полы:" + Math.round(sumOtopl1) + '\n';
	}
	if (otopl2Bool) {
		s = s + "Отопление Водяное:" + Math.round(sumOtopl2) + '\n';
	}
	if (vnotdel1Bool) {
		s = s + "Внутренняя отделка Эконом:" + Math.round(sumVnotdel1) + '\n';
	}
	if (vnotdel2Bool) {
		s = s + "Внутренняя отделка Стандарт:" + Math.round(sumVnotdel2) + '\n';
	}
	if (sumVnotdel3) {
		s = s + "Внутренняя отделка Премиум:" + Math.round(sumVnotdel3) + '\n';
	}
	if (fund1Bool) {
		s = s + "Фундамент Свайный:" + Math.round(sumFund1) + '\n';
	}
	if (fund2Bool) {
		s = s + "Фундамент Ленточный:" + Math.round(sumFund2) + '\n';
	}
	if (fasad1Bool) {
		s = s + "Фасад Вент. Фасад:" + Math.round(sumFasad1) + '\n';
	}
	if (fasad2Bool) {
		s = s + "Фасад Штукатурный:" + Math.round(sumFasad2) + '\n';
	}
	if (fasad3Bool) {
		s = s + "Фасад Фах. Верк:" + Math.round(sumFasad3) + '\n';
	}

	s = s +"Общая сумма:" + Math.round(sumAll());

	document.getElementById("elseParam").value = s;
}



function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

function onLong() {
	if (longEl.value == "") {
		long = 0;
	} else if (!isNumeric(longEl.value.replace(",","."))) {
		document.getElementById("editSumma").innerHTML = "Некорректное значение";
		return;
	} else {
		long = parseFloat(longEl.value.replace(",","."))
	}

	if (widthEl.value == "") {
		width = 0;
	} else if (!isNumeric(widthEl.value.replace(",","."))) {
		document.getElementById("editSumma").innerHTML = "Некорректное значение";
		return; 
	} else {
		width = parseFloat(widthEl.value.replace(",","."))
	}

	summaBase = long * width * 8500;
	document.getElementById("editSumma").innerHTML = sumAll();
	//paramsF();
	return;
}

function electroSum() {
	if (electroBool) {
		sumElectro = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('electroicon').style.display = 'none';
		electroBool = false;
	} else {
		sumElectro = long * width * 800;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('electroicon').style.display = 'inline';
		electroBool = true;
	}
	//paramsF();
}

function vodaSum() {
	if (vodaBool) {
		sumVoda = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('vodaicon').style.display = 'none';
		vodaBool = false;
	} else {
		sumVoda = long * width * 2 * 400;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('vodaicon').style.display = 'inline';
		vodaBool = true;
	}

	//paramsF();
	return;
}

function kanalSum() {
	if (kanalBool) {
		sumKanal = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('kanalicon').style.display = 'none';
		kanalBool = false;
	} else {
		sumKanal = long * width * 2 * 300;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('kanalicon').style.display = 'inline';
		kanalBool = true;
	}

	//paramsF();
	return;
}

function septikSum() {
	if (septikBool) {
		sumSeptik = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('septikicon').style.display = 'none';
		septikBool = false;
	} else {
		sumSeptik = 85000;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('septikicon').style.display = 'inline';
		septikBool = true;
	}

	//paramsF();
	return;
}

function krov1Sum() {
	if (krov1Bool) {
		sumKrov1 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('krov1icon').style.display = 'none';
		document.getElementById('krov2icon').style.display = 'none';
		document.getElementById('krov3icon').style.display = 'none';
		krov1Bool = false;
		krov2Bool = false;
		krov3Bool = false;
	} else {
		sumKrov1 = long * width * 1.3 * 2000; //   Д х Ш х 1,3 х 2000;
		sumKrov2 = 0;
		sumKrov3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('krov1icon').style.display = 'inline';
		document.getElementById('krov2icon').style.display = 'none';
		document.getElementById('krov3icon').style.display = 'none';
		krov1Bool = true;
		krov2Bool = false;
		krov3Bool = false;
	}
	return;
}

function krov2Sum() {
	if (krov2Bool) {
		sumKrov2 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('krov1icon').style.display = 'none';
		document.getElementById('krov2icon').style.display = 'none';
		document.getElementById('krov3icon').style.display = 'none';
		krov1Bool = false;
		krov2Bool = false;
		krov3Bool = false;
	} else {
		sumKrov1 = 0;
		sumKrov2 = long * width * 1.7 * 2000;
		sumKrov3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('krov1icon').style.display = 'none';
		document.getElementById('krov2icon').style.display = 'inline';
		document.getElementById('krov3icon').style.display = 'none';
		krov1Bool = false;
		krov2Bool = true;
		krov3Bool = false;
	}
	return;
}

function krov3Sum() {
	if (krov3Bool) {
		sumKrov3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('krov1icon').style.display = 'none';
		document.getElementById('krov2icon').style.display = 'none';
		document.getElementById('krov3icon').style.display = 'none';
		krov1Bool = false;
		krov2Bool = false;
		krov3Bool = false;
	} else {
		sumKrov1 = 0;
		sumKrov2 = 0;
		sumKrov3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('krov1icon').style.display = 'none';
		document.getElementById('krov2icon').style.display = 'none';
		document.getElementById('krov3icon').style.display = 'inline';
		krov1Bool = false;
		krov2Bool = false;
		krov3Bool = true;
	}
	return;
}

function utepl1Sum() {
	if (utepl1Bool) {
		sumUtepl1 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('utepl1icon').style.display = 'none';
		document.getElementById('utepl2icon').style.display = 'none';
		document.getElementById('utepl3icon').style.display = 'none';
		utepl1Bool = false;
		utepl2Bool = false;
		utepl3Bool = false;
	} else {
		sumUtepl1 = (long + width) * 10 + long * width * 3 * 0.1 * 2200;  //(Д+Ш) х 10 + (Д х Ш х 3) х 0,1 х 2200
		sumUtepl2 = 0;
		sumUtepl3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('utepl1icon').style.display = 'inline';
		document.getElementById('utepl2icon').style.display = 'none';
		document.getElementById('utepl3icon').style.display = 'none';
		utepl1Bool = true;
		utepl2Bool = false;
		utepl3Bool = false;
	}
	return;
}

function utepl2Sum() {
	if (utepl2Bool) {
		sumUtepl2 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('utepl1icon').style.display = 'none';
		document.getElementById('utepl2icon').style.display = 'none';
		document.getElementById('utepl3icon').style.display = 'none';
		utepl1Bool = false;
		utepl2Bool = false;
		utepl3Bool = false;
	} else {
		sumUtepl1 = 0;
		sumUtepl2 = (long + width) * 10 + long * width * 3 * 0.15 * 2200;    //(Д+Ш) х 10 + (Д х Ш х 3) х 0,15 х 2200 
		sumUtepl3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('utepl1icon').style.display = 'none';
		document.getElementById('utepl2icon').style.display = 'inline';
		document.getElementById('utepl3icon').style.display = 'none';
		utepl1Bool = false;
		utepl2Bool = true;
		utepl3Bool = false;
	}
	return;
}

function utepl3Sum() {
	if (utepl3Bool) {
		sumUtepl3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('utepl1icon').style.display = 'none';
		document.getElementById('utepl2icon').style.display = 'none';
		document.getElementById('utepl3icon').style.display = 'none';
		utepl1Bool = false;
		utepl2Bool = false;
		utepl3Bool = false;
	} else {
		sumUtepl1 = 0;
		sumUtepl2 = 0;
		sumUtepl3 = (long + width) * 10 + long * width * 3 * 0.25 * 2200;   //- (Д+Ш) х 10 + (Д х Ш х 3) х 0,25 х 2200
		document.getElementById("editSumma").innerHTML = sumAll();
		document.getElementById('utepl1icon').style.display = 'none';
		document.getElementById('utepl2icon').style.display = 'none';
		document.getElementById('utepl3icon').style.display = 'inline';
		utepl1Bool = false;
		utepl2Bool = false;
		utepl3Bool = true;
	}
	return;
}

function okna1Sum() {
	if (okna1Bool) {
		sumOkna1 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('okna1icon').style.display = 'none';
		document.getElementById('okna2icon').style.display = 'none';
		document.getElementById('okna3icon').style.display = 'none';
		okna1Bool = false;
		okna2Bool = false;
		okna3Bool = false;
	} else {
		sumOkna1 = long * width * 2 * 0.1 * 4000;   //Д х Ш х 2 х 0,1 х 4000
		sumOkna2 = 0;
		sumOkna3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('okna1icon').style.display = 'inline';
		document.getElementById('okna2icon').style.display = 'none';
		document.getElementById('okna3icon').style.display = 'none';
		okna1Bool = true;
		okna2Bool = false;
		okna3Bool = false;
	}
	return;
}

function okna2Sum() {
	if (okna2Bool) {
		sumOkna2 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('okna1icon').style.display = 'none';
		document.getElementById('okna2icon').style.display = 'none';
		document.getElementById('okna3icon').style.display = 'none';
		okna1Bool = false;
		okna2Bool = false;
		okna3Bool = false;
	} else {
		sumOkna1 = 0;
		sumOkna2 = long * width * 2 * 0.1 * 6000;   //Д х Ш х 2 х 0,1 х 6000
		sumOkna3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('okna1icon').style.display = 'none';
		document.getElementById('okna2icon').style.display = 'inline';
		document.getElementById('okna3icon').style.display = 'none';
		okna1Bool = false;
		okna2Bool = true;
		okna3Bool = false;
	}
	return;
}

function okna3Sum() {
	if (okna3Bool) {
		sumOkna3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('okna1icon').style.display = 'none';
		document.getElementById('okna2icon').style.display = 'none';
		document.getElementById('okna3icon').style.display = 'none';
		okna1Bool = false;
		okna2Bool = false;
		okna3Bool = false;
	} else {
		sumOkna1 = 0;
		sumOkna2 = 0;
		sumOkna3 = long * width * 2 * 0.1 * 8000;    //Д х Ш х 2 х 0,1 х 8000
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('okna1icon').style.display = 'none';
		document.getElementById('okna2icon').style.display = 'none';
		document.getElementById('okna3icon').style.display = 'inline';
		okna1Bool = false;
		okna2Bool = false;
		okna3Bool = true;
	}
	return;
}

function otopl1Sum() {
	if (otopl1Bool) {
		sumOtopl1 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('otopl1icon').style.display = 'none';
		document.getElementById('otopl2icon').style.display = 'none';
		otopl1Bool = false;
		otopl2Bool = false;
	} else {
		sumOtopl1 = long * width * 1500;  // Д х Ш х 1500
		sumOtopl2 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('otopl1icon').style.display = 'inline';
		document.getElementById('otopl2icon').style.display = 'none';
		otopl1Bool = true;
		otopl2Bool = false;
	}
	return;
}

function otopl2Sum() {
	if (otopl2Bool) {
		sumOtopl2 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('otopl1icon').style.display = 'none';
		document.getElementById('otopl2icon').style.display = 'none';
		otopl1Bool = false;
		otopl2Bool = false;
	} else {
		sumOtopl1 = 0;
		sumOtopl2 = long * width * 2000;   //Д х Ш х 2 х 2000
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('otopl1icon').style.display = 'none';
		document.getElementById('otopl2icon').style.display = 'inline';
		otopl1Bool = false;
		otopl2Bool = true;
	}
	return;
}

function fund1Sum() {
	if (fund1Bool) {
		sumFund1 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('fund1icon').style.display = 'none';
		document.getElementById('fund2icon').style.display = 'none';
		fund1Bool = false;
		fund2Bool = false;
	} else {
		sumFund1 = long * width * 2 * 1000;  // Д х Ш х 2 х 1000
		sumFund2 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('fund1icon').style.display = 'inline';
		document.getElementById('fund2icon').style.display = 'none';
		fund1Bool = true;
		fund2Bool = false;
	}
	return;
}

function fund2Sum() {
	if (fund2Bool) {
		sumFund2 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('fund1icon').style.display = 'none';
		document.getElementById('fund2icon').style.display = 'none';
		fund1Bool = false;
		fund2Bool = false;
	} else {
		sumFund1 = 0;
		sumFund2 = long * width * 2 * 1800;   //Д х Ш х 2 х 1800
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('fund1icon').style.display = 'none';
		document.getElementById('fund2icon').style.display = 'inline';
		fund1Bool = false;
		fund2Bool = true;
	}
	return;
}

function vnotdel1Sum() {
	if (vnotdel1Bool) {
		sumVnotdel1 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('vnotdel1icon').style.display = 'none';
		document.getElementById('vnotdel2icon').style.display = 'none';
		document.getElementById('vnotdel3icon').style.display = 'none';
		vnotdel1Bool = false;
		vnotdel2Bool = false;
		vnotdel3Bool = false;
	} else {
		sumVnotdel1 = long * width * 2 * 5000;  // Д х Ш х 2 х 5000
		sumVnotdel2 = 0;
		sumVnotdel3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('vnotdel1icon').style.display = 'inline';
		document.getElementById('vnotdel2icon').style.display = 'none';
		document.getElementById('vnotdel3icon').style.display = 'none';
		vnotdel1Bool = true;
		vnotdel2Bool = false;
		vnotdel3Bool = false;
	}
	return;
}

function vnotdel2Sum() {
	if (vnotdel2Bool) {
		sumVnotdel2 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('vnotdel1icon').style.display = 'none';
		document.getElementById('vnotdel2icon').style.display = 'none';
		document.getElementById('vnotdel3icon').style.display = 'none';
		vnotdel1Bool = false;
		vnotdel2Bool = false;
		vnotdel3Bool = false;
	} else {
		sumVnotdel1 = 0;
		sumVnotdel2 = long * width * 2 * 8000;   // Д х Ш х 2 х 8000
		sumVnotdel3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('vnotdel1icon').style.display = 'none';
		document.getElementById('vnotdel2icon').style.display = 'inline';
		document.getElementById('vnotdel3icon').style.display = 'none';
		vnotdel1Bool = false;
		vnotdel2Bool = true;
		vnotdel3Bool = false;
	}
	return;
}

function vnotdel3Sum() {
	if (vnotdel3Bool) {
		sumVnotdel3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('vnotdel1icon').style.display = 'none';
		document.getElementById('vnotdel2icon').style.display = 'none';
		document.getElementById('vnotdel3icon').style.display = 'none';
		vnotdel1Bool = false;
		vnotdel2Bool = false;
		vnotdel3Bool = false;
	} else {
		sumVnotdel1 = 0;
		sumVnotdel2 = 0;
		sumVnotdel3 = long * width * 2 * 15000; // Д х Ш х 2 х 15000
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('vnotdel1icon').style.display = 'none';
		document.getElementById('vnotdel2icon').style.display = 'none';
		document.getElementById('vnotdel3icon').style.display = 'inline';
		vnotdel1Bool = false;
		vnotdel2Bool = false;
		vnotdel3Bool = true;
	}
	return;
}

function fasad1Sum() {
	if (fasad1Bool) {
		sumFasad1 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('fasad1icon').style.display = 'none';
		document.getElementById('fasad2icon').style.display = 'none';
		document.getElementById('fasad3icon').style.display = 'none';
		fasad1Bool = false;
		fasad2Bool = false;
		fasad3Bool = false;
	} else {
		sumFasad1 = (long+width)*10 * 2000; // – (Д+Ш) х 10 х 2000
		sumFasad2 = 0;
		sumFasad3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('fasad1icon').style.display = 'inline';
		document.getElementById('fasad2icon').style.display = 'none';
		document.getElementById('fasad3icon').style.display = 'none';
		fasad1Bool = true;
		fasad2Bool = false;
		fasad3Bool = false;
	}
	return;
}

function fasad2Sum() {
	if (fasad2Bool) {
		sumFasad2 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('fasad1icon').style.display = 'none';
		document.getElementById('fasad2icon').style.display = 'none';
		document.getElementById('fasad3icon').style.display = 'none';
		fasad1Bool = false;
		fasad2Bool = false;
		fasad3Bool = false;
	} else {
		sumFasad1 = 0;
		sumFasad2 = (long+width)*10 * 3000; // (Д+Ш) х 10 х 3000
		sumFasad3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('fasad1icon').style.display = 'none';
		document.getElementById('fasad2icon').style.display = 'inline';
		document.getElementById('fasad3icon').style.display = 'none';
		fasad1Bool = false;
		fasad2Bool = true;
		fasad3Bool = false;
	}
	return;
}

function fasad3Sum() {
	if (fasad3Bool) {
		sumFasad3 = 0;
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('fasad1icon').style.display = 'none';
		document.getElementById('fasad2icon').style.display = 'none';
		document.getElementById('fasad3icon').style.display = 'none';
		fasad1Bool = false;
		fasad2Bool = false;
		fasad3Bool = false;
	} else {
		sumFasad1 = 0;
		sumFasad2 = 0;
		sumFasad3 = (long+width)*10 * 1000;  // - (Д+Ш) х 10 х 1000
		document.getElementById("editSumma").innerHTML = sumAll();

		document.getElementById('fasad1icon').style.display = 'none';
		document.getElementById('fasad2icon').style.display = 'none';
		document.getElementById('fasad3icon').style.display = 'inline';
		fasad1Bool = false;
		fasad2Bool = false;
		fasad3Bool = true;
	}
	return;
}
//
</script>




<?php

get_header(); ?>
<div style="position: fixed;z-index: 101;left: 0%;" class="asdtest butpopup" id="popup" onclick="div_show()">РАССЧИТАТЬ<br/>СТОИМОСТЬ</div>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="wrapper-fluid final-page">
<div class="wrapper">
     <p class="new-title"><?php the_title(); ?></p>
    <div class="new-slider-block">
        <div class="new-slider-block-col-1">
            <div class="wrap-slider">
			<div id="sync1" class="owl-carousel">
				
				<?php if( have_rows('картинки') ): ?>
					<?php
					$i=0;
					while( have_rows('картинки') ): the_row(); 
						$image = get_sub_field('картинка');
						?>			
							<div class="item"><img src="<?php echo $image['sizes']['full'];?>" alt=""></div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		    </div>
            <div class="new-info">
                <div class="new-info-col">
                    <p class="new-info-col-text-1">Площадь: <?php the_field('площадь');?> м<sup>2</sup></p>
                    <p class="new-info-col-text-1">Размер: <?php the_field('размер');?> м</p>
                </div>
                <div class="new-info-col">
                    <p class="new-info-col-text-2">Цена за дом:</p>
                    <p class="new-info-col-text-3"><?php the_field('цена');?> Руб.</p>
                </div>
            </div>
            <div class="under-new-info">
                <div class="undex-new-info-col">
                    <p class="undex-new-info-text-1"><div class="asdtest butpopup" id="popup" onclick="div_show()">РАССЧИТАТЬ СТОИМОСТЬ</div></p>
                </div>
                <div class="undex-new-info-col-2">
                    <p class="undex-new-info-text-2">Хотите индивидуальный проект?</p>
				    <div class="button-order wrap-phone undex-btn"><a href="">ЗАКАЗАТЬ ПРОЕКТИРОВАНИЕ</a></div>
                </div>
            </div>
        </div>
        <div class="new-slider-block-col-2">
            <div class="text-content">
						<?php the_content();?>
					</div>
        </div>
        <div class="new-clear"></div>
    </div>
	<p class="new-title">Виды Комплектаций</p>
	<div class="new-other">
        <div class="new-other-col-left">
            <p class="new-other-title"><span>Эконом</span></p>
            <p class="new-other-text"><?php the_field('стандарт_текст');?></p>
            <div class="new-price">
            <p class="new-other-price"><?php the_field('стандарт_цена');?> 
            <div class="button-order wrap-phone undex-btn undex-btn-2"><a href="">ЗАКАЗАТЬ ПРОЕКТИРОВАНИЕ</a></div></p>
            </div>
        </div>
        <div class="new-other-col-center">
            <p class="new-other-title"><span>Стандарт</span></p>
            <p class="new-other-text"><?php the_field('эконом_текст');?></p>
            <div class="new-price">
            <p class="new-other-price"><?php the_field('эконом_цена');?> 
            <div class="button-order wrap-phone undex-btn undex-btn-2"><a href="">ЗАКАЗАТЬ ПРОЕКТИРОВАНИЕ</a></div></p>
            </div>
        </div>
        <div class="new-other-col-right">
            <p class="new-other-title"><span>Премиум</span></p>
            <p class="new-other-text"><?php the_field('премиум_текст');?></p>
            <div class="new-price">
            <p class="new-other-price"><?php the_field('премиум_цена');?> 
            <div class="button-order wrap-phone undex-btn undex-btn-2"><a href="">ЗАКАЗАТЬ ПРОЕКТИРОВАНИЕ</a></div></p>
            </div>
        </div>
    </div>
</div>
	</div>
<?php endwhile; ?>	
<?php get_footer(); ?>