

<html>
    <head>
        <meta charset="UTF-8">
                <title>MoodSlider</title>
                <link href="homecss.css" rel="stylesheet" type="text/css"/>
     
    </head>
    <body>
  
<body>
   
    <span id="date"></span>
        <div id="page">
       

            
        <h1><div align="center">MoodSlider
             <div id="logo">
                 <img src="images/sky_logo.jpg" alt="BelieveinBetter" width="150" height="150"/>
            </div>
            Upload File Page
            </div></h1>


         <div align="left"> 
            
        <ul id="navigation">
            
                
    <li><a href="index.php" target="_blank">MoodSlider </a></li>
    <li><a href="uploadpage.php" target="_blank">Upload</a></li>
  

        </ul>
         </div>    
<h2>Upload Datafile </h2>
       
      <!-- The data encoding type, enctype, MUST be specified as below -->
      <form enctype="multipart/form-data" action="Upload.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="UploadFileField" type="file" id="UploadFileField" />
    <input type="submit" value="Send File" />
</form>
 
      
      
      
      
   </body>
</html>


