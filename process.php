<?php
$con=mysqli_connect("10.50.0.131","mule","mScj238DKjxEiiPKHU","Ensign");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//Jobline0 Variables
$job_employeename = $_POST["employeename"];
$job_fmgroup = $_POST["fmgroup"];
$job_date_0 = mysql_real_escape_string($_POST["date_0"]);
    $job_date_0 = date('Y-m-d', strtotime(str_replace('-', '/', $job_date_0)));  //correct date format
$job_hours_0 = $_POST["hours_0"];
$job_miles_0 = $_POST["miles_0"];
$job_building_0 = $_POST["building_0"];
$job_notes_0 = $_POST["notes_0"];

//Jobline1 Variables
$job_date_1 = mysql_real_escape_string($_POST["date_1"]);
    $job_date_1 = date('Y-m-d', strtotime(str_replace('-', '/', $job_date_1)));  //correct date format
$job_hours_1 = $_POST["hours_1"];
$job_miles_1 = $_POST["miles_1"];
$job_building_1 = $_POST["building_1"];
$job_notes_1 = $_POST["notes_1"];

//Jobline2 Variables
$job_date_2 = mysql_real_escape_string($_POST["date_2"]);
    $job_date_2 = date('Y-m-d', strtotime(str_replace('-', '/', $job_date_2)));  //correct date format
$job_hours_2 = $_POST["hours_2"];
$job_miles_2 = $_POST["miles_2"];
$job_building_2 = $_POST["building_2"];
$job_notes_2 = $_POST["notes_2"];

//Jobline3 Variables
$job_date_3 = mysql_real_escape_string($_POST["date_3"]);
    $job_date_3 = date('Y-m-d', strtotime(str_replace('-', '/', $job_date_3)));  //correct date format
$job_hours_3 = $_POST["hours_3"];
$job_miles_3 = $_POST["miles_3"];
$job_building_3 = $_POST["building_3"];
$job_notes_3 = $_POST["notes_3"];

//Submit original line of data
if (!empty($_POST["date_0"]) && !empty($_POST["hours_0"]) && !empty($_POST["miles_0"]) && !empty($_POST["employeename"]) && !empty($_POST["fmgroup"])) {
    mysqli_query($con, "INSERT INTO jobs (employeename, fmgroup, date, hours, miles, building, notes)
    VALUES ('$job_employeename', '$job_fmgroup', '$job_date_0', '$job_hours_0', '$job_miles_0', '$job_building_0', '$job_notes_0')");
        }else{
    header("Location: form.php?status=error");
    die();
}
//Check Jobline1 job line to see if we need to submit the data to the database
if (!empty($_POST["date_1"]) && !empty($_POST["hours_1"]) && !empty($_POST["miles_1"])) {

    mysqli_query($con, "INSERT INTO jobs (employeename, fmgroup, date, hours, miles, building, notes)
    VALUES ('$job_employeename', '$job_fmgroup', '$job_date_1', '$job_hours_1', '$job_miles_1', '$job_building_1', '$job_notes_1')");
}

//Check Jobline2 job line to see if we need to submit the data to the database
if (!empty($_POST["date_2"]) && !empty($_POST["hours_2"]) && !empty($_POST["miles_2"])) {

    mysqli_query($con, "INSERT INTO jobs (employeename, fmgroup, date, hours, miles, building, notes)
    VALUES ('$job_employeename', '$job_fmgroup', '$job_date_2', '$job_hours_2', '$job_miles_2', '$job_building_2', '$job_notes_2')");
}

//Check Jobline3 job line to see if we need to submit the data to the database
if (!empty($_POST["date_3"]) && !empty($_POST["hours_3"]) && !empty($_POST["miles_3"])) {

    mysqli_query($con, "INSERT INTO jobs (employeename, fmgroup, date, hours, miles, building, notes)
    VALUES ('$job_employeename', '$job_fmgroup', '$job_date_3', '$job_hours_3', '$job_miles_3', '$job_building_3', '$job_notes_3')");
}


mysqli_close($con);
header("Location: form.php?status=submitted");

?>