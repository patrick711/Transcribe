<?
// Setting up some variables...

include "./pdo.php";

require_once('config.php');

$stylesheet = "survey.css";
$title = $meta["title"];

$header = $meta['header'];

?>
<!DOCTYPE html>
<html>

<head>
	<title><?php echo $title; ?></title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>" />

</head>
<body>
	<div id="content">
		<div id="header">
			<span class="header_name"><?php echo $header; ?></span><br />
			<span id="resume_subtitle" class="subtitle">
				<br><br>
			</span>
			<hr><br>
		</div>

		
		<div id="left_col">
			<form action="Start.php" method="post">
				
				<table align="center"><tr><td width="300px">
				<span class="large_title">Create your IDs</span></td></tr>
				<tr><td>
				<b>Starting Number </b><input type="text" name="Start"><br>
				</td></tr>
				<tr><td>
				<b>Ending Number</b> <input type="text" name = "Ending"><br>
				</td></tr>
				<tr><td>
				<b>Add Number</b> <input type="text" name = "random"><br>
				</td></tr>			
				<tr><td>
	    
				<tr><td>
				<input type="submit" value="Create IDs"><br>
				</tr></td>
				</table>
		</div>
			
		<div id="right_col">
			
			<?php
				//Clear Table
				if (isset($_POST["clear"]))
				{
						$dbh = new PDO("sqlite:database.sdb");
						$dbh->exec("Delete from IDs");
						//print "deleted";
				}
				
				
				$list = "";
				$count =0;
				$option = "";
				if ($_POST[random] !='')
				{
						$rand = $_POST[random].';';
						
				}
				
				
				if (1==2)
				{
					if ($rand == '')
					{
						$rand = $_POST[hrandom].';';
					}
					else
					{
						$rand = $rand.$_POST[hrandom].';';
					}
					$temp = "<option value='333'>".$rand."</option>";
					//echo $temp;
				}
				//echo "random".$rand."<br>";
				if ( isset($_POST['Start']) or $rand !='')//or $_POST['hstart'] !='') 
				{
					if ($_POST['Start']!='')
					{
						$start = (is_numeric($_POST['Start']) ? (int)$_POST['Start'] : 0);
						$end = (is_numeric($_POST['Ending']) ? (int)$_POST['Ending'] : 0);
					
		//			else
	//				{
						//$start = (is_numeric($_POST['hstart']) ? (int)$_POST['hstart'] : 0);
						//$end = (is_numeric($_POST['hend']) ? (int)$_POST['hend'] : 0);
					
//					}
						
						$end = $end + 1;
						for($i= $start; $i< $end; $i++)
						{
							
							//$temp = "<option value='".$i."'>" . $i . "</option>";
							//$option = $option.$temp;
							$count++;
							$list = $list.$i.",";
						}
						//print "startlist: ".$list;
					}
					if ($rand != '')
					{
						$random = $rand;
						//print "randomlist:".$random." list: ".$list;
						while(strpos($random,';'))
						{
							$temp2 = substr($random,0,strpos($random,';'));
							$random = substr($random,strpos($random,';')+1);
							//$temp= "<option value='".$temp2."'>".$temp2."</option>";
							//$option = $option.$temp;
							$count++;
							$list = $list.$temp2.",";
						}
					}
				
				}
				else  //$_POST['Start'] != ''
				{ 
					//echo "No Start Value";
				} 
				
				
				//SQLLite section 
				try {
				/*** connect to SQLite database ***/
				//$dbh = new PDO("sqlite:database.sdb");
				PDO_Connect("sqlite:database.sdb");
				}
				catch(PDOException $e)
				{
				echo "Connect Error: ".$e->getMessage()."<br>";
				}
				
					$exists = "SELECT name FROM sqlite_master WHERE type='table' AND name='IDs'";
					$name = PDO_FetchOne($exists);
				
				//echo "name: ".$name."<br>".$exists."<br>";
				//echo $QNameStr;
				
				if ($name == '')
				{
					$create = "Create table IDs (Id  INTEGER PRIMARY KEY)";
					PDO_Execute($create);
					//print $create;
				}
				
				
				if ($e == null)
				{
					
					
					try {
						//$dbh->exec("Delete from IDs");
						//$list = substr($list,0,strlen($list)-1);
						while (strpos($list,",")>0)
						{
							$id = substr($list,0,strpos($list,","));
							$list = substr($list,strpos($list,",")+1);
							//print $id;
							$sql = "INSERT INTO IDs (Id) Values (".$id.")";
							PDO_Execute($sql);		
							//print $sql;
						}
						
						
						}	
					catch(PDOException $e)
					{
					echo "InsertError: ".$e->getMessage()."<br>";
					}
					
					//print "<table border=1>";
					//print "<tr><td>Id</td></tr>";
					//$result = $dbh->query('SELECT * FROM IDs');
					$result = PDO_FetchAll('SELECT * FROM IDs order by Id');
					$option='';
					//print count($result)." - ".print_r($result);
					foreach($result as $row)
					{
					  $temp= "<option value='".$row['Id']."'>".$row['Id']."</option>";
					  $option = $option.$temp;
					  
					}
					//print "</table>";
				}
				
				 
				 //End SQLLite Section

				
				
				$exists = "SELECT count(*) FROM IDs ";
				$count = PDO_FetchOne($exists);
				if ($count > 20){$count =20;}
				$foot = "";
				if ($count > 0)
				{
					$foot=" <form action='SectionI.php' method='post'>";
					$foot = $foot."Next Section<input type='submit' value='Go'></form>	";
					$totals = "<form action='SectionI.php' method='post'><input type='hidden' value='X' name = 'hSectionNo'>Output file<input type = 'submit' value='submit'></form>";
					//$foot = $foot.$totals;
				}
				
				$dbh = null;
				?>
			<select size=<?echo $count; ?> width="300">
			<?php echo $option ?>
			</select>
			
			<input type="hidden" value="<?php echo $start; ?>" name="hstart">
			<input type="hidden" value="<?php echo $end-1; ?>" name="hend">
			<input type="hidden" value="<?php echo $rand; ?>" name="hrandom">
			<input type="hidden" value="<?php echo $list; ?>" name="hlist">
			
			</form>

			<form action="Start.php" method="post">
			<br><hr>
			<input type="hidden" value="Reset" name="clear">
			Clear List <input type="submit" value="Submit">
			</form>
		</div>	
		
		<div>

			
		
		<div id="footer">
			<br><hr><table cellpadding='10'><tr><td><?echo $foot;?></td><td><? echo $totals?></td></tr></table><hr>
		</div>
	</div>
</body>
</html>
