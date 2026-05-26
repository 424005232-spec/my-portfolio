<?php
// Get POST data
$name    = isset($_POST['name'])    ? $_POST['name']    : '';
$email   = isset($_POST['email'])   ? $_POST['email']   : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Sanitize all inputs
$name    = htmlspecialchars($name);
$email   = htmlspecialchars($email);
$subject = htmlspecialchars($subject);
$message = htmlspecialchars($message);

// Server-side validation
if (empty($name)) {
    echo '<p style="color:red;">Error: Name is required.</p>';
    echo '<a href="index.html">Go back</a>';
    exit;
}
if (empty($email)) {
    echo '<p style="color:red;">Error: Email is required.</p>';
    echo '<a href="index.html">Go back</a>';
    exit;
}
if (empty($subject)) {
    echo '<p style="color:red;">Error: Subject is required.</p>';
    echo '<a href="index.html">Go back</a>';
    exit;
}
if (empty($message) || strlen($message) < 20) {
    echo '<p style="color:red;">Error: Message must be at least 20 characters.</p>';
    echo '<a href="index.html">Go back</a>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Message Sent — DevFolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --bs-primary: #e8ff47;
    }
    body {
      background: #0a0a0a;
      color: #f0f0f0;
      font-family: 'DM Sans', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .success-box {
      background: #111;
      border: 1px solid #1e1e1e;
      border-top: 3px solid #e8ff47;
      border-radius: 4px;
      padding: 3rem;
      max-width: 600px;
      width: 100%;
      text-align: center;
    }
    h1 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 3.5rem;
      color: #e8ff47;
      margin-bottom: 0.5rem;
    }
    .info-row {
      background: #0a0a0a;
      border: 1px solid #1e1e1e;
      border-radius: 4px;
      padding: 1rem 1.5rem;
      margin: 1rem 0;
      text-align: left;
    }
    .info-label {
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: #555;
      font-family: monospace;
    }
    .info-value {
      color: #f0f0f0;
      font-size: 1rem;
      margin-top: 0.2rem;
    }
    .btn-back {
      background: #e8ff47;
      color: #000;
      border: none;
      padding: 0.85rem 2rem;
      font-family: monospace;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      border-radius: 4px;
      text-decoration: none;
      display: inline-block;
      margin-top: 1.5rem;
      transition: background 0.3s;
    }
    .btn-back:hover { background: #fff; color: #000; }
  </style>
</head>
<body>
  <div class="success-box">
    <h1>Message Sent!</h1>
    <p style="color:#888; margin-bottom:2rem;">Thanks for reaching out. Here's a summary of what we received:</p>

    <div class="info-row">
      <div class="info-label">Full Name</div>
      <div class="info-value"><?php echo $name; ?></div>
    </div>
    <div class="info-row">
      <div class="info-label">Email Address</div>
      <div class="info-value"><?php echo $email; ?></div>
    </div>
    <div class="info-row">
      <div class="info-label">Subject</div>
      <div class="info-value"><?php echo $subject; ?></div>
    </div>
    <div class="info-row">
      <div class="info-label">Message</div>
      <div class="info-value"><?php echo $message; ?></div>
    </div>

    <a href="index.html" class="btn-back">← Back to Portfolio</a>
  </div>
</body>
</html>