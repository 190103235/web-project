<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email from Tele 2</title>
    <style>
    *{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
    }

body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1;
}

.about-section{
    background-image: url('https://www.ixbt.com/img/n1/news/2018/8/1/Tele2in1_large.png');
    background-repeat: repeat;
    justify-content: left;
    background-size: 55%;
    background-color: #fdfdfd;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 70%;
    float: right;
    background-color: #fdfdfd;
    padding: 150px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
}
    </style>
</head>
<body>
    <div class="about-section">
        <div class="inner-container">
        <h3 style="margin-bottom:50px;">Ваш аккаунт успешно создан!</h3>
            <h2>О нас</h2>
            <p class="text"> Tele2 – один из самых быстрорастущих операторов связи. Начав работу на казахстанском рынке в 2003 году с запуска сети GSM в нескольких регионах, Tele2 прошла путь от небольшого регионального оператора до игрока государственного уровня. В 2013 году была открыта новая страница в истории развития компании.</p>
            <div style="font-weight:700; font-size:13px;">
                <div style="margin-bottom:35px;">Спасибо за то что выбираете нас!</div>
                <div>Ваш любимый, Тele 2!</div>
            </div>
        </div>
    </div>
</body>
</html>