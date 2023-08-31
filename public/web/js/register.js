/*alert(BASE_URL)*/


$("#registrationFrm").submit(function (e) {
	e.preventDefault();
	$("#registerNow").addClass('disable').attr('disabled',true);

	$.ajax({
		url:BASE_URL+'auth/register',
		type: 'POST',
		data:$(this).serializeArray(),
		dataType: 'json',
		success: function (response) {
			$("#registerNow").removeClass('disabled').attr('disabled',false);

			if (response['status'] == 0) {

				let nameElement = $('#firstname');
				if (response['errors']['name']) {
					nameElement.tooltip({'trigger':'manual','placement':'right', 'title': response['errors']['name']}).tooltip('show');
				} else {
					nameElement.tooltip('hide');
				}

				let emailElement  = $('#email');
				if (response['errors']['email']) {
					emailElement.attr('data-original-title', response['errors']['email']).tooltip({'trigger':'manual','placement':'right'}).tooltip('show');
				} else {
					emailElement.tooltip('hide');
				}

				let passwordElement  = $('#password');
				if (response['errors']['password']) {
					passwordElement.attr('data-original-title', response['errors']['password']).tooltip({'trigger':'manual','placement':'right'}).tooltip('show');
				} else {
					passwordElement.tooltip('hide');
				}

			} else {

				$("#registerNow #firstname").val('');
				$("#registerNow #email").val('');
				$("#registerNow #password").val('');

				swal({
					title: "Congratulations ",
					text: response['successMsg'],
					type: "success",
					closeOnConfirm: false
				},
				function(){
					window.location.href=response["url"];
				});

			}

		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			console.log("Status: " + textStatus); alert("Error: " + errorThrown);
		}
	})
});

