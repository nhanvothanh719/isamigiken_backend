<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Postal code:</strong> {{ $data['postal_code'] }}</p>
    <p><strong>Address:</strong> {{ $data['address'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone number:</strong> {{ $data['phone_number'] }}</p>
    <p><strong>Content:</strong> {{ $data['content'] }}</p>
</body>
</html>