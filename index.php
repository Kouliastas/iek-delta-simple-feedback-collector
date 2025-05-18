<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Feedback Form</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
</head>
<body>
  <div class="container">
    <h1>Send Us Your Feedback</h1>
    <form action="submit.php" method="POST" onsubmit="return validateForm()">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Submit</button>
    </form>

    <div class="feedback-display">
      <h2>Previous Feedback</h2>
      <?php
        if (file_exists('feedback.txt')) {
          readfile('feedback.txt');
        } else {
          echo "<p>No feedback yet.</p>";
        }
      ?>
    </div>
  </div>
</body>
</html>