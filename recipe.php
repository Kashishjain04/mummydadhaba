<?php 
    include("includes/recipes.php");
    $icon = "media/logo.ico";

    function strip_bad_chars( $input ) {
      $output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
      return $output;
    }
    if(isset($_GET['name'])) {
      $item = $recipes[strip_bad_chars( $_GET['name'] )];
    }
    $title = $item['name'];
    include("includes/header.php");
    include("includes/nav.php")
?>
    <link rel="stylesheet" href="css/untitled.css">
    <link rel="stylesheet" href="css/item.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<div id="card-container">
  <div id="card-title"><?=  $item[name] ?> Recipe - English</div>
  <div style="background: url('<?=  $item[english][image] ?>');background-size: cover; background-position:center;height: 50vw;" id="recipe-image"></div>
  <div id="details"><?php if($item[prep]){ ?>Prep time: <span class="detail-value"><?=  $item[prep] ?></span> |<?php }; if($item[cook]){ ?> Cook time: <span class="detail-value"><?=  $item[cook] ?></span> |<?php } ?>Yield: <span class="detail-value"> <?=  $item['yield'] ?></span></div>
  <div id="card-items">
    <span class="card-item-title"><h3>Ingredients</h3></span>
    <?php
    
    foreach($item[english][ingredients] as $line){
        //foreach($section[ingredients] as $line){
            echo $line;
        //}
    }
    
    ?>
  </div>

    <div id="method">
  <span class="card-item-title"><h3>Method</h3></span>
    <?php  
    
    foreach($item[english][method] as $line){
        //foreach($section[ingredients] as $line){
            echo $line;
        //}
    }
    
    ?>
  </div>
</div>
<?php if($item[hindi]){ ?>
<div id="card-container">
<div id="card-title"><?=  $item[name] ?> Recipe - Hindi</div>
  <div style="background: url('<?=  $item[hindi][image] ?>');background-size: cover; background-position:center;height: 50vw;" id="recipe-image"></div>
  <div id="details"><?php if($item[prep]){ ?>Prep time: <span class="detail-value"><?=  $item[prep] ?></span> |<?php }; if($item[cook]){ ?> Cook time: <span class="detail-value"><?=  $item[cook] ?></span> |<?php } ?>Yield: <span class="detail-value"> <?=  $item['yield'] ?></span></div>
  <div id="card-items">
    <span class="card-item-title"><h3>सामग्री</h3></span>
    <?php
    
    foreach($item[hindi][ingredients] as $line){
        //foreach($section[ingredients] as $line){
            echo $line;
        //}
    }
    
    ?>
  </div>

  <div id="method">
  <span class="card-item-title"><h3>विधी</h3></span>
  <?php
    
    foreach($item[hindi][method] as $line){
        //foreach($section[ingredients] as $line){
            echo $line;
        //}
    }
    
    ?>
  </div>
</div>
  <?php } ?>

<?php
include("includes/footer.php");
?>