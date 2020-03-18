<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<footer class="footer">
  <section class="instagram">
    <a href="" class="instabox">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/insta01.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/insta01.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/insta01@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/insta01@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/insta01@2x.jpg" alt="consultorio" data-modal>
      </picture>
    </a>

    <a href="" class="insta-box">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/insta02.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/insta02.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/insta02@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/insta02@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/insta02@2x.jpg" alt="consultorio" data-modal>
      </picture>
    </a>

    <a href="">

    </a>

    <a href="" class="insta-box">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/insta01.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/insta01.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/insta01@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/insta01@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/insta01@2x.jpg" alt="consultorio" data-modal>
      </picture>
    </a>

    <a href="" class="insta-box">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/insta02.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/insta02.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/insta02@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/insta02@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/insta02@2x.jpg" alt="consultorio" data-modal>
      </picture>
    </a>
  </section>

  <img src="<?=get_template_directory_URI()?>/img/rsc/logofooter.png" alt="<?=the_title()?>" class="logofooter">

  <div class="container">
    <div class="contato">
      <div class="fale-conosco">
        <h4>FALE CONOSCO</h4>
        <h2>CONTATO</h2>

        <a href="" target="_blank" class="alinha-contato">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#tel"></use>
          </svg>
          <p>33 3333-3333</p>
        </a>

        <a href="" target="_blank" class="alinha-contato">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#whatsapp"></use>
          </svg>
          <p>99 9999-9999</p>
        </a>

        <a href="" target="_blank" class="alinha-contato">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#mail"></use>
          </svg>
          <p>contato@ricardomartins.com.br</p>
        </a>

        <a href="" target="_blank" class="alinha-contato">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#pin"></use>
          </svg>
          <p>Rua Soter Ramos Couto, 44, Sala 501,
            Buritis, Belo Horizonte, MG</p>
        </a>
      </div>

      <div class="formulario">
        <?php echo do_shortcode('[contact-form-7 id="46" title="Contact form 1"]'); ?>
      </div>
    </div>

    <div class="mapa">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.9404648032946!2d-43.96362168470687!3d-19.96900584468116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa697e874ee3725%3A0xb2fe9e6331b4c479!2sRua%20Soter%20Ramos%20Couto%2C%2044%20-%20Buritis%2C%20Belo%20Horizonte%20-%20MG%2C%2030493-010!5e0!3m2!1spt-BR!2sbr!4v1584560361694!5m2!1spt-BR!2sbr"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
    </div>
  </div>

  <div class="rodape">
    <p>
      Todos os direitos reservados a Ricardo Martins. Desenvolvido por <a href="https://agenciasalt.com.br"
        target="_blank">Agência
        Salt.</a>
    </p>

    <img src="<?=get_template_directory_URI()?>/img/rsc/logosalt.png" class="logosalt">
  </div>
</footer>

<script src="<?=get_template_directory_URI()?>/app/app.js" type="module"></script>

<?php wp_footer(); ?>

</body>

</html>