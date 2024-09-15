<?php
// Array of CSS files
$cssFiles = [
    "a.css",
    "b.css",
    "c.css",
    "d.css",
];

// Output the contents of each CSS file
foreach ($cssFiles as $file) {
    if (file_exists($file)) {
        // Output the contents of the CSS file within a <style> tag
        echo "<style>\n";
        echo file_get_contents($file);
        echo "\n</style>\n";

        // Start capturing output buffer
        ob_start();
        ?>
        <style>
            body {
                background-color: lightblue;
            }

            h1 {
                color: white;
                text-align: center;
            }

            p {
                font-family: verdana;
                font-size: 20px;
            }
        </style>
        <?php
        // Get the buffer contents and output it
        echo ob_get_clean();
    } else {
        // Display a comment if the file doesn't exist
        echo "<!-- File $file not found -->\n";
    }
}
?>
