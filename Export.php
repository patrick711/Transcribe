<?php
// Setting up some variables...
$personal = array();
$social_media = array();
$work_history = array();
$education = array();
$skills = array();
$awards = array();
$language = array();
$settings = array();
$QName = "Section1";

include "./pdo.php";

require_once('config.php');

/* if (isset($settings['style']) && $settings['style'] == "dark")
{
	$stylesheet = 'dark.css';
}
else if (isset($settings['style']) && $settings['style'] == "light")
{ */
	$stylesheet = 'landesa.css';
/*}
 else if (isset($settings['style']) && $settings['style'] == "printable")
{
	$stylesheet = 'printable.css';
}
else
{
	$stylesheet = 'dark.css';
} */

if (isset($settings['lang']) && file_exists("lang/" . $settings['lang']) . ".php")
{
	$langfile = "lang/" . $settings['lang'] . ".php";
}
else
{
	$langfile = "lang/en.php";
}
require_once($langfile);
?>
<?php
//**************************
// Landesa Survey Transcription Page
// Patrick S Chen 2014
//**********************************

	
	

	
	//******DB Init: Connect to Database and create section table if it doesn't exist
	{
		try {
			/*** connect to SQLite database ***/
			//$dbh = new PDO("sqlite:database.sdb");
			PDO_Connect("sqlite:database.sdb");
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	//********* End DB initialization
	

	//************Let's print all Section info to table & export
	{

		$sql = "Select * From ids ";
		$tables = PDO_FetchAll("SELECT name FROM sqlite_master WHERE type='table' and name not like 'IDs' ");
		
		foreach($tables as $row )
		{
			
			foreach( $row as $row2 => $row2_value)
			{
				$sql = $sql.' inner join '.$row2_value.' on ids.id='.$row2_value.'.id ';
			}
		}
		//print_r($tables);
		//echo $sql;
		//$result = $dbh->query('SELECT * FROM IDs');
		//print 'building';
		if (file_exists("datafile.csv"))
		{
			copy("datafile.csv","datafile_copy.csv");
		}
		
		$myfile = fopen("datafile.csv", "w") or die("Unable to open file!");

		
		$result = PDO_FetchAll($sql);
		
		//print_r($result);
		//echo $result[1][0].' : '.$result[2][1];
		$rows = '';
		$counter=0;
		foreach($result as $row )
		{
			$cols = '<tr>';
			$rows=$rows.'<tr>';
			$txt='';
			foreach( $row as $row2 => $row2_value)
			{
				//$cols= $cols.'<th>'.$row2.'</th>';
				//$rows = $rows.'<td>'.$row2_value.'</td>';
				$txt = $txt.$row2_value.'|';
				//echo $row2.' : '.$row2_value;
				//print_r($row);
				//echo '<br>';
			}
			//$rows = $rows.'</tr>';
			$txt = str_replace("\r\n",'',$txt);
			//$txt = str_replace("\n",'',$txt);
			$txt = $txt."\n";
			fwrite($myfile, $txt);
			$counter++;
		}
		//$cols = "<table cellpadding='1' border='1'>".$cols.'</tr>'.$rows.'</table>';
	}
	fclose($myfile);
	$html="Export Complete: ".$counter." records exported.";
	//$html= $cols."<p style='text-align:left'>Data has been saved to datafile.csv in the 'www' folder of this application</p>";


?>
<!DOCTYPE html>
<html>

<head>
	<title><?php echo $lang['title']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>" />
	<link rel="stylesheet" href="css/printable.css" type="text/css" media="print" />
</head>
<body>

	<div id="content">
	
		<div id="header">
			<span class="header_name"><?php echo $lang['header']; ?></span><br />
			
			<hr><br>
		</div>

		
		<div id="left_col">
			
			
			<?php echo $html; ?>
			<?php echo $table; echo $current; ?>
		</div>
			
		<div id="right_col">
			
			
			
		</div>
		

			
		
		<div id="footer">
			<br><hr><table cellpadding='5'><tr><td><?echo $Nav;?></td><td><? echo $exit ?></td><td><a href="Start.php">Return to start</a></td><td><? echo $totals?></td></tr></table><hr>
			
		</div>
	</div>
</body>
</html>
