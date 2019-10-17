@php
$heroImage=get_field('hero_image');
$bodyImage=get_field('body_image');
@endphp

<section class="hero hero-us" style="background-image:url('{{$heroImage}}')">
  <div class="overlay"></div>
  <div class="hero-content hero-us-content">
    <div class="container">
      <div class="row">
        <div class="col-md-11 offset-md-1">
          <h4><span class="open-quotes">"</span>Calidad significa hacer lo correcto<br>cuando nadie está mirando<span class="close-quotes">"</span></h4>
          <p class="quote-author">Henry Ford</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="us-text">
  <div class="us-bg" style="background-image:url('{{$bodyImage}}')">

  </div>
<div class="container">
  <div class="row">
    <div class="col-md-5 offset-md-7">
      <div class="us-text-wrap">
        <div class="us-p">
          <h3>Sobre Nosotros</h3>
          <p>BRAKE SPECIALISTS CORPORATION es una empresa peruana fundada en el 2014 que se dedica a la importación y comercialización de un amplio portafolio de productos de las más prestigiosas marcas europeas productoras de sistemas de frenos. Somos distribuidores exclusivos de CBK y nos sentimos orgullosos de poder brindar a nuestros clientes o aliados un eficiente servicio de ventas a nivel nacional. Ofrecemos alta calidad, excelentes precios y rapidez en las entregas.</p>
        </div>
        <div class="us-p">
          <h3>Misión</h3>
          <p>Suministrar a nuestros clientes las mejores partes y repuestos de frenos, impulsando además el desarrollo continuo de socios y aliados multilaterales, fortaleciendo así la plataforma comercial de Brake Specialists Corporation, que reconoce y aprecia el valor del capital humano en un ecosistema empresarial competitivo.</p>
        </div>
        <div class="us-p">
          <h3>Visión</h3>
          <p>Preservar, robustecer y ampliar el liderazgo de Brake Specialists Corporation como proveedor de pastillas de frenos y otros componentes de alta calidad en todo el Perú, orientados a satisfacer integralmente las necesidades de los clientes y consumidores.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section class="us-red">
  <div class="container">
    <div class="row">
      <div class="col-md-6"><p class="red-tag">No dudes en tomar contacto con nosotros</p></div>
      <div class="col-md-5 text-right"><a href="#" class="gray-btn">Contáctanos</a></div>
    </div>
  </div>
</section>
