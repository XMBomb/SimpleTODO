<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Todo List</title>
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../libraries/animate.css">
	<link rel="stylesheet" href="main.css">
</head>
<body class="animated bounceInLeft">
	<header>
		<h1 id="title">Todo List</h1>
		<!-- <p>Note: All links are extremely experimental and should not be used</p> -->
	</header>
	<article>
		<ul class="box">
		<?php
			$filename = "importfile";
			$sourceFile = fopen( $filename, "r" ) or die("Couldn't open $filename");
			$out = '';
			while (!feof($sourceFile)) {
				$line =  trim(fgets($sourceFile));
				if (!empty($line)){
					$out .= '<li>'.$line.'</li>'."\n";
				}
			}
			fclose($sourceFile);
			if ($out){
				echo $out;
			}
		?>
		</ul>
		<p class="noteText"></p>
	</article>
</body>
</html>
