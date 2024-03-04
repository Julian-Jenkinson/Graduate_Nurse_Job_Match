<h3>test map</h3>
<div id="map"></div>

<?php require('model/database.php');?>
<?php require('model/jobs_db.php');?>
<?php // include('js/map_script.js');?>



<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<!-- this could be moved to the header-->
<script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyCCggxqHlE1-kOJlato8lAsQeLcfG9eRj0", v: "weekly"});</script>

<br>
<label>Address:</label>
<input type="text" id="autocomplete" placeholder="Enter your address", onfocus="initAutocomplete()">
<br>
<br><br>

<script>
//places autocomplete
// i can put this in the js file by something like php <#php include('js/map_script.js');?>
let autocomplete;
async function initAutocomplete() {
  const { Places } = await google.maps.importLibrary("places");
  autocomplete = new google.maps.places.Autocomplete(
    document.getElementById('autocomplete'),{
      componentRestrictions: {country: ['au']},
      fields: ['address_components'] });
}
</script>




<script>

    let map;

    async function initMap() {
        const { Map } = await google.maps.importLibrary("maps");
        const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

        map = new Map(document.getElementById("map"), {
            mapId: "f02651243c002702",
            center: { lat: -28.397, lng: 131.644 },
            disableDefaultUI: true, // a way to quickly hide all controls
            zoomControl: true,
            zoom: 3.4
        });
        //geocoder initialiseation
        let geocoder;
        let gc;
        geocoder = new google.maps.Geocoder();

        //access job table with php and save to JS
        const DBjobs = <?php echo json_encode(get_jobs()); ?>;
        //console.log(DBjobs);

        // loop to access each job in job table
        for (const job of DBjobs) {
          //geocoder - takes address from db and return lat and long
          // need to test with a variety of addresses
          
          //works well even with errors in address
          geocoder.geocode({ address: job.jobAddressNumber + " " + job.jobStreet + " " + job.jobStPrefix + " " + job.jobCity + " " + job.jobState}, function(results, status) {          
          
          // these both work well but depends on what type of form 
          //geocoder.geocode({ address: job.jobAddress }, function(results, status) {
            if (status === 'OK') {
              var gc = results[0];
              //console.log(gc);
              var location = gc.geometry.location;
              //console.log(location.lat());
              //console.log(location.lng());

              //create map marker for each job listing
              const AdvancedMarkerElement = new google.maps.marker.AdvancedMarkerElement({
              map,
              content: buildContent(job),
              position:{lat: location.lat(), lng: location.lng(),},
              });
              AdvancedMarkerElement.addListener("click", () => {
              toggleHighlight(AdvancedMarkerElement, job);
              });
            } else {
              console.log('Geocode was not successful for the following reason: ' + status);
            }

            
          });
            
        }
    } 
    //function to toggle highlight on marker
    function toggleHighlight(markerView, job) {
      if (markerView.content.classList.contains("highlight")) {
        markerView.content.classList.remove("highlight");
        markerView.zIndex = null;
      } else {
        markerView.content.classList.add("highlight");
        markerView.zIndex = 1;
      }
    }
    //function to build content for marker
    function buildContent(job) {
      const content = document.createElement("div");

      content.classList.add("job");
      content.innerHTML = `
        <div class="details">
            <div class="price">${job.jobName}</div>
            <div class="price">${job.jobPlace}</div>
            <div class="price">$${job.jobSalary}</div>
            <div class="address">${job.jobAddress}</div>
            <div class="address">link to job description here</div>

            </div>
        </div>
        `;
      return content;
    }

    initMap();

</script>


<style>
/*
 * job styles in unhighlighted state.
 */
.job {
  align-items: center;
  background-color: red;
  border-radius: 50%;
  color: #263238;
  display: flex;
  font-size: 12px;
  gap: 15px;
  height: 17px;
  width: 17px;
  justify-content: center;
  padding: 4px;
  position: relative;
  position: relative;
  transition: all 0.3s ease-out; 
}

.job::after {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid red;
  content: "";
  height: 0;
  left: 50%;
  position: absolute;
  top: 95%;
  transform: translate(-50%, 0);
  transition: all 0.3s ease-out;
  width: 0;
  z-index: 1;
}
/*
.job .icon {
  align-items: center;
  display: flex;
  justify-content: center;
  color: #FFFFFF;
}
*/
/*
.job .icon svg {
  height: 20px;
  width: auto;
}
*/
.job .details {
  display: none;
  flex-direction: column;
  flex: 1;
}

.job .address {
  color: #9E9E9E;
  font-size: 10px;

}

/*
 * job styles in highlighted state.
 */
.job.highlight {
  background-color: #FFFFFF;
  border-radius: 8px;
  box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.2);
  height: 65px;
  padding: 8px 15px;
  width: auto;
}

.job.highlight::after {
  border-top: 9px solid #FFFFFF;
}

.job.highlight .details {
  display: flex;
}

</style>