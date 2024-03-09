<?php include '../view/header.php'; ?>

<br>
<div>You are logged in as <?php echo $_SESSION['user']['userEmail']; ?></div> 
<span> Not you? </span>
<span>
    <form action="." method="post">
        <input type="submit" value="Logout"/>
        <input type="hidden" name="action" value="logout">
    </form>
</span><br>

<h3>Your Profile</h3>

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

    <div>Name:</div><div><?php echo $user['userFName'] . ' ' . $user['userLName']; ?></div><br>
    <div>Email:</div><div><?php echo $user['userEmail']; ?></div><br>
    <div>Phone:</div><div><?php echo $user['userPhone']; ?></div><br>
    <div>Address:</div><div><?php echo $user['userAddress']; ?></div><br>
    <div>Qualifications:</div><div><?php echo $user['userQualifications']; ?></div><br>
    <div>Experience:</div><div><?php echo $user['userExperience']; ?></div><br>
    <div>Skills:</div><div><?php echo $user['userSkills']; ?></div><br>
    <div>Interests:</div><div><?php echo $user['userInterests']; ?></div><br>
    
    <div>location Preferences:</div>
    
    <span>Metropolitatan areas:</span>
    <?php if($user['userMM1'] == 'Y'): ?> <span>Yes</span><br>
    <?php else: ?> <span>No</span><br>
    <?php endif; ?>
    
    <span>Regional centres:</span>
    <?php if($user['userMM2'] == 'Y'): ?> <span>Yes</span><br>
    <?php else: ?> <span>No</span><br>
    <?php endif; ?>
    
    <span>Large rural towns:</span>
    <?php if($user['userMM3'] == 'Y'): ?> <span>Yes</span><br>
    <?php else: ?> <span>No</span><br>
    <?php endif; ?>
    
    <span>Medium rural towns:</span>
    <?php if($user['userMM4'] == 'Y'): ?> <span>Yes</span><br>
    <?php else: ?> <span>No</span><br>
    <?php endif; ?>
    
    <span>Small rural towns:</span>
    <?php if($user['userMM5'] == 'Y'): ?> <span>Yes</span><br>
    <?php else: ?> <span>No</span><br>
    <?php endif; ?>
    
    <span>Remote communities:</span>
    <?php if($user['userMM6'] == 'Y'): ?> <span>Yes</span><br>
    <?php else: ?> <span>No</span><br>
    <?php endif; ?>
    
    <span>Very remote communities:</span>
    <?php if($user['userMM7'] == 'Y'): ?> <span>Yes</span><br>
    <?php else: ?> <span>No</span>
    <?php endif; ?><br>
    
        
        

    

    <form action="." method="post">
        <input type="submit" value="Edit Profile"/>
        <input type="hidden" name="action" value="edit_profile">
    </form><br><br>

    <p>show some reccomended jobs here?</p><br>

<?php endif; ?>



<!-- logout button -->
<form action="." method="post">
    <input type="submit" value="Logout"/>
    <input type="hidden" name="action" value="logout">
</form>

<?php include '../view/footer.php'; ?>