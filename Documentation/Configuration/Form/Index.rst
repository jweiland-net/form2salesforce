..  include:: /Includes.rst.txt


..  _form:

====
Form
====

..  code-block:: yaml

    finishers:
      -
        identifier: SalesforceFinisher
        options:
          targetUrl: 'https://...'
          orgid: '0123456'
          recordType: '34567890'
          #type: ''
          #origin: ''
          #username: ''
          #password: ''

Finisher Options
================

targetUrl
---------

..  confval:: targetUrl

    :Required: true
    :type: string
    :Default: [EMPTY]
    :Path: finishers.*.options

    Set the `*.php` URI endpoint of the salesforce API endpoint starting with
    `https://`. Example: `http://www.target.com/target.php`.

orgid
-----

This is a salesforce specific option.

..  confval:: orgid

    :Required: true
    :type: integer
    :Default: [EMPTY]
    :Path: finishers.*.options

    Set the organization UID.

recordType
----------

This is a salesforce specific option.

..  confval:: recordType

    :Required: true
    :type: string
    :Default: [EMPTY]
    :Path: finishers.*.options

    Set the record type.

type
----

This is a salesforce specific option.

..  confval:: type

    :Required: true
    :type: string
    :Default: [EMPTY]
    :Path: finishers.*.options

    Set the type.

origin
------

This is a salesforce specific option.

..  confval:: origin

    :Required: true
    :type: string
    :Default: [EMPTY]
    :Path: finishers.*.options

    Set the origin.

username
--------

Basic Auth Protection - leave empty if Target is not protected.

..  confval:: username

    :type: string
    :Default: [EMPTY]
    :Path: finishers.*.options

    Set the username for the `.htaccess` basic auth protection.

password
--------

Basic Auth Protection - leave empty if Target is not protected.

..  confval:: password

    :type: string
    :Default: [EMPTY]
    :Path: finishers.*.options

    Set the password for the `.htaccess` basic auth protection.
