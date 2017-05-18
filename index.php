<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<?PHP include "header.php"; ?>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="container">
<?PHP include "menu.php"; ?>

<div itemscope itemtype="http://schema.org/Person">
<img id="me" src="img/me.jpg" itemprop="image" alt=Frankie Sanzica>

<div id="follow">
<a href ="//linkedin.com/in/frankiesanzica/"><img id="social" src="img/linkedin.png"></a>
<a href="//github.com/FrankieSanzica"><img id="social" src="img/Github.png"></a>
<!--
<a href="https://www.facebook.com/Sanzica.Frankie"><img id="social" src="img/facebook.png"></a>
<a href="//twitter.com/FrankieSanzica"><img id="social" src="img/twitter.png"></a>
<a href="//plus.google.com/+FrankieSanzica/posts"><img id="social" src="img/g+.png"></a>
-->
</div>

<h1 itemprop="name">Frankie Sanzica</h1>

<div id="info">
<p itemprop="jobTitle">Hi! I'm Frankie, Linux System(s) Engineer, Web Designer, and Boxing fan.</p>
</div>

Email Me!
<a href="mailto:frankie@frankiesanzica.com" itemprop="email"><input type="submit" name="submit" value="Send"></a>

<!-- Javascript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</div>
</body>

<footer>
<?PHP include "footer.php"; ?>
</footer>

</html>
