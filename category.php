<?php 
    include("includes/arrays.php");
    /*$name = $_GET[name];
    foreach ($categories as $name1){
        $icon = $name1['icon'];
        $type = $name1;
        if($name1[name]==$name){
        break;
    }
    }*/

    function strip_bad_chars( $input ) {
      $output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
      return $output;
    }
    if(isset($_GET['name'])) {      
      $type = $categories[strip_bad_chars( $_GET['name'] )];
    }
    $icon = $type[icon];
    $title = "Category-".$type[name];
    include("includes/header.php");
    include("includes/nav.php")
?>
<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">
<link rel="stylesheet" href="assets/fonts/ionicons.min.css">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
</style>
    <!-- Custom styles for this template -->
    <link href="css/category.css" rel="stylesheet">
</head>

<body>
<main role="main">

  <section style="background: url('<?= $type['background'] ?>'); background-size: cover;background-position: center;background-attachment: fixed; background-color: cadetblue; background-blend-mode: lighten;" class="jumbotron text-center">
    <div class="container">
      <h1><?=  $type[name] ?></h1>
    </div>
  </section>

  <div class="album py-5">
    <div class="container">

      <div class="row">
        <?php foreach($type[dish] as $dish) {?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div style="height: 225px;overflow: hidden;background: url('<?= $dish[image] ?>');background-size: cover;background-position: center;">
            </div>
            <div class="card-body">
              <p class="card-text"><?= $dish[item] ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role="button" class="btn btn-outline-secondary" href="recipe.php?name=<?=  $dish[item]; ?>">Lets Cook!</a>
                </div>
                <small class="text-muted"> - </small>
              </div>
            </div>
          </div>
        </div>   
        <?php } ?>     
      </div>
    </div>
  </div>

</main>
<hr>

<?php

include("includes/footer.php");

?>
