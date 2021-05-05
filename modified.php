<!DOCTYPE html>
<title>Επισκόπηση στοιχείων ευρήματος</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <link rel="stylesheet" type="text/css" href="styles.css">
	<h1><a name="0"></a>Επισκόπηση στοιχείων ευρήματος</h1>
<?php    

include "connection.php";    

    $categ =$_POST['categ'];
    $title =$_POST['title'];             
    $date =$_POST['date'];
    $place =$_POST['place'];
    $desc =$_POST['desc'];
    $height =$_POST['height'];
    $length =$_POST['length'];
    $archname =$_POST['archname'];
    $service =$_POST['service'];
	$current= date("F j, Y, g:i a");
    $query="insert into registration(categ,title,date,place,description,height,length,archname,service,current) values ('$categ','$title','$date','$place','$desc','$height','$length','$archname','$service',now())";


    // Perform query
    if ($result = mysqli_query($conn,$query)) {
         //echo "Η καταχώρηση είναι εφικτή!";  
	}
	else{
         echo "Η καταχώρηση δεν είναι εφικτή.";
            }
		$sql =
		"select * from registration  WHERE id =(
                SELECT max(id) FROM registration
				) ";  
						
         $result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td> <b>Αριθμός Ευρήματος</b></td>    
                <td><b>Κατηγορία Ευρήματος</b></td>    
                <td><b>Τίτλος Ευρήματος</b></td>    
                <td><b>Εκτιμώμενη Χρονολογία</b></td>    
                <td><b>Αρχαιολογικός Χώρος</b></td>    
                <td><b> Περιγραφή</b></td>    
                <td><b>Ύψος Ευρήματος</b></td>    
                <td><b>Μήκος Ευρήματος</b></td> 
                <td><b>Ονομ/ώνυμο Αρχαιολόγου</b></td>    
                <td><b>Αρμόδια Εφορεία Αρχαιοτήτων</b></td>
				<td><b>Εμβαδόν Ευρήματος</b></td> 
				<td><b>Ημ/νία και ώρα καταχώρησης</b></td> 
				<td colspan = "2"></td> 
            </tr>    
   
<?php 
        $row = mysqli_fetch_object($result);      
        ?>  
            <tr>  
                <td>  
                    <?php echo $row->id;?>  
                </td>  
                <td>  
                    <?php echo $row->categ;?>  
                </td>  
                <td>  
                    <?php echo $row->title;?>  
                </td>  
                <td>  
                    <?php echo $row->date;?>  
                </td>  
                <td>  
                    <?php echo $row->place;?>  
                </td>  
                <td>  
                    <?php echo $row->description;?>  
                </td>  
                <td>  
                    <?php echo $row->height;?>  
                </td>  
                <td>  
                    <?php echo $row->length;?>  
                </td>  
                <td>
                    <?php echo $row->archname;?>  
                </td>  
                <td>   
                    <?php echo $row->service;?>  
				</td> 
				<td>   
                    <?php echo ($row->height)*($row->length);?>  
				</td>
				<td>   
                    <?php echo $row->current;?>  
				</td>
								
				<td><a href="index.php?id =     
					<?php echo $row->id;?>" onclick="return confirm('Είστε σίγουρος/η;')">Καταχώρηση    
					</a> </td>  
				<tr>  
         <?php  
                
		 // Close connection
        mysqli_close($conn);
		?>   	
		</tr>	
			<footer>
			Δημιουργήθηκε από τη Χριστίνα Κίτσου, Α.Μ. 1064635<br />
		</footer>	
      </table> 
	  
    </body> 		
</html>   
           
        
        