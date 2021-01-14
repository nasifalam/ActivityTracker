<html>
<head>
<title> Activity Tracker</title>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<h1> Time Logger App </h1>
<p> Created by: Nasif Alam, B.Eng </p>

<?php
date_default_timezone_set("America/New_York");
$datenow= date("Y-m-d");
$timenow=date("H:i A");
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Time in</th>
      <th scope="col">Time out</th>
      <th scope="col">Activity Notes</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <tr>
<div class="col-5">
      <td><input class="form-control" type="date" id="date" name="date" value=<?php echo $datenow; ?> ></td>
</div>
      <td><div class="col-8">
    <input class="form-control" type="time" value=<?php echo $timenow; ?> name="timein"id="timein">
  </div></td>
      <td><div class="col-8">
    <input class="form-control" type="time" value="13:45:00" name="timeout"id="timeout">
  </div></td>
  <td><div class="col-15">
    <textarea class="form-control" id="activity" name="activity" rows="5" ></textarea>

</div></td>

<td>
  <button type="button" class="btn btn-primary">Submit</button>

</td>
    </tr>


  </tbody>
</table>

<textarea id="Activity" rows="4" cols="50" placeholder="Enter text here...">
</textarea>
<br>
<button onclick="displayOnPage()">Display Text</button>
<button onclick="clearAll()">Reset</button>
<button onclick="window.print()">Print this page</button>

</br>
<p id = "page"></p>
</body>
<script>

var date;
function clearAll() {
document.getElementById("page").innerHTML ="";
}
function displayOnPage() {
date= new Date();
var activity = document.getElementById("activity").value;
var outputActivity = document.createElement("p");
outputActivity.innerText = date.toLocaleDateString() + " " + date.toLocaleTimeString() + " "+ activity;
document.getElementById("page").appendChild(outputActivity);
document.getElementById("activity").value="";
}

</script>



</html>
