<?php include "../view/header.php"; ?>
<link rel="stylesheet" type="text/css" href="jobs_view_listing.css">

<div class="content-center">
    <h3><?php echo htmlspecialchars($job["jobName"]); ?></h3>

    <h4>Details</h4>
    <div>Posted <?php echo date(
        "jS M Y",
        strtotime($job["jobListingDate"])
    ); ?></div><br>
    
    <div>Place: <?php echo htmlspecialchars($job["jobPlace"]); ?></div><br>
    <div>Location: <?php echo htmlspecialchars(
        $job["jobCity"] . ", " . $job["jobState"]
    ); ?></div><br>
    <div>Description: <?php echo htmlspecialchars(
        $job["jobDescription"]
    ); ?></div><br>
    <div>About Us: <?php echo htmlspecialchars($job["jobAboutUs"]); ?></div><br>
    <div>Remuneration: <?php echo htmlspecialchars(
        $job["jobSalary"]
    ); ?></div><br>
    <div>Contract Type: <?php echo htmlspecialchars(
        $job["jobContractType"]
    ); ?></div><br><br>

    <h4>Workplace Facilities</h4>
    <div>Facility Type: <?php echo htmlspecialchars(
        $job["jobFacilityType"]
    ); ?></div><br>
    <div>Sector: <?php echo htmlspecialchars(
        $job["jobSectorsServices"]
    ); ?></div><br>
    <div>Beds: <?php echo htmlspecialchars($job["jobBeds"]); ?></div><br>

    <?php
    $services = [
        "Pathology"            => $job["jobServPathology"],
        "X-ray"                => $job["jobServXray"],
        "CT"                   => $job["jobServCT"],
        "MRI"                  => $job["jobServMRI"],
        "Ultrasound"           => $job["jobServUltra"],
        "Nuclear Medicine"     => $job["jobServNuclear"],
        "Immunology"           => $job["jobServImmunology"],
        "Neurological"         => $job["jobServNeurological"],
        "Lab"                  => $job["jobServLab"],
        "Emergency Department" => $job["jobED"],
        "Perioperative"        => $job["jobPeriop"],
        "Intensive Care Unit"  => $job["jobICU"],
        "Surgical"             => $job["jobSurgical"],
        "Medical"              => $job["jobMedical"],
        "Rehabilitation"       => $job["jobRehab"],
        "Aged Care"            => $job["jobAgedCare"],
    ];

    $selectedServices = array_filter($services, function ($value) {
        return $value === "Y";
    });

    if (!empty($selectedServices)) {
        $rowCount = 0; ?>
            <table>
                <tr>
                    <?php foreach ($selectedServices as $service => $value): ?>
                        <td><?php echo $service; ?></td>
                        <?php
                    $rowCount++;
                        if ($rowCount % 3 === 0) {
                            echo "</tr><tr>";
                        }
                        ?>
                    <?php endforeach; ?>
                </tr>
            </table>
        <?php
    }
    ?>

    <br><div>Accommodation Available? <?php echo htmlspecialchars(
        $job["jobAccoms"]
    ); ?></div><br><br>

    <h4>Locality Information</h5>
    <div>Monash Rating: <?php echo htmlspecialchars(
        $job["jobMonashRating"]
    ); ?></div><br>

    <div>Locality services:</div>
    <?php
    $localityServices = [
        "Child care"           => $job["jobChildCare"],
        "Primary school"       => $job["jobPrimarySchool"],
        "High school"          => $job["jobHighSchool"],
        "University"           => $job["jobUniversity"],
        "Cinema"               => $job["jobCinema"],
        "Live music"           => $job["jobLiveMusic"],
        "Sports clubs"         => $job["jobSportsClub"],
        "Theatre"              => $job["jobTheatre"],
        "Craft clubs"          => $job["jobCraftClub"],
        "Gym"                  => $job["jobGym"],
        "Library"              => $job["jobLibrary"],
        "Supermarket"          => $job["jobSupermarket"],
        "Farmers market"       => $job["jobFarmMarket"],
        "Mechanic"             => $job["jobMechanic"],
        "Retail shops"         => $job["jobRetail"],
        "Restaurants"          => $job["jobRestaurants"],
        "Public hotels"        => $job["jobPubs"],
        "Internet"             => $job["jobInternet"],
        "Mobile reception"     => $job["jobMobileCov"],
        "Public buses"         => $job["jobBus"],
        "Train network"        => $job["jobTrain"],
        "Airport"              => $job["jobAirport"],
        "Taxis"                => $job["jobTaxi"],
        "EV charging stations" => $job["jobEV"],
    ];

    $selectedLocalityServices = array_filter($localityServices, function (
        $value
    ) {
        return $value === "Y";
    });

    if (!empty($selectedLocalityServices)) {
        $rowCount = 0; ?>
            <table>
                <tr>
                    <?php foreach (
                        $selectedLocalityServices as $service => $value
                    ): ?>
                        <td><?php echo $service; ?></td>
                        <?php
                        $rowCount++;
                        if ($rowCount % 3 === 0) {
                            echo "</tr><tr>";
                        }
                        ?>
                    <?php endforeach; ?>
                </tr>
            </table>
        <?php
    }
    ?>

    <br><br>

    <h4>Contact</h5>
    <div>Apply: <?php echo htmlspecialchars(
        $job["jobContactEmail"]
    ); ?></div><br>
    <div>Link: <a href="<?php echo htmlspecialchars(
        $job["jobLink"]
    ); ?>">Employer website here</a></div>
    <br>
</div>

<!-- display a map -->
<?php include "../js/map_script.php"; ?>
<script>
    DBjob = <?php echo json_encode($job); ?>;
    initMap(DBjob);
</script>
<div id="map"></div> <br><br>

<?php include "../view/footer.php"; ?>
