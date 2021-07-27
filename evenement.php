<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualité</title>
</head>

<body>
    <header>
        <ul>
            <a href="Lepetitwanze.php"><img src="logo.png" alt=""></a>
            <span><a class="boutton" href="https://www.google.be/maps/place/Rue+de+la+Berg%C3%A8re,+4520+Wanze/@50.5327228,5.2085518,17z/data=!3m1!4b1!4m5!3m4!1s0x47c1a9b28c30ca5f:0x66ca1cff7aa6aa6c!8m2!3d50.5327228!4d5.2107458">Adresse</a></span>
            <span><a class="boutton" href="actualite.php">Actualité</a></span>
            <span><a class="boutton" href="">Evenements</a></span>
        </ul>
    </header>
    <section>
<h2>Spaghettis!</h2>
<span>Pour s'inscrire:</span>
<form method=POST action=contact.php >
<input type=hidden name=subject value=contact>
<table border =1>
<tr><td>nom:</td>
<td><input type=text name=realname ></td></tr>
<tr><td>email:</td>
<td><input type=text name=email title="entrer une adresse valide" style="text-align:center;color:blue" value="@" /></td></tr>
<tr><td>objet:</td>
<td><input type=text name=title ></td></tr>
<tr><td colspan=2>message:<br>
<textarea COLS=30 ROWS=8 name=comments></textarea>
</td><tr>
<td> <input type=submit value=Envoyer >
</td></tr>
</table>
</form>
    </section>
    <section>

    </section>
</body>
</html>