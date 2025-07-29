<?php
// single quoted
echo 'I\'m "student" \\';
echo "hello";
// < > \ ' ,...

echo 'this is a simple string', PHP_EOL;
echo 'this is a simple string
                strings this way
    end here.

', PHP_EOL;
echo 'Superman w\'ll be back', PHP_EOL;
echo 'You deleted C:\\*.*', PHP_EOL;
echo 'You deleted C:\*.*?', PHP_EOL;
echo 'you print \\n\\', PHP_EOL;
echo '$an_int', PHP_EOL;

// double quoted
echo "H\niii";
echo "\r", "\t", "H\ni";

// Heredoc:
echo <<<END
        a
    b
  c
  END;
