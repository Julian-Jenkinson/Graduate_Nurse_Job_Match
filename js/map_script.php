<script>

let map;

//could get this to take argument of job list for reuse
async function initMap() {
    //initialse map
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

    map = new Map(document.getElementById("map"), {
        mapId: "f02651243c002702",
        center: { lat: -28.397, lng: 131.644 },
        disableDefaultUI: true, // a way to quickly hide all controls
        zoomControl: true,
        zoom: 3.4
    });
    //initialise geocoder
    let geocoder;
    let gc;
    geocoder = new google.maps.Geocoder();

    //access job databse with php and save to JS
    //const DBjobs = <?php echo json_encode($jobs); ?>;
    const DBjobs = <?php echo json_encode(get_jobs()); ?>;
    //console.log(DBjobs);

    // loop to access each job in table
    for (const job of DBjobs) {
        //geocoder - takes address from db and return lat and long
      
        //works well. goes to city if address not complete
        //geocoder.geocode({ address: job.jobAddressNumber + " " + job.jobStreet + " " + job.jobStPrefix + " " + job.jobCity + " " + job.jobState}, function(results, status) {          
      
        // these both work well but depends on what type of form - works best even with address not great
        geocoder.geocode({ address: job.jobAddress }, function(results, status) {
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
            <div class="address">${job.jobCity}, ${job.jobState}</div>
       
            <form action="." method="post">
                <input type="submit" value="View Listing">
                <input type="hidden" name="action" value="view_listing">
                <input type="hidden" name="jobID" value="${job.jobID}"> 
            </form>
        
        </div>
        `;
    return content;
}
</script>


<style>
/* i put this map style here becasue in the main.css page it wasnt loading into the maps */    
/* job styles in unhighlighted state. */
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
.job .details {
    display: none;
    flex-direction: column;
    flex: 1;
}
.job .address {
    color: #9E9E9E;
    font-size: 10px;
}

/* job styles in highlighted state */
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