<?php
$data = file_get_contents('https://www.codeschool.com/users/dharillo.json');
$json_data = json_decode($data, true);
// var_dump($json_data['courses']['completed']);
$completed_courses = $json_data['courses']['completed'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Badges viewer - <?php echo $json_data['user']['username'] ?>'s badges</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>Badges</header>
        <div class="container">
            <div class="grid">
                <?php
                    foreach($completed_courses as $course) {
                        echo '<div class="grid-cell">';
                        echo '<img src="' . $course['badge'] . '" />';
                        echo '<a href="' . $course['url'] . '">' . $course['title'] . '</a>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </body>
</html>