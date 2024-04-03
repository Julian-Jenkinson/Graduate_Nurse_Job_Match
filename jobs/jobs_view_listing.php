<?php include '../view/header.php'; ?>

<h3><?php echo htmlspecialchars($job['jobName']); ?></h3>
<div>Date Listed: <?php echo htmlspecialchars($job['jobListingDate']); ?></div>

<h4>Position Details</h4>
<div>Place: <?php echo htmlspecialchars($job['jobPlace']); ?></div>
<div>Location: <?php echo htmlspecialchars($job['jobCity'] . ', ' . $job['jobState']); ?></div>
<div>Description: <?php echo htmlspecialchars($job['jobDescription']); ?></div>
<div>About Us: <?php echo htmlspecialchars($job['jobAboutUs']); ?></div>
<div>Remuneration: <?php echo htmlspecialchars($job['jobSalary']); ?></div>
<div>Contract Type: <?php echo htmlspecialchars($job['jobContractType']); ?></div>
<br><div>--------------------------</div>

<h4>Workplace Facilities</h4>
<div>Facility Type: <?php echo htmlspecialchars($job['jobFacilityType']); ?></div></div>
<div>Sector: <?php echo htmlspecialchars($job['jobSectorsServices']); ?></div>
<div>Beds: <?php echo htmlspecialchars($job['jobBeds']); ?></div>

<br>
<div><?php if(isset($job['jobMedicalPracs']) && $job['jobMedicalPracs'] == 'Yes') { echo 'Medical practitioners utilised';}?></div>
<div><?php if(isset($job['jobAlliedHealth']) && $job['jobAlliedHealth'] == 'Yes') { echo 'Allied health care professionals';}?></div>
<div><?php if(isset($job['jobVisitingFacilities']) && $job['jobVisitingFacilities'] == 'Yes') { echo 'Visiting health care professionals';}?></div>

<br><div>Investigative Services:</div>
<div><?php if(isset($job['jobServPathology']) && $job['jobServPathology'] == 'Y') { echo 'Pathology';}?></div>
<div><?php if(isset($job['jobServXray']) && $job['jobServXray'] == 'Y') { echo 'X-ray';}?></div>
<div><?php if(isset($job['jobServCT']) && $job['jobServCT'] == 'Y') { echo 'CT scaning';}?></div>
<div><?php if(isset($job['jobServMRI']) && $job['jobServMRI'] == 'Y') { echo 'MRI';}?></div>
<div><?php if(isset($job['jobServUltra']) && $job['jobServUltra'] == 'Y') { echo 'Ultrasound';}?></div>
<div><?php if(isset($job['jobServNuclear']) && $job['jobServNuclear'] == 'Y') { echo 'Nuclear medicine';}?></div>
<div><?php if(isset($job['jobServImmunology']) && $job['jobServImmunology'] == 'Y') { echo 'Immunology';}?></div>
<div><?php if(isset($job['jobServNeurological']) && $job['jobServNeurological'] == 'Y') { echo 'Neurology';}?></div>
<div><?php if(isset($job['jobServLab']) && $job['jobServLab'] == 'Y') { echo 'Laboratory';}?></div>

<br><div>Clinical Areas:</div>
<div><?php if(isset($job['jobED']) && $job['jobED'] == 'Y') { echo 'Emergency Department';}?></div>
<div><?php if(isset($job['jobPeriop']) && $job['jobPeriop'] == 'Y') { echo 'Perioperative';}?></div>
<div><?php if(isset($job['jobICU']) && $job['jobICU'] == 'Y') { echo 'Intensive Care Unit';}?></div>
<div><?php if(isset($job['jobSurgical']) && $job['jobSurgical'] == 'Y') { echo 'Surgical';}?></div>
<div><?php if(isset($job['jobMedical']) && $job['jobMedical'] == 'Y') { echo 'Medical';}?></div>
<div><?php if(isset($job['jobRehab']) && $job['jobRehab'] == 'Y') { echo 'Rehabilitation';}?></div>
<div><?php if(isset($job['jobAgedCare']) && $job['jobAgedCare'] == 'Y') { echo 'Aged Care';}?></div>

<br><div>Accommodation Available? <?php echo htmlspecialchars($job['jobAccoms']); ?></div>

<br><div>--------------------------</div>

<h4>Locality Information</h5>
<div>Monash Rating: <?php echo htmlspecialchars($job['jobMonashRating']); ?></div>
<br><div>Education Facilities:</div>
<div><?php if(isset($job['jobChildCare']) && $job['jobChildCare'] == 'Y') { echo 'Child care';}?></div>
<div><?php if(isset($job['jobPrimarySchool']) && $job['jobPrimarySchool'] == 'Y') { echo 'Primary school';}?></div>
<div><?php if(isset($job['jobHighSchool']) && $job['jobHighSchool'] == 'Y') { echo 'High school';}?></div>
<div><?php if(isset($job['jobUniversity']) && $job['jobUniversity'] == 'Y') { echo 'University';}?></div>

<br><div>Entertainment:</div>
<div><?php if(isset($job['jobCinema']) && $job['jobCinema'] == 'Y') { echo 'Cinema';}?></div>
<div><?php if(isset($job['jobLiveMusic']) && $job['jobLiveMusic'] == 'Y') { echo 'Live music';}?></div>
<div><?php if(isset($job['jobSportsClub']) && $job['jobSportsClub'] == 'Y') { echo 'Sports clubs';}?></div>
<div><?php if(isset($job['jobTheatre']) && $job['jobTheatre'] == 'Y') { echo 'Theatre';}?></div>
<div><?php if(isset($job['jobCraftClub']) && $job['jobCraftClub'] == 'Y') { echo 'Craft clubs';}?></div>
<div><?php if(isset($job['jobGym']) && $job['jobGym'] == 'Y') { echo 'Gym';}?></div>
<div><?php if(isset($job['jobLibrary']) && $job['jobLibrary'] == 'Y') { echo 'Library';}?></div>

<br><div>Shopping:</div>
<div><?php if(isset($job['jobSupermarket']) && $job['jobSupermarket'] == 'Y') { echo 'Supermarket';}?></div>
<div><?php if(isset($job['jobFarmMarket']) && $job['jobFarmMarket'] == 'Y') { echo 'Farmers market';}?></div>
<div><?php if(isset($job['jobMechanic']) && $job['jobMechanic'] == 'Y') { echo 'Mechanic';}?></div>
<div><?php if(isset($job['jobRetail']) && $job['jobRetail'] == 'Y') { echo 'Retail shops';}?></div>
<div><?php if(isset($job['jobRestaurants']) && $job['jobRestaurants'] == 'Y') { echo 'Restaurants';}?></div>
<div><?php if(isset($job['jobPubs']) && $job['jobPubs'] == 'Y') { echo 'Public hotels';}?></div>

<br><div>Network Coverage:</div>
<div><?php if(isset($job['jobInternet']) && $job['jobInternet'] == 'Y') { echo 'Internet';}?></div>
<div><?php if(isset($job['jobMobileCov']) && $job['jobMobileCov'] == 'Y') { echo 'Mobile reception';}?></div>

<br><div>Transport:</div>
<div><?php if(isset($job['jobBus']) && $job['jobBus'] == 'Y') { echo 'Public buses';}?></div>
<div><?php if(isset($job['jobTrain']) && $job['jobTrain'] == 'Y') { echo 'Train network';}?></div>
<div><?php if(isset($job['jobAirport']) && $job['jobAirport'] == 'Y') { echo 'Airport';}?></div>
<div><?php if(isset($job['jobTaxi']) && $job['jobTaxi'] == 'Y') { echo 'Taxis';}?></div>
<div><?php if(isset($job['jobEV']) && $job['jobEV'] == 'Y') { echo 'EV charging stations';}?></div>
<br><div>--------------------------</div>

<h4>Contact</h5>
<div>Apply: <?php echo htmlspecialchars($job['jobContactEmail']); ?></div>
<div><a href="<?php echo htmlspecialchars($job['jobLink']); ?>">Link to Website</a></div>
<br><div>--------------------------</div>
        
<!-- display a map -->
<?php include('../js/map_script.php');?>
<script>
    DBjob = <?php echo json_encode($job); ?>;
    initMap(DBjob);
</script>
<div id="map"></div> <br><br>

<?php include '../view/footer.php'; ?>