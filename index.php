<!doctype html>
<html lang="en">

<head>
  <title>Covid Web</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv=“Pragma” content=”no-cache”>
  <meta http-equiv=“Expires” content=”-1″>
  <meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
  <!-- The Header --> 
  <div class="header" style="background-color: #009688;">
    <h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Coronavirus_icon.svg/240px-Coronavirus_icon.svg.png" height="10%" width="10%">COVID-19 STATISTICS</h1>
    </div>
  <body class="w3-light-grey">

   <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
  
  
    
  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container"><br>
          <img src="https://covid-19-apis.postman.com/static/covid19-image-2-0e295f09eccf0fa3f4778159cd065f5d.png" style="width:100%" height="100%" alt="Avatar">
          <br></div>
        </div>
        <br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <div class="w3-container">
          <div class="section-description">
            <p class="section-subheading">
              <form id="query-form">
                <div>
                  <label for="ingredients"><h3 class="w3-text-teal">Enter country name: </h3></label><input class="textfield" id="ingredients" type="text" name="ingredients" placeholder="e.g.: India, China" onChange="sanitizeInputs()" />
                </div>
                
                <div class="button">
                  <br />
                  <input class="button" type="button" value="Reset" id="resetButton" onClick="this.form.reset();resetResults()" />
                  <input class="button" type="submit" value="Search ..." id="searchButton" />
                </div>
              </form>
            </p>
          <hr>
          <h3><div class="w3-text-teal" id="search-results-heading"></div></h3>
          <div class="w3-opacity" id="results"></div>

          <hr>
        </div>
      </div>


    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top"> 
  <p>Made by:</p>
  <p><b>Janhvi Guha</b></p>
  <p><b>Anjali Chouksey</b></p>
  <p><b>Riya Nimje</b></p>
  <p>&nbsp;</p>
</footer>

</body>

<!-- JQuery Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- Our codes -->
<script src="js/kitchenblue.js?v=1"></script>

</html>
