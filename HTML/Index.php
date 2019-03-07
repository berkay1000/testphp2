<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>SQL-tool</title>

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/sqlcheck.js"></script>


    <script type="text/javascript">
function selectcheck(formu) {

document.getElementsByName("adc").value=1;

}

    </script>
    <script type="text/javascript">

        function aendereausgabebereich(formu)
        {
            formu.getElementById("adc").value=1;

            if (formu=="")
            {
                document.getElementById("ausgabebereich").innerHTML="keine Eingabe";
                return;
            }
            if (window.XMLHttpRequest)
            {
                // AJAX nutzen mit IE7+, Chrome, Firefox, Safari, Opera
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                // AJAX mit IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("ausgabebereich").innerHTML = xmlhttp.responseText;
                }

                xmlhttp.open("GET","http://lab.mi.hs-offenburg.de/lab_tkdb/sqldemo/06.php"+inhalt,true);
                xmlhttp.send();
                }
            }
        }

    </script>




</head>
<body>




<div class="container">

    <div class="row">
        <div class="col-sm-4 col-lg-4">
        <img src="../bilder/handOBENLINKS.png" height="141" width="134"/>
        </div>

        <div class="col-sm-6 col-lg-4">
        <a href="www.google.com">test</a>

            <a href="www.google.com">test</a>


        </div>

            <div class="col-sm-4 col-lg-4">
                <img  src="../bilder/logoHSO.gif" height="60" width="226"/>
            </div>
    </div>


    <div class="row">
        <div id="navbar_left" class="col-sm-12 col-xl-2">
            <h3>was 1</h3>
            <p>Hilssssfe</p>
            <p>Impressum</p>
        </div>
        <div class="col-sm-6 col-xl-6">

            <!--HIer kommt ein eingabefeld und 2 Buttons für clear und reset -->
            <form name="formular" action="http://lab.mi.hs-offenburg.de/lab_tkdb/sqldemo/06.php" method="post" onsubmit="return aendereausgabebereich(this)">

                <input type="text" name="pw" value="">
                <textarea name="advancedString" id="ads"  rows="4" cols="50" > </textarea>


            <input type="submit" name="advancedCheck" id="adc" value="1" >
            <input type="reset" name="reset" value="löschen">
            <!--- zieladdresse soll http://lab.mi.hs-offenburg.de/lab_tkdb/sqldemo/06.php sein
            und es ist POST-->
            </form>

        </div>
        <div class="col-sm-4 col-xl-4" id="ausgabebereich">
            <!-- hier kommt die sqlausgabe rein -->



            //tabellenausgabe des sqls




        </div>

    </div>

    <div>

    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>