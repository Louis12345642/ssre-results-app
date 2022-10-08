<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>ssce results app</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Gujarati:wght@500&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <link href="/dist/output.css" rel="stylesheet">
</head>
<body>
    <style>

.nav-wrapper{
    background-color:#DCDCDC;
    height: 110px;
    border-bottom: 2px solid #068B53;
}
.abbr-logo{
font-family: 'Noto Serif Gujarati', serif;
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 35px;
color: #0CAE91;
}
.results{
font-family: 'Noto Serif Gujarati', serif;
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 35px;

color: #000000;
}
.search-btn{

font-family: 'Noto Serif Gujarati', serif;
font-style: normal;
font-weight: 200;
font-size: 20px;
line-height: 29px;
width: 218px;
height: 37px;

background: #0CAE91;
border-radius: 20px;

color: #FFFFFF;

}
.signup{
    font-family: 'Noto Serif Gujarati', serif;
}
.login{
    font-family: 'Noto Serif Gujarati', serif;
}
.welcome-logo{
    color: #0CAE91;
}
input{
    background-color: #DCDCDC;
    border:solid 1px #068B53;
    width: 348px;
height: 35px;
}
.btn{
    min-width: 348px;


}
.btn-detail{
    box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, .3);
}
.student-card{
    width: 30%;
    height: auto;
    border:solid 1px #068B53;


}

    </style>
{{$slot}}
</body>
</html>
