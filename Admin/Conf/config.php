<?php
$db = include './Inc/config.inc.php';
$myConf = array(
    //调式期关闭缓存
    'TMPL_CACHE_ON' => false,
    //模版布局
    'LAYOUT_ON' => false,
    'LAYOUT_NAME' => 'layout',
);

return array_merge($db,$myConf);