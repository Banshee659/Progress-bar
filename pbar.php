<html>
<head>
<title>Task 3b</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

<h2> Searching Progress 
<?php
//$sleep = 0;
function create_progress() {
    // First create our basic CSS that will control the look of this bar:
    echo "
<style>
#text {
       position: absolute;
       top: 100px;
       left: 50%;
       margin: 0px 0px 0px -150px;
       font-size: 18px;
       text-align: center;
       width: 300px;
}
#barbox_a {
        position: absolute;
        top: 130px;
       left: 50%;
       margin: 0px 0px 0px -160px;
       width: 304px;
       height: 24px;
       background-color: black;
}
.per {
      position: absolute;
      top: 130px;
      font-size: 18px;
      left: 50%;
      margin: 1px 0px 0px 150px;
      background-color: #FFFFFF;
}
.bar {
      position: absolute;
      top: 132px;
      left: 50%;
      margin: 0px 0px 0px -158px;
      width: 0px;
      height: 20px;
      background-color: #0099FF;
}
.blank {
      background-color: white;
    width: 300px;
}
 </style>
";
 // Now output the basic, initial, XHTML that will be overwritten later:
    echo "
<div id='text'>Searching Progress</div>
<div id='barbox_a'></div>
<div class='bar blank'></div>
<div class='per'>0%</div>
";
 // Ensure that this gets to the screen immediately:
    //flush();
}
 // A function that you can pass a percentage as a whole number and it
//  will generate the appropriate new div's to overlay the current ones:
function update_progress($percent) {
	//while (true) {
      // First let's recreate the percent with the new one:
    echo "<div class='per'>{$percent}%</div>\n";
 // Now, output a new 'bar', forcing its width to 3 times the percent,
    // since we have defined the percent bar to be at 300 pixels wide.
    echo "<div class='bar' style='width: ", $percent * 3, "px'></div>\n";
 // Now, again, force this to be immediately displayed:
    
	flush();
//}
}
 // Ok, now to use this, first create the initial bar info:
create_progress();
//The usleep commands will simulate multiple lines of code being executed.
echo 'Please wait';
$sleep =1000;
$i = 0;
while($i < $sleep){
	++$i; usleep(20);
	echo update_progress($i/$sleep*100);
	flush();
}


?>
</h2>

</body></html>