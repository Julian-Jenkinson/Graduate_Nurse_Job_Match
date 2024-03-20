
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
          document.querySelector("#jobCity").value = component.long_name;
          break;
        case "administrative_area_level_1": {
          document.querySelector("#jobState").value = component.short_name;
          break;
        } 
      }

    }
  }

//window.initAutocomplete = initAutocomplete;



</script>