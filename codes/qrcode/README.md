EXAMPLES
       qrencode -l L -v 1 -o output.png 'Hello, world!'
              encode into a symbol version 1, level L.

       qrencode -iSv 1 --output=output.png
              read  standard  input  and  encode it into a structured-appended
              symbols in case-insensitive mode.

       cat bigfile.txt | qrencode -S -v 40 -l L -o output.png
              encode into a symbol version 40, level L.

