## fork of modActiveDirectory

Original: https://github.com/splittingred/modActiveDirectory
Added support for OpenLDAP. account_suffix must be empty and base_dn filled. Users must be in ou=users and groups in ou=groups.

## modActiveDirectory

This is an ActiveDirectory integration for MODx Revolution.

## Installation

Simply install via Package Management in MODx Revolution.

* You may need to make the manager/controllers/security/login.php file writable by PHP, if it is not already. modActiveDirectory patches a bug in that file that is in Revo 2.0.0-pl.

From there, you'll need to setup some settings:

* activedirectory.account_suffix : The account suffix for your domain. Usually in @forest.domain format.
* activedirectory.domain_controllers : A comma-separated list of domain controllers. Specifiy multiple controllers if you would like the class to balance the LDAP queries.

## ActiveDirectory Group Synchronization

modActiveDirectory will automatically grab all the ActiveDirectory groups a user belongs to, and then search for any MODx UserGroups with matching names. If found, the user will be added to those groups.

If you'd like to disable this, set the activedirectory.autoadd_adgroups System Setting to 0.

modActiveDirectory also allows you to specify a comma-separated list of MODx UserGroup names to automatically add the User to. This can be set in the activedirectory.autoadd_usergroups setting.

Make sure you give the User Groups the User will auto-join access to the manager (through Access Controls), should you want your ActiveDirectory users to have mgr access.
