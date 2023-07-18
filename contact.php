<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
  </head>
  <body>
    <div class="container">
      <h1>Contact Us</h1>
      <form action="php/contact.php" method="post">
        <label for="name">ID</label>
        <input type="text" id="name" name="id" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send</button>
      </form>
    </div>
  </body>
</html>
