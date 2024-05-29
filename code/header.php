<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recicla Gino - Plataforma de Gestão</title>
    <style>
        body {
            background-color: rgb(147, 181, 125);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100vh;
            color: #371501;
            background-repeat: repeat;
        }

        .header {
            width: 160%;
            background-color: rgb(147, 181, 125);
            font-family: "Yeseva One", serif;
            color: #275c08;
            text-align: left;
            padding: 5px 0;
            font-weight: bold;
            font-size: 30px;
            border-radius: 10px;
            margin-bottom: 40px;
            margin-left: -55px;
            position: relative;
        }
        .headersubmit {
            background-color: #275c08;
            font-family: "Yeseva One", serif;
            color: #FFF;
            text-align: center;
            padding: 5px 0;
            font-weight: bold;
            font-size: 30px;
            position: relative; 
        }


        .header img {
            width: 200px;
            height: 200px;
            position: absolute;
            right: 100px;
            top: 64%;
            transform: translateY(-50%);
        }

        .header-text {
            margin-left: 60px;
            margin-top: 0;
        }

        .subtitle {
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 20px;
            color:#371501;
            margin-top: -50px; 
            margin-left: 50px;
            font-family: Open Sans, sans-serif;

        }

        #inputType {
            margin-left: 150px; 
            width: 250px; 
            background-color: #b78a3d;
            border-radius: 15px;
            border: 4px solid #0b2c02;
        }

        #inputUser {
            background-color: #b78a3d;
            border-radius: 15px;
            border: 4px solid #0b2c02;
        }

        #inputPassword {
            background-color: #b78a3d;
            border-radius: 15px;
            border: 4px solid #0b2c02;
        }

        ::placeholder{
            font-weight: bold;
            color: #0b2c02;
        }

        .login-container {
            width: 150%;
            max-width: 400px;
            margin: 0 auto;
            background-color: rgb(147, 181, 125)
        }

        .login-container label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"],
        .login-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .login-container button {
            padding: 10px;
            color: #0b2c02;
            cursor: pointer;
            transition: background-color 0.3s ease;
            background-color: #734a02;
            border-radius: 15px;
            border: 4px solid #0b2c02;
            width: 250px;
            margin-left: 70px;
            margin-top: 30px;
            font-weight: bold;
            font-size: 20px;
            
        }

        .login-container button:hover {
            background-color: #954212;
        }

        .inputoptioncontainer {
            align-items: center;
            background-color: #275c08;
            border-radius: 10%;
            padding: 150px;
            
        }

        .inputoptioncontainer button {
            padding: 10px;
            color: #0b2c02;
            cursor: pointer;
            transition: background-color 0.3s ease;
            background-color: #734a02;
            border-radius: 15px;
            border: 4px solid #0b2c02;
            width: 250px;
            font-weight: bold;
            font-size: 20px;
            margin-top: 20px;
            
        }

        .inputoptioncontainer button:hover {
            background-color: #954212;
        }

        .create-account {
            text-align: center;
            margin-top: 20px;
        }

        .create-account a {
            font-weight: bold;
            color: #8B4513; 
            transition: color 0.3s ease;
        }

        .create-account a:hover {
            color: #5E2605;
        }

        .right-container {
            width: 40%;
            padding: 20px;
        }

        table {
            width: 500px;
            height: 500px;
            border-collapse: collapse;
            border: 5px solid #0b2c02;
            perspective: 800px;
            box-shadow: 40px 40px 40px #0a7943;
                }

        th, td {
            width: 50px;
            color: #0b2c02;
            font-weight: bold;
            font-size: 25px;
        }


        th {
            background-color: #0a7943;
            color: #79bb90;
            font-weight: bold;
            text-align: center;
            padding: 8px;
            border: 1px solid #0b2c02;
            height: 50px;
        }

        td {
            background-color:#79bb90;
            padding: 8px;
            text-align: center;
            border: 1px solid #0b2c02;
        }
 

    </style>
</head>
<body>
    
