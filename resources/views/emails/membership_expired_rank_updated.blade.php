<!DOCTYPE html>
<html>
<head>
    <title>Membership Expiry Reminder</title>
</head>
<body>
    <h1>Dear {{ $user->name }},</h1>
    <p>This is a reminder that your membership will expire on {{ $user->membership_expiry }}.</p>
    <p>Please renew your membership to continue enjoying our services.</p>
    <p><a href="{{ url('/membership/renew') }}">Click here to renew</a></p>
    <p>Thank you for being with us!</p>
</body>
</html>
