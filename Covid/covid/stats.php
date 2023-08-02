<?php

include 'database.php';

$data_by_region = $db->query('SELECT Region, SUM(No_Of_Positive_Cases) as No_Of_Positive_Cases, SUM(No_Of_Death_Cases) as No_Of_Death_Cases, SUM(No_Of_Recovered_Cases) as No_Of_Recovered_Cases FROM `Statistics` GROUP BY Region')->fetchAll();

$general_data = $db->query('SELECT SUM(No_Of_Positive_Cases) as No_Of_Positive_Cases, SUM(No_Of_Death_Cases) as No_Of_Death_Cases, SUM(No_Of_Recovered_Cases) as No_Of_Recovered_Cases FROM `Statistics`')->fetch();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="icon" href="./img/corona-icon-red.png">
  <title>StatisticS</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap');
  </style>

</head>

<body id="main5">
  <div class="start">
    <div class="class3">
      <nav id="nav1">

        <div class="class1">
          <pre style="font-size: 27px; font-weight: bolder; ">Covid Census</pre>

        </div>
        <div class="class2">
          <ul class="links">
            <li class="linkss"><a class="linkss1" href="index.html">Home</a></li>
            <li class="linkss"> <a class="linkss1" href="stats.php">Statistics </a></li>
            <li class="linkss"> <a class="linkss1" id="link1" href="sign-in.html">sign-in </a></li>
            <li class="linkss"> <a class="linkss1" id="link1" href="register.html">register</a></li>

          </ul>
        </div>
    </div>
    </nav>

    <div class="class4">
      <div class="class4i">
        <div class="class4ia">
          <pre>


          </pre>
          <h1> ABOUT US</h1>
          <P class="text">Coronavirus killed alot of people recently. We are hear to raise awareness on the preventive
            majors and
            the Symptoms of Coronavirus.
          </P>
          <button id="same1" class="same">CONTACT US</button>

        </div>
        <div class="class4b">
          <img src="img/illustration.png" alt="Image" class="img-fluid">


        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="section">
    <h2 class="section-heading">YEARLY STATISTICS</h2>
    <p class="section-paragraph">These are the most recent statistics gotten in the
      current region over <br> the various years</p>
  </div>
  <div class="container" id="contain">
    <div class="data">
      <div class="cases">
        <div class="label">Active Cases</div>
        <strong class=" number"><?= $general_data[0] ?></strong>
      </div>
    </div>
    <div class="data">
      <div class="cases">
        <div class="label">Deaths</div>
        <strong class="number"><?= $general_data[1] ?></strong>
    </div>
        </div>
        <div class="data">
          <div class="cases">
        <div class="label">Recovered Cases</div>
        <strong class="number"><?= $general_data[2] ?></strong>
      </div>
    </div>
  </div>
  <div class="container32">
    <h1 style="margin: 20px;"><span class="blue"></span>STAT<span class="blue"></span> <span class="yellow">ISTICS</pan></h1>
      
      <table class="container">
        <thead>
          <tr>
            <th><h1>REGION</h1></th>
            <th><h1></h1>Number of Active Cases</th>
            <th><h1>Number of Deaths </h1></th>
            <th><h1>Number of Recovered Cases</h1></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data_by_region as $d) { ?>
          <tr>
            <td><?= $d[0] ?></td>
            <td><?= $d[1] ?></td>
            <td><?= $d[2] ?></td>
            <td><?= $d[3] ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

  </div>
  <pre>

    
  </pre>
  </div>
  </div>



</body>

</html>