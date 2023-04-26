<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Course Enrollment Confirmation</title>
</head>
<body>
    <p>Hello {{ $user->name }},</p>
    <p>You have successfully enrolled for the "{{ $course->title }}" course.</p>
    <p>Thank you for choosing our platform.</p>
</body>
</html>