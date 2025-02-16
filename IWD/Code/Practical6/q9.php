<?php
// Simple Interface Example

interface Logger
{
    public function log(string $message);
}

class FileLogger implements Logger
{
    public function log(string $message)
    {
        echo "Logging message to file: $message\n";
    }
}

$logger = new FileLogger();
$logger->log("This is a log message.");
