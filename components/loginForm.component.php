<form method="POST" action="/handlers/authLogin.handler.php">
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>

<?php if (isset($_GET['error']) && $_GET['error'] === 'invalid'): ?>
    <p style="color:red">Invalid credentials</p>
<?php endif; ?>