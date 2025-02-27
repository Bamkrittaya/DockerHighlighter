<?php
function highlightFile($filePath) {
    $fileContent = file_get_contents($filePath);
    $highlightedContent = highlightProcess($fileContent);
    $targetPath = str_replace('source', 'target', $filePath);
    file_put_contents($targetPath, $highlightedContent);
}

function highlightProcess($content) {
    return "<pre><code class=\"language-php\">" . htmlspecialchars($content) . "</code></pre>";
}

$srcDir = '/usr/src/myapp/source';
$iterator = new DirectoryIterator($srcDir);
foreach ($iterator as $fileinfo) {
    if ($fileinfo->isFile() && $fileinfo->getExtension() == 'txt') {
        highlightFile($fileinfo->getPathname());
    }
}
?>
