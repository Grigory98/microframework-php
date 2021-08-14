<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="/project/assets/css/style.css">
</head>
<body>
<div id="wrap">
  <div id="top">
    <h2> <a href="/start/">My Site</a></h2>
    <div id="menu">
      <ul>
        <li><a href="/start/" class="current">home</a></li>
        <li><a href="/about/">about</a></li>
        <li><a href="/contact/">contact</a></li>
      </ul>
    </div>
  </div>
  <div id="content">
    <?= $content ?>
  </div>
  <div id="footer">
    <p class='fot'>Created by Grigory Yakimov's framework</p>
  </div>
</div>
</body>
</html>
