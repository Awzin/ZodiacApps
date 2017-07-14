<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>my zodiak</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div id="login-button">
	<center><font size="80px" color="white" face="Playball">My Zodiak</font></center>
	<img src="css/zodiak.png">
	</img>
	</div>

<div id="container">
  <h1>Cari Tau Disini</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>
  
  <form method="post" action="" >
						<div class="form">
							<div class="12u$ 12u(small)">
								<input type="text" name="nama_anda" id="text" value="" placeholder="Masukkan Nama Anda" >
								<input type="text" name="tanggal" id="text" value="" placeholder="Masukkan Tanggal" >
								<br>
								<a><input type="submit" name ="submit" value="Cek" ></a>
																
							</div>
						</div>
				</form></p>
</div>
   
  <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
	
	
<!-- Two -->

			<section id="one" class="wrapper">
				<div class="inner">
				<div class="display">
				  <?php
				  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING) );
				if ($_POST["submit"]) {
					$_POST["nama_anda"] = str_replace(' ',' ', $_POST["nama_anda"]); 
					$_POST["tanggal"] = str_replace(' ',' ', $_POST["tanggal"]); 

				   $url = "https://script.google.com/macros/exec?service=AKfycbw7gKzP-WYV2F5mc9RaR7yE3Ve1yN91Tjs91hp_jHSE02dSv9w&nama=".$_POST["nama_anda"]."&tanggal=".$_POST["tanggal"]."";
				   
				   $content = file_get_contents($url);
					$json = json_decode($content, TRUE);
					$nomor = $json['data']['nama'];

					if (!(isset($nomor))){
						echo "<h2>Nama dan Tanggal yang anda masukkan salah, silahkan ulangi</h2>";
											}
					else{
					$zodiak = array($json['data']);
				?>
				</div>
				
				
				<div id="rcorners2">
					<div class="flex flex-3">
					<header>
						<center><font size="80px" color="white" face="Playball"><?php echo $nomor ?></font></center>
					</header>
					<br>
					<article>
							<div class="box person">
							<h3>Lahir</h3>
							<h2><?php echo $zodiak[0]['lahir'] ?></h2>
							</div>
							<br>
						</article>
						<article>
							<div class="box person">
							<h3>Usia</h3>
							<h2><?php echo $zodiak[0]['usia'] ?></h2>
							</div>
							<br>
						</article>
						<article>
							<div class="box person">
							<h3>Ulang Tahun</h3>
							<h2><?php echo $zodiak[0]['ultah'] ?></h2>
							</div>
							<br>
						</article>
						<article>
							<div class="box person">
							<h3>Zodiak</h3>
							<center><font size="80px" color="yellow" face="Playball"><?php echo $zodiak[0]['zodiak'] ?></font></center>
							
							</div>
						</article>
					
					</div>
				</div>
				
				
			</section>
			
<?php
	}
}
?>

	<div id="footer">
        Copyright &copy; 2017
        Designed by senggring
    </div>
	

</body>
</html>
