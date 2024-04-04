<?php include '../view/header.php'; ?>
<link rel="stylesheet" href="user_profile.css" type="text/css"/>


<div class="main-container">
    <div class="logged-in-notice">
        You are logged in as <?php echo $_SESSION['user']['userEmail']; ?>
    </div> 

    <h3>User Profile</h3>

    <!-- create profile button -->
    <?php if(!isset($user['userFName'])): ?>
        <p>Get started by creating your profile</p>

        <form action="." method="post">
            <input type="submit" value="Create Profile"/>
            <input type="hidden" name="action" value="create_profile_button">
        </form><br><br>
    <?php endif; ?>

    <!-- display user profile -->

    <?php if(isset($user['userFName'])): ?>
        <h4>Your Details</h4>

        <div>Name:</div><div><?php echo $user['userFName'] . ' ' . $user['userLName']; ?></div><br>
        <div>Address:</div><div><?php echo $user['userAddress']; ?></div><br>
        <div>Qualifications:</div><div><?php echo $user['userQualifications']; ?></div><br>
        <div>Position interested in:</div><div><?php echo $user['jobTitle']; ?></div><br>
        
        <h4>Professional Interests:</h4>
        <p>in progress</p>

        <h4>Locality Preferences:</h4>
        <p>in progress</p>

        <form action="." method="post">
            <input type="submit" value="Edit Profile"/>
            <input type="hidden" name="action" value="edit_profile">
        </form><br><br>

    <?php endif; ?>
</div>

<?php include '../view/footer.php'; ?>