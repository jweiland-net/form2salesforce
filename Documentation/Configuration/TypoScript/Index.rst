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

