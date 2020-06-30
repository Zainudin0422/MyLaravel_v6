<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Buat Account Baru!</h1>

    <h3>Sing Up Form</h3>
    <form action="/welcome">
        <label>First name:</label>
        <br>
        <br>
        <input type="text">
        <br>
        <br>
        <label>Last name:</label>
        <br>
        <br>
        <input type="text">
        <br>
        <br>
        <label>Gender:</label>
        <br>
        <br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <br>
        <br>
        <label>Nationality:</label>
        <br>
        <br>
        <select>
            <option>Indonesia</option>
            <option>English</option>
            <option>Other</option>
        </select>
        <br>
        <br>
        <label>Language Spoken:</label>
        <br>
        <br>
        <input type="checkbox" name="Bahasa1" value=" Bahasa">
        <label for="Bahasa1"> Bahasa Indonesia</label><br>
        <input type="checkbox" name="Bahasa2" value="English">
        <label for="Bahasa2"> English</label><br>
        <input type="checkbox" name="Bahasa3" value="Other">
        <label for="Bahasa3"> Other</label>
        <br>
        <br>
        Bio:
        <br>
        <br>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Sing Up</button>
    </form>
</body>

</html>