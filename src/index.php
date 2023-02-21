<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Projects by David Hunter</title>

        <link rel="stylesheet" type="text/css" href="/assets/webfonts/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/index.css">
    </head>

    <body>
        <header>
            <div class="container">
                <p style="letter-spacing: 3px; font-size: 1.2rem;">PROJECTS BY</p>
                <h1 style="font-size: 3rem;">DAVID HUNTER</h1>
            </div>
        </header>

        <section class="projects">
            <div class="container">
                <?php

                $projects = array
                (
                    array
                    (
                        "title" => "Personal Website",
                        "description" => "It is all about me",
                        "url" => "https://davidhunter.scot",
                        "image" => "/assets/images/davidhunter_illustration_transparent_1.png",
                        "color" => "#333",
                    ),
                    array
                    (
                        "title" => "StaticPHP",
                        "description" => "A Static Site Generator that turns PHP files into HTML files.",
                        "url" => "https://staticphp.bydh.me",
                        "image" => "/assets/images/StaticPHP-Promo1.png",
                        "color" => "#7A86B8",
                    ),
                    array
                    (
                        "title" => "Network Tools",
                        "description" => "A selection of web based tools to help with things related to computer networks.",
                        "url" => "https://networktools.bydh.me",
                        "image" => "",
                        "color" => "#ffffff",
                    ),
                );

                foreach( $projects as $project )
                {
                ?>

                <div class="project">
                    <div class="info">
                        <div class="title"><?php echo $project['title']; ?></div>
                        <div class="description"><?php echo $project['description']; ?></div>
                        <div class="url"><a href="<?php echo $project['url']; ?>" target="_blank"><?php echo $project['url']; ?></a></div>
                    </div>

                    <div class="image" style="background-image: url( '<?php echo $project['image']; ?>' ), linear-gradient( var( --angle ), <?php if( isset( $project['color'] ) && $project['color'] ) echo $project['color']; else echo "#262626"; ?> 0%, #ffffff 50% );">&nbsp;</div>
                </div>

                <?php
                }

                ?>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>Copyright &copy; David Hunter. Site built and deployed from <a href="https://github.com/DavidHunterScot/bydh.me" target="_blank">Source Code on GitHub</a>.</p>
            </div>
        </footer>
    </body>
</html>