<html>
    <head>
        <style>
        input {display: block;} 
        </style>
    </head>
    <body>
        <a href="index.php?action=queuePerson">Anstellen</a> | <a href="index.php?action=callPerson">Aufrufen</a>
        <h1>Aufrufen</h1>
        <form action="index.php" method="POST">
            <input type="hidden" name="action" value="callPerson"/>
            <input type="submit" name="submit" value="Person aufrufen"/>
        </form>  
        <?php if($this->person){ ?>
        <div>
            <table>
                <tr>
                    <td>Vorname:</td>
                    <td><?php echo $this->person->getForename() ?></td>
                </tr>
                <tr>
                    <td>Nachname:</td>
                    <td><?php echo $this->person->getLastname() ?></td>
                </tr>
                <tr>
                    <td>Alter:</td>
                    <td><?php echo $this->person->getAge() ?></td>
                </tr>
            </table>
            <div>Anzahl Personen in der Schlange: <?php echo $this->queueLength ?></div>
        </div>
        <?php } ?> 
    </body>
</html>
