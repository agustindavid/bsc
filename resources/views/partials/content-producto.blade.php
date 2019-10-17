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
 $percent_rating=($rating*100)/5;
 $logos_url=[];
 foreach ($parents as $parent) {
   $pod = pods('marca');
   $pod->fetch($parent->term_id);
   $cat_img=$pod->get_field('logo_marca');
   $cat_img_url=pods_image_url($cat_img[0]['ID'], 'full');
   $logos_url[]=$cat_img_url;
 }

 ?>
<div class="product-detail row no-margin">
  <div class="col-md-3 thumb-wrap">
    <div class="card-img-wrap">
      <?php the_post_thumbnail('full', array("class"=>"card-img-top img-fluid")) ?>
    </div>
  </div>
  <div class="col-md-6 border-gray">
    <div class="product-main-details">
      <div class="brands-logos">
        <?php
        foreach($logos_url as $logo ){ ?>
          <img src="{{$logo}}" class="logo-img" alt="">
        <?php }
        ?>
      </div>
      <div class="cat-tag <?php echo $terms[0]->slug ?>"><?php echo $terms[0]->name ?></div>
      <h2>@php the_title(); @endphp</h2>
        <div class="row">
        <?php
        //echo count($parents);
        $halfWay=round(count($parents)/2);
        foreach ($parents as $key => $parent) {
          if($key==0){
              echo '<div class="col-md-6">';
          }
          if(count($parents) <= 2){
            if ($key == 1){
              echo '</div><div class="col-md-6">';
            }
          }else if(count($parents)>2) {
            if($key==$halfWay) {
              echo '</div><div class="col-md-6">';
            }
          }
          $models=get_terms(array("taxonomy"=>'marca', "parent"=>$parent->term_id)); ?>
          <h5>{{$parent->name}}</h5>
          <div class="models-wrap">
          <?php
          foreach ($models as $model) {
            if(has_term($model->slug, 'marca', get_the_id())){
              echo $model->name . '<br>';
            }
          }
          ?>
          </div>
          <?php
        }
        ?>
          </div>
        </div>
    </div>
  </div>
  <div class="col-md-3 rating">
    <h3>Durabilidad</h3>
    <div class="no-yellow">
        <i class="fas fa-star gray-star"></i>
        <i class="fas fa-star gray-star"></i>
        <i class="fas fa-star gray-star"></i>
        <i class="fas fa-star gray-star"></i>
        <i class="fas fa-star gray-star"></i>
      <div class="yes-yellow" style="width:{{$percent_rating}}%">
          <i class="fas fa-star yellow-star"></i>
          <i class="fas fa-star yellow-star"></i>
          <i class="fas fa-star yellow-star"></i>
          <i class="fas fa-star yellow-star"></i>
          <i class="fas fa-star yellow-star"></i>
        </div>
      </div>
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
