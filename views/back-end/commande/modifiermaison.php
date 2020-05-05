
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="modifier.php">
        <table border="1px">
            <tr>
                <td>reference</td>
                <td><input type="number" name="reference" value="<?PHP echo $_POST['reference']; ?>" readonly ></td>
                </tr>
                <tr>
                <td>adresse</td>
                <td><input type="text" name="adresse"  value="<?PHP echo $_POST['adresse']; ?>" ></td>
                </tr>
                <tr>
                <td>superficie</td>
                <td><input type="number" name="superficie"  value="<?PHP echo $_POST['superficie']; ?>" ></td>
                </tr>
                <tr>
                <td>prix</td>
                <td><input type="number" name="prix"  value="<?PHP echo $_POST['prix']; ?>" ></td>
                </tr>
                <tr>
                <td>date de diponibilité</td>
                <td><input type="date" name="date"  value="<?PHP echo $_POST['date']; ?>" ></td>
                </tr>
                <tr>
                <td></td>
                <td><input type="submit" name="modifier" value="confirmer la modification"></td>
                </tr>
        </table>
    </form>
</body>
</html>