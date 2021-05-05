<!DOCTYPE html>
<title>Καταγραφή στοιχείων ευρήματος</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <link rel="stylesheet" type="text/css" href="styles.css">
	<h1><a name="0"></a>Καταγραφή στοιχείων ευρήματος</h1>
	<td><img border="0" src="img/arch.jpg" align="right width="500" height="320"></td>
	
<table border="0" cellspacing="4" id="table5" cellpadding="4" align="left" width="320">
	<tbody><tr>
		<td><form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >    
            <div class = "container">       
                <div class = "form_group">    
                    <label>Κατηγορία Ευρήματος:</label>  <br>  
                    <input type = "text" name = "categ" value = "" required />  <br>  
                </div>    
                <div class = "form_group">   
                    <label>Τίτλος Ευρήματος:</label>  <br>   
                    <input type = "text" name = "title" value = "" required/>   <br> 
                </div>    
                <div class = "form_group">    
                    <label>Εκτιμούμενη χρονολογία:</label>  <br>   
                    <input type = "text" name = "date" value = "" required/>  <br>  
                </div>  
				<div class = "form_group">    
                    <label>Αρχαιολογικός Χώρος:</label> <br>   
                    <input type = "text" name = "place" value = "" required/>  <br>  
                </div>
				<div class = "form_group">    
                    <label>Περιγραφή:</label>  <br>   
                   <textarea name="desc" cols="40" rows="5"></textarea> 
                </div>  
				 <div class = "form_group"> 
                  Διαστάσεις ευρήματος  <br> </br>
                 
				 Ύψος(cm): <input type="number"  name = "height"  value = "" required/>	
				 Μήκος(cm): <input type="number" name = "length"  value = "" required/>  
					 
              	</div>
				<div class = "form_group">    
				
                    <label>Ονοματεπώνυμο Aρχαιολόγου:</label>  <br>   
                    <input type = "text" name = "archname" value = "" required/>  <br>  
                </div>  
				<div class = "form_group">    
                    <label>Αρμόδια Εφορεία Αρχαιοτήτων</label>  <br>   
                    <input type = "text" name = "service" value = "" required/> 
                </div>
				<div class = "form_group"> 
					<button type="submit" name=>Καταχώρηση</button>				
				</div> 
			</div>			
        </form>	
		</td>
	</tr>
</tbody>
</table>
</body></html>  
