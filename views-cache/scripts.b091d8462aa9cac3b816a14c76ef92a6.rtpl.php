<?php if(!class_exists('Rain\Tpl')){exit;}?><script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.load("jquery", "1.4.2");
</script>

<script>
	$(function () {
		$('#modulo').change(function () {
			if ($(this).val()) {
				$.getJSON("/rotinas/" + $("#modulo").val(), function (j) {
					var rotinas = $("#rotina").html();;

					$.each(j, function (key, value) {
						rotinas += '<option value="' + value + '">' + value + '</option>';
					});
					
					$("#rotina").html(rotinas);
					$('#rotina').click();
				});
			}
		});
	});
</script>

<script>
	$(function () {
		$('#rotina').click(function () {
			if ($(this).val()) {
				// $.getJSON("/rotinas/" + $("#modulo").val(), function (j) {
				// 	var rotinas = "";

				// 	$.each(j, function (key, value) {
				// 		rotinas += '<option value="' + value + '">' + value + '</option>';
				// 	});
				// 	$("#rotina").html(rotinas);
				// 	$('#rotina').click();
				// });
			}
		});
	});
</script>

<script>
	function copiarQuery(idquery) {
		var copyText = document.getElementById(idquery);
		copyText.select();
		document.execCommand("copy");
	}
</script>