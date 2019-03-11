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

            document.getElementsByName("adc").value = 1;

        }

    </script>


    <script type="text/javascript">

        function aendereausgabebereich(formu) {
            formu.getElementById("adc").value = 1;
            return true;

        }

    </script>

    <script type="text/javascript">
        function reqListener() {

            console.log("hey");
            var oReq = new XMLHttpRequest();
            oReq.addEventListener("load", reqListener);
            oReq.open("POST", "http://lab.mi.hs-offenburg.de/lab_tkdb/sqldemo/06.php");
            oReq.send();
            console.log(oReq);
            document.getElementById("ausgabebereich").innerHTML
           // Ich brauche zugangsdaten fürinfo.mi, umeinFiledortauszu testen
            return false;
        }


    </script>


</head>
<body>


<div class="container">

    <div class="row">


        <div class="col-sm-2 col-xl-1" style="padding-left: 0px">

            <img class="float-left position-absolute d-xl-none d-md-block d-lg-block d-xl-block  src=" ../bilder/handOBENLINKS.png"
            style="z-index: 2" />
        </div>


        <div class="col-sm-8 col-lg-6">
            <p class="text-center">Datenbanken</p>
            <p id="navbar_oben" class="text-center .d-none .d-sm-block "><a href="www.google.com"> Datenspeicherung
                    Relationen SQL Entwurf Nicht-relationale DB DB Programmierung </a>


        </div>

        <div class="col-sm-2 col-lg-2 text-right d-xl-none">
            <img src="../bilder/logoHSO.gif" height="60" width="226"/>
        </div>
    </div>
    <img src="../bilder/line_bottom.png"/>

    <div class="row">
        <div id="navbar_left" class="col-sm-12 col-xl-2" style="padding-top: 45px">
            <h3 class="col-xl-12">SQL-Tool</h3>
            <p class="table-hover"><a href="hilfe.html">Hilfe</a></p>
            <p><a href="Impressum.html">Impressum</a></p>
            <p><a href="datenbankhilfe.html">Tabellen ansehen</a></p>
        </div>
        <div class="col-sm-6 col-xl-4">

            <!--HIer kommt ein eingabefeld und 2 Buttons für clear und reset -->
            <form name="formular" action="" method="post" onsubmit="return reqListener()">
                <!-- onsubmit="return aendereausgabebereich(this)"-->
                <input type="hidden" name="pw" value="">
                <h3 class="text-center">Eingabebereich</h3>
                <textarea name="advancedString" class="md-textarea form-control" id="ads" rows="4"
                          cols="35"> </textarea>
                <input type="hidden" name="advancedCheck" value="1">

                <div class="text-center">
                    <input type="submit" class="btn btn-info" name="absenden" id="adc" value="senden">
                    <input type="reset" class="btn btn-warning" name="reset" value="löschen">
                </div>
                <!--- zieladdresse soll http://lab.mi.hs-offenburg.de/lab_tkdb/sqldemo/06.php sein
                und es ist POST-->
            </form>

        </div>
        <div class="col-sm-4 col-xl-6" id="ausgabebereich">
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