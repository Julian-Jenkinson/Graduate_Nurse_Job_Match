
<script>
    
  let autocomplete;
  async function initAutocomplete() {
      const { Places } = await google.maps.importLibrary("places");
      autocomplete = new google.maps.places.Autocomplete(
          document.getElementById('autocomplete'),{
          componentRestrictions: {country: ['au']},
          fields: ['address_components'] });
  
        autocomplete.addListener('place_changed', fillInAddress);
      }

  function fillInAddress() {
    // Get the place details from the autocomplete object.
    const place = autocomplete.getPlace();
   

    // Get each component of the address from the place details,
    // and then fill-in the corresponding field on the form.
    // place.address_components are google.maps.GeocoderAddressComponent objects
    // which are documented at http://goo.gle/3l5i5Mr
    for (const component of place.address_components) {
      // @ts-ignore remove once typings fixed
      const componentType = component.types[0];

      switch (componentType) {  
        case "locality":
          document.querySelector("#City").value = component.long_name;
          break;
        case "administrative_area_level_1": {
          document.querySelector("#State").value = component.short_name;
          break;
        } 
      }

    }
  }

// Add event listener to validate fields
var validateFields = document.getElementsByClassName('validate');
for (var i = 0; i < validateFields.length; i++) {
    validateFields[i].addEventListener("blur", function() {
        validateField(this);
    });
}
// Validate field function
function validateField(field) {
  if (field.value == '') {
    field.style.borderColor = 'red';
    field.nextElementSibling.innerHTML = 'Please enter a value for this field';
  } else {
    field.style.borderColor = ''; // Reset border color if field is not empty
    field.nextElementSibling.innerHTML = ''; // Clear error message if field is not empty
  }
  
  // Show error message if any field is empty
  var formMessages = document.getElementsByClassName('form_message');
  var anyEmpty = Array.from(validateFields).some(function (field) {
    return field.value === '';
  });
  
  if (anyEmpty) {
    for (var i = 0; i < formMessages.length; i++) {
      formMessages[i].innerHTML = 'Please correct the highlighted fields before submitting';
      formMessages[i].style.color = 'red';
    }
  } else {
    for (var i = 0; i < formMessages.length; i++) {
      formMessages[i].innerHTML = ''; // Clear error message if no fields are empty
    }
  }
}

//validate form function to prevent from from submitting if any fields are empty
function validateForm() {
  var validateFields = document.getElementsByClassName('validate');
  var formMessages = document.getElementsByClassName('form_message');
  var anyEmpty = Array.from(validateFields).some(function (field) {
    return field.value === '';
  });

  if (anyEmpty) {
    for (var i = 0; i < formMessages.length; i++) {
      formMessages[i].innerHTML = 'Please correct the highlighted fields before submitting';
      formMessages[i].style.color = 'red';
    }
    // highlight all empty fields
    for (var i = 0; i < validateFields.length; i++) {
      if (validateFields[i].value === '') {
        validateFields[i].style.borderColor = 'red';
      }
    }
    return false; // Prevent form submission
  }

  return true; // Allow form submission
}
//check if any fields are empty before submitting form
var submitButton = document.getElementsByClassName('submitForm')[0];
submitButton.addEventListener('click', function(event) {
  if (!validateForm()) {
    event.preventDefault(); // Prevent form submission if any fields are empty
  }
});


</script>