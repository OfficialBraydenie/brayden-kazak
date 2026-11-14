<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Year Plan</title>
</head>
<body>
<?php
//$query = "select * from selecteddb";
//$sql = "update selecteddb set yesno='$1or0' where title='check1'";
//$con->query($sql);

?>
<?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        function button1() {
            //$host="localhost";
            //$user="root";
            //$password="B52454bb!";
            //$dbname="selecteddb";

            //$con = new mysqli($host, $user, $password, $dbname)
	            //or die ('Could not connect to the database server' . mysqli_connect_error());
            echo "x clicked";
            //$con->close();
        }
        if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
            echo "u clicked";
        }
?>

<a id="check1x" type="submit" name="button1" class="button" value="Button1">❌</a><a id="check1u"  type="submit" name="button2" class="button" value="Button2">✔️</a>



    <input type="hidden" id="hiddencontainer1" name="hiddencontainer1"/>

<script>
    document.getElementById("check1x").addEventListener("click", updateChecksX)
    document.getElementById("check1u").addEventListener("click", updateChecksU)
    function updateChecksX(){
        document.getElementById("check1x").style = "display: none";
        document.getElementById("check1u").style = "display: flex";
        document.getElementById("hiddencontainer1").value= 1;
}
    function updateChecksU(){
        document.getElementById("check1x").style = "display: flex";
        document.getElementById("check1u").style = "display: none";
        document.getElementById("hiddencontainer1").value= 0;
}
</script>
</body>
</html>