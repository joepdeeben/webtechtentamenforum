<!DOCTYPE html>
<html lang="en">
<head>
    <<script src="javascript/formopen.js"></script>
    <link rel="stylesheet" href="../css/stylemain.css">
   
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <meta name="viewport" content="with=device-width, initialscale=1.0">
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <title>Report</title>
    <script> 
   function showdiv(){
    document.getElementById("popupreport").style.display = "block";
   }
</script>
</head>


<body class="reportbody">
   


<button onclick="showdiv()"><i class="ri-question-fill"></i></button>


<div class="reportdiv" id="popupreport" style="display: none;">
<form class="reportform" action="">
<div class="logintextdiv">
            <h1 class="reporttext">Report thread</h1>
        </div>
        <div class="reportboxdiv">
            <textarea class="reportbox" placeholder="Schrijf hier waarom u deze thread report" name="reportcontent" rows="12" cols="230"></textarea>
  
    </div>

    <input type="submit" value="report" onclick="return validateForm()">

    </form>
    </div>


</body>
</html>