<?php
    $servername = "sql312.epizy.com";
    $username = "epiz_24198624";
    $password = "ave5renato";
    $dbname = "epiz_24198624_visits";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE Counter SET visits = visits+1 WHERE id = 1";
    $conn->query($sql);

    $sql = "SELECT visits FROM Counter WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
        }
    } else {
        echo "no results";
    }
    
    $conn->close();
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vote!</title>

	<link href="https://fonts.googleapis.com/css?family=Literata&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i|Source+Serif+Pro:400,600,700&display=swap" rel="stylesheet">
	<link href="main_css.css" rel="stylesheet" type="text/css">
	
</head>

<body style="background-color: #FFFFFF; margin: 0px;">
	<header>
		<div id="text_div">
			<p style="font-size: 250%;">Studying <span style="background-color: purple;">neurodegenerative</span> diseases through the eye of molecular <span style="background-color: green;">biology</span></p>
			<div id="horziontal_div">
				<hr class="horizontal_line">
			</div>
			<p style="font-size: 200%;"><span style="background-color: blue;">Vote</span> the <span style="background-color: purple;">neurodegenerative</span> disease!</p>
		</div>
	</header>
	<div id="counter">
		<section class="counter_disease" id="alzhimer_counter">
			<p class="disease_counter_title">Alzhimer's</p>
			<div><p class="number"><span style="background-color: #00FFFF; color: black;">290</span></p></div>
		</section>
		<section class="counter_disease" id="parkinson_counter">
			<p class="disease_counter_title">Parkinson's</p>
			<div><p class="number"><span style="background-color: #00FF00; color: black;">290</span></p></div>
		</section>
		<section class="counter_disease" id="huntington_counter">
			<p class="disease_counter_title">Huntington's</p>
			<div><p class="number"><span style="background-color: #FFFF00; color: black;">290</span></p></div>
		</section>
		<section class="counter_disease" id="down_counter">
			<p class="disease_counter_title">Down S.</p>
			<div><p class="number"><span style="background-color: #FF0000; color: black;">290</span></p></div>
		</section>
	</div>
	<article>
		<div id="section">
			<div id="Alzheimer" class="diseases">
				<p class="disease_title"><span style="background-color: #00FFFF; color: black;">Alzheimer's</span> Disease</p>
				<p class="main_expl">Neurodegenerative disease occurs when there is an aggregation in the proteins of a neuron cell in the brain. There can be a genetic mutation that causes the protein to misfold causing a large aggregation of this protein. An example In Alzheimer's plaques of beta amyloid form due to the misregulation and mutations in the processing of precursor protein of beta amyloid.</p>
				<button class="vote_button alz"> Vote! </button><br>
			</div>
			<div id="Parkinson" class="diseases">
				<p class="disease_title"><span style="background-color: #00FF00; color: black;">Parkinson's</span> Disease</p>
				<p class="main_expl">A neurodegenrative disorder affecting many pathways including mitochondrial function and mutations in the chaperone proteins involved in protein folding of the protein</p>
				<button class="vote_button park"> Vote! </button><br>
			</div>
			<div id="horziontal_div">
				<hr class="horizontal_line">
			</div>
			<div id="Huntington" class="diseases">
				<p class="disease_title"><span style="background-color: #FFFF00; color: black;">Huntington's</span> Disease</p>
				<p class="main_expl">A neurodegenerative disorder involving an increase in the number of repeats in the gene coding for the protein increasing it’s size Huntington resulting in its  misfolding</p>
				<button class="vote_button hun"> Vote! </button><br>
			</div>
			<div id="Down" class="diseases">
				<p class="disease_title"><span style="background-color: #FF0000; color: black;">Down</span> Syndrom</p>
				<p class="main_expl">A neurodevelopmental and neurodegenrative disorder caused by the trisomy of chromosome 21 resulting in misregulation of these proteins affecting many of the cell’s pathways including the beta amyloid precursor protein resulting in Alzhiemer’s <?php print $visits; ?></p>
				<button class="vote_button dow"> Vote! </button><br>
			</div>
		</div>
	</article>
</body>
</html>
