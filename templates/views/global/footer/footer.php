<?php 
$window_settings = [
    "homeUrl"       => get_home_url(),
    "baseUrl"       => get_template_directory_uri(),
    "requestUrl"    => get_template_directory_uri() . "/custom-get-data.php",
];
if(isset($_SERVER['HTTP_REFERER'])): 
    $window_settings["referrer"] = $_SERVER['HTTP_REFERER'];
endif;

echo 
'<script>',
    'var settings = ' . json_encode($window_settings),
'</script>';
?>
<!-- <script>console.log(settings);</script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php 
    if (isset($data->plugins) && !empty($data->plugins)): 
      foreach($data->plugins as $plugin):
        echo "<script src='{$plugin}'></script>\n";
      endforeach;
    endif; 
?>
<script src="<?php echo get_template_directory_uri(); ?>/build/js/<?php echo $data->type; ?>.js?ver=<?php echo rand(); ?>"></script>
<?php wp_footer() ?>
</body>
</html>
