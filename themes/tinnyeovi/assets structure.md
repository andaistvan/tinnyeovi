#oc-framework 2 file structure

assets/
|
| — css/
|	| — main.scss						# reset, fonts, framework, theme
|	| — main.min.css						# main stylesheet ( theme layout header)
|	…
|
| — fonts/
|	| — ekmukta/
|	| — font-awesome/
|	| — impact/
|	| — lato/
|	| — opensans/
|	| — raleway/
|	| — robotoslab/
|	| — fonts.scss						# primary fonts setup
|	…
|
| — images
|	| — branding							# site logo, favicon
|	…
|
| — js/
|	| — app.min.js						# primary theme script: framework, vendor
|	| — theme.init.js						# theme functions init
|	…
|
| — theme/								# theme stylesheets
|	| — globals/
|	|	| — _base.scss					# imports for all mixins + global project variables
|	|	| — _maintenance.scss			# maintenance styles
|	|	| — _404.scss			        # 404 styles
|	|
|	| — globals/
|	|	| — _header.scss					# default header
|	|	| — _footer.scss					# default footer
|	|	| — _navigation.scss				# default navigation
|	|	| — _single-navigation.scss		# single navigation
|	|
|	| — pages/
|	|	| — _home.scss					# home page
|	|	| — _single.scss					# single page
|	|	| — _sections.scss				# sections page
|	|
|	| — theme.scss						# primary theme style —> /css/main.scss
|	…
|
| — vendor/						# extensions
| 	| — animate/
|	| — blueimp-gallery/		# https://blueimp.github.io/Gallery/
|	| — bootstrap/				# FRAMEWORK
|	| — wow/					# Reveal CSS animation as you scroll down a page
|	| — materializecss/			# FRAMEWORK: http://materializecss.com
