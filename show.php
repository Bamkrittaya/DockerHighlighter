<?php
$target_dir = "target/";
$files = array_diff(scandir($target_dir), array('.', '..'));

function highlightFile($filePath) {
    $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
    $highlightedContent = htmlspecialchars(file_get_contents($filePath));

    switch ($fileExtension) {
        case 'php':
            return "<pre><code class=\"php\">$highlightedContent</code></pre>";
        case 'txt':
            return "<pre><code class=\"plaintext\">$highlightedContent</code></pre>";
        case 'c':
            return "<pre><code class=\"c\">$highlightedContent</code></pre>";
        default:
            return "File type not supported for highlighting: $fileExtension";
    }
}

echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Highlighted Files</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/default.min.css\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/highlight.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/languages/c.min.js\"></script>
    <script>hljs.highlightAll();</script>
    <style>
        pre code {
            display: block;
            padding: 10px;
            overflow-x: auto;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<h1>Highlighted Files</h1>";
if (empty($files)) {
    echo "No files found.";
} else {
    foreach ($files as $file) {
        $filePath = "$target_dir/$file";
        echo "<h2>$file</h2>";
        echo highlightFile($filePath);
    }
}
echo "</body>
</html>";
?>
