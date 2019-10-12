<?php
 $terms = wp_get_post_terms( get_the_ID(), 'products_cat');
 $marcas = wp_get_post_terms( get_the_ID(), 'marca');
$parents=[];

foreach($marcas as $marca) {
   if($marca->parent==0){
     $parents[]=$marca;
   }
}
 $rating=get_field('rating');
 ?>
<div class="product-detail row no-margin shadow">
  <div class="col-md-3 thumb-wrap">
    <div class="card-img-wrap">
      <?php the_post_thumbnail('full', array("class"=>"card-img-top img-fluid")) ?>
    </div>
  </div>
  <div class="col-md-6 border-gray">
    <div class="product-main-details">
      <div class="cat-tag <?php echo $terms[0]->slug ?>"><?php echo $terms[0]->name ?></div>
      <h2>@php the_title(); @endphp</h2>
      <p>
        <?php
        foreach ($parents as $parent) {
          $models=get_terms(array("taxonomy"=>'marca', "parent"=>$parent->term_id));
          foreach ($models as $model) {
            echo $parent->name . ' ' . $model->name . '<br>';
          }
        }
        ?>
      </p>
    </div>
  </div>
  <div class="col-md-3 rating">
    <h3>Durabilidad</h3>
    <p>
    <?php for($i=0; $i<5; $i++){
      if($i < $rating) { ?>
        <i class="fas fa-star yellow-star"></i>
      <?php } else { ?>
        <i class="fas fa-star gray-star"></i>
    <?php
      }
    }?>
    </p>
    <a href="" class="more-info-btn">+ info</a>
  </div>
  <div class="row more-info-product no-margin">
    <div class="col-md-9 border-gray">
      <div class="product-description">
        <h3>Caracteristicas<hr></h3>
            <?php the_content() ?>
      </div>
    </div>
    <div class="close-description"><a href="#">X</a></div>
  </div>
</div>
