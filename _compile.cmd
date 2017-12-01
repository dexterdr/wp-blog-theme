java -jar c:\utils\compiler.jar --compilation_level SIMPLE_OPTIMIZATIONS --js js\jquery-3.2.1.slim.min.js js\popper.min.js js\bootstrap.min.js js\masonry.min.js js\main.js --js_output_file app.js
java -jar c:\utils\stylesheets.jar css\main.css > css\main.min.css
rem java -jar c:\utils\yuicompressor.jar css\main.css -o css\main.min.css
type css\style.css css\bootstrap.min.css css\main.min.css > style.css
del /Q css\main.min.css