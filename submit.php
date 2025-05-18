<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $entry = "<p><strong>Name:</strong> " . ($name ?: "Anonymous") . "<br>" .
           "<strong>Email:</strong> " . ($email ?: "N/A") . "<br>" .
           "<strong>Message:</strong> " . $message . "<hr></p>\n";

  file_put_contents("feedback.txt", $entry, FILE_APPEND);
  header("Location: index.html");
}
?>