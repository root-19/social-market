<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $html = $_POST['html_code'];
    $css = $_POST['css_code'];
    $js = $_POST['js_code'];

    // Combine the HTML, CSS, and JS into a single output
    $output = "<!DOCTYPE html>\n<html lang='en'>\n<head>\n<style>\n" . $css . "\n</style>\n</head>\n<body>\n" . $html . "\n<script>\n" . $js . "\n</script>\n</body>\n</html>";

    // Output the combined code
    echo $output;
}
?>
