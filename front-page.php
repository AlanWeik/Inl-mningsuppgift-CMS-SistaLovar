<?php
get_header();

$title = get_field('page_title');
$description = get_field('page_description');
$link = get_field('page_link');
$heroImageArray = get_field('page_image');
$heroImage = $heroImageArray['sizes']['large'];
?>


  <section class="green-bg" id="hero">
    <div class="container">
      <div class="d-flex flex-row-reverse justify-content-center p-4">
        <div class="row d-flex flex-row-reverse">
          <div class="col-lg-6">
            <img class="img-fluid hero-img" src="<?php echo $heroImage; ?>">
          </div>
            <div class="col-lg-6 text-light d-flex flex-column justify-content-center align-items-center">
                <h1 class="display-1"><?php echo $title; ?></h1>
				<p class="lead"><?php echo $description; ?></p>
				<button type="button" class="btn btn-outline-light mt-3">
				<a style="text-decoration: none; color: white"href="<?php echo $link['url']; ?>">
				<?php echo $link['title']; ?>
				</a>
				</button>
			</div>
        </div>
      </div>
	</div>
</section>

<?php

get_footer();