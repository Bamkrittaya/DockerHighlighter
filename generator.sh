#!/bin/bash

srcDir="/usr/src/myapp/source"

inotifywait -m -e create "$srcDir" | while read path action file; do
    if [[ "$file" == *.txt ]]; then
        php gen.php "$srcDir/$file"
    fi
done
