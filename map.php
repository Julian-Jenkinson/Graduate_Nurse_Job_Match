


<?php require('model/database.php');?>
<?php require('model/jobs_db.php');?>



<?php include('js/script.php'); ?>

<br>
<label>Address:</label>
<input type="text" id="autocomplete" placeholder="Enter your address", onfocus="initAutocomplete()">
<br>
<br><br>




<style>
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