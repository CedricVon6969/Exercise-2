<?php
include 'header.php';

$teamMembers = [
    ['src' => 'images/Andrea.jfif', 'name' => 'Andrea Castillo', 'contact' => '09096911619', 'food' => 'Ramen', 'age' => 22],
    ['src' => 'images/John.jfif', 'name' => 'John Olalo', 'contact' => '09756863675', 'food' => 'Chicharon', 'age' => 21],
    ['src' => 'images/Kayla.jfif', 'name' => 'Kayla Montilla', 'contact' => '09665972040', 'food' => 'Chicken', 'age' => 21],
    ['src' => 'images/Nico.jfif', 'name' => 'Nico Navarro', 'contact' => '09319433061', 'food' => 'Pizza', 'age' => 24],
    ['src' => 'images/Cedric.jpg', 'name' => 'Cedric Sado', 'contact' => '09538165363', 'food' => 'Beef', 'age' => 20],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Portfolio G8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Group 8 Page</h1>
    </header>

    <div class="container">
        <div class="gallery">
            <?php foreach ($teamMembers as $member): ?>
                <img src="<?php echo $member['src']; ?>" 
                     alt="<?php echo $member['name']; ?>" 
                     class="team-image" 
                     data-info='<?php echo json_encode($member); ?>'>
            <?php endforeach; ?>
        </div>
        <div id="info" class="info">
            <p id="name"></p>
            <p id="contact"></p>
            <p id="food"></p>
            <p id="age"></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

<?php
include 'footer.php';
?>
