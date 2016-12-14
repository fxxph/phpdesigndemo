<script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<?php
header("Content-type:text/html;charset=utf-8");
require_once "../common.php";
$it = new DirectoryIterator(__DIR__);
$debugFileList = array();
while ($it->valid()) {
    if (!$it->isDir()) {
        $file = $it->current() . "\n";
        $explodeFiles = explode('_', trim($file));
        $debugFileList[] = join('_', $explodeFiles);
    }
    $it->next();
}
//$debugFileList = array('interpreter.class.php');
foreach ($debugFileList as $val) {
    $val = iconv('gbk', 'utf-8', $val);
    if (!in_array($val, array('index.php', '设计模式目录'))) {
        preg_match('/\/\*\*(.*)\*\//s', file_get_contents($val), $annotation);
        $selector = str_replace('.', '_', $val);
        echo '<a target="_blank" href="#" onclick="javascript:$(\'#' . $selector . '\').toggle();return false;">' . $val . '</a><br>' . "\n";
        echo "\n<div id='" . $selector . "' style='padding:10px;color:#000;width:99%;background-color:#EEEEEE;border: 1px solid #333333;'><pre>";
        if (isset($annotation[0])) {
            echo $annotation[0];
        }
        echo "</pre></div><br>\n";
    }
}
