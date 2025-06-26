<!-- 19.8 Write a PHP script that tests whether an e-mail address is input correctly. Verify that the
input begins with series of characters, followed by the @ character, another series of characters, a pe-
riod (.) and a final series of characters. Test your program, using both valid and invalid e-mail ad-
dresses. -->

<?php
function validateEmail($email) {
    $pattern = '/^[^@\s]+@[^@\s]+\.[^@\s]+$/';     
    return preg_match($pattern, $email);
}

// Check if form was submitted
$emailInput = '';
$validationResult = '';
$isValid = false;

if ($_POST['email'] ?? false) {
    $emailInput = trim($_POST['email']);
    $isValid = validateEmail($emailInput);
    
    if ($isValid) {
        $validationResult = "Valid email format";
    } else {
        $validationResult = "Invalid email format";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HW4_Q7</title>
</head>
<body>
    <h2>Email Address Validator</h2>
    <p>This script validates email addresses using the pattern: <strong>characters @ characters . characters</strong></p>
    
    <form method="POST" action="">
        <div class="form-group">
            <label for="email">Enter an email address to validate:</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                value="<?php echo htmlspecialchars(string: $emailInput); ?>"
                placeholder="e.g., user@example.com"
                required
            >
        </div>
        <button type="submit">Validate Email</button>
    </form>

    <?php echo $validationResult; ?>

</body>
</html>