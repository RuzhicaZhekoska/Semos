<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

 

get_header();

 

if( have_posts() ):

    while ( have_posts() ):

        the_post(); ?>

 

            <main class="main">

                <article id="<?php echo the_ID(); ?>">

                    <div class="container">

                        <?php the_content();?>

                    </div>

                </article>

            </main>

 

        <?php

    endwhile;

endif;

 

get_footer();