<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();
    // Start the session
    ?>
    <meta charset="UTF-8">
    <title>Graduate Nurse/Midwife Job Matching</title>
    <link rel="stylesheet" type="text/css" href="/Graduate_Nurse_Job_Match/css/home_head_foot.css">
    <script type="text/javascript" src="/Graduate_Nurse_Job_Match/js/homepage.js"></script>
    <link rel="stylesheet" type="text/css" href="/Graduate_Nurse_Job_Match/css/style.css">
    <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "<?php htmlspecialchars($apiKey); ?>", v: "weekly"});</script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script> 
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
</head>

<body>
    <header>
        <div class="header-logo">
        <img src="/Graduate_Nurse_Job_Match/Images/LOGO.png" alt="Graduate Nursing/Midwife Job Match Logo" class="logo"/>            
        <div class="logo-text">
            <span class="graduate">GR<span class="highlight-logo">A</span>DU<span class="highlight-logo">A</span>TE</span>
            <span class="job-match">Nurse/Midwife Job Match</span>   
        </div>         
        </div>
        <nav class="header-nav">
            <ul>
                <li><a href="/Graduate_Nurse_Job_Match/home.php">Home</a></li>
                <li><a href="/Graduate_Nurse_Job_Match/about us/aboutus.php">About us</a></li>
                <li><a href="/Graduate_Nurse_Job_Match/jobs">Jobs</a></li>
                <?php if (isset($_SESSION["user"])) {
                    // User is logged in, display the view profile button
                    echo '<li><a href="/Graduate_Nurse_Job_Match/user">Profile</a></li>';
                } ?>
            </ul>
        </nav>
        <div class="header-access">
            <?php if (isset($_SESSION["user"])) {
                // User is logged in, display the log-out link
                echo '<a href="/Graduate_Nurse_Job_Match/user/user_logout.php" class="signin-btn signin-btn::after">Log out</a>';
            } else {
                // User is not logged in, display the sign-in link
                echo '<a href="/Graduate_Nurse_Job_Match/user/user_login.php" class="signin-btn signin-btn::after">Sign In</a>';
            } ?>
            <a href="/Graduate_Nurse_Job_Match/employer" class="employer-site-btn">Employer Site</a>
        </div>
    </header>
<body>



