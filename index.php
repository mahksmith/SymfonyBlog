<?php
    
    $link = mysql_connect('localhost', 'root', 'yeti1987');
    mysql_select_db('symfony', $link);

    $result = mysql_query('SELECT id, title FROM blog_db', $link);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>List of Posts</title>
    </head>
    <body>
        <h1>List of Posts</h1>
        <ul>
            <?php while ($row = mysql_fetch_assoc($result)): ?>
            <li>
                <a href="/show.php?id=<?php echo $row['id']?>">
                    <?php echo $row['title'] ?>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
    </body>
</html>

<?php
mysql_close($link);
?>
