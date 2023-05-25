..  include:: /Includes.rst.txt


..  _typoscript:

==========
TypoScript
==========

`form2salesforce` needs some basic TypoScript configuration. To do so you
have to add an +ext template to either the root page of your website or to a
specific page which contains the `form2salesforce` plugin.

..  rst-class:: bignums

1.  Locate page

    You have to decide where you want to insert the TypoScript template. Either
    root page or page with `form2salesforce` plugin is OK.

2.  Create TypoScript template

    Switch to template module and choose the specific page from above in the
    pagetree. Choose `Click here to create an extension template` from the
    right frame. In the TYPO3 community it is also known as "+ext template".

3.  Add static template

    Choose `Info/Modify` from the upper selectbox and then click on `Edit the
    whole template record` button below the little table. On tab `Includes`
    locate the section `Include static (from extension)`. Use the search above
    `Available items` to search for `form2salesforce`. Hopefully just one
    record is visible below. Choose it, to move that record to the left.

4.  Save

    If you want you can give that template a name on tab "General", save and
    close it.

5.  Constants Editor

    Choose `Constant Editor` from the upper selectbox.

6.  `form2salesforce` constants

    Choose `PLUGIN.TX_FORM2SALESFORCE` from the category selectbox to
    show just `form2salesforce` related constants

7.  Configure constants

    Adapt the constants to your needs.

8.  Configure TypoScript

    As constants will only allow modifiying a fixed selection of TypoScript you
    also switch to `Info/Modify` again and click on `Setup`. Here you have
    the possibility to configure all `form2salesforce` related
    configuration.

Finisher
========

class
-----

..  confval:: class

    :Required: true
    :type: string
    :Default: JWeiland\Form2salesforce\Finisher\SalesforceFinisher
    :Path: plugin.tx_powermail.settings.setup.finishers.100

    The FQCN of the PHP class which handles the transfer to the
    salesforce API. In most cases there is no need to change that setting.

Finisher Configuration
======================

_enable
-------

..  confval:: _enable

    :type: boolean
    :Default: 1
    :Path: plugin.tx_powermail.settings.setup.finishers.100.config

    With this switch you can deactivate the connection to
    salesforce API.

targetUrl
---------

..  confval:: targetUrl

    :Required: true
    :type: string
    :Default: [EMPTY]
    :Path: plugin.tx_powermail.settings.setup.finishers.100.config

    Set the `*.php` URI endpoint of the salesforce API endpoint starting with
    `https://`. Example: `http://www.target.com/target.php`.

orgid
-----

This is a salesforce specific option.

..  confval:: orgid

    :Required: true
    :type: integer
    :Default: [EMPTY]
    :Path: plugin.tx_powermail.settings.setup.finishers.100.config

    Set the organization UID.

recordType
----------

This is a salesforce specific option.

..  confval:: recordType

    :Required: true
    :type: string
    :Default: [EMPTY]
    :Path: plugin.tx_powermail.settings.setup.finishers.100.config

    Set the record type.

type
----

This is a salesforce specific option.

..  confval:: type

    :Required: true
    :type: string
    :Default: [EMPTY]
    :Path: plugin.tx_powermail.settings.setup.finishers.100.config

    Set the type.

origin
------

This is a salesforce specific option.

..  confval:: origin

    :Required: true
    :type: string
    :Default: [EMPTY]
    :Path: plugin.tx_powermail.settings.setup.finishers.100.config

    Set the origin.

username
--------

Basic Auth Protection - leave empty if Target is not protected.

..  confval:: username

    :type: string
    :Default: [EMPTY]
    :Path: plugin.tx_powermail.settings.setup.finishers.100.config

    Set the username for the `.htaccess` basic auth protection.

password
--------

Basic Auth Protection - leave empty if Target is not protected.

..  confval:: password

    :type: string
    :Default: [EMPTY]
    :Path: plugin.tx_powermail.settings.setup.finishers.100.config

    Set the password for the `.htaccess` basic auth protection.

debug
-----

..  confval:: debug

    :type: boolean
    :Default: 0
    :Path: plugin.tx_powermail.settings.setup.finishers.100.config

    If activated, we add further debugging information to the output.
