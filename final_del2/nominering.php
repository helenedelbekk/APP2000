<?php
include 'start.php';
 ?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stilark.css">
    <title>Vestfold Gruppe 12|Nominering</title>
</head>

<body>
  <section class="row">

      <article class="column">
        <div class="wrapper">
          <div class="title">
            Nominering av kandidater
          </div>
          <div class="reg">
              <div class="inputfield">
                  <label>Fornavn</label>
                  <input type="text" class="input">
              </div>
              <div class="inputfield">
                  <label>Etternavn</label>
                  <input type="text" class="input">
              </div>
              <div class="inputfield">
                  <label>Studentnummer</label>
                  <input type="text" class="input">
              </div>
              <div class="inputfield">
                <label>Fakultet</label>
                <div class="custom_select">
                    <select>
                        <option value="">Velg Fakultet</option>
                    </select>
                </div>
            </div>
              <div class="inputfield">
                  <input type="submit" value="Registrer nominasjon" class="btn">
              </div>
          </div>

      </article>

      <div class="wrapper">
      <article class="column1">
        <div class="title">
          Nominerte kandidater
        </div>
        <ul>
        <li> Kandidat 1</li>
        <li> Kandidat 2</li>
        <li> Kandidat 3</li>
        </ul>
      </article>
    </div>

    </section>



    <script src="hamburger.js"></script>
    <script src="bildegalleri.js"></script>
</body>

</html>
