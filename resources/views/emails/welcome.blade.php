<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 150px;
            height: auto;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 18px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            font-size: 16px;
            margin: 10px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 5px solid #4CAF50;
        }
        li:nth-child(even) {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            {{-- <img src="{{ asset('frontend/img/11.png') }}" alt="Logo"> --}}
            <img src="{{ asset('frontend/img/11.png') }}" alt="logo">
            <h1>{{ $title }}</h1>
        </div>
        <p>{{ $body }}</p>
        <ul>
            <li>Date: {{ $date }}</li>
            <li>Number of Nights: {{ $no_off_nights }}</li>
            <li>Number of Adults: {{ $no_off_adults }}</li>
            <li>Number of Kids: {{ $no_off_kids }}</li>
            <li>Interested In: {{ $interested_in }}</li>
            <li>Name: {{ $name }}</li>
            <li>Email: {{ $email }}</li>
            <li>Phone Number: {{ $phone_number }}</li>
            <li>Description: {{ $description }}</li>
        </ul>
    </div>
</body>

</html>
