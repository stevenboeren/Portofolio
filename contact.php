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
        <h1 class="txt-blue">Contact-gegevens</h1>
        <p class="txt-blue-2">Wil je mij bereiken dat kan op deze adressen: <br>
        LinkedIn: <a href="https://www.linkedin.com/in/steven-boeren-2959a8213/">https://www.linkedin.com/in/steven-boeren-2959a8213/</a><br>
        Via Instagram DMs : <a href="https://www.instagram.com/steven.boeren">Ga naar mijn Insta (steven.boeren)</a> <br>
        </p><br>
        <p class="txt-blue-2">Je kan me ook hieronder een mailtje sturen via dit formulier.</p>

        <p class="txt-blue-2 bold">Helaas, werkt dit formulier momenteel nog niet op deze hosting. Probeer me te bereiken op de bovenstaande adressen!</p>
        <!-- Contact Form () -->
        <form action="backend/contactController.php" method="post">
            <div class="form-group">
              <label for="name">Naam:</label>
              <input class="form-control" id="name" type="text" name="name" disabled>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input class="form-control" id="email" type="email" name="email" disabled>
            </div>
            <div class="form-group">
              <label for="subject">Onderwerp:</label>
              <input class="form-control" id="subject" type="text" name="subject" disabled>
            </div>
            <div class="form-group">
              <label for="message">Bericht:</label>
              <textarea class="form-control" id="message" name="message" disabled></textarea>
            </div>
            <input class="btn btn-primary btn-submit" type="submit" value="Verzenden" disabled/>
          </div>
        </form>
      </div>

    </div>


		<?php
			require_once('footer.php');
		?>

    <?php require_once 'links.php'; ?>
	</body>
</html>
