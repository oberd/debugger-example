<?php
/**
 * This is just an example function for stack
 * tracing, all it does is throw an error
 * for the debugger to catch.
 *
 * @return void
 */
function throw_error()
{
    $message = 'This is an example of an exception';
    try {
        throw new \Exception($message);
    } catch (\Exception $e) {

    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Debugging Helper Repo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .code {
        background: #e7e7e7;
        display: inline-block;
        font-family: monospace;
    }
    </style>
</head>
<body>
    <h1>PHP Debugging</h1>
    <section>
        <p>
            PHP Debugging is easy with the 
            <span class="code">oberd/alpine-apache:7.2-dev</span> image.
        </p>
    </section>
    <details>
        <summary>Installation and Usage (VSCode)</summary>
        <p>
            In order to enable PHP Debugging in VSCode, you can initialize
            the "Debugging Configuration" in <span class="code">.vscode/launch.json</span>
            in your project using a configuration similar to this:
            <pre>
{
    // Use IntelliSense to learn about possible attributes.
    // Hover to view descriptions of existing attributes.
    // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for XDebug",
            "type": "php",
            "request": "launch",
            "port": 9000,
            "pathMappings": {
                "/var/www/app": "${workspaceRoot}"
            }
        }
    ]
}
            </pre>
        </p>
    </details>
    <details>
        <summary>Installation (PHPStorm)</summary>
    </details>
    <details>
        <summary>Usage</summary>
        <p>Usage goes here</p>
    </details>
    <details>
        <summary>Breakpoints</summary>
        <p>
            <?php
                /** 
                 * Set an example breakpoint on the line below! 
                 **/
                echo "Breakpoints can be useful";
                echo "You can step through code, line by line.";
            ?>
        </p>
    </details>
    <?php throw_error(); ?>
</body>
</html>