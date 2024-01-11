<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Pendaftaran</title>
    </head>
    <body>
<h1>Buat Account Baru</h1>
<h2>Sign up Form</h2>

<section id="contact">
    <form action="welcome.php" method="post">
            <br><label for="firstName">First name :</label></br>
            <br><input id="firstName" type="text" name="firstName"></br>

            <br><label for="lastName">Last Name :</label></br>
            <br><input id="lastName" type="text" name="lastName"></br>

            <p><label>Gender :</label><br>
                  <input type="radio" id="male" name="gender" value="male" required/>
                  <label for="male">Male</label></br>
                  <input type="radio" id="female" name="gender" value="female" required/>
                  <label for="male">Female</label></br></p>

            <p>Nationality
                <br><select id="nationality" name="nationality">
                    <option>Indonesia</option>
                    <option>Malaysia</option>
                    <option>Japan</option>
                    <option>South Korean</option>
                </br></select>
            </p>
            <p>
            <label for="languange">Languange Spoken</label><br>
            <input type="checkbox" id="bahasaindo" name="languange[]" value="Bahasa-Indonesia">
            <label for="bahasaindo">Bahasa Indonesia</label><br>
            <input type="checkbox" id="english" name="languange[]" value="English">
            <label for="english">English</label><br>
            <input type="checkbox" id="other" name="languange[]" value="Other">
            <label for="other">Other</label><br>
            
            <p>Bio</p>
            <textarea id="bio" name="bio" rows="10" cols="30"></textarea>
            <p><button type="submit">Sign Up</button></p>
    </form>
    </section>
</body>
</html>