<?php include "view/home_header.php"; ?>

<div class="slideshow-container">
        <!-- Slides -->
</div> 
<div class="wave-background">
    <div class="text-content">
        <h1>Matching <span class="highlight-header">Dreams</span>, Crafting Careers: Where <span class="highlight-header">Precision</span> Meets Opportunity in Healthcare.</h1>
        <p>Explore tailored job searches for nursing and midwifery graduates on the Graduate Nurse/Midwife Job Match platform. Craft your portfolio, discover precise opportunities 
        aligned with your skills, and step into a new era of healthcare employment. Your dream job awaits, let’s get started!</p>
        <div class="rectangle-container">
            <div class="buttons-wrapper">
                <!--<button class="sign-in-button">Sign In</button> -->
                <a href="/Graduate_Nurse_Job_Match/user/user_login.php" class="button-link">Sign In</a>
                <a href="/Graduate_Nurse_Job_Match/user/user_signup.php" class="button-link">Register</a>
            </div>
            <p class="text">Create an account to unlock personalised job opportunities tailored for nursing and midwifery graduates.</p>
        </div>                
    </div>
</div>    
    
<div class="search-container">
    <form action="." method="post">    
        <table>
            <tr>
                <td>Keyword</td>
                <td>Location</td>
            </tr>
            <tr>
                <td><input type="text" name="by_keyword" placeholder="Registered Nurse" value="<?php echo isset(
                    $_POST["by_keyword"]
                )
                    ? htmlspecialchars($_POST["by_keyword"])
                    : ""; ?>"></td>
                <td><input type="text" name="by_location" placeholder="Brisbane" value="<?php echo isset(
                    $_POST["by_location"]
                )
                    ? htmlspecialchars($_POST["by_location"])
                    : ""; ?>"></td>
                <td><input type="submit" value="Search jobs"></td>
            </tr>
        </table>
        <table>
        <tr>
            <td>
            <select name="by_contract_type">
                <option value="" selected>Any contract type</option>
                <option value="Full-time" <?php if (
                    isset($_POST["by_contract_type"]) &&
                    $_POST["by_contract_type"] == "Full-time"
                ) {
                    echo "selected";
                } ?>>Full-time</option>
                <option value="Part-time" <?php if (
                    isset($_POST["by_contract_type"]) &&
                    $_POST["by_contract_type"] == "Part-time"
                ) {
                    echo "selected";
                } ?>>Part-time</option>
                <option value="Casual" <?php if (
                    isset($_POST["by_contract_type"]) &&
                    $_POST["by_contract_type"] == "Casual"
                ) {
                    echo "selected";
                } ?>>Casual</option>
                <option value="Contract" <?php if (
                    isset($_POST["by_contract_type"]) &&
                    $_POST["by_contract_type"] == "Contract"
                ) {
                    echo "selected";
                } ?>>Contract</option>
                <option value="Temporary" <?php if (
                    isset($_POST["by_contract_type"]) &&
                    $_POST["by_contract_type"] == "Temporary"
                ) {
                    echo "selected";
                } ?>>Temporary</option>
            </select>
            </td>
            <td>
            <select name="by_rural_type">
                <option value="" selected>Any rural type</option>
                <option value="Metropolitan area" <?php if (
                    isset($_POST["by_rural_type"]) &&
                    $_POST["by_rural_type"] == "Metropolitan area"
                ) {
                    echo "selected";
                } ?>>Metropolitan area</option>
                <option value="Regional centre" <?php if (
                    isset($_POST["by_rural_type"]) &&
                    $_POST["by_rural_type"] == "Regional centre"
                ) {
                    echo "selected";
                } ?>>Regional centre</option>
                <option value="Large rural town" <?php if (
                    isset($_POST["by_rural_type"]) &&
                    $_POST["by_rural_type"] == "Large rural town"
                ) {
                    echo "selected";
                } ?>>Large rural town</option>
                <option value="Medium rural town" <?php if (
                    isset($_POST["by_rural_type"]) &&
                    $_POST["by_rural_type"] == "Medium rural town"
                ) {
                    echo "selected";
                } ?>>Medium rural town</option>
                <option value="Small rural town" <?php if (
                    isset($_POST["by_rural_type"]) &&
                    $_POST["by_rural_type"] == "Small rural town"
                ) {
                    echo "selected";
                } ?>>Small rural town</option>
                <option value="Remote community" <?php if (
                    isset($_POST["by_rural_type"]) &&
                    $_POST["by_rural_type"] == "Remote community"
                ) {
                    echo "selected";
                } ?>>Remote community</option>
                <option value="Very remote community" <?php if (
                    isset($_POST["by_rural_type"]) &&
                    $_POST["by_rural_type"] == "Very remote community"
                ) {
                    echo "selected";
                } ?>>Very remote community</option>
            </select>
            </td>
        </tr>
        </table><br><br>
        <input type="hidden" name="action" value="search_jobs">
    </form>    
</div>
    
<?php include "view/home_footer.php"; ?>    
