<?php
    $title = "Home - Mummy Da Dhaba";
    $icon = "media/logo.ico";
    include("includes/header.php");
    include("includes/arrays.php")
?>
<link rel="stylesheet" href="css/untitled.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
    include("includes/nav.php");
?>

<header class="bg-light masthead text-center text-white">
    <div class="masthead-content">
        <div class="container">
            <h1 class="masthead-heading mb-0">Mummy Da Dhaba</h1>
            <h2 class="masthead-subheading mb-0">The homemade Dhaba</h2>
          </div>
    </div>
  </header>
  <?php foreach($categories as $category){?>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-thumbnail img-fluid" src="<?= $category[banner]; ?>" height="1000px" width="500px"></div>
                </div>
                <div class="col-lg-6 order-lg-<?=($category[id]%2+1);?>">
                    <div class="p-5">
                        <h2 class="display-4"><?= $category[name]; ?></h2>
                        <p><?= $category[description]; ?><br></p><a class="btn btn-outline-info" href="category.php?name=<?= $category[name]; ?>"role="button">Learn More</a></div>
                </div>
            </div>
        </div>
        </section>
  <?php } ?>
    <hr>
<?php
    include("includes/footer.php");
?>
