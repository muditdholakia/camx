<?php
// Upon starting the section
session_start();
$_SESSION['TIMER'] = time() + 600; // Give the user Ten minutes
?>
<script type="text/javascript">
var TimeLimit = new Date('<?php echo date('r', $_SESSION['TIMER']) ?>');
</script>
<script type="text/javascript">
function countdownto() {
  var date = Math.round((TimeLimit-new Date())/1000);
  var hours = Math.floor(date/3600);
  date = date - (hours*3600);
  var mins = Math.floor(date/60);
  date = date - (mins*60);
  var secs = date;
  if (hours<10) hours = '0'+hours;
  if (mins<10) mins = '0'+mins;
  if (secs<10) secs = '0'+secs;
  document.body.innerHTML = hours+':'+mins+':'+secs;
  setTimeout("countdownto()",1000);
  }

countdownto();
</script>
