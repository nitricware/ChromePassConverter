[version]: https://img.shields.io/badge/Version-0.2-brightgreen.svg "Version 0.2"

# ChromePassConverter ![Version][version]

## Introduction

ChromePassConverter converts an XML file created with ChromePass from NirSoft to an XML file that is readable by Password Exporter for Firefox.

## License

The ChromePassConverter is distributed under the **MIT License** which allows you to use it privately and commercially, to distribute, modify and sublicense it. You may not hold me liable and must include my name in the credits of your work. ChromePassConverter was created by **Kurt Höblinger** as **NitricWare**.

## Requirements

Besides Chrome, Firefox, Password Exporter and ChromePass (only available for Windows) you need **PHP 5**.

## Usage

1. Edit the variable ```$passFile``` in ```converter.php``` to match the path to the XML file that was created by ChromePass or name the XML file that was created by ChromePass ```pass.xml``` and put it in the same directory.
2. Modify the options
3. Run ```converter.php```
4. Copy the output to a new file (i.e. ```firefoxPasses.xml```) with a texteditor of your choice.

## Further Information

For further Information see the blog post over at NitricWare's Dev Blog (https://nitricdev.wordpress.com/2016/07/04/chromepass-converter/)

## Changelog

0.1 - Initial Release
0.1.1 - Code cleanup
0.2 - Save as file option
