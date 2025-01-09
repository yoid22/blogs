<?php require "components/navbar.php"; ?>
<?php require "components/header.php"; ?>

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
<?php require "components/header.php"; ?>
 
 
 
 
 