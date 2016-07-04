# ChromePassConverter

## Introduction

ChromePassConverter converts an XML file created with ChromePass from NirSoft to an XML file that is readable by Password Exporter for Firefox.

## Licence

The ChromePassConverter is distributed under the *MIT License* which allows you to use it privately and commercially, to distribute, modify and sublicense it. You may not hold me liable and must include my name in the credits of your work. ChromePassConverter was created by *Kurt Höblinger* as *NitricWare*.

## Requirements

Besides Chrome, Firefox, Password Exporter and ChromePass you need *PHP 5*.

## Usage

1. Edit the variable ```$passFile``` in ```converter.php``` to match the path to the XML file that was created by ChromePass or name the XML file that was created by ChromePass ```pass.xml```.
2. Run ```converter.php```
3. Copy the output to a new file (i.e. ```firefoxPasses.xml```)

## Further Information

For further Information see the blog post over at NitricWare's Dev Blog (https://nitricdev.wordpress.com/2016/07/04/chromepass-converter/)
