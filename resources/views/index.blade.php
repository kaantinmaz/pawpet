<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawpet</title>

    <style>
        #top{
            display: block;
            width: 100%;
            height: 25px;
            background: url("{{ asset('top.png')}}") center;
        }

        #header{
            display: block;
            width: 100%;
            height: 111px;
            background: url("{{ asset('header.png')}}") center;
        }
    </style>
</head>
<body>
    <div id="top"></div>
    <div id="header"></div>
</body>
</html>