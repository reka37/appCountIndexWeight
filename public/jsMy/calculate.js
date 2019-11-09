$('#go').click(function(){
	$("#results").empty();
	var name = $('#name').val();
	var email = $('#email').val();
	var weight = $('#weight').val();	
	var height = $('#height').val();
	Calcute(name, email, weight, height);	
});
 function Calcute(name, email, weight, height) {
	$.ajax({
		url:'/public/jsMy/ajaxCalculate.php',
		type:'POST',
		data: {'name': name, 'email':email, 'weight':weight, 'height':height},
		success: function(data){
			$("#results").append(data);
		}
	});
}