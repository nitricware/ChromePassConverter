#!/usr/bin/env python
#
# ChromePass Converter
# by Kurt Höblinger aka NitricWare
#
# http://www.nitricware.com
#
# Released under MIT License
#
# July 17 2016
#
# v 0.1
# 

import xml.etree.ElementTree as ET

passFile = '/path/to/ChromePass.xml'        # Absolute Path to the ChromePass XML
saveFile = True                             # Save Output as file?
saveFileOutput = '/path/to/output.xml'      # Absolute Path to the output XML

#
# DO NOT CHANGE ANYTHING BELOW
#

def ChromePassConverter():
    global passFile, saveFile, saveFileOutput

    xml = ET.parse(passFile)
    root = xml.getroot()

    output = '<xml>'
    output += '<entries ext="Password Exporter" extxmlversion="1.1" type="saved" encrypt="false">'

    for child in root:
        origin_url = child.find('origin_url').text
        user_name = child.find('user_name').text
        password = child.find('password').text
        action_url = child.find('action_url').text
        user_name_field = child.find('user_name_field').text
        password_field = child.find('password_field').text

        output += '<entry host="' + str(origin_url) +'" user="' + str(user_name) + '" password="' + str(password) + '" formSubmitURL="' + str(action_url) + '" httpRealm="" userFieldName="' + str(user_name_field) + '" passFieldName="' + str(password_field) + '" />'

    output += '</entries>'
    output += '</xml>'
    if saveFile == True:
        with open(saveFileOutput, 'w') as file:
            file.write(output)
        return 0;
    return output
