<style>
.webp .banner {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/banner.webp')
}

.no-webp .banner {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/banner.jpg')
}

.webp .homesobre-parallax {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax.webp')
}

.no-webp .homesobre-parallax {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax.jpg')
}

@media screen and (min-width:650px) {
  .webp .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/banner@2x.webp')
  }

  .no-webp .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/banner@2x.jpg')
  }

  .webp .homesobre-parallax {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax@2x.webp')
  }

  .no-webp .homesobre-parallax {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax@2x.jpg')
  }
}
</style>