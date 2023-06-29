<?php
        
       // $dateCourante = date('d-m-Y');
        $dateCourante = date('l j F Y');
        
        //echo $dateCourante;
        echo $dateCourante;
        echo '<br/>';
        $timestampJourCourant = time();
    echo "Timestamp du jour courant : " . $timestampJourCourant . "<br>";

    $timestampDateSpecifiee = mktime(15, 0, 0, 8, 2, 2016);
    echo "Timestamp du mardi 2 août 2016 à 15h00 : " . $timestampDateSpecifiee;
        
        
        
        
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <form>
        <label for="month">Mois :</label>
        <select id="month" name="month">
            <option value="1">Janvier</option>
            <option value="2">Février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Août</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select>

        <label for="year">Année :</label>
        <select id="year" name="year">
            <?php
            $currentYear = date('Y');
            for ($i = $currentYear; $i >= $currentYear - 10; $i--) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>

        <input type="submit" value="Valider">
    </form>
        </body>
        </html>
        