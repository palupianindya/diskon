<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program Hitung Diskon</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">



</head>
<body>

    <div class="main">
        
        <div class="header">
            <img src="images/header-text.png" alt="">
            <img src="images/dots.png" alt="">
        </div>
        <div class="container">
            <form id="booking-form" class="booking-form" action="index.php" method="POST">
                <div class="form-group">
                    <div class="form-destination">
                        <label for="destination">Jumlah Bayar</label>
                        <input class="uang" type="text" id="destination" name="totalbeli" placeholder="Masukkan Jumlah Pembelian...." />
                    </div>                 
                    <div class="form-submit">
                        <input type="submit" id="submit" class="submit" name="tuku" value="Hitung Diskon" />
                    </div>
                </div>
            </form>

            <form class="booking-form">
			<?php


				if(!empty($_POST['tuku'])){
				$totalbeli = $_POST['totalbeli'];
				$totalbeli = str_replace(".", "", $totalbeli);


				if (isset($totalbeli)){

				$toyar=intval($totalbeli);
				$diskon=0;

				if ($toyar>=500000){
				$diskon=(0.5*$toyar);
				}
				else if ($toyar>=100000) {
				$diskon=(0.1*$toyar);
				}else if ($toyar>=50000) {
				$diskon=(0.05*$toyar);
				} else {
				print("Maaf Tidak Ada Diskon <br>\n");
				}



				{
				//printf("Jumlah Bayar = %d<br>\n",$toyar);
				echo "Jumlah Bayar = Rp ";
				echo number_format($toyar,2,",",".");
				echo "<br>";

				//printf("Diskon = %d<br>\n",$diskon);

				echo "Diskon = Rp ";
				echo number_format($diskon,2,",",".");
				echo "<br>";

				$totalbayar=$toyar-$diskon;
				//printf("<b>Total Bayar = %d<br></b>\n",$totalbayar);

				echo "<b>Total Bayar = </b> Rp ";
				echo number_format($totalbayar,2,",",".");
				echo "<br>";

				echo "<b>Total Bayar = </b> Rp ";
				echo number_format($totalbayar,2,",",".");
				}

				}

				}
			?>
            </form>
            
        </div>

    </div>

    <!-- JS -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>
    <script src="jquery.mask.min.js"></script>






    <script type="text/javascript">
	$(document).ready(function(){
	// Format mata uang.
	$( '.uang' ).mask('#.##0', {reverse: true});

	})
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>