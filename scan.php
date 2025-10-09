<?php
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.'));
foreach($it as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        $content = file_get_contents($file);
        if (preg_match('/(base64_decode|eval|gzinflate|shell_exec|system|passthru|str_rot13|assert|preg_replace.*\/e)/i', $content)) {
            echo "<p><b>Suspicious:</b> " . $file . "</p>";
        }
    }
}
?>