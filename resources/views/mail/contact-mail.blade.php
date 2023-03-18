<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
                body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            background-color: #f1f1f1;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 25px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        h1, h2, p {
            margin-top: 0;
        }
        
        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
            text-align: center;
        }
        
        h2 {
            font-size: 20px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 20px;
            text-align: center;
        }
        
        p {
            font-size: 16px;
            color: #333333;
            margin-bottom: 20px;
            text-align: center;
        }
        
        ul {
            margin-inline-end: 40px;
        }
        
        li {
            list-style-type: none;
            font-size: 16px;
            color: #333333;
        }
    </style>
</head>
<body>
    <div class="container">
    
    <h1>Hi {{$user_data['name']}}!</h1>
    <h2>We will respond to you as soon as possible.</h2>
    <p>Thank you for contacting us. We have received your message and we will get back to you as soon as possible.</p>

    <p>These are the data you have entered:</p>
    <ul>
        <li><b>Name: </b>{{$user_data['name']}}</li>
        <li><b>Email: </b>{{$user_data['email']}}</li>
        <li><b>Message: </b>{{$user_data['message']}}</li>
    </ul>
    </div>
</body>
</html>