<!DOCTYPE html>
<html>
<head>
    <title>Translation Tool</title>
</head>
<body>
<form action="/translate" method="post">
    @csrf
    <label for="text">Text to translate:</label><br>
    <input type="text" id="text" name="text"><br>
    <label for="language">Language:</label><br>
    <select id="language" name="language">
        <option value="en">English</option>
        <option value="vi">Vietnamese</option>
    </select><br>
    <input type="submit" value="Translate">
</form>
</body>
</html>
