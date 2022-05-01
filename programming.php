<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once 'head.php'; ?>
	</head>
	<body>
		<?php
			require_once('header.php');
		?>

    <div class="content">
      <div class="container">
        <h1 class="txt-blue">Progameerkennis</h1>
        <p class="txt-blue-2">Hierbij de progameertalen die beheers of bij mijn opleiding geleerd heb.</p>
        <br>
        <!-- grid een beetje hulp van jari-->
        <h1 class="txt-blue">Web-development</h1>
        <div class="grid">
          <div>
            <h2 class="txt-blue-h2">Frontend</h2>
            <p class="txt-blue-2">Dit zijn talen die kwa frontend ken en heb geleerd:</p>
            <ul>
              <li>HTML</li>
              <li>CSS</li>
              <li>JS</li>
            </ul>
            <p class="txt-blue-2">Daarbij ook een framework:</p>
            <ul>
              <li>Laravel</li>
            </ul>
          </div>
          <div>
            <h2 class="txt-blue-h2">Backend</h2>
            <p class="txt-blue-2">Hier zijn de talen die ik geleerd heb van de backend:</p>
            <ul>
              <li>PHP</li>
              <li>MYSQL</li>
              <li>HeidiSQL of PHPMyAdmin</li>
            </ul>
          </div>

        </div>
        <h2 class="txt-blue">Win-development en Andere Talen</h2>
          <div>
            <h2 class="txt-blue-h2">C# en Windows-talen</h2>
            <p class="txt-blue-2">Bij mijn mbo-opleiding heb ik C# geleerd, maar niet een van mijn favoriete talen is. Toch hier de applicaties/talen die ik geleerd heb:</p>
            <ul>
              <li>Plain C# (Console apps)</li>
              <li>WinForm/ASP.NET Apps</li>
              <li>XAML (MVVM en UWP Apps)</li>
            </ul>
          </div>

      </div>

    </div>


		<?php
			require_once('footer.php');
		?>

    <?php require_once 'links.php'; ?>
	</body>
</html>
