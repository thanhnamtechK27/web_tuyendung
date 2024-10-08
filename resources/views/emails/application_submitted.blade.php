<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đơn ứng tuyển của bạn đã được gửi!</title>
</head>
<body>
    <h1>Xin chào {{ $application->name }}</h1>
    <p>Cảm ơn bạn đã ứng tuyển cho vị trí <strong>{{ $application->job->job_title }}</strong>.</p>
    <p>Chúng tôi đã nhận được đơn của bạn và sẽ xem xét nó trong thời gian sớm nhất.</p>
    <p>Trân trọng,<br>Đội ngũ tuyển dụng</p>
</body>
</html>
