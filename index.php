<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <p>
        <p>
            <form action="ward_enum.php" method="post">
                <select name="nurses" id="nurses">
                    <option>ivanova</option>
                    <option>sidorova</option>
                    <option>petrova</option>
                    <option>egorova</option>
                </select>
                <input type="submit" value="send" style="margin-left:30px"/>
            </form>
        </p>

        <p>
            <form action="nurses_enum.php" method="post">
                <select name="department" id="department">
                    <option>admission</option>
                    <option>infection</option>
                    <option>surgery</option>
                </select>
                <input type="submit" value="send" style="margin-left:30px"/>
            </form>
        </p>

        <p>
            <form action="duties.php" method="post">
                <select name="shift" id="shift">
                    <option>first</option>
                    <option>second</option>
                    <option>third</option>
                </select>

                <select name="dep" id="dep">
                    <option>admission</option>
                    <option>infection</option>
                    <option>surgery</option>
                </select>
                <input type="submit" value="send" style="margin-left:30px"/>
            </form>
        </p>

        <script>
            document.write('Last searching: ' + localStorage.getItem('lastData'));
        </script>
    </p>
</body>
</html>