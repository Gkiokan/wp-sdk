<?php

if(!is_callable('autoload_plugin_files')):
function autoload_plugin_files($files=[], $folder='', $basedir=__DIR__){
    $base_path = $basedir . '/' . $folder . '/%s.php';

    if(is_array($files))
    foreach($files as $file):
        $path = sprintf($base_path, $file);

        if(file_exists($path))
        include_once $path;

    endforeach;
}
endif;
