<?php
/**
 * modActiveDirectory
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of modActiveDirectory, which integrates Active Directory
 * authentication into MODx Revolution.
 *
 * modActiveDirectory is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * modActiveDirectory is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * modActiveDirectory; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package activedirectory
 */
/**
 * Add in system settings
 * 
 * @package activedirectory
 * @subpackage build
 */
$settings = array();

$settings['activedirectory.account_suffix']= $modx->newObject('modSystemSetting');
$settings['activedirectory.account_suffix']->fromArray(array(
    'key' => 'activedirectory.account_suffix',
    'value' => '@forest.local',
    'xtype' => 'textfield',
    'namespace' => 'activedirectory',
    'area' => 'ActiveDirectory',
),'',true,true);

$settings['activedirectory.enabled']= $modx->newObject('modSystemSetting');
$settings['activedirectory.enabled']->fromArray(array(
    'key' => 'activedirectory.enabled',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'activedirectory',
    'area' => 'ActiveDirectory',
),'',true,true);

$settings['activedirectory.autoadd_adgroups']= $modx->newObject('modSystemSetting');
$settings['activedirectory.autoadd_adgroups']->fromArray(array(
    'key' => 'activedirectory.autoadd_adgroups',
    'value' => true,
    'xtype' => 'combo-boolean',
    'namespace' => 'activedirectory',
    'area' => 'ActiveDirectory',
),'',true,true);

$settings['activedirectory.autoadd_usergroups']= $modx->newObject('modSystemSetting');
$settings['activedirectory.autoadd_usergroups']->fromArray(array(
    'key' => 'activedirectory.autoadd_usergroups',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'activedirectory',
    'area' => 'ActiveDirectory',
),'',true,true);

$settings['activedirectory.base_dn']= $modx->newObject('modSystemSetting');
$settings['activedirectory.base_dn']->fromArray(array(
    'key' => 'activedirectory.base_dn',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'activedirectory',
    'area' => 'ActiveDirectory',
),'',true,true);

$settings['activedirectory.domain_controllers']= $modx->newObject('modSystemSetting');
$settings['activedirectory.domain_controllers']->fromArray(array(
    'key' => 'activedirectory.domain_controllers',
    'value' => '127.0.0.1',
    'xtype' => 'textfield',
    'namespace' => 'activedirectory',
    'area' => 'ActiveDirectory',
),'',true,true);

$settings['activedirectory.real_primarygroup']= $modx->newObject('modSystemSetting');
$settings['activedirectory.real_primarygroup']->fromArray(array(
    'key' => 'activedirectory.real_primarygroup',
    'value' => true,
    'xtype' => 'combo-boolean',
    'namespace' => 'activedirectory',
    'area' => 'ActiveDirectory',
),'',true,true);

$settings['activedirectory.recursive_groups']= $modx->newObject('modSystemSetting');
$settings['activedirectory.recursive_groups']->fromArray(array(
    'key' => 'activedirectory.recursive_groups',
    'value' => true,
    'xtype' => 'combo-boolean',
    'namespace' => 'activedirectory',
    'area' => 'ActiveDirectory',
),'',true,true);

$settings['activedirectory.use_ssl']= $modx->newObject('modSystemSetting');
$settings['activedirectory.use_ssl']->fromArray(array(
    'key' => 'activedirectory.use_ssl',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'activedirectory',
    'area' => 'ActiveDirectory',
),'',true,true);

$settings['activedirectory.use_tls']= $modx->newObject('modSystemSetting');
$settings['activedirectory.use_tls']->fromArray(array(
    'key' => 'activedirectory.use_tls',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'activedirectory',
    'area' => 'ActiveDirectory',
),'',true,true);

/* LDAP-specific settings */
$settings['activedirectory.ldap_opt_referrals']= $modx->newObject('modSystemSetting');
$settings['activedirectory.ldap_opt_referrals']->fromArray(array(
    'key' => 'activedirectory.ldap_opt_referrals',
    'value' => 0,
    'xtype' => 'textfield',
    'namespace' => 'activedirectory',
    'area' => 'LDAP',
),'',true,true);
$settings['activedirectory.ldap_opt_timelimit']= $modx->newObject('modSystemSetting');
$settings['activedirectory.ldap_opt_timelimit']->fromArray(array(
    'key' => 'activedirectory.ldap_opt_timelimit',
    'value' => 10,
    'xtype' => 'textfield',
    'namespace' => 'activedirectory',
    'area' => 'LDAP',
),'',true,true);
$settings['activedirectory.ldap_opt_protocol_version']= $modx->newObject('modSystemSetting');
$settings['activedirectory.ldap_opt_protocol_version']->fromArray(array(
    'key' => 'activedirectory.ldap_opt_protocol_version',
    'value' => 3,
    'xtype' => 'textfield',
    'namespace' => 'activedirectory',
    'area' => 'LDAP',
),'',true,true);
$settings['activedirectory.ldap_opt_ssl_port']= $modx->newObject('modSystemSetting');
$settings['activedirectory.ldap_opt_ssl_port']->fromArray(array(
    'key' => 'activedirectory.ldap_opt_ssl_port',
    'value' => 636,
    'xtype' => 'textfield',
    'namespace' => 'activedirectory',
    'area' => 'LDAP',
),'',true,true);


return $settings;