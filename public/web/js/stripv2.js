var stripe = Stripe('pk_test_98UReN44XpxnyASOlSU8zruC');

function registerElements(elements, exampleName) {
     
  var formClass = '.' + 'row';
  var example = document.querySelector(formClass);

  var form = document.querySelector('form');
  // var resetButton = document.querySelector('a.reset');
  var error = form.querySelector('.error');

  var errorMessage = document.querySelector('.message');
 
  // function enableInputs() {
  //   Array.prototype.forEach.call(
  //     form.querySelectorAll(
  //       "input[type='text'], input[type='email'], input[type='tel']"
  //     ),
  //     function(input) {
  //       input.removeAttribute('disabled');
  //     }
  //   );
  // }

  // function disableInputs() {
  //   Array.prototype.forEach.call(
  //     form.querySelectorAll(
  //       "input[type='text'], input[type='email'], input[type='tel']"
  //     ),
  //     function(input) {
  //       input.setAttribute('disabled', 'true');
  //     }
  //   );
  // }

  function triggerBrowserValidation() {
    // The only way to trigger HTML5 form validation UI is to fake a user submit
    // event.
    var submit = document.createElement('input');
    submit.type = 'submit';
    submit.style.display = 'none';
    form.appendChild(submit);
    submit.click();
    submit.remove();
  }

  // Listen for errors from each Element, and show error messages in the UI.
  var savedErrors = {};
  elements.forEach(function(element, idx) {
    element.on('change', function(event) {
      if (event.error) {          
        error.classList.add('visible');
        savedErrors[idx] = event.error.message;
        errorMessage.innerText = event.error.message;
      } else {
        savedErrors[idx] = null;

        // Loop over the saved errors and find the first one, if any.
        var nextError = Object.keys(savedErrors)
          .sort()
          .reduce(function(maybeFoundError, key) {
            return maybeFoundError || savedErrors[key];
          }, null);

        if (nextError) {
          // Now that they've fixed the current error, show another one.
          errorMessage.innerText = nextError;
        } else {
          // The user fixed the last error; no more errors.
          error.classList.remove('visible');
        }
      }
    });
  });

  // Listen on the form's 'submit' handler...
  form.addEventListener('submit', function(e) {
    e.preventDefault();

    // Trigger HTML5 validation UI on the form if any of the inputs fail
    // validation.
    var plainInputsValid = true;
    Array.prototype.forEach.call(form.querySelectorAll('input'), function(
      input
    ) {
      if (input.checkValidity && !input.checkValidity()) {
        plainInputsValid = false;
        return;
      }
    });
    if (!plainInputsValid) {
      triggerBrowserValidation();
      return;
    }

    // Show a loading screen...
    example.classList.add('submitting');

    // Disable all inputs.
    //disableInputs();

    // Gather additional customer data we may have collected in our form.
    var name = form.querySelector('#' + exampleName + '-name');
    var additionalData = {
      name: name ? name.value : undefined       
    };

    
    stripe.createToken(elements[0], additionalData).then(function(result) {

      if(additionalData.name == undefined){
        $("#name").addClass('is-invalid');
        //return false;
      } else {
        $("#name").removeClass('is-invalid');
      }
      $('#payment-area').block({ message: null }); 
      $("#payment-btn").prop('disabled',false);
      // // Stop loading!
      // //example.classList.remove('submitting');

      // if (result.token) {
      //   // If we received a token, show the token ID.
      //   example.querySelector('.token').innerText = result.token.id;
      //   example.classList.add('submitted');
      // } else {
      //   // Otherwise, un-disable inputs.
      //   enableInputs();
      // }
      if (result.error) {

        $("#payment-btn").prop('disabled',false);
        $('#payment-area').unblock(); 
        var errorElement = document.querySelector('.error .message');
        errorElement.textContent = result.error.message;
      } else {              
        stripeTokenHandler(result.token);
      }

    });
  });  
}

(function() {
    'use strict';
   

    

    var elements = stripe.elements({
      fonts: [
        {
          cssSrc: 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap',
        },
      ],
      // Stripe's examples are localized to specific languages, but if
      // you wish to have Elements automatically detect your user's locale,
      // use `locale: 'auto'` instead.
      locale: window.__exampleLocale,
    });
  
    var elementStyles = {
      base: {
        border: 'none',
        outline: 'none',
        backgroundColor: '#fff',
        height: '40px',
        lineHeight: '40px',
        paddingLeft: '10px',
        margin: '25px',
        color: '#444',
        fontSize: '14px',
        boxSizing: 'border-box',
        borderRadius: '4px',
        fontFamily: "'Open Sans', sans-serif",
        letterSpacing: '.7px',
        fontWeight: 600,    
        fontSmoothing: 'antialiased',
  
        ':focus': {
          color: '#424770',
        },
  
        '::placeholder': {
          color: '#9BACC8',
        },
  
        ':focus::placeholder': {
          color: '#CFD7DF',
        },
      },
      invalid: {
        color: '#eb1c26',
        ':focus': {
          color: '#eb1c26',
        },
        '::placeholder': {
          color: '#eb1c26',
        },
      },
    };
  
    var elementClasses = {
      focus: 'focus',
      empty: 'empty',
      invalid: 'invalid',
    };
  
    var cardNumber = elements.create('cardNumber', {
      style: elementStyles,
      classes: elementClasses
    });

    cardNumber.mount('#example3-card-number');
  
    var cardExpiry = elements.create('cardExpiry', {
      style: elementStyles,
      classes: elementClasses,
    });
    cardExpiry.mount('#example3-card-expiry');
  
    var cardCvc = elements.create('cardCvc', {
      style: elementStyles,
      classes: elementClasses,
    });

    cardCvc.mount('#example3-card-cvc');
    registerElements([cardNumber, cardExpiry, cardCvc], 'example3');

  })();
  