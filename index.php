<?php 
$title = 'index';
include  'include/hedder.php'; ?>
    <h1>Hello human</h1>
    <?php 
        echo'<p>This is paragraph 1</p>';
        echo'<br>';
        echo'<p>This is paragraph 2</p>';
        $name = "Vipin";
        echo '<h1>My name is '.$name.'</h>';
        echo"<br>";
        echo "Hello $name welcome back in the game.<br>"
    ?>
    <?php include'include/footer.php';?>
    </div>
</body>
</html>