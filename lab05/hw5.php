
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Fredericka the Great" >
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Freckle Face" >
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Berkshire Swash">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Pattaya">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
<!-- <script src = "jquery-3.1.1.js"></script>
<script src = "hw4_jquery.js"></script> -->
<link rel="stylesheet" media="screen" href="hw4_css.css">
      <h1> Province Sign and Slogan</h1>
</head>

<body>
  <style>
  @charset "utf-8";
/* CSS Document */

body {
margin : 0;
padding : 0;
background : url(01.jpg) repeat fixed;
color : #CCCCCC;
font-family: "Allerta Stencil", Sans-serif ;
text-align : center;
}

header h1{
	font-family: "Allerta Stencil", Sans-serif ;
	font-size: 32px;
	color :#FFF;
	margin-top:90px;
	margin-left:200px;
	margin-right:200px;
	height : 200px;
	text-shadow:0.1em 0.1em #006;

}
.detail{

	display:none;
	padding:40px;
	margin-top : 10px;
	margin-bottom :20px;
	right:200px;
	width: 400px;
	height: 80px;
	position: relative;
	float: right;
	background:rgba(255,255,255,0.7);

}
.pic{
	display:none;
	padding-top:15px;
	padding-bottom:15px;
	margin-top : 10px;
	margin-bottom :20px;
	top : 20 px ;
	left:200px;
	width: 440px;
	height: 300px;
	position: relative;
	float: left;
	background:rgba(255,255,255,0.7);



}
.information {

	padding-top : 40px;
	padding-top : 20px;
	topmargin : 10px;
	background :rgba(255,255,255,0.7);
	top : 20 px ;
	margin-left:200px;
	margin-right:200px;
	height: 230px;
}

.button{
	padding : 15px;

	background: #000;
	margin-top : 10px;
	margin-left:200px;
	margin-right:200px;


}
div, p, ul, li, h1, h2, h3, h4, h5, h6 {
margin : 0;
padding : 0;
}
h2, h3, h4, h5, h6 {
color : #FFAE00;
}

header {
position : relative;
}
.summary {
margin : 0;
border : none 0;
padding : 0;
width : 220px;
position : absolute;
z-index : 1;
left : 0;
height : 266px;
}
.preamble {
margin : 10px 0 30px 235px;
width : 510px;
border : #000000 solid 2px;
padding : 10px 0;
background : #60676F;
text-align : center;
position : relative;
top : 0;
left : 0;
z-index : 3;
}
.preamble p {
padding : 0 0 1.3em;
margin : 0 auto;
width : 320px;
color : #F2F2F2;
font : bold 1.2em/1em "Trebuchet MS", Arial, Helvetica, sans-serif;
letter-spacing : 0.08em;
text-align : left;
}
.preamble p:nth-child(4) {
padding-bottom : 0;
}
.preamble h3 {
	width : 400px;
	margin : 0;
	padding : 0 0 0 34px;
	background : url(../hm3/banner-bg-2.jpg) left top no-repeat;
	font-size : 16px;
	line-height : 24px;
	text-align : left;
	position : absolute;
	top : -38px;
	z-index : 1;
	left : 3px;
	height : 23px;
}
.supporting {
margin : 0 0 0 235px;
width : 510px;
padding : 0;
position : relative;
}
.sidebar {
margin : 7em 10px 0 12px;
padding : 0;
width : 200px;
position : absolute;
left : 0;
top : 360px;
z-index : 2;
}
.supporting p {
padding : 5px 12px 1em;
}
.supporting div {
border : #000000 solid 1px;
padding : 0;
margin : 22px 0 40px;
width : 510px;
background : #61605F;
position : relative;
z-index : 2;
}

.intro a {
color : #FFCC00;
font-weight : bold;
text-decoration : none;
}
.supporting a {
color : #FFAE00;
font-weight : bold;
text-decoration : none;
}
.supporting a:hover {
border-bottom : 2px dashed #FFAE00;
color : #CCCCCC;
}
.supporting a:active {
border-bottom : 2px dashed #333333;
background : #5A6269;
}
.supporting .requirements {
margin-bottom : 0;
}
.summary p {
margin : 0 20px 10px 25px;
color : #A3A3A3;
font : small-caps bolder 1.1em/1em "Trebuchet MS", Arial, Helvetica, sans-serif;
}
.summary p:first-child {
margin-top : 20px;
border : #23282C solid 1px;
padding : 10px;
color : #FFAE00;
}
.summary p:last-child {
color : #999999;
font-weight : normal;
text-align : center;
}
.summary p a {
color : #CCCCCC;
font-weight : normal;
text-decoration : none;
}
.design-selection, #lfavorites, .design-archives, .zen-resources {
border : #000000 solid 1px;
padding : 0;
margin : 0 0 60px;
background : #60676F;
font-size : 0.9em;
position : relative;
}
.sidebar h3 {
	width : 200px;
	border-top : 0 #000000;
	border-right : 1px solid #000000;
	border-bottom : 0 #000000;
	border-left : 0 #000000;
	margin : 0;
	padding : 0;
	background-color: #666;
	font-size : 16px;
	line-height : 24px;
	position : absolute;
	top : -30px;
	z-index : 1;
	left : -2px;
	height : 29px;
	text-indent : 100%;
}
.design-selection a.designer-name {
margin : 0 0 -15px;
padding : 0 15px 0 0;
display : inline;
background-image : none;
color : #FFCC00;
font-weight : normal;
font-variant : normal;
font-size : 1em;
text-decoration : none;
text-transform : capitalize;
text-align : center;
}

.design-selection h3 {
text-indent : 34px;
}

.sidebar ul {
list-style : none;
text-align : center;
}
.sidebar li {
margin : 0;
padding : 6px 0;
}

.design-selection a.designer-name:hover {
background : none;
color : #CCCCCC;
font-style : italic;
text-decoration : none;
}
.sidebar .zen-resources a {
margin : 0 0 -10px;
padding : 0;
display : inline;
text-transform : capitalize;
}
.sidebar .zen-resources ul {
margin : 0;
padding-left : 15px;
text-align : left;
}
.sidebar h3 {
	left : -1px;
	left : -48px;
	width : 201px;
	width : 255px;
}
</style>
  <?php
// define variables and set to empty values
$FirstnameErr = $LastnameErr = $GenderErr = $BirthErr = "";
$Firstname = $Lastname = $Gender= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Firstname"])) {
    $FirstnameErr = "FirstName is required";
  } else {
    $Firstname = test_input($_POST["Firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Firstname)) {
      $FirstnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["Lastname"])) {
    $LastnameErr = "LastName is required";
  } else {
    $Lastname = test_input($_POST["Lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Lastname)) {
      $LastnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["Gender"])) {
    $GenderErr = "Gender is required";
  } else {
    $Gender = test_input($_POST["Gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h2>Fisrtname: <input type="text" name="Firstname">
  <span class="error">* <?php echo $FirstnameErr;?></span>
  <br><br>
  Lastname: <input type="text" name="Lastname">
  <span class="error">* <?php echo $LastnameErr;?></span>
  <br><br>
  Birthday: <input type="date" name="Birthday">
  <span class="error">* <?php echo $BirthErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="Gender" value="female">Female
  <input type="radio" name="Gender" value="male">Male
  <span class="error">* <?php echo $GenderErr;?></span>
  <br><br>
  Provice: <select name = "Province" id = "province">
    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
       <option value="กระบี่">กระบี่</option>
       <option value="กาญจนบุรี">กาญจนบุรี</option>
       <option value="กาฬสินธุ์">กาฬสินธุ์</option>
       <option value="กำแพงเพชร">กำแพงเพชร</option>
       <option value="ขอนแก่น">ขอนแก่น</option>
       <option value="จันทบุรี">จันทบุรี</option>
       <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
       <option value="ชลบุรี">ชลบุรี</option>
       <option value="ชัยนาท">ชัยนาท</option>
       <option value="ชัยภูมิ">ชัยภูมิ</option>
       <option value="ชุมพร">ชุมพร</option>
       <option value="เชียงราย">เชียงราย</option>
       <option value="เชียงใหม่">เชียงใหม่</option>
       <option value="ตรัง">ตรัง</option>
       <option value="ตราด">ตราด</option>
       <option value="ตาก">ตาก</option>
       <option value="นครนายก">นครนายก</option>
       <option value="นครปฐม">นครปฐม</option>
       <option value="นครพนม">นครพนม</option>
       <option value="นครราชสีมา">นครราชสีมา</option>
       <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
       <option value="นครสวรรค์">นครสวรรค์</option>
       <option value="นนทบุรี">นนทบุรี</option>
       <option value="นราธิวาส">นราธิวาส</option>
       <option value="น่าน">น่าน</option>
       <option value="บึงกาฬ">บึงกาฬ</option>
       <option value="บุรีรัมย์">บุรีรัมย์</option>
       <option value="ปทุมธานี">ปทุมธานี</option>
       <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
       <option value="ปราจีนบุรี">ปราจีนบุรี</option>
       <option value="ปัตตานี">ปัตตานี</option>
       <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
       <option value="พังงา">พังงา</option>
       <option value="พัทลุง">พัทลุง</option>
       <option value="พิจิตร">พิจิตร</option>
       <option value="พิษณุโลก">พิษณุโลก</option>
       <option value="เพชรบุรี">เพชรบุรี</option>
       <option value="เพชรบูรณ์">เพชรบูรณ์</option>
       <option value="แพร่">แพร่</option>
       <option value="พะเยา">พะเยา</option>
       <option value="ภูเก็ต">ภูเก็ต</option>
       <option value="มหาสารคาม">มหาสารคาม</option>
       <option value="มุกดาหาร">มุกดาหาร</option>
       <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
       <option value="ยะลา">ยะลา</option>
       <option value="ยโสธร">ยโสธร</option>
       <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
       <option value="ระนอง">ระนอง</option>
       <option value="ระยอง">ระยอง</option>
       <option value="ราชบุรี">ราชบุรี</option>
       <option value="ลพบุรี">ลพบุรี</option>
       <option value="ลำปาง">ลำปาง</option>
       <option value="ลำพูน">ลำพูน</option>
       <option value="เลย">เลย</option>
       <option value="ศรีสะเกษ">ศรีสะเกษ</option>
       <option value="สกลนคร">สกลนคร</option>
       <option value="สงขลา">สงขลา</option>
       <option value="สตูล">สตูล</option>
       <option value="สมุทรปราการ">สมุทรปราการ</option>
       <option value="สมุทรสงคราม">สมุทรสงคราม</option>
       <option value="สมุทรสาคร">สมุทรสาคร</option>
       <option value="สระแก้ว">สระแก้ว</option>
       <option value="สระบุรี">สระบุรี</option>
       <option value="สิงห์บุรี">สิงห์บุรี</option>
       <option value="สุโขทัย">สุโขทัย</option>
       <option value="สุพรรณบุรี">สุพรรณบุรี</option>
       <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
       <option value="สุรินทร์">สุรินทร์</option>
       <option value="หนองคาย">หนองคาย</option>
       <option value="หนองบัวลำภู">หนองบัวลำภู</option>
       <option value="อ่างทอง">อ่างทอง</option>
       <option value="อุดรธานี">อุดรธานี</option>
       <option value="อุทัยธานี">อุทัยธานี</option>
       <option value="อุตรดิตถ์">อุตรดิตถ์</option>
       <option value="อุบลราชธานี">อุบลราชธานี</option>
       <option value="อำนาจเจริญ">อำนาจเจริญ</option>

  </select>
</h2>

<button name= "submit" id="submit" >submit</button>
<button type="reset">clear</button>
</form>
<?php
$text="";
$picture="";
if(isset($_POST['submit']))
{

	$maker = $_POST['Province']; // get the selected text
	$provinceTxt = "$maker.txt";
	$provincePng = "$maker.png";
    $tis620 = iconv("utf-8", "tis-620", $provinceTxt);
	$myfile = fopen($tis620, "r") or die("Unable to open file!");
	$context = fread($myfile,filesize($tis620));
	$text=$context;
	fclose($myfile);
	$picture = $provincePng;

}
?>
<?php
echo "<h2>Slogan and Sign:</h2>";
echo "Firstname : ";
echo $Firstname;
echo "<br>";
echo "Lastname : ";
echo $Lastname;
echo "<br>";
echo "Gender : ";
echo $Gender;
echo "<br>";
?>
<h2 id="div0"></h2><br style="display:none"/>
<h3 id="namePrv"></h3><br style="display:none"/>
<div id="div2" style="color:white"><?php echo $text;?></div>
<div id="div1"><img src ="<?php echo $picture; ?>" /></div><br style="display:none"/>

</body>
</body>
</html>
