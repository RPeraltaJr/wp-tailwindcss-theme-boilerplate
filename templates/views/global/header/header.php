<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php echo get_bloginfo( 'name' ) . " - " ?? ''; ?><?php the_title(); ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/build/css/<?php echo $data->type; ?>.css?ver=<?php echo rand(); ?>">

    <?php // wp_head() ?>
</head>
<body <?php body_class() ?>>
