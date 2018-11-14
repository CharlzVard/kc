// функция для генерации случайных чисел в диапазоне от m до n

var aspmA = Math.floor(Math.random() * 9) + 1;  // генерируем число
var aspmB = Math.floor(Math.random() * 9) + 1; // генерируем число
var sumAB = aspmA + aspmB;  // вычисляем сумму
if (document.getElementById('aspm')) document.getElementById('aspm').innerHTML = aspmA + ' + ' + aspmB + ' = ';  // показываем пользователю выражение
if (document.getElementById('md5')) document.getElementById('md5').value = md5(sumAB);  // показываем пользователю выражение
$(document).ready(function(){
	$('#btn_submit').click(function(){
		if (md5($('#cap').val())==$('#md5').val()){
			// собираем данные с формы
			var user_name    = $('#user_name').val();
			var user_email   = $('#user_email').val();
			var text_comment = $('#text_comment').val();
			// отправляем данные
			$.ajax({
				url: "mail.php", // куда отправляем
				type: "post", // метод передачи
				dataType: "json", // тип передачи данных
				data: { // что отправляем
					"user_name":    user_name,
					"user_email":   user_email,
					"text_comment": text_comment
				},
				// после получения ответа сервера
				success: function(data){
					$('.messages').html(data.result); // выводим ответ сервера
					if (data.sended == true){
						$('#user_name').val('');
						$('#user_email').val('');
						$('#text_comment').val('');
						$('#cap').val('');
					}                    
				}
			});
		} else {
			$('.messages').html('<div class="alert alert-danger">Антиспам не пройден!</div>');
			$('#cap').val('');
		}
	});
});
