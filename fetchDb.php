<?php
require_once "connect.php";

$statement = $DBH->prepare("SELECT * FROM articles");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
    <article> <img src="img/<?php echo $row['imgSrc'] ?>.jpg" alt="<?php echo $row['imgAlt'] ?>">
        <h2><?php echo $row['heading'] ?></h2>
        <p class="date">
            <?php echo $row['time'] ?>
        </p>
        <p>
            <?php echo $row['articleText'] ?>
        </p>
    </article>
    <?php    
}
?>