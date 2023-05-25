..  include:: /Includes.rst.txt


..  _upgrade:

=======
Upgrade
=======

Upgrade from powermail2salesforce
=================================

`form2salesforce` does not work with TypoScript configuration anymore.
So, please backup salesforce related stuff like `targetUrl`, `orgid`
and `recordType`. You have to migrate these options to EXT:form yaml
configuration.

Remove the TS template for `powermail2salesforce` from TS record.
Add TS template from `form2salesforce` to register the new finisher.
Open the yaml file of your form.

Attach the SalesforceFinisher to the `finishers` section like described
in :ref:`form`.
