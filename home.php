<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>


<section class="banner">
  <div class="banner-txt">
    <h1>
      Cirurgia plástica
      a serviço do seu
      bem-estar e autoestima!
    </h1>

    <p>
      Sinta-se feliz com você mesma! Cada procedimento é único, mas
      todos são realizados com modernidade, segurança e equilíbrio.
    </p>
  </div>
</section>

<section class="homesobre">
  <div class="container">
    <div class="homesobre-txt">
      <h5>SOBRE</h5>
      <h2>DR. RICARDO MARTINS</h2>

      <p>
        Dr. Ricardo Martins é cirurgião plástico, membro da Sociedade Brasileira de Cirurgia Plástica (SBPC),
        instituição máxima que rege os meios pelos quais o médico é considerado apto para fazer cirurgias estéticas no
        Brasil.
      </p>

      <p>
        Formado em Medicina pela Universidade Federal de Minas Gerais (UFMG), fez residência médica em Cirurgia Geral
        pelo Hospital da Polícia Militar de Minas Gerais e em Cirurgia Plástica pelo Hospital Mater Dei, onde também
        integra o corpo clínico atualmente. Sua principal atuação é em cirurgias estéticas e procedimentos minimamente
        invasivos.
      </p>

      <a href="" class="saibamais">
        SAIBA MAIS
      </a>
    </div>

    <div class="homesobre-img">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/sobre.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/sobre@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/sobre@2x.jpg" alt="consultorio" data-modal>
      </picture>
    </div>
  </div>

  <div class="homesobre-parallax">
    <!-- Declarado em background.php -->
  </div>
</section>

<section class="home-procedimentos">
  <div class="container">
    <svg width="32" height="32" viewBox="0 0 32 32" class="previous">
      <use xlink:href="#arrow"></use>
    </svg>

    <svg width="32" height="32" viewBox="0 0 32 32" class="next">
      <use xlink:href="#arrow"></use>
    </svg>

    <h5>SERVIÇOS</h5>
    <h2>procedimentos</h2>

    <?php 
      query_posts(array(
      'post_type' => 'page',
      'post_parent' => 13,
      'posts_per_page' => '4',
      'orderby' => 'menu_order'
      ));

      if(have_posts()) : while(have_posts()) : the_post(); ?>
    <a href="<?=the_permalink();?>" class="procedimento-box">
      <div class="procedimento-img">
        <img src="<?=catch_that_image(1)?>" alt="<?=the_title();?>">
      </div>
      <p><?=the_title();?></p>
    </a>

    <?php endwhile; endif; ?>

    <a href="" class="saibamais">
      VER MAIS
    </a>
  </div>
</section>

<section class="blog">
  <div class="blog-parallax">
    <h5>notícias</h5>
    <h2>Blog</h2>
    <!-- Img declarada em background.php -->

    <div class="container">
      <?php
      query_posts(array(
        'post_type' => 'post',
        'posts_per_page' => 3
      ));

      if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="homeblog-box">
        <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>">
        <h2><?=the_title();?></h2>
        <p><?=custom_excerpt2($length);?></p>

        <a href="<?=the_permalink()?>" class="saibamais">SAIBA MAIS</a>
      </div>
      <? endwhile; endif; ?>

      <a href="" class="saibamais">VER MAIS</a>
    </div>
  </div>
</section>

<?php get_footer();