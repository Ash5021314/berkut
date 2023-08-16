<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
{{--{{$mailData}}--}}
<h1>Тема - {{ $mailData['Тема'] }}</h1>
<p>Имя - {{ $mailData['Имя'] }}</p>
<p>Электронная почта - {{ $mailData['Электронная почта'] }}</p>
<p>Телефон - {{ $mailData['Телефон'] }}</p>

<p>Сообщение - {{ $mailData['Сообщение'] }}</p>
</body>
</html>
