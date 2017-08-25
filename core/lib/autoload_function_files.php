<?php

if(!is_callable('autoload_function_files')):
function autoload_function_files($files=[], $folder=''){
    $base_path = __DIR__ . '/' . $folder . '/%s.php';

    if(is_array($files))
    foreach($files as $file):
        $path = sprintf($base_path, $file);

        if(file_exists($path))
        include_once $path;

    endforeach;
}
endif;
