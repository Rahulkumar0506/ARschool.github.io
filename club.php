<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1>OUR FACULTY</h1>
<hr>

<h2>PORTFOLIO</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('php')"> php</button>
  <button class="btn" onclick="filterSelection('mp/mc')"> mp/mc</button>
  <button class="btn" onclick="filterSelection('ADD')"> ADD</button>
     <button class="btn" onclick="filterSelection('ADD')"> JAVA</button>
     <button class="btn" onclick="filterSelection('ADD')"> MATH</button>
     <button class="btn" onclick="filterSelection('ADD')"> ELECTRICAL</button>
     <button class="btn" onclick="filterSelection('ADD')"> APTITUDE</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column php">
    <div class="content">
      <img src="#.jpg" alt="Mountains" style="width:100%">
      <h4>php</h4>
      
    </div>
  </div>
  <div class="column php">
    <div class="content">
    <img src="#.jpg" alt="Lights" style="width:100%">
      <h4>php</h4>
      
    </div>
  </div>
  <div class="column php">
    <div class="content">
    <img src="#.jpg" alt="Nature" style="width:100%">
      <h4>php</h4>
      
    </div>
  </div>
  
  <div class="column mp/mc">
    <div class="content">
      <img src="mani.jpg" alt="Car" style="width:100%">
      <h4>mp/mc</h4>
      
    </div>
  </div>
  <div class="column mp/mc">
    <div class="content">
    <img src="kr.jpg" alt="Car" style="width:100%">
      <h4>mp/mc</h4>
      
    </div>
  </div>
  <div class="column mp/mc">
    <div class="content">
    <img src="mani.jpg" alt="Car" style="width:100%">
      <h4>mp/mc</h4>
      
    </div>
  </div>

  <div class="column ADD">
    <div class="content">
      <img src="#" alt="Car" style="width:100%">
      <h4>add</h4>
      
    </div>
  </div>
  <div class="column ADD">
    <div class="content">
    <img src="#" alt="Car" style="width:100%">
      <h4>add</h4>
      
    </div>
  </div>
  <div class="column ADD">
    <div class="content">
    <img src="#" alt="Car" style="width:100%">
      <h4>add</h4>
      
    </div>
  </div>
     <div class="column JAVA">
    <div class="content">
    <img src="#" alt="Car" style="width:100%">
      <h4>math</h4>
      
    </div>
  </div>
     <div class="column JAVA">
    <div class="content">
    <img src="#" alt="Car" style="width:100%">
      <h4>math</h4>
      
    </div>
  </div>
     <div class="column JAVA">
    <div class="content">
    <img src="" alt="Car" style="width:100%">
      <h4>math</h4>
      
    </div>
  </div>
     <div class="column MATH">
    <div class="content">
    <img src="math.jpg"style="width:100%">
    </div>
  </div>
     <div class="column MATH">
    <div class="content">
    <img src="math.jpg" alt="Car" style="width:100%">
      <h4>java</h4>
      
    </div>
  </div>
     <div class="column MATH">
    <div class="content">
    <img src="math.jpg" alt="Car" style="width:100%">
      <h4>java</h4>
      
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
