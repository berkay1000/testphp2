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
    <!--<script src="../js/sqlcheck.js"></script>-->

    <script type="text/javascript">
        function selectcheck(textareainput) {
    console.log("in select");
    alert("hey");


    //if (textareainput.contains("select")){
    //return true;
   // }


    }</script>



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
            <form action="" method="post" onsubmit="return selectcheck(this)"></form>
            <textarea name="sqlcode" rows="4" cols="50" > </textarea>
            <input type="button" name="test" value="testerr" onclick="selectcheck()">
            <input type="submit" name="absenden" value="abschicken">
            <input type="reset" name="reset" value="löschen">
            <!--- zieladdresse soll http://lab.mi.hs-offenburg.de/lab_tkdb/sqldemo/06.php sein
            und es ist POST-->

        </div>
        <div class="col-sm-4 col-xl-4">
            <!-- hier kommt die sqlausgabe rein -->
            <h3>Column 3</h3>
            <p>Losssssem ipsum dolor..</p>
            <p>Ut enim ad..</p>
        </div>

    </div>

    <div>
        <?php echo  "hallo php"; ?>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>