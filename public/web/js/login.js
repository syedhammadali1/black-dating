//----User login form action start here
$("#loginFrm").submit(function (e) {
	e.preventDefault();
	$.ajax({
		url:BASE_URL+'auth/authenticate',
		type: 'POST',
		data:$(this).serializeArray(),
		dataType: 'json',
		success: function (response) {

			if (response['status'] == 0) {

				var email  = $('#email');
				var passwordElement  = $('#password');

				if (response['errors']) {
					if (response['errors']['email'] != "") {
						email.attr('data-original-title', response['errors']['email']).tooltip({'trigger':'manual','placement':'bottom'}).tooltip('show');
						setTimeout(function () {
					        email.tooltip('hide');
					    }, 3000)  
					} else {
						email.tooltip('hide');
					}

					if (response['errors']['password'] != "") {
						passwordElement.attr('data-original-title', response['errors']['password']).tooltip({'trigger':'manual','placement':'bottom'}).tooltip('show');
						setTimeout(function () {
					        passwordElement.tooltip('hide');
					    }, 3000)  
					} else {
						passwordElement.tooltip('hide');
					}
				} else {
					email.tooltip('hide');
					passwordElement.tooltip('hide');
					if(response["msg"]) {
						passwordElement.attr('data-original-title', response['msg']).tooltip({'trigger':'manual','placement':'bottom'}).tooltip('show');
						setTimeout(function () {
					        passwordElement.tooltip('hide');
					    }, 3000)  
					}
				}
			} else {
				window.location.href=response["url"];
			}

		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			console.log("Status: " + textStatus); alert("Error: " + errorThrown);
		}
	})
});
//----User login form action end

//----Fogot Password open popup here start
$('body').on('click','#forgot-password',function(){
	$("#forgotPasswordFrm").modal('show');
	$("#forgotPasswordFrm .modal-content").html(loader);
	$.ajax({
		url:BASE_URL+'auth/forgot_password',
		type: 'POST',
		data:{},
		dataType: 'json',
		success: function (response) {
			if (response.status == 1) {
				$("#forgotPasswordFrm .modal-content").html(response.ajaxHtmlView);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			console.log("Status: " + textStatus); alert("Error: " + errorThrown);
		}
	})
});
//----Fogot Password open popup here end

//----Forgot password send email here start
$('body').on('click','#getNewPasswordBtn',function(){
	$("#getNewPasswordBtn").attr('disabled',true);
	$("#getNewPasswordBtn").addClass('disabled');
	$.ajax({
		url:BASE_URL+'auth/forgot_password_action',
		type: 'POST',
		data:{'email':$("#email").val()},
		dataType: 'json',
		success: function (response) {
			$("#getNewPasswordBtn").attr('disabled',false);
			$("#getNewPasswordBtn").removeClass('disabled');
			if (response.status == 0) {
				if (response.formError) {
					if (response['formError']['email'] != "") {
						$("#email").addClass('is-invalid').end();
		                $("#email").siblings("p").html(response['formError']['email']).addClass('invalid-feedback');
					} else {
						$("#email").removeClass('is-invalid').end();
						$("#email").siblings("p").html('').addClass('invalid-feedback');
					}
				} else if(response.errorMsg) {
					$("#email").addClass('is-invalid').end();
		            $("#email").siblings("p").html(response.errorMsg).addClass('invalid-feedback');
				} else {
					$("#email").removeClass('is-invalid').end();
					$("#email").siblings("p").html('').addClass('invalid-feedback');
				}
				
			} else {		
				$("#forgotPasswordFrm").modal('hide');		
				swal({
			        title: "Congratulations",
			        text: response.successMsg,
			        type: "success",
			        closeOnConfirm: false
    			});
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			console.log("Status: " + textStatus); 
			alert("Error: " + errorThrown);
		}
	})
});
//----Forgot password send email here end

//----Reset Password form submit here start
$("#resetPasswordFrm").submit(function (e) {
	e.preventDefault();
	$.ajax({
		url:BASE_URL+'auth/password_reset_action',
		type: 'POST',
		data:$(this).serializeArray(),
		dataType: 'json',
		success: function (response) {

			if (response['status'] == 0) {

				var confirmPassword  = $('#confirmPassword');
				var passwordElement  = $('#password');

				if (response['formError']) {
					if (response['formError']['confirmPassword'] != "") {
						confirmPassword.attr('data-original-title', response['formError']['confirmPassword']).tooltip({'trigger':'manual','placement':'bottom'}).tooltip('show');
						//remove tooltipe after 3 sec
					    setTimeout(function () {
					        confirmPassword.tooltip('hide');
					    }, 3000)  
					} else {
						confirmPassword.tooltip('hide');
					}

					if (response['formError']['password'] != "") {
						passwordElement.attr('data-original-title', response['formError']['password']).tooltip({'trigger':'manual','placement':'bottom'}).tooltip('show');
						//remove tooltipe after 3 sec
						setTimeout(function () {
					        passwordElement.tooltip('hide');
					    }, 3000)  
					} else {
						passwordElement.tooltip('hide');
					}
				} else if(response['errorMsg']) {
					swal({
			            title: "Error!",
			            text: response['errorMsg'],
			            type: "error"
			        }, function() {
			            window.location = BASE_URL+'auth/login';
			        });
				} else {
					confirmPassword.tooltip('hide');
					passwordElement.tooltip('hide');
					if(response["msg"]) {
						passwordElement.attr('data-original-title', response['msg']).tooltip({'trigger':'manual','placement':'bottom'}).tooltip('show');
					}
				}
			} else {
				swal({
			        	title: "Congratulations!",
			            text: response['successMsg'],
			            type: "success"
			        }, function() {
			            window.location = BASE_URL+'auth/login';
			    	});
			}

		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			console.log("Status: " + textStatus); alert("Error: " + errorThrown);
		}
	})
});
//----Reset Password form submit here end


