
<script>    
  let autocomplete;
  async function initAutocomplete() {
      const { Places } = await google.maps.importLibrary("places");
      autocomplete = new google.maps.places.Autocomplete(
          document.getElementById('autocomplete'),{
          componentRestrictions: {country: ['au']},
          fields: ['address_components'] });
  }
</script>