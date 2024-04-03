<script>

let map;

//could get this to take argument of job list for reuse
async function initMap(DBjobs) {
    
    // Handle the case when DBjobs is not an array
    if (!Array.isArray(DBjobs)) {
        job = DBjobs;

        //initialse map
        const { Map } = await google.maps.importLibrary("maps");
        const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
        map = new Map(document.getElementById("map"), {
            mapId: "f02651243c002702",
            //sets the centre of the map on load
            center: { lat: -28.397, lng: 131.644 },
            mapTypeControl: false,
            fullscreenControl: false,
            zoom:13
        });
        //initialise geocoder
        let geocoder;
        let gc;
        geocoder = new google.maps.Geocoder();

        //geocoder - takes address from db and return lat and long
        geocoder.geocode({ address: job.jobAddress }, function(results, status) {
            if (status === 'OK') {
                var gc = results[0];
                var location = gc.geometry.location;
                //create map marker for each job listing
                const AdvancedMarkerElement = new google.maps.marker.AdvancedMarkerElement({
                  map,
                  content: buildContent(job),
                  position:{lat: location.lat(), lng: location.lng(),},
                });
                AdvancedMarkerElement.addListener("click", () => {
                  toggleHighlight(AdvancedMarkerElement, job);
                });
                //centre map on marker
                map.setCenter({ lat: location.lat(), lng: location.lng() });
            } else {
                console.log('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
    
    // Handle the case when DBjobs is not an array
    else if (Array.isArray(DBjobs)) {
        //initialse map
        const { Map } = await google.maps.importLibrary("maps");
        const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
        map = new Map(document.getElementById("map"), {
            mapId: "f02651243c002702",
            //sets the centre of the map on load
            center: { lat: -28.397, lng: 131.644 },
            mapTypeControl: false,
            fullscreenControl: false,
            zoom: 3.4
        });
        //initialise geocoder
        let geocoder;
        let gc;
        geocoder = new google.maps.Geocoder();
        // loop to access each job in table

        for (const job of DBjobs) {
            //geocoder - takes address from db and return lat and long
            geocoder.geocode({ address: job.jobAddress }, function(results, status) {
                if (status === 'OK') {
                    var gc = results[0];
                    var location = gc.geometry.location;
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
            <div class="address">${job.jobCity}, ${job.jobState}</div> 
            <form action="." method="post">
                <input id='listButton' type="submit" value="View details">
                <input type="hidden" name="action" value="view_listing">
                <input type="hidden" name="jobID" value="${job.jobID}"> 
            </form>
        </div>
        `;
    return content;
}
</script>


<style>
/* the map style is here becasue in the style.css page it was not loading into the maps */    
/* job styles in unhighlighted state. */
.job {
    align-items: center;
    background-color: red;
    border-radius: 50%;
    border-color: transparent;
    color: #263238;
    display: flex;
    font-size: 12px;
    gap: 15px;
    height: 14px;
    width: 14px;
    justify-content: center;
    padding: 4px;
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
    color: grey;
    font-size: 10px;
    padding-top: 2px;
}
#listButton {
  background-color: white;
  border: none;
  color: black;
  padding: 2px 0px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
}

#listButton:hover {
  background-color: none;
  color: grey;
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