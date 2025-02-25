<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dies ist eine Nachricht von Dhammareise</title>
</head>
<body>
<p style="color: #8a2c0e;"><strong>Sie haben eine Mail zu Ihrem Mitfahrangebot/Mitfahrgesuch erhalten</strong></p>
<p><strong>Fahrt von: </strong>{{$transfer->start}} <strong>Nach: </strong>{{$transfer->destination}}</p>
<p><strong>Veranstalter: </strong>{{$eventWithCtr->centre->name}} <strong>Datum: </strong>{{date_format(date_create($eventWithCtr->ev_date), 'd.m.Y')}}</p>
<p><strong>Nachricht von: </strong> {{$content['replyName']}}</p>
<p><strong>Email: </strong> {{$content['replyMail']}}</p>
<p><strong>Nachricht: </strong></br>{{$content['message']}}</p>
</body>
</html>
