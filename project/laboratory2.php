<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile Generator</title>
</head>
<body>
    <form method="post" action="">
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name"><br><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name"><br><br>

        <label for="bio">Short Bio:</label><br>
        <textarea id="bio" name="bio"></textarea><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age"><br><br>

        <label for="language">Preferred Programming Language:</label><br>
        <input type="text" id="language" name="language"><br><br>

        <input type="submit" name="submit" value="Generate Profile">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // String Manipulation
        $first_name = strtoupper($_POST['first_name']);
        $last_name = strtoupper($_POST['last_name']);
        $bio = strtolower($_POST['bio']);

        $full_name = $first_name . " " . $last_name;
        $profile_summary = $full_name . " - " . $bio;

        echo "<h2>Profile Summary:</h2>";
        echo "Full Name: " . $full_name . "<br>";
        echo "Bio: " . $bio . "<br>";
        echo "Profile Summary: " . $profile_summary . "<br><br>";

        // If-Else Statement
        $age = $_POST['age'];

        echo "<h2>Age Category:</h2>";
        if ($age < 18) {
            echo "You are a minor.<br>";
        } elseif ($age >= 18 && $age <= 65) {
            echo "You are an adult.<br>";
        } else {
            echo "You are a senior citizen.<br>";
        }

        // Switch Statement
        $language = strtolower($_POST['language']);

        echo "<h2>Programming Language Preference:</h2>";
        switch ($language) {
            case 'php':
                echo "You love working with server-side scripting!<br>";
                break;
            case 'python':
                echo "You enjoy simplicity and readability!<br>";
                break;
            case 'javascript':
                echo "You thrive in dynamic web development!<br>";
                break;
            default:
                echo "That's a great language to learn!<br>";
                break;
        }
    }
    ?>
</body>
</html>
