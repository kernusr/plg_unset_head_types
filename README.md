# Unset the head section resources types | Удаление типов ресурсов в блоке head

## The plugin to unset the `type` attribute for JavaScript and CSS

### Description
In HTML5 standart the `type` attribute is unnecessary for JavaScript and CSS resources. The HTML parser of w3c catch warning about this. To successfully pass the test, you must delete all the attributes `[type = "text/javascript"]` and `[type = "text/css"]` from the page.

This plugin for Joomla! will do everything in automatic mode. It will remove all the attributes `[type = "text/javascript"]` and `[type = "text/css"]` in the head section of page.
The plugin removes the attribute from external and inline resources.

### !!!Warning!!!
The plugin works only with resources included via the Joomla! API. You must remove the attributes yourself if you manually include resources.

### Installation

1. [Download](https://github.com/AwesomIO/plg_unset_head_types/releases/download/v2.0.0/plg_unset_head_types.zip "Download latest release of plugin") the installation package
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

## Плагин удаления атрибута `type` для JavaScript и CSS

### Описание
В стандарте HTML5 нет необходимости прописывать атрибут `type` для ресурсов JavaScript и CSS. HTML-анализатор w3c предупреждает об этом. Чтобы успешно пройти проверку, вы должны удалить все атрибуты `[type = "text/javascript"]` и `[type = "text/css"]` со страницы.

Этот плагин для Joomla! сделает все в автоматическом режиме. Он удалит все атрибуты `[type = "text/javascript"]` и `[type = "text/css"]` в секции `head` на странице.
Плагин удаляет атрибут у подключенных и инлайновых ресурсов.

### !!! Предупреждение !!!
Плагин работает только с ресурсами, включенными через Joomla! API. Вы должны самостоятельно удалить атрибуты, если ресурсы подключены вручную.

### Установка

1. [Скачайте](https://github.com/AwesomIO/plg_unset_head_types/releases/download/v2.0.0/plg_unset_head_types.zip "Скачать последнюю версию плагина") установочный пакет
2. Перейдите в Панель управления Joomla! -> Расширения -> Менеджер расширений -> Установка
3. Нажмите кнопку `Обзор` и выберите скачанный ранее архив.
4. Следуйте инструкциям на экране

### Использование
После установки плагин будет отключен.
Для правильной работы плагина вам необходимо:
1. Перейдите в Панель управления Joomla! -> Расширения -> Плагины
2. В `инструменты поиска` выберите тип плагина `system`
3. Установите порядок сортировки плагина в последнюю позицию
4. Включите плагин