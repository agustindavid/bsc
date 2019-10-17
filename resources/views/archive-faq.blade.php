@extends('layouts.app-full')

@section('content')
<div class="hero-faq hero" style="background-image:url('@asset('images/faq.jpg')')">
  <div class="overlay"></div>
  <div class="hero-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center">
          <h1>Preguntas frecuentes</h1>
          <p>BRAKE SPECIALISTS CORPORATION es una empresa peruana fundada en el 2014</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
 <div id="accordion">
    <?php
    $i=1;
    ?>
  <?php
  $faq_cats=get_terms(array('taxonomy'=>'faq_cat'));
  //print_r($faq_cats);
  foreach ($faq_cats as $faq_cat) {
    $faqs=new WP_Query(array('post_type'=>'faq', 'tax_query' =>
    array(
      array (
            'taxonomy' => 'faq_cat',
            'field' => 'slug',
            'terms' => $faq_cat->slug
      )
    ),
    ));
  ?>
  <div class="row category-wrap">
    <div class="col-md-3">
      <h2 class="faq-cat-name">{{$faq_cat->name}}</h2>
    </div>
    <div class="col-md-9">
  <?php
  while($faqs->have_posts()) {
    $faqs->the_post();?>

      @include('partials.content-faq')

      <?php
      $i++;
    }
    ?>
    </div>
  </div>

    <?php
  }
  ?>
  </div>
</div>
@endsection
