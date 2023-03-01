$(function() {
	$("#contact_form").submit(function(event) {
		event.preventDefault();
		var name = $("#name").val();
		var email = $("#email").val();
		var message = $("#message").val();

		$.ajax({
			type: "POST",
			url: "process-form.php",
			data: { name: name, email: email, message: message },
			success: function(response) {
				$("#response").html(response);
			}
		});
	});
});