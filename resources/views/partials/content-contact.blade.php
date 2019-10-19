<?php
$heroImage=get_field('hero_image');
?>

<section class="hero hero-contact" style="background-image:url('{{$heroImage}}')">
  <div class="overlay"></div>
  <div class="container">
    <div class="contact-abs-wrap">
    <div class="row">
      <div class="col-md-4 offset-md-1">
        <div class="contact-info">
          <h3>Contáctanos</h3>
          <p>Contamos con representantes en Caracas, Venezuela, Ciudad de Panamá, Panamá y Miami, Estados Unidos.</p>
          <ul>
            <li>
              <div class="row">
                <div class="col-md-1 col-1">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="col-md-11 col-11">
                  <span>Av. Manuel Güirrior N° 818, Pueblo Libre - Lima</span>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-1 col-1">
                  <i class="fas fa-phone"></i>
                </div>
                <div class="col-md-11 col-11">
                  <span>+51 01.396.22.52</span>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-1 col-1">
                  <i class="fas fa-at"></i>
                </div>
                <div class="col-md-11 col-11">
                  <span>info@bsc.com</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="offset-md-2 col-md-5">
        <div class="contact-form-wrap">
      <?php echo do_shortcode('[wpforms id="421" title="false" description="false"]') ?>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<section class="map-contact">
  <div class="row no-margin">
    <div class="map col-md-12 no-padding">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d975.3504799580537!2d-77.0655362!3d-12.0846139!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c907ac69384f%3A0xa526277a109cf571!2sCalle%20Manuel%20de%20Guirior%20818%2C%20Pueblo%20Libre%2015086%2C%20Per%C3%BA!5e0!3m2!1ses-419!2smx!4v1571283841971!5m2!1ses-419!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>
</section>
