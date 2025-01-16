<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>


<body>
    <div class="container">
        <div class="content-area">
            <form method="POST">
                <label>
                    <input name="content" value="<?= $_POST['content'] ?? "" ?>" placeholder="Enter your content here..."/>
                </label>

                <?php if(isset($errors["content"])) { ?>
                    <p class="error-message"><?= $errors["content"] ?></p>
                <?php } ?>

                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo 'tvO-LTGIrXo'; ?>" 
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </form>
        </div>
    </div>

    <?php require "views/components/footer.php"; ?>


