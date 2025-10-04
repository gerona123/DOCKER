<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

body {
    background-color: #00d2f7;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.container {
    background-color: #a5ff9d;
    padding: 30px 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(94, 38, 38, 0.1);
    width: 100%;
    max-width: 500px;
}
.registration {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 0;
    margin-bottom: 50px;
}

.container label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #000000;
}

.container input,
.container select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #6c1cff;
    border-radius: 5px;
    font-size: 16px;
}

.container input:focus,
.container select:focus {
    border-color: #000000;
    outline: none;
    box-shadow: 0 0 3px rgba(179, 0, 0, 0.5);
}

.container select {
    background-color: #fff;
    cursor: pointer;
}

button {
    background-color: #ffffff;
    color: rgb(0, 0, 0);
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s;
}

button:hover {
    background-color: rgb(19, 188, 255);
}

    
.button-container {
    text-align: center;
    margin-top: 20px;
}


</style>
<body>
    
    <div class="container">
                <h1 class="registration">REGISTRATION FORM</h1>
        <label for="Firstname">First name:</label>
        <input type="text" id="Firstname" required>

        <label for="Middlename">Middle name:</label>
        <input type="text" id="Middlename">

        <label for="Lastname">Last name:</label>
        <input type="text" id="Lastname" required>

        <label for="Email">Email:</label>
        <input type="email"  id="email">

        <label for="Contact">Contact:</label>
        <input type="text" id="number" min="0" maxlength="11">

        <label for="Batch">Batch:</label>
        <input type="text" id="Batch" min="0" maxlength="2">

        <label for="ID">ID:</label>
        <input type="ID"  id="ID">

        <label for="Technology">Course:</label>
        <select name="Course">
            <option value=""hidden></option>
            <option value="Computer">Computer Engineering</option>
            <option value="Electrical">Electrical Engineering</option>
            <option value="Mechanical">Mechanical Engineering</option>
            <option value="Electronic">Electronic Engineering</option>
        </select>
    
         <div class="button-container">
            <button type="submit">Register</button>
        </div>

    </div>

   <script src="./index.js"></script>

</body>
</html>
