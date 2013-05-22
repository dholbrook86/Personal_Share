<?php
require '../lib/db.php';
require '../lib/names.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
    	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title><?php echo "$maintitle"; ?> </title>
		<link rel="stylesheet" href="../css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/colour.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="../css/notificationbox.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="../models/site-templates/default.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" media="screen" charset="utf-8" />
		<!--[if IE]><![if gte IE 6]><![endif]-->
		<script src="../js/glow/1.7.0/core/core.js" type="text/javascript"></script>
		<script src="../js/glow/1.7.0/widgets/widgets.js" type="text/javascript"></script>
		<link href="../js/glow/1.7.0/widgets/widgets.css" type="text/css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script type="text/javascript">
			glow.ready(function(){
				new glow.widgets.Sortable(
					'#content .grid_5, #content .grid_6',
					{
						draggableOptions : {
							handle : 'h2'
						}
					}
				);
			});
		</script>
<script type="text/javascript">
<!--
$(function(){
    $("#jobline_1, #jobline_2, #jobline_3").hide();
    $("#preview").on("click", function(){
        $("#jobline_1").show();
        $("#preview").hide();    
    });
});

$(function(){
    $("#preview2").on("click", function(){
        $("#jobline_2").show();
        $("#preview2").hide();
    });
});

$(function(){
    $("#preview3").on("click", function(){
        $("#jobline_3").show();
        $("#preview3").hide();
    });
});
$(function() {
    $( "#date_0" ).datepicker();
  });
$(function() {
    $( "#date_1" ).datepicker();
  });
  $(function() {
    $( "#date_2" ).datepicker();
  });
  $(function() {
    $( "#date_3" ).datepicker();
  });
-->
</script>
		<!--[if IE]><![endif]><![endif]-->
	</head>
	<body>
		
<h1 id="head" style="text-align: left;"><a href="/"><img alt="" style="padding-top: 13px" src="../images/logoshort.png"/></a><span style="vertical-align: 57%; position: relative; left: 217px;"></span></h1>
<ul id="navigation">
		</ul>

			<div id="content" class="container_16 clearfix" style="padding: 50px 0px 50px 0px;">

				<div id="center" style="width: 100%; margin: auto;">
<div class="box" style="max-width: 470px; margin-left: 25px;">
	<h2>Handyman Weekly Time Sheet</h2>
<?php  
if (isset($_GET["status"]) && ($_GET["status"] == "submitted")) {
	   echo '<div class="alert-box success"><span>success: </span>Your work has been submitted.</div>';
    } elseif (isset($_GET["status"]) && ($_GET["status"] == "error")){
    echo '<div class="alert-box error"><span>error: </span>An error has occurred. Check the form and resubmit.</div>';
}
?>
 <form name="submitwork" action="process.php" method="post">
            <p style="margin-bottom: -10px; display: inline-block;">
				<label for="employeename">Employee Name </label>
				<input type="text" id="employeename" name="employeename" style="width: 200px;"/>
			</p>
            <p style="display: inline-block;">
				<label for="fmgroup">FM Group </label>
				<input type="text" id="fmgroup" name="fmgroup" style="width: 200px;"/>
			</p>
    <div id="jobline_0" style="margin-bottom: 5px;">
    <div style="display:inline-block">
		<label class="lb" id="lb_date_0" for="date_0" style="display:block; margin-left: 10px;">Date</label>
		<input id="date_0" name="date_0" type="text" style="margin-right:10px; margin-left: 10px; width: 115px;"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_hours_0" for="hours_0" style="display:block">Hours </label>
		<input class="small" id="hours_0" name="hours_0" type="text" style="margin-right:15px"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_miles_0" for="miles_0" style="display:block">Miles </label>
		<input class="small" id="miles_0" name="miles_0" type="text" style="margin-right:15px"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_building_0" for="building_0" style="display:block">Building Name/ID</label>
		<input name="building_0" id="building_0" type="text" style="margin-right:15px; width: 115px;"/>
	</div>
    <div style="display:clear; margin-left: 10px; margin-top: 10px;">
		<label class="lb" id="lb_notes_0" for="notes_0" style="display:block">Description</label>
		<textarea placeholder="Time spent for each building & supplies required" id="notes_0" name="notes_0" style="margin-right:15px; width: 432px; "></textarea>
        </div>
        </div>
<hr />
<div id="jobline_1" style="margin-bottom: 5px;">
    <div style="display:inline-block">
		<label class="lb" id="lb_date_1" for="date_1" style="display:block; margin-left: 10px;">Date</label>
		<input id="date_1" name="date_1" type="text" style="margin-right:10px; margin-left: 10px; width: 115px;"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_hours_1" for="hours_1" style="display:block">Hours </label>
		<input class="small" id="hours_1" name="hours_1" type="text" style="margin-right:15px"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_miles_1" for="miles_1" style="display:block">Miles </label>
		<input class="small" id="miles_1" name="miles_1" type="text" style="margin-right:15px"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_building_1" for="building_1" style="display:block">Building Name/ID</label>
		<input name="building_1" id="building_1" type="text" style="margin-right:15px; width: 115px;"/>
	</div>
    <div style="display:clear; margin-left: 10px; margin-top: 10px;">
		<label class="lb" id="lb_notes_1" for="notes_1" style="display:block">Description</label>
		<textarea placeholder="Time spent for each building & supplies required" id="notes_1" name="notes_1" style="margin-right:15px; width: 432px; "></textarea>
                <!--JobLine2 Start-->
                <div id="preview2" style="color:#999999; font-size:14px">
                <a href="#">Add Another Job Line </a> 
                </div>
    </div>
</div>
<div id="preview" style="color:#999999; font-size:14px; margin-left: 10px;">
<a href="#">Add Job Line </a> 
</div>
<div id="jobline_2" style="margin-bottom: 5px;">
<hr />
    <div style="display:inline-block">
		<label class="lb" id="lb_date_2" for="date_2" style="display:block; margin-left: 10px;">Date</label>
		<input id="date_2" name="date_2" type="text" style="margin-right:10px; margin-left: 10px; width: 115px;"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_hours_2" for="hours_2" style="display:block">Hours </label>
		<input class="small" id="hours_2" name="hours_2" type="text" style="margin-right:15px"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_miles_2" for="miles_2" style="display:block">Miles </label>
		<input class="small" id="miles_2" name="miles_2" type="text" style="margin-right:15px"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_building_2" for="building_2" style="display:block">Building Name/ID</label>
		<input name="building_2" id="building_2" type="text" style="margin-right:15px; width: 115px;"/>
	</div>
    <div style="display:clear; margin-left: 10px; margin-top: 10px;">
		<label class="lb" id="lb_notes_2" for="notes_2" style="display:block">Description</label>
		<textarea placeholder="Time spent for each building & supplies required" id="notes_2" name="notes_2" style="margin-right:15px; width: 432px; "></textarea>
                <!--JobLine3 Start-->
                <div id="preview3" style="color:#999999; font-size:14px">
                <a href="#">Add Another Job Line </a> 
                </div>
    </div>
</div>
<div id="jobline_3" style="margin-bottom: 5px;">
<hr />
    <div style="display:inline-block">
		<label class="lb" id="lb_date_3" for="date_3" style="display:block; margin-left: 10px;">Date</label>
		<input id="date_3" name="date_3" type="text" style="margin-right:10px; margin-left: 10px; width: 115px;"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_hours_3" for="hours_3" style="display:block">Hours </label>
		<input id="hours_3" class="small"  name="hours_3" type="text" style="margin-right:15px"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_miles_3" for="miles_3" style="display:block">Miles </label>
		<input class="small" name="miles_3" id="miles_3" type="text" style="margin-right:15px"/>
	</div>
	<div style="display:inline-block">
		<label class="lb" id="lb_building_3" for="building_3" style="display:block">Building Name/ID</label>
		<input name="building_3" id="building_3" type="text" style="margin-right:15px; width: 115px;"/>
	</div>
    <div style="display:clear; margin-left: 10px; margin-top: 10px;">
		<label class="lb" id="lb_notes_3" for="notes_3" style="display:block">Description</label>
		<textarea placeholder="Time spent for each building & supplies required" id="notes_3" name="notes_3" style="margin-right:15px; width: 432px; "></textarea>
	</div>
</div>
			<p style="margin-bottom: 5px;">
				<input type="submit" class="submit" value="Submit" />
			</p>
	</form>
</div>
            </div>
                </div>
			</div>
<div id="foot">
<!--TODO: Need to create Debugging app-->
					<a href="#">Debug Code</a>
                    <a href="../logout.php">Logout</a>
					<p style="float: right">&copy; Varsity Facility Services | Salt Lake City, Utah</p>
		</div>
	</body>
    		
</html>