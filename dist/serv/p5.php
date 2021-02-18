<?php
$string = isset($_POST['string']) ? $_POST['string'] : '';

$string_s = htmlspecialchars($string, ENT_QUOTES);

mb_internal_encoding('UTF-8');
$string_c = html_entity_decode($string, ENT_QUOTES, 'utf-8');


$string_t = trim($string_s);
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="stylesheet" href="../css/serv/p5.css">
	<link rel="apple-touch-icon" sizes="180x180" href="../img/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/icons/favicon-16x16.png">
	<link rel="manifest" href="../img/icons/site.webmanifest">
	<title>K(Strings)</title>
</head>

<body>
	<header id="main-header">
		<div class="headings">
			<h1 class="heading-bg"><span class="heading-span">K</span>(Strings)</h1>
			<h4 class="heading-sm">A string function webapp</h4>
		</div>
	</header>

	<main id="main-content">
		<div class="container">
			<div class="inputs">
				<h1 class="label">Input <span class="label-span">string </span>below</h1>
				<form action="" method="post">
					<input type="text" name="string" id="string">
					<div class="buttons">
						<input type="submit" value="Apply Functions" id="apply" class="button">
						<input type="reset" value="Clear" id="clear" class="button">
					</div>
				</form>
			</div>
		</div>
		<?php if (isset($_POST['string'])) {
		?>
			<div class="card-container">
				<div class="card func1">
					<h2 class="card-title">Function Set 1</h2>
					<div class="table-container">
						<table>
							<tr>
								<td>Original Value of String</td>
								<td>*<?php echo $string_s; ?>*</td>
							</tr>
							<tr>
								<td>Number of characters</td>
								<td><?php echo mb_strlen($string_c); ?></td>
							</tr>
							<tr>
								<td>Number of words</td>
								<td><?php echo count(explode(" ", $string_t)); ?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card func2">
					<h2 class="card-title">Function Set 2</h2>
					<div class="table-container">
						<table>
							<tr>
								<td>First character to uppercase</td>
								<td>*<?php echo ucfirst($string_s); ?>*</td>
							</tr>
							<tr>
								<td>First charcater of every word to uppercase</td>
								<td>*<?php echo ucwords($string_s); ?>*</td>
							</tr>
							<tr>
								<td>To lowecase</td>
								<td>*<?php echo strtolower($string_s); ?>*</td>
							</tr>
							<tr>
								<td>To uppercase</td>
								<td>*<?php echo strtoupper($string_s); ?>*</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card func3">
					<h2 class="card-title">Function Set 3</h2>
					<div class="table-container">
						<table>
							<tr>
								<td>Without leading spaces</td>
								<td>*<?php echo ltrim($string_s); ?>*</td>
							</tr>
							<tr>
								<td>Without trailing spaces</td>
								<td>*<?php echo rtrim($string_s); ?>*</td>
							</tr>
							<tr>
								<td>Without leading and trailing spaces</td>
								<td>*<?php echo $string_t; ?>*</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card func4">
					<h2 class="card-title">Function Set 4</h2>
					<div class="table-container">
						<table>
							<tr>
								<td>MD5 value of string</td>
								<td class="md5"><?php echo implode('-', str_split(md5($string_c), 4)); ?></td>
							</tr>
							<tr>
								<td>Base64 value of string</td>
								<td class="md5"><?php echo implode('-', str_split(base64_encode($string_c), 7)); ?></td>
							</tr>

						</table>
					</div>
				</div>
				<div class="card func5">
					<h2 class="card-title">Function Set 5</h2>
					<div class="table-container">
						<table>
							<tr>
								<td>First 16 characters</td>
								<td>*<?php echo substr($string_s, 0, 16); ?>*</td>
							</tr>
							<tr>
								<td>Last 4 characters</td>
								<td>*<?php echo substr($string_s, -4); ?>*</td>
							</tr>
							<tr>
								<td>4 characters starting from the 20th position</td>
								<td>*<?php echo substr($string_s, 20, 4); ?>*</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card func6">
					<h2 class="card-title">Function Set 6</h2>
					<div class="table-container">
						<table>
							<tr>
								<td>Position of word "guide"</td>
								<td><?php var_dump(strpos($string_s, "guide")); ?></td>
							</tr>
							<tr>
								<td>Position of word "UE"</td>
								<td><?php var_dump(strpos($string_s, "UE")); ?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card func7">
					<h2 class="card-title">Function Set 7</h2>
					<div class="table-container">
						<table>
							<tr>
								<td>"HTML" word in uppercase</td>
								<td>*<?php echo str_replace("html", "HTML", $string_s); ?>*</td>
							</tr>
							<tr>
								<td> "&ltINPUT&gt" word in uppercase</td>
								<td>*<?php echo str_replace("input", "INPUT", $string_s); ?>*</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="card func8">
					<h2 class="card-title">Function Set 8</h2>
					<div class="table-container">
						<table>
							<?php
							echo "<tr><td rowspan=" . count(explode(' ', $string_t)) + 1 . ">Strings converted to array</td>";
							foreach (explode(' ', $string_t) as $data) {
								echo "<tr><td class='arr-data'>*$data*</td></tr>";
							}

							?>
						</table>
					</div>
				</div>
			</div>

		<?php } ?>
	</main>


	<footer id="main-footer">
		<div class="footings">
			<h4 class="footing-bg"><i>&copy; 2021, Charles King. All rights reserved.</i></h4>
		</div>
		<div class="navs">
			<ul class="nav-list">
				<li class="nav-item"><a href="#"><i class="fab fa-facebook fa-2x"></i></a></li>
				<li class="nav-item"><a href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
				<li class="nav-item"><a href="#"><i class="fab fa-github fa-2x"></i></a></li>
				<li class="nav-item"><a href="#"><i class="fab fa-linkedin fa-2x"></i></a></li>
				<ul>
		</div>
	</footer>
</body>



</html>