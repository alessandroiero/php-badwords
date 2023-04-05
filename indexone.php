<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <form action="badwords.php"  methods='GET'>
        <div>
        <label for="badword">Parola da Sostituire</label>
        <input type="text" name='badword' id='badword'>
        </div>
        <div>
        <label for="text-start">Testo</label>
        <textarea name="text-start" id="" cols="30" rows="10">
        </textarea>
        </div>
        <button>Invio</button>
    </form>
</body>
</html>