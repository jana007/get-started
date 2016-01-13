<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Get Started Wizard</title>
<link rel="stylesheet" type="text/css" media="all" href="css/started.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!--//COLORBOX//-->
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/colorbox.css" />
<!--//end COLORBOX//-->

<script>
$(document).ready(function(){
  //show featured indicator
  $("#featuredArea").hover(function(){
    $(".showFeatured").show();
    },function(){
    $(".showFeatured").hide();
  });
  //show left column indicator
  $(".columnLeft").hover(function(){
    $(".showLeft").show();
    },function(){
    $(".showLeft").hide();
  });
  //show right column indicator
  $(".columnRight").hover(function(){
    $(".showRight").show();
    },function(){
    $(".showRight").hide();
  });  
  //Instructor img
  $("#instructorUrl").click(function(){
    $(".instructorUrl").toggle(200);
  });
  //Colorbox.previ
  $(".iframe").colorbox({iframe:true, width:"712", height:"433"});
  
});

function selectTxt() {
  document.getElementById("copyText").select();
}
</script>
<script type="text/javascript" src="js/ga.js"></script>
</head>

<body>
<div id="container">
	<div id="fsuHeader">
    	<div class="wrap">	
        	<a href="https://distance.fsu.edu" target="_blank" class="fsuLogo"></a>
        </div>
   	</div>
    <div id="content">
    	<div class="wrap">

<h1>"Get Started" Wizard</h1>
<p><strong>Please note:</strong></p>
        <ul>
        	<li>Keep this tab open while editing the get started information in case the code needs to be referenced.</li>
        	<li>More complex options (e.g. making items into lists, italizing, or bolding) can be made within Blackboard's text box editor.</li>
            <li>We have found Firefox to work best on both Mac and PC when working with this "Get Started" wizard.</li>
            
        </ul>
<h2>1. Fill in the form</h2>
<form method="POST" name="started_form">
<div class="formPad">
<div id="featuredArea">
<div class="arrow"></div>
<h3>Featured Section</h3>
<fieldset>
	<label>Select a background color?</label>
    <select name="bgColor" id="colorSelect">
		<option value="510115"<?php if(isset($_POST['bgColor']) && $_POST['bgColor'] == '510115'){echo ' selected="selected"';}?>>Garnet</option>
    	<option value="333333"<?php if(isset($_POST['bgColor']) && $_POST['bgColor'] == '333333'){echo ' selected="selected"';}?>>Gray</option>
        <option value="c6ba8e"<?php if(isset($_POST['bgColor']) && $_POST['bgColor'] == 'c6ba8e'){echo ' selected="selected"';}?>>Gold</option>
        <option value="004b7b"<?php if(isset($_POST['bgColor']) && $_POST['bgColor'] == '004b7b'){echo ' selected="selected"';}?>>Blue</option>
    </select>
</fieldset>


<fieldset>
	<label>Featured Title:</label>
    <input type="text" name="featuredTitle" value="<?php echo isset($_POST['featuredTitle']) ? $_POST['featuredTitle'] : '' ?>" placeholder="Course Number and Title" />
</fieldset>

<fieldset>
	<label>Remove video placeholder?</label>
    <select name="introVideo">
		<option value="no"<?php if(isset($_POST['introVideo']) && $_POST['introVideo'] == 'no'){echo ' selected="selected"';}?>>No</option>
    	<option value="yes"<?php if(isset($_POST['introVideo']) && $_POST['introVideo'] == 'yes'){echo ' selected="selected"';}?>>Yes</option>
    </select>
</fieldset>

<fieldset>
	Course description:<br />
	<textarea name="featuredDesc" placeholder="Structure and Purpose" ><?php echo htmlspecialchars($_POST['featuredDesc']);?></textarea>
</fieldset>
</div>

<div id="example">
	<img src="images/master-template.png" />
    <div class="showFeatured"></div>
    <div class="showLeft"></div>
    <div class="showRight"></div>
</div>

<div style="clear:both;"></div>

<div class="columnLeft">
<div class="arrow"></div>
<h3>Left Column</h3>
<fieldset>
	Title 1:<br />
    <input type="text" name="title1" value="<?php echo isset($_POST['title1']) ? $_POST['title1'] : '' ?>" placeholder="Learning Objectives" />
</fieldset>

<fieldset>
	Description 1:<br />
    <textarea name="description1"><?php echo htmlspecialchars($_POST['description1']);?></textarea>
</fieldset>

<fieldset>
	Title 2:<br />
    <input type="text" name="title2" value="<?php echo isset($_POST['title2']) ? $_POST['title2'] : '' ?>" placeholder="What To Do Next" />
</fieldset>

<fieldset>
	Description 2:<br />
    <textarea name="description2" placeholder="Please post to this forum by DATE/TIME. Your first post will serve as a self-introduction and double as the 'First Day Attendance' verification that FSU requires."><?php echo htmlspecialchars($_POST['description2']);?></textarea>
</fieldset>

</div>

<div class="columnRight">
<div class="arrow"></div>
<h3>Right Column</h3>
<fieldset>
	Title 3:<br />
    <input type="text" name="title3" value="<?php echo isset($_POST['title3']) ? $_POST['title3'] : '' ?>" placeholder="Prerequisites" />
</fieldset>

<fieldset>
	Description 3:<br />
    <textarea name="description3"><?php echo htmlspecialchars($_POST['description3']);?></textarea>
</fieldset>

<fieldset>
	Title 4:<br />
    <input type="text" name="title4" value="<?php echo isset($_POST['title4']) ? $_POST['title4'] : '' ?>" placeholder="Required and Optional Materials" />
</fieldset>

<fieldset>
	Description 4:<br />
    <textarea name="description4"><?php echo htmlspecialchars($_POST['description4']);?></textarea>
</fieldset>

<fieldset>
	Instructor image URL:<br />
    <input type="text" name="instructorImg" value="<?php echo isset($_POST['instructorImg']) ? $_POST['instructorImg'] : '' ?>"> (<a id="instructorUrl">what's this?</a>)
    <div class="instructorUrl">
    	<p>Upload and submit your picture to the <em>Instructor Info</em> or <em>Contacts</em> page of your Blackboard course site.<br />Right-click to <strong>copy the image address/url</strong>.</p>
    </div>
</fieldset>

<fieldset>
	Instructor introduction:<br />
    <textarea name="instructorIntro"><?php echo htmlspecialchars($_POST['instructorIntro']);?></textarea>
</fieldset>

</div>
</div><!--//formPad//-->
<div id="scrollPreview" style="clear:both;"></div>
<fieldset>
    <h2>2. <input type="submit" name="submit" value="Preview the page" id="preview" /></h2>
</fieldset>

</form>

		</div>
    </div>


<?php
if(isset($_POST['submit'])) {


// Scroll down option after submit

echo '
<script>
$(document).ready(function(){
	$("html, body").animate({
      scrollTop: $("#scrollPreview").offset().top
    }, 2000);
})
</script>';

echo '<div id="template">';
echo '<div class="wrap">';
echo '<div class="previewEdit"><p>preview or continue editing</p></div>';
echo '<div class="grabCode"><p>happy?</p></div>';

/***************************
FEATURED
****************************/
$bgColor = $_POST["bgColor"];
$chosenColor = $bgColor;
$textColor = 'ffffff';
$featuredTitle = '<h1>' . $_POST["featuredTitle"] . '</h1>';
$featuredDesc = '<p>' . nl2br($_POST["featuredDesc"]) . '</p>';

//Introduction Video
$introVideo = $_POST['introVideo'];
$introVideoCode='';
if($introVideo=='no') {
	$introVideoCode = '<div class="featured"><a class="iframe" href="https://distance.fsu.edu/videos/instruction/creating-course-introduction-videos.php" target="_blank"><img src="https://distance.fsu.edu/videos/instruction/img/creating-course-intro-videos.png" alt="Course Intro: Best Practices video" width="150" /></a><h2>Course Intro: Best Practices</h2><p><a href="https://distance.fsu.edu/videos/instruction/alt/creating-course-introduction-videos.html" target="_blank">View text only</a></p></div>';
}

/***************************
LEFTCOLUMN
****************************/
$title1 = '<h2>' . $_POST["title1"] . '</h2>';
$description1 = nl2br($_POST["description1"]);

$title2 = '<h2>' . $_POST["title2"] . '</h2>';
$description2 = '<p>' . nl2br($_POST["description2"]) . '</p>';

/***************************
RIGHTCOLUMN
****************************/
$title3 = '<h2>' . $_POST["title3"] . '</h2>';
$description3 = '<p>' . nl2br($_POST["description3"]) . '</p>';

$title4 = '<h2>' . $_POST["title4"] . '</h2>';
$description4 = '<p>' . nl2br($_POST["description4"]) . '</p>';

$instructorTitle = '';
$instructorImg = $_POST["instructorImg"];
if(!empty($instructorImg)) {
	$instructorImgCode = '<img src="' . $instructorImg . '" class="instructorImg" width="125" height="125" />';
}
$instructorIntro = nl2br($_POST["instructorIntro"]);

if ((!empty($instructorImg))||(!empty($instructorIntro))) {
	$instructorTitle = '<h2>The Instructor</h2>';
}

/***************************
COMPILE MASTER TEMPLATE
****************************/
$masterTemplate = '<style type="text/css">.customBanner {text-align:left;} #fsu-master-template {width:100%;display:block;} #fsu-master-template .fsuclearfix{clear:both;} #fsu-master-template .fsuodl-bg {color:#' . $textColor . ';background-color:#' . $chosenColor . ';} #fsu-master-template .color-banner {margin:0px auto;padding:2% 12%;} #fsu-master-template .color-banner h1, #fsu-master-template .color-banner h2 {margin:0px; padding:7px 0px;} #fsu-master-template .color-banner a {color:#' . $textColor . ';} #fsu-master-template .featured {width:150px;margin-right:20px;margin-bottom:10px;display:block;clear:left;float:left;} #fsu-master-template .featured table a img {width:150px;} #fsu-master-template .featured table div {background-image:none !important; background-color:#fff !important;} #fsu-master-template .text-area {width:100%;padding:2%;} #fsu-master-template .left-column {width:48%;float:left;} #fsu-master-template .right-column {width:48%;float:right;} #fsu-master-template .left-column img {margin:5px 5px 10px 0px;}</style><div id="fsu-master-template"><div class="color-banner fsuodl-bg">' . $introVideoCode . $featuredTitle . $featuredDesc . '<div class="fsuclearfix">&nbsp;</div></div><div class="text-area"><div class="left-column">' . $title1 . $description1 . $title2 . $description2 . '</div><div class="right-column">' . $title3 . $description3 . $title4 . $description4 . $instructorTitle . $instructorImgCode . '<p>' . $instructorIntro . '</p></div></div></div>';

echo $masterTemplate;
echo '<div style="clear:both;"></div>';

//template & wrap close
echo '</div>';
echo '</div>';

/***************************
EMBED CODE & INSTRUCTIONS
****************************/

echo '<div id="embedCode">';
echo '<div class="wrap">';

echo '<h2>3. Grab the code</h2>';
//echo '<h3>If you are happy with your template <button type="button" onclick="selectTxt()">Select</button> and copy the code below</h3>';

echo '<div class="embedLeft">';
echo '<textarea id="copyText">' . $masterTemplate . '</textarea>';
echo '</div>';

echo '<div class="embedRight">';
echo '<ol>
        <li><button type="button" onclick="selectTxt()">Select</button> and copy the code on the left.</li>
        <li>Log in to <a href="https://campus.fsu.edu" target="_blank">Blackboard</a> and navigate to your course site.</li>
        <li>Verify <a id="editMode"><span></span>Edit Mode</a> is ON, <a id="textEditor"><span></span>Text Editor</a> is ON, and <a id="sourceCode"><span></span>Toggle HTML Source Mode</a> is selected.</li>
        <li>Remove any existing text and paste your code.</li>
        <li>Select Submit.</li>
        </ol>';
echo '</div>';
echo '<div style="clear:both;"></div>';
/*
echo '<br/>' . '<hr />' . '<br/>' . '<p><strong>Please note:</strong></p>
        <ul>
        	<li>Keep this tab open while editing the get started information in case the code needs to be referenced.</li>
        	<li>More complex options (e.g. making items into lists, italicizing, or bolding) can be made within Blackboard\'s text box editor.</li>
            <li>We have found Firefox to work best on both Mac and PC when working with this "Get Started" wizard.</li>
            
        </ul>';
*/
// embedCode & wrap close
echo '</div>';
echo '</div>';
}
?>

	<div style="clear:both;"></div>

    <div id="footer">
    	<div class="wrap">
        
        <p>If you have questions, comments, or suggestions please contact our <a href="mailto:webmaster@campus.fsu.edu">web developer</a>.</p>
        </div>
    </div>
</div>


</body>
</html>