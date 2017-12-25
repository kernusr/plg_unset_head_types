# Unset the head section resources types | Удаление типов ресурсов в блоке head

## The plugin to unset the `type` attribute for JavaScript and CSS

### Description
In HTML5 standart the `type` attribute is unnecessary for JavaScript and CSS resources. The HTML parser of w3c catch warning about this. To successfully pass the test, you must delete all the attributes [type = "text/javascript"] and [type = "text/css"] from the page.

This plugin for Joomla! will do everything in automatic mode. It will remove all the attributes [type = "text/javascript"] and [type = "text/css"] in the head section of page.
The plugin removes the attribute from external and inline resources.

### !!!Warning!!!
The plugin works only with resources included via the Joomla! API. You must remove the attributes yourself if you manually include resources.

### Installation

1. [Download](https://github.com/AwesomIO/plg_unset_head_types/releases/download/v1.0.0/plg_unset_head_types.zip "Download latest release of plugin") the installation package
2. Go to Joomla! Administrator -> Extensions -> Manage -> Install
3. Click `Browse` button and choose your package
4. Behove the instructions on the screen

### Usage
After installation, the plug-in will be turned off.
For the correct working of the plugin, you need to:
1. Go to Joomla! Administrator -> Extensions -> Plugins
2. In `search tools` select `system` type of plugin
3. In ordering set the plugin as the last position
4. Enable plugin
