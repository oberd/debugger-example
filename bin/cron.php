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
    echo "Run successfully.\n";
}

throw_error();