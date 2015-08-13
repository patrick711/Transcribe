<?php
// Setting up some variables...

$QName = "Section1";

include "./pdo.php";

require_once('config.php');


$stylesheet = "survey.css";
$title = $meta["title"];
$header = $meta["header"];

?>
<?php
//**************************
// Survey Transcription Page
// Patrick S Chen 2014
//**********************************

	
	//*********Figure out what Section we're on and get Section variables from Config
	{
		$SectionNo = 1;
		if (isset($_POST[hSectionNo]))
		{
			$SectionNo = $_POST['hSectionNo'];
			//print "HIYA";
		}
		
		if ($SectionNo != 'X')
		{
			$QName = "Section".$SectionNo;
			$NextQname = "Section".($SectionNo+1);
			
			//echo $QName.'<br><br>';
			$myarray = $GLOBALS[$QName];
			
			$QNameStr = $settings[$QName."sql"];
			//echo $QNameStr;
			$QNameCols = $settings[$QName."cols"];
		}
		//*******************
	}

	
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
		
		$exists = "SELECT name FROM sqlite_master WHERE type='table' AND name='".$QName."'";
		$name = PDO_FetchOne($exists);
		//echo "name: ".$name."<br>".$exists."<br>";
		//echo $QNameStr;
		if ($name == '' && $SectionNo != 'X')
		{
			$create = "Create table ".$QName." (".$QNameStr.")";
			PDO_Execute($create);
			//print $create;
		}
		
		//*************Delete data from table that doesn't conform to ids table
		$sql = "Delete from ".$QName." where Id not in (Select id from ids)";
		PDO_Execute($sql);
		//echo $sql;
	}
	//********* End DB initialization
	
if ($SectionNo != 'X')  //X means we're outputting csv
{
	//***Figure out what ID we're on
	{
		$id = 0;
		IF (isset($_POST['id']))
		{
			$id = $_POST['id'];
			//echo "isset".$id;
		}	
		else
		{
			//$sql ="Select Min(id) from Ids where id > ".$id;  
			$sql ="Select Max(id) from ".$QName;
			
			//change on 4/12/15 to go to first unentered id
			//echo $sql;
			$id = PDO_FetchOne($sql);	
			//echo ' id: '.$id;
			if ($id == '')
			{
				$id = 0;
			}
			//echo ' 2ndid: '.$id;	
			$sql = "Select Min(id) from Ids where id > ".$id;
			$id = PDO_FetchOne($sql);	
			//echo ' lastid '.$id;
		}
	}
	//*** End get initial ID
	
	
	//*********Posted Data Validation	
	{
		$colnames=array($QNameCols);
		$icount = 0;
		$list = $QNameCols.',';	
		while (strpos($list,","))
		{
			
			$value = substr($list,0,strpos($list,","));
			$colnames[$icount] = $value;
			$icount++;
			$list = substr($list,strpos($list,",")+1);
		}
			
		$boolpassed = 1;
		if (isset($_POST['Navid']))
		{
			//We're navigating, reset the ID and get the columns!
			$id = $_POST['Navid'];
			
		}
		else
		if (isset($_POST['Entry']))
		{
			//**** We're submitting data, let's Validate it!
			$formError =0;
			//$colnames=array($QNameCols);
			//echo "Col".$colnames[2];
			//Build fields!
			for($i=0; $i<count($myarray); $i++) 
			{ 
				$_POST[$colnames[$i+1]] = str_replace("'","",$_POST[$colnames[$i+1]]);
				$htmlf = $htmlf."<tr><td align='left' colspan ='2'>".$myarray[$i][4]."</td></tr>";
				$htmlf = $htmlf."<tr><td align='left'><span class='title'>".$myarray[$i][0]."</span></td>";
				//echo $myarray[$i][1];
				//echo $colnames[$i+1];
				if ($myarray[$i][1]==1)
				{
					//echo $colnames[$i+1];
					
					if (!isset($_POST[$colnames[$i+1]]))
					{
						//This is required right?
						$formError ++;
						$htmlf = $htmlf."<td align='left'><input type='text' name='".$colnames[$i+1]."'><span style='color:red'>* required</span></td></tr>";
						//echo $htmlf;
					}
					else
					{
						//echo $myarray[$i][2];
						switch($myarray[$i][2])
						{
							case('#'):
								if (!is_numeric($_POST[$colnames[$i+1]]))
								{
									//echo $_POST[$colnames[$i+1]];
									//failed number test
									$formError ++;
									$htmlf = $htmlf."<td align='left'><input type='text' value='".$_POST[$colnames[$i+1]]."' name='".$colnames[$i+1]."'><span style='color:red'>* Must be numeric</span></td></tr>";
								}
								else
								{
									//passed number test
									$htmlf = $htmlf."<td align='left'><input type='text' value='".$_POST[$colnames[$i+1]]."' name='".$colnames[$i+1]."'></td></tr>";
								}
								break;
							case('D'):
								//Create a date field
								$htmlf = $htmlf."<td align='left'><input type='DATE' value='".$_POST[$colnames[$i+1]]."' name='".$colnames[$i+1]."'></td></tr>";
								$_POST[$colnames[$i+1]] = "'".$_POST[$colnames[$i+1]]."'";
								break;
							case('T'):
								//Create a time field
								$htmlf = $htmlf."<td align='left'><input type='time' value='".$_POST[$colnames[$i+1]]."' name='".$colnames[$i+1]."'></td></tr>";
								$_POST[$colnames[$i+1]] = "'".$_POST[$colnames[$i+1]]."'";
								break;
							default:
								//Create a text field
								$htmlf = $htmlf."<td align='left'><textarea  name='".$colnames[$i+1]."'>".$_POST[$colnames[$i+1]]."</textarea></td></tr>";
								//$htmlf = $htmlf."<td align='left'><input type='text' value='".$_POST[$colnames[$i+1]]."' name='".$colnames[$i+1]."'></td></tr>";
								$_POST[$colnames[$i+1]] = "'".$_POST[$colnames[$i+1]]."'";
								//echo "<br>".$_POST[$colnames[$i+1]];
						}
					}
				}
				else
				{
					
					$htmlf = $htmlf."<td align='left'><select  name='".$colnames[$i+1]."' width='100%'>";
					$options = $myarray[$i][2];
					while (strpos($options,";")>0)
					{
						$option = substr($options,0,strpos($options,";"));
						$options = substr($options,strpos($options,";")+1);
						if (substr($option,0,strpos($option,"|")) == $_POST[$colnames[$i+1]])
						{
							$htmlf = $htmlf."<option value=".substr($option,0,strpos($option,"|"))." selected>".substr($option,strpos($option,"|")+1)."</option>";
						}
						else
						{
							$htmlf = $htmlf."<option value=".substr($option,0,strpos($option,"|")).">".substr($option,strpos($option,"|")+1)."</option>";
						}	
					}			
					$htmlf = $htmlf."</select></td></tr>";
					$htmlf = $htmlf."<input type='hidden' value='".count($myarray)."' name='hCount'>";
					//$html = $html."<input type='hidden' value='".$id."' name='id'>";
					$htmlf = $htmlf."<input type='hidden' value='".($SectionNo)."' name='hSectionNo'>".$village;
				}
				//echo $formError;
			} //for loop  
		}
		//************End of Processing!
	}	
		
		
	//************** Find Sections' cols and posted values
	{
		//$dbh->exec("Delete from ".$QName);
		//$list = substr($list,0,strlen($list)-1);
		$list = $QNameCols.',';	
		//print $list."<br>";
		$values = "";
		$icount = 0;
		//$QNameCols = str_replace(",","','",$QNameCols);
		//print $QNameCols;
		$colnames=array($QNameCols);
		while (strpos($list,","))
		{
			
			$value = substr($list,0,strpos($list,","));
			$colnames[$icount] = $value;
			//print "-".$value."-".$_POST[$value];
			$values = $values.$_POST[$value].",";
			//$colnames[$icount] = $value;
			$icount++;
			$list = substr($list,strpos($list,",")+1);
			
		}
		$values = substr($values,0,strlen($values)-1);
	}
	//******* End retrieve Section col and posted values
	
	
	//*********** If Validation Passes, Push data into db
	if (isset($_POST['Entry']))
	{
		if ($formError ==0 )
		{	
			//print $values."-hiyo";
			//echo "post".$_POST[$id]."<br>";
			//**************Are we trying to push data? if so, let's do it!
			if ($_POST['id']!='')
			{
				$sql = "Delete from ".$QName." Where Id = ".$id;
				PDO_Execute($sql);
				$sql = "INSERT INTO ".$QName." (".$QNameCols.") Values (".$id.$values.")";
				//echo $sql;
				PDO_Execute($sql);	
				
				$sql ="Select Min(id) from Ids where id > ".$id;
				//echo $sql;
				$id = PDO_FetchOne($sql);
				//print "post_Insert: ".$id;
				if ($id =='')
				{
					$sql ="Select Min(id) from Ids";
					//echo $sql;
					$id = PDO_FetchOne($sql);
				
				}
				//print $sql;
			}
			//******* End of push data attempt
			
			
		} //($formError>0)
	}
	//************* End of data retrieve and push
	
	
	//Let's build our page!
	
	
	//*************Get IDs combobox
	{
		//$idlist = 
		$result = PDO_FetchAll("SELECT * FROM Ids");
		foreach($result as $row)
		{
			if ($id == $row['Id'])
			{
				$idlist = $idlist."<option value='".$row['Id']."' selected>".$row['Id']."</option>";
			}
			else
			{
				$idlist = $idlist."<option value='".$row['Id']."'>".$row['Id']."</option>";
			}	
		}
		$navList = "<select name='Navid'>".$idlist."</select>";	
		$idlist = "<select name='id'>".$idlist."</select>";	
	}
	//***********End of Get IDs combobox section
	

	
	//************Let's print all current records to a grid
	{
		$current= "<table cellpadding='1' border=1>";
		$current=$current."<tr><td>Id</td>";
		for($i=1; $i<count($colnames); $i++)
		{
			$current=$current."<td>".$colnames[$i]."</td>";
		}
		$current."</tr>";
		
		//$result = $dbh->query('SELECT * FROM IDs');
		//print 'building';
		$result = PDO_FetchAll("SELECT * FROM ".$QName);
		//echo "SELECT * FROM ".$QName;
		foreach($result as $row)
		{
			if ($id == $row['Id'])
			{
				$current = $current."<tr style='background-color:#00ff00;'><td>".$row['Id']."</td>";
			}
			else
			{
				$current = $current."<tr style='background-color:#ffffff;'><td>".$row['Id']."</td>";
			}
		  for($i=1; $i<count($colnames); $i++)
			{
				if ($myarray[$i-1][1]==2)
				{
					$options = $myarray[$i-1][2];
					//echo $colnames[$i];
					//echo $options;
					while (strpos($options,";")>0)
					{
						$option = substr($options,0,strpos($options,";"));
						$options = substr($options,strpos($options,";")+1);
						//echo $row[$colnames[$i]];
						//echo substr($option,0,strpos($option,"|")).' - '.$row[$colnames[$i]].'; ';
						if (substr($option,0,strpos($option,"|")) == $row[$colnames[$i]])
						{
							//echo substr($option,strpos($option,"|")+1);
							$current=$current."<td>".substr($option,strpos($option,"|")+1)."</td>";
						}
					}	
				}
				else
				{
					$current=$current."<td>".$row[$colnames[$i]]."</td>";
				}
			}
		  $current = $current."</tr>";
		}
		$current = $current."</table>";
	}
	//******* End of print records to grid
	

	//**************Let's create the Entry form from the previously discovered cols!
	{
		//print "colnames: ".$colnames[1];
		//Get Questions and create form controls
		if (isset($settings[$QName]) && $settings[$QName] == true) 
		{ 
			//Get values
			//echo "SELECT * FROM ".$QName." Where Id = ".$id;
			$result = PDO_FetchAll("SELECT * FROM ".$QName." Where Id = ".$id);
			
			//echo print_r($result);
			//print 'section';
			$html = "<form action='SectionI.php' method='post'><input type='hidden' value='1' name='Entry'>";
			$html = $html."<table cellpadding='5'  width='90%' align='center'><tr><td align='left' colspan='2'><span class='large_title'>".$QName."</span></td></tr>";
			$html = $html."<tr><td align='left'><span class='title'>Ids</span></td><td align='left'>".$idlist."</td></tr>";
			if ($formError == 0)
			{
				for($i=0; $i<count($myarray); $i++) 
				{ 
					//Build fields!
					//echo $result[0][$colnames[$i+1]];
					$html = $html."<tr><td align='left' colspan='2'>".$myarray[$i][4]."</td></tr>";
					$html = $html."<tr><td align='left'><span class='title'>".$myarray[$i][0]."</span></td>";
					$fvalue = $result[0][$colnames[$i+1]];
					if ($fvalue=='')
					{
						$fvalue = $myarray[$i][3];
					}
					if ($myarray[$i][1]==1)
					{
						//Create Date Field
						switch ($myarray[$i][2])
						{
							case('D'):
								//Create date field
								$html = $html."<td align='left'><input type='date' value='".$fvalue."' name='".$colnames[$i+1]."'></td></tr>";
								break;
							case('A'):
								//Create Text field
								$html = $html."<td align='left'><textarea  name='".$colnames[$i+1]."'>".$fvalue."</textarea></td></tr>";
								break;
							case('T'):
								//Create Time field
								$html = $html."<td align='left'><input type='time' value='".$fvalue."' name='".$colnames[$i+1]."'></td></tr>";
								break;
							
							case('#'):
								//Create Number field
								$html = $html."<td align='left'><input type='text' value='".$fvalue."' name='".$colnames[$i+1]."'></td></tr>";
									
						}
					}
					else
					{
						
						$html = $html."<td align='left'><select  name='".$colnames[$i+1]."' width='100%'>";
						$options = $myarray[$i][2];
						while (strpos($options,";")>0)
						{
							$option = substr($options,0,strpos($options,";"));
							$options = substr($options,strpos($options,";")+1);
							if (substr($option,0,strpos($option,"|")) == $fvalue)
							{
								$html = $html."<option value=".substr($option,0,strpos($option,"|"))." selected>".substr($option,strpos($option,"|")+
1)."</option>";
							}
							else
							{
								$html = $html."<option value=".substr($option,0,strpos($option,"|")).">".substr($option,strpos($option,"|")+1)."</option>";
							}	
						}			
						$html = $html."</select></td></tr>";
						$html = $html."<input type='hidden' value='".count($myarray)."' name='hCount'>";
						//$html = $html."<input type='hidden' value='".$id."' name='id'>";
						$html = $html."<input type='hidden' value='".($SectionNo)."' name='hSectionNo'>".$village;
					}
				} //for loop
			}
			else	//Did you fail Validation?!  Hilarious,try again.
			{
				$html = $html.$htmlf;
			}
			
			//$html = $html."<tr><td></td><td></td></tr></table></DIV>";
			$html = $html."<tr><td align='left'><input type='submit' value='submit'></td></tr></table>";
			$html = $html."</form>";
		}  //if (isset
	}
	//***********end Create entry form
	
	
	
	//*********** Let's create navigation for other Sections
	{
		if ($settings[$NextQname]==true)
		{
			$exit = "";
			//echo $SectionNo;
			if ($SectionNo >1)
			{
				$exit = $exit."<form action='SectionI.php' method='post'>Previous Section<input type='hidden' value='".($SectionNo-1)."' name='hSectionNo'><input type='submit' value='Go'></form></td><td>";
			}
			$exit = $exit."<form action='SectionI.php' method='post'>Next Section<input type='hidden' value='".($SectionNo+1)."' name='hSectionNo'>";
			$exit = $exit."<input type='submit' value='Go'></form>";
		}
		else
		{
			if ($SectionNo >1)
			{
				$exit = $exit."<form action='SectionI.php' method='post'>Previous Section<input type='hidden' value='".($SectionNo-1)."' name='hSectionNo'><input type='submit' value='submit'></form>";
			}
			//$exit = "";
		}
		$Nav = "<form action='SectionI.php' method = 'post'><input type='hidden' value='".($SectionNo)."' name='hSectionNo'>Move to ID: ".$navList."<input type='submit' value='submit'></form>";
		$totals = "<form action='SectionI.php' method='post'><input type='hidden' value='X' name = 'hSectionNo'>Output file<input type = 'submit' value='submit'></form>";
	}
	//************End of Navigation
}
else
{

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
		foreach($result as $row )
		{
			$cols = '<tr>';
			$rows=$rows.'<tr>';
			$txt='';
			foreach( $row as $row2 => $row2_value)
			{
				$cols= $cols.'<th>'.$row2.'</th>';
				$rows = $rows.'<td>'.$row2_value.'</td>';
				$txt = $txt.$row2_value.'|';
				//echo $row2.' : '.$row2_value;
				//print_r($row);
				//echo '<br>';
			}
			$rows = $rows.'</tr>';
			$txt = $txt."\n";
			fwrite($myfile, $txt);
		}
		$cols = "<table cellpadding='1' border='1'>".$cols.'</tr>'.$rows.'</table>';
	}
	fclose($myfile);
	$html= $cols."<p style='text-align:left'>Data has been saved to datafile.csv in the 'www' folder of this application</p>";
}

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