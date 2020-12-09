<!DOCTYPE html>
<html lang="no">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stilark.css">
    <title>Vestfold Gruppe 12|Registrering</title>
</head>

<body>
    <nav>
        <div class="logo">
            <h4><a href="default.php">Gruppe 12</a></h4>
        </div>
        <ul class="nav-links">
            <li>
                <a href="avstemming.php">Avstemming</a>
            </li>
            <li>
                <a href="nominering.php">Nominering</a>
            </li>
            <li>
                <a href="registrering.php">Registrering</a>
            </li>
            <li>
                <a href="index.php">Logg ut</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>


    <div class="wrapper">
        <div class="title">
          Registrering av stemmeberettigede
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
                <label>E-postadresse</label>
                <input type="text" class="input">
            </div>   
            <div class="inputfield">
                <label>Passord</label>
                <input type="password" class="input">
            </div>  
            <div class="inputfield">
                <label>Bekreft passord</label>
                <input type="password" class="input">
            </div> 
            <div class="inputfield">
                <label>Brukertype</label>
                <div class="custom_select">
                    <select>
                        <option value="">Velg brukertype</option>
                    </select>
                </div>
            </div> 
            <div class="inputfield">
                <input type="submit" value="Registrer" class="btn">
            </div>
        </div>
    </div>

    
    <script src="hamburger.js"></script>
</body>

</html>
