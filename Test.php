<?php
header("Content-Type: text/html");

echo "<html><head><title>Loading...</title></head><body>";
echo "<h1 style='text-align:center;margin-top:20%;font-family:sans-serif;'>Please wait, your request is being processed...</h1>";
echo "<p style='text-align:center;font-family:sans-serif;'>This may take a few seconds...</p>";

echo "<div style='width: 50%; margin: 0 auto; height: 30px; border: 1px solid #000;'>";
echo "<div id='progress' style='width: 0; height: 100%; background-color: lightgreen;'></div>";
echo "</div>";

echo "<script>
  let progress = 0;
  const progressBar = document.getElementById('progress');

  function increaseProgress() {
    if (progress < 100) {
      progress += Math.random() * 5;
      if (progress > 100) progress = 0;
      progressBar.style.width = progress + '%';
    }
    setTimeout(increaseProgress, 500);
  }

  increaseProgress();
</script>";
echo "</body></html>";
?>
