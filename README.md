### Example Application: PHP Debugging

This repository is an example of how to get basic debugging
running with XDebug, and the `oberd/alpine-apache:7.2-dev` image.

#### Installation (VSCode)

Example configuration (`.vscode/launch.json`)

```json
{
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
```

#### Running this example website (VSCode)

1. Start the application by running `docker-compose up` in
   a terminal
2. Click on the "Debug" icon on the left hand menu, and click
   the play button icon "Start Debugging" (You can also start
   debugging using cmd+option+shift+d).
3. Visit the application at [http://10.45.1.100:7000](http://10.45.1.100:7000) 
   (IP may vary based on your docker configuration)


Upon loading the page, you should be taken to the VSCode Debug Panel,
with paused execution inside of the "throw_error()" function.

Play around with the debugger and get a feel for the variables, stack
tracing, stepping functionality, and console.

#### Running the example CLI program (VSCode)

1. Click on the "Debug" icon on the left hand menu, and click
   the play button icon "Start Debugging" (You can also start
   debugging using cmd+option+shift+d).
2. Start the script by running `docker-compose run web sh -c 'php bin/cron.php'` in
   a terminal

Upon running the command, you should be taken to the VSCode Debug Panel,
with paused execution inside of the "throw_error()" function.

Play around with the debugger and get a feel for the variables, stack
tracing, stepping functionality, and console.