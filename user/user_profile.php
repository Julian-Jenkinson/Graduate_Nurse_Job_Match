<?php include "../view/header.php"; ?>
<link rel="stylesheet" href="user_profile.css" type="text/css"/>

<div class="main-container">
    <!-- <div class="logged-in-notice">
        You are logged in as <?php echo $_SESSION["user"]["userEmail"]; ?>
    </div> --> 
    <h3>Graduate Profile</h3>
    <!-- create profile button -->
    <?php if (!isset($user["userFName"])): ?>
        <p>Get started by creating your profile</p>
        <form action="." method="post">
        <input type="submit" value="Create Profile"/>
        <input type="hidden" name="action" value="create_profile_button">
        </form><br><br>
    <?php endif; ?>

    <!-- display user profile -->
    <?php if (isset($user["userFName"])): ?>
        <h4>Your Details</h4>

        <div>Name:</div><div><?php echo $user["userFName"] .
            " " .
            $user["userLName"]; ?></div><br>
        <div>Address:</div><div><?php echo $user["userAddress"]; ?></div><br>
        <div>Qualifications:</div><div><?php echo $user[
            "userQualifications"
        ]; ?></div><br>
        <div>Position interested in:</div><div><?php echo $user[
            "jobTitle"
        ]; ?></div><br>
        
        <h4>Professional Interests:</h4>
        <div>Preferred sector:</div><div><?php echo $user[
            "sectorPref"
        ]; ?></div><br>
        
        <div>Workplace services:</div>
        <?php
        //this adds to a table with 3 columns and as many rows as needed instead of a straigt list
        $services = [
            "Pathology"            => $user["userServPathology"],
            "X-ray"                => $user["userServXray"],
            "CT"                   => $user["userServCT"],
            "MRI"                  => $user["userServMRI"],
            "Ultrasound"           => $user["userServUltra"],
            "Nuclear Medicine"     => $user["userServNuclear"],
            "Immunology"           => $user["userServImmunology"],
            "Neurological"         => $user["userServNeurological"],
            "Lab"                  => $user["userServLab"],
            "Emergency Department" => $user["userED"],
            "Perioperative"        => $user["userPeriop"],
            "Intensive Care Unit"  => $user["userICU"],
            "Surgical"             => $user["userSurgical"],
            "Medical"              => $user["userMedical"],
            "Rehabilitation"       => $user["userRehab"],
            "Aged Care"            => $user["userAgedCare"],
        ];

        $selectedServices = array_filter($services, function ($value) {
            return $value === "Y";
        });
        //this adds to a table with 3 columns and as many rows as needed instead of a straigt list
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

        <h4>Locality Preferences:</h4>
        <div>Would you relocate for work?</div><div><?php echo $user[
            "userRelocate"
        ]; ?></div><br>
        
        <div>Preferred rural types:</div>    
        <?php echo $user["userRuralPrefMetro"] === "Y"
            ? "metropolitan"
            : ""; ?><br>
        <?php echo $user["userRuralPrefRegional"] === "Y"
            ? "regional"
            : ""; ?><br>
        <?php echo $user["userRuralPrefRural"]  === "Y" ? "rural" : ""; ?><br>
        <?php echo $user["userRuralPrefRemote"] === "Y" ? "remote" : ""; ?><br>
            
        <br>
        <div>Staff accommodation required?</div><div><?php echo $user[
            "userStaffAccoms"
        ]; ?></div><br>

        <div>Locality services:</div>
        <?php
        //this adds to a table with 3 columns and as many rows as needed instead of a straigt list
        $services = [
            "Cinema"                    => $user["userCinema"],
            "Live Music"                => $user["userLiveMusic"],
            "Sports Club"               => $user["userSportsClub"],
            "Theatre"                   => $user["userTheatre"],
            "Craft Club"                => $user["userCraftClub"],
            "Gym"                       => $user["userGym"],
            "Library"                   => $user["userLibrary"],
            "Supermarket"               => $user["userSupermarket"],
            "Farm Market"               => $user["userFarmMarket"],
            "Mechanic"                  => $user["userMechanic"],
            "Retail"                    => $user["userRetail"],
            "Restaurants"               => $user["userRestaurants"],
            "Pubs"                      => $user["userPubs"],
            "Internet"                  => $user["userInternet"],
            "Mobile Coverage"           => $user["userMobileCov"],
            "Bus"                       => $user["userBus"],
            "Train"                     => $user["userTrain"],
            "Airport"                   => $user["userAirport"],
            "Taxi"                      => $user["userTaxi"],
            "Electric Vehicle Charging" => $user["userEV"],
            "Child Care"                => $user["userChildCare"],
            "Primary School"            => $user["userPrimarySchool"],
            "High School"               => $user["userHighSchool"],
            "University"                => $user["userUniversity"],
        ];

        $selectedServices = array_filter($services, function ($value) {
            return $value === "Y";
        });
        //this adds to a table with 3 columns and as many rows as needed instead of a straigt list
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
        <form action="." method="post">
            <input type="submit" value="Edit Profile"/>
            <input type="hidden" name="action" value="edit_profile">
        </form><br><br>
    <?php endif; ?>
</div>

<?php include "../view/footer.php"; ?>
