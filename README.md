This is a simple PHP based config file parser. 

Usage: Include/require the parse.php in your code and call the readconf function with the config file location as an argument. It returns a map which has config parameters as keys.

See the included example file for a sample usage. A sample config file has been included as well.

Note: Php converts false boolean values to an empty string and true boolean values to 1 while printing.