=== Show Theme in Footer ===
Contributors: apasionados
Donate link: http://apasionados.es/
Tags: theme name, footer, admin, administration, parent theme name, theme version
Requires at least: 3.0.1
Tested up to: 6.3
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Show the active theme name and version in the Admin Footer.

== Description ==

This plugin displays the active theme name, version and parent theme name in the Admin Footer on the right. Parent theme is only shown when a child theme is active.

We created this plugin because we manage a large number of blogs with different themes. When updating themes we always have to go and look which theme is active and which is the parent theme to prevent problems with the site layout. We always like to be sure before updating the active theme, but others non active theme should always be up to date.

> Info is only shown to logged in <strong>Administrators</strong> and <strong>Editors</strong>.

Easy. Handy. And it saves us a lot of time.

We think it will save a lot of time of everybody that manages blogs with different themes.

= Show Theme in Footer in your Language! =
This first release is avaliable in English and Spanish. In the languages folder we have included the necessary files to translate this plugin.

If you would like the plugin in your language and you're good at translating, please drop us a line at [Contact us](http://apasionados.es/contacto/index.php?desde=show-theme-in-footer-home).

= Further Reading =
You can access the description of the plugin in Spanish at: [Show Theme in Footer](https://apasionados.es/blog/mostrar-tema-de-wordpress-activo-en-el-footer-wordpress-plugin-7780/).

== Installation ==

1. Upload the `show-theme-in-footer` folder to the `/wp-content/plugins/` directory (or to the directory where your WordPress plugins are located)
1. Activate the Show Theme in Footer plugin through the 'Plugins' menu in WordPress.

Please use with *WordPress MultiSite* at your own risk, as it has not been tested.

== Frequently Asked Questions ==

= What is Show Theme in Footer good for? =
This plugin displays the active theme name, version and parent theme name in the Admin Footer on the right. Parent theme is only shown when a child theme is active.

= Does Show Theme in Footer make changes to the database? =
No.

= How can I check out if the plugin works for me? =
Install and activate. In the footer of the administration area you should see the active theme name and version. If it's a child theme you should also see the parent theme name. Don't forget that info is only shown to administrators and editors.

= How can I remove Show Theme in Footer? =
You can simply activate, deactivate or delete it in your plugin management section.

= Are there any known incompatibilities? =
Please don't use it with *WordPress MultiSite*, as it has not been tested.

= Do you make use of Show Theme in Footer yourself? = 
Of course we do. ;-)

== Screenshots ==

1. Theme displayed in Footer (active theme is not a child theme)
2. Theme displayed in Footer with parent theme (active theme is a child theme)

== Changelog ==

= 1.1 =
* Added version of parent theme in case a child theme is active.

= 1.0 =
* First release.

== Upgrade Notice ==

= 1.1 =
* Added version of parent theme in case a child theme is active.

== Contact ==

For further information please send us an [email](http://apasionados.es/contacto/index.php?desde=show-theme-in-footer-contact).

== Translating WordPress Plugins ==

The steps involved in translating a plugin are:

1. Run a tool over the code to produce a POT file (Portable Object Template), simply a list of all localizable text. Our plugins allready havae this POT file in the /languages/ folder.
1. Use a plain text editor or a special localization tool to generate a translation for each piece of text. This produces a PO file (Portable Object). The only difference between a POT and PO file is that the PO file contains translations.
1. Compile the PO file to produce a MO file (Machine Object), which can then be used in the theme or plugin.

In order to translate a plugin you will need a special software tool like [poEdit](http://www.poedit.net/), which is a cross-platform graphical tool that is available for Windows, Linux, and Mac OS X.

The naming of your PO and MO files is very important and must match the desired locale. The naming convention is: `language_COUNTRY.po` and plugins have an additional naming convention whereby the plugin name is added to the filename: `pluginname-fr_FR.po`

That is, the plugin name name must be the language code followed by an underscore, followed by a code for the country (in uppercase). If the encoding of the file is not UTF-8 then the encoding must be specified. 

For example:

* en_US – US English
* en_UK – UK English
* es_ES – Spanish from Spain
* fr_FR – French from France
* zh_CN – Simplified Chinese

A list of language codes can be found [here](http://en.wikipedia.org/wiki/ISO_639), and country codes can be found [here](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). A full list of encoding names can also be found at [IANA](http://www.iana.org/assignments/character-sets).
