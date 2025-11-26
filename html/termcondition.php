<?php

$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agree_cb'])) {
    $message = "Submitted Successfully";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Terms & Conditions - House and Life</title>
<style>
    body {
        margin: 0;
        padding: 0;
        background: #0a1a2a; 
        font-family: Arial, sans-serif;
        color: #f5e9d2;
    }
    .container {
        max-width: 650px;
        margin: 50px auto;
        padding: 25px;
        background: #10263d;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.4);
    }
    h1 { text-align: center; margin-bottom: 20px; }
    .terms-box {
        background: #132b45;
        padding: 20px;
        border-radius: 8px;
        max-height: 250px;
        overflow-y: auto;
        font-size: 14px;
    }
    label {
        display: flex;
        align-items: center;
        margin-top: 20px;
        font-size: 15px;
    }
    input[type=checkbox] {
        margin-right: 10px;
        transform: scale(1.2);
    }
    button {
        width: 100%;
        padding: 12px;
        margin-top: 20px;
        font-size: 16px;
        border: none;
        border-radius: 6px;
        background: #d4c3a3;
        color: #0a1a2a;
        cursor: pointer;
        font-weight: bold;
    }
    button:disabled {
        background: #948b76;
        cursor: not-allowed;
    }
    .message {
        margin-top: 20px;
        font-size: 18px;
        text-align: center;
        font-weight: bold;
        color: #d4c3a3;
    }
</style>

<script>
function toggleButton() {
    const checkbox = document.getElementById("agreeCheck");
    const button = document.getElementById("agreeBtn");
    button.disabled = !checkbox.checked;
}
</script>
</head>

<body>
<div class="container">
    <h1>Terms & Conditions</h1>

    <form method="post">
        <div class="terms-box">
            <p>Welcome to House and Life Real Estate. Please read the following terms carefully.</p>
            <p>1. All property details are for information only.</p>
            <p>2. House and Life is not responsible for inaccuracies.</p>
            <p>3. Users must not misuse website content.</p>
            <p>4. All content belongs to House and Life.</p>
        </div>

        <label>
            <input type="checkbox" id="agreeCheck" name="agree_cb" onclick="toggleButton()">
            I agree to the Terms & Conditions
        </label>

        <button id="agreeBtn" disabled>Agree</button>

        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
    </form>
</div>
</body>
</html>