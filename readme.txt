=== XLSJuice ===
Contributors: wpmoncho
Donate link: https://www.xlsjuice.com
Tags: calculator, quote form, spreadsheet to web converter
Requires at least: 3.0.1
Tested up to: 5.0.3
Stable tag: trunk
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Version: 1.0

Spreadsheet to web converter. Integration for calculators built using XLSJuice

== Description ==

Dynamic from creation based on spreadsheet. Integration for calculators built using XLSJuice spreadsheet to web converter. If you have a working spreadsheet you have a working webpage, this plugins allows you to insert any calculator form inside your WP pages.

You first need to create your calculators at <a href="https://www.xlsjuice.com" target="_blank">XLSJuice web page</a>, you have a trial account available.

https://www.youtube.com/watch?v=7x2fCiATsL4

There are a big set of extra plugins that you can use in order to extra functions to your form, some examples:

PDF creation based on word template, with inputs, outputs and any other information needed.
Email sending to you, or your customers, with inputs, outputs and any other information needed (like the pdf from above!).
Data saving. Allow your customers to save their executions, and come back to edit their previouly saved data, download their files...
Mailchimp integration
VTiger integration
Form actions, include dynamic behaviour to your form, like hide/show sections depending on inputs and/or results of the calculator. 
Paypal. You can redirect to this payment system in order to turn your quote into a real sale.
Stripe. You can redirect to this payment system in order to turn your quote into a real sale.
...more plugins comming...

also customization available for more complex requirements.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Unzip  & Upload to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Create your calculator form at xlsjuice.com
4. Get the id of the calculator you want to publish (for ex: ABCDEFH012345678 and insert at any page using this shortcode

       [xlsjuice code="ABCDEFH012345678"]

You will see your calculator up and running inside your Wordpress. Width and height parameters to control the size of the widget are also allowed

[xlsjuice code="ABCDEFH012345678" width="100%" height="500px"]

== Frequently Asked Questions ==

There is a public tutorials section where all information available that you can check here:

<a href="https://xlsjuice.com/tutorials/public/" target="_blank">Tutorials</a>



== Screenshots ==

1.  Example calculator built using XLSJuice: BMI calculator with image result
2.  Example calculator built using XLSJuice: Product profit with chart output
3.  Example calculator built using XLSJuice: Quarterly income and expenses with chart
4.  Example calculator built using XLSJuice: Mortgage calculator
5.  Example calculator built using XLSJuice: Instant quote for moving company
6.  Control panel: advanced editor for the form
7.  Control panel: stats view
8.  Control panel: managing calculators

== Changelog ==

= 1.0 =
* Initial release.


== Upgrade Notice ==

= 1.0 =
* Enables automatic insertion of the widget with a shortcode.
