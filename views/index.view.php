<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>BLOGS</h1>
 <form>
 <input name='search' value='<?= $_GET['search'] ?? "" ?>' />
 <button>Meklēt</button>
</form>

<?php
if (count($posts) == 0){
    ?>
<p>NOT FOUND 🤢😱😰😨🤯😤😡🤬😠🤮💀💀💀💀💀💀💀🐵</p>
<?php
}
?>
<ul>
<?php
foreach($posts as $post){
    ?>
    <li> <?= $post["content"]   ?>  </li>
<?php  }   ?>
</ul>
</body>
</html>
 
 
 
 
 