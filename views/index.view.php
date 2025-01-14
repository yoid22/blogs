<?php require "components/header.php"; ?>
<?php require "components/navbar.php"; ?>


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
<h1>Listen to the YouTube Audio</h1>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo '9zm8mDBRIhI'; ?>" 
    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php require "components/footer.php"; ?>
 
 
 
 
 