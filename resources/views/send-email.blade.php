<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/send-email" method="POST">
    @csrf
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" required>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Send Email</button>    
</form>
</body>
</html>
