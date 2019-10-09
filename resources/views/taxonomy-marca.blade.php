@extends('layouts.app')

@section('content')
<div class="header-producto" style="background-image: url('@asset('images/product-banner.jpg'));"></div>
<div class="product-section-search">
  <div class="container">
    <div class="row no-margin">
      <div class="col-md-3 product-title no-padding-left">
        <h2>Productos</h2>
      </div>
      <div class="col-md-9">
        <div class="search-wrap">
          <div class="search-inner">
            <h3>Busca el modelo de tu vehiculo</h3>
            <form action="">
              <input type="text">
              <select name="" id=""></select>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row product-content">
      <div class="col-md-3 cats-sidebar">
  <?php
  $parentCats=get_terms( array(
      'taxonomy' => 'products_cat',
      'hide_empty' => false,
      'parent' => 0
  ));


  ?>

  @foreach ($parentCats as $cat)
      <div class="parent-cat"><a href="<?php echo get_term_link($cat->term_id) ?>"><h4>{{$cat->name}}</h4></a><span href="#" class="toggleCatList">+</span></div>
      @php $childrenCats=App\getTaxChildren($cat->term_id) @endphp
      <div class="inner-sidebar">
        <ul>
        @foreach ($childrenCats as $childrenCat)
          <li>{{$childrenCat->name}}</li>
        @endforeach
        </ul>
      </div>
  @endforeach
<div class="marcas-sidebar">
  <h5 class="marcas-title">Marcas</h5>
  <?php
  $marcas=get_terms( array(
    'taxonomy' => 'marca',
    'hide_empty' => false,
    'parent' => 0
));
?>

@foreach ($marcas as $marca)

    <a class="tagPill" href="{{get_term_link($marca->term_id) }}">{{$marca->name}}</a>
@endforeach
</div>

      </div>
      <div class="col-md-9">

      <div class="row no-margin">
      <div class="products-bc col-md-12">
        <a href="#">Home</a><a>Productos</a><a>Pastillas de freno</a>
      </div>
      <div class="filters-menu col-md-12">
        <div class="row">
          <div class="col-md-2">
            <span>1311 Items</span>
          </div>
          <div class="col-md-10 text-right">
            <span>Ordenar por
            <select name="" id="">
              <option value="">Nombre</option>
              <option value=""></option>
            </select></span>
            <a href="" class="grid-view square"><i class="fas fa-th"></i></a>
            <a href="" class="list-view square"><i class="fas fa-bars"></i></a>
          </div>
        </div>
      </div>
      </div>
    @while(have_posts()) @php the_post() @endphp
    <?php for($i=1; $i<12; $i++){
      if($i==1){ ?>
        <div class='row'>
        @include('partials.content-producto')
      <?php }else if($i%4==0){ ?>
        @include('partials.content-producto')
        </div><div class='row'>
      <?php } else { ?>
        @include('partials.content-producto')
      <?php } ?>

    <?php } ?>
    </div>
    @endwhile
      </div>
      </div>
  </div>
</div>
@endsection
