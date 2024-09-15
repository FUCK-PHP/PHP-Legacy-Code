<?php
// Array of CSS files
$cssFiles = [
  "a.css",
  "b.css",
  "c.css",
  "d.css"
];


// Start the <style> tag
echo "<style>\n";

// Output the contents of each CSS file
foreach ($cssFiles as $file) {
    if (file_exists($file)) {
        // Output the contents of the CSS file
        echo file_get_contents($file);
        
        // Start capturing output buffer for additional styles
        // Custom style.css
        ob_start();
        ?>
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
        <?php
        // Get the buffer contents and output it
        echo ob_get_clean();
    } else {
        // Display a comment if the file doesn't exist
        echo "<!-- File $file not found -->\n";
    }
}

// End the <style> tag
echo "\n</style>\n";
?>