<?php 
foreach (glob(get_template_directory(). '/core/classes/*.php') as $filename)
{
    require_once $filename;
}

require_once 'after-setup-theme.php';