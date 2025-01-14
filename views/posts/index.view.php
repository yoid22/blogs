<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>


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
    <li><a href="show?id=<?= $post["id"]?>"> <?= $post["content"]   ?></a>  </li>
<?php  }   ?>
</ul>


    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo '9zm8mDBRIhI'; ?>" 
    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php require "views/components/footer.php"; ?>
 
 
 
 
 