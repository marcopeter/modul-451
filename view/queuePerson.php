<html>
    <head>
        <style>
        input {display: block;} 
        </style>
    </head>
    <body>
        <a href="index.php?action=queuePerson">Anstellen</a> | <a href="index.php?action=callPerson">Aufrufen</a>
        <h1>Anstellen</h1>
        <div class="errer">
            <ul>
            <?php
            foreach ($this->error as $error) {
                echo '<li>'.$error.'</li>';
            }
            ?>
            </ul>
        </div>
        <form action="index.php" method="POST">
            <label for="person[forename]">Vorname:</label><input name="person[forename]"/>
            <label for="person[lastname]">Nachname:</label><input name="person[lastname]"/>
            <label for="person[age]">Alter:</label><input name="person[age]"/>
            <br>
            <input type="hidden" name="action" value="queuePerson"/>
            <input type="submit" name="submit" value="anstellen"/>
        </form>  
    </body>
</html>
