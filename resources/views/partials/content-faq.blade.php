<?php
  $pregunta= get_post_meta(get_the_ID(), 'pregunta', true );
  $respuesta= get_post_meta(get_the_ID(), 'respuesta', true );
  $post_slug = get_post_field('post_name', get_post() );
?>
<div class="faq-wrap">
    <div class="question-faq">
      <h5 class="mb-0 faq-collapse" id="heading-<?php echo $post_slug ?>" data-toggle="collapse" data-target="#collapse-<?php echo $post_slug ?>" aria-expanded="true" aria-controls="collapse-<?php echo $post_slug ?>">
          <span class="number-faq"><?php echo $i ?></span><?php echo apply_filters('the_content', $pregunta) ?>
      </h5>
      <div id="collapse-<?php echo $post_slug ?>" class="collapse" aria-labelledby="heading-<?php echo $post_slug ?>" data-parent="#accordion">
        <div class="card-body answer-faq">
        <?php echo apply_filters('the_content', $respuesta) ?>
        </div>
      </div>
    </div>
</div>
