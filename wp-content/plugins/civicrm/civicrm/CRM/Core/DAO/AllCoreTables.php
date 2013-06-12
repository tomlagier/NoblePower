<?php

/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.3                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 * $Id$
 *
 */

class CRM_Core_DAO_AllCoreTables {

  static $tables = array(
    'civicrm_address_format',
    'civicrm_extension',
    'civicrm_file',
    'civicrm_location_type',
    'civicrm_mail_settings',
    'civicrm_managed',
    'civicrm_mapping',
    'civicrm_option_group',
    'civicrm_preferences_date',
    'civicrm_worldregion',
    'civicrm_component',
    'civicrm_persistent',
    'civicrm_prevnext_cache',
    'civicrm_action_mapping',
    'civicrm_acl',
    'civicrm_acl_entity_role',
    'civicrm_contact',
    'civicrm_acl_contact_cache',
    'civicrm_relationship_type',
    'civicrm_saved_search',
    'civicrm_contact_type',
    'civicrm_batch',
    'civicrm_entity_batch',
    'civicrm_mailing_component',
    'civicrm_mailing_bounce_type',
    'civicrm_mailing_bounce_pattern',
    'civicrm_premiums',
    'civicrm_currency',
    'civicrm_financial_account',
    'civicrm_payment_processor_type',
    'civicrm_financial_type',
    'civicrm_entity_financial_account',
    'civicrm_financial_item',
    'civicrm_sms_provider',
    'civicrm_project',
    'civicrm_task',
    'civicrm_task_status',
    'civicrm_membership_status',
    'civicrm_campaign',
    'civicrm_campaign_group',
    'civicrm_survey',
    'civicrm_participant_status_type',
    'civicrm_event_carts',
    'civicrm_dedupe_rule_group',
    'civicrm_dedupe_rule',
    'civicrm_dedupe_exception',
    'civicrm_case',
    'civicrm_case_contact',
    'civicrm_grant',
    'civicrm_tell_friend',
    'civicrm_pledge_block',
    'civicrm_queue_item',
    'civicrm_pcp',
    'civicrm_cache',
    'civicrm_country',
    'civicrm_custom_group',
    'civicrm_custom_field',
    'civicrm_domain',
    'civicrm_email',
    'civicrm_entity_file',
    'civicrm_im',
    'civicrm_job',
    'civicrm_job_log',
    'civicrm_log',
    'civicrm_mapping_field',
    'civicrm_menu',
    'civicrm_navigation',
    'civicrm_note',
    'civicrm_option_value',
    'civicrm_phone',
    'civicrm_state_province',
    'civicrm_tag',
    'civicrm_uf_match',
    'civicrm_timezone',
    'civicrm_openid',
    'civicrm_website',
    'civicrm_setting',
    'civicrm_acl_cache',
    'civicrm_group',
    'civicrm_subscription_history',
    'civicrm_group_contact_cache',
    'civicrm_group_nesting',
    'civicrm_group_organization',
    'civicrm_relationship',
    'civicrm_mailing_event_subscribe',
    'civicrm_mailing_event_confirm',
    'civicrm_contribution_page',
    'civicrm_product',
    'civicrm_premiums_product',
    'civicrm_contribution_widget',
    'civicrm_payment_processor',
    'civicrm_membership_type',
    'civicrm_membership_block',
    'civicrm_activity',
    'civicrm_activity_contact',
    'civicrm_case_activity',
    'civicrm_pledge',
    'civicrm_report_instance',
    'civicrm_price_set',
    'civicrm_price_set_entity',
    'civicrm_county',
    'civicrm_dashboard',
    'civicrm_discount',
    'civicrm_entity_tag',
    'civicrm_msg_template',
    'civicrm_uf_group',
    'civicrm_uf_field',
    'civicrm_uf_join',
    'civicrm_action_schedule',
    'civicrm_action_log',
    'civicrm_dashboard_contact',
    'civicrm_mailing',
    'civicrm_mailing_group',
    'civicrm_mailing_trackable_url',
    'civicrm_mailing_job',
    'civicrm_mailing_recipients',
    'civicrm_mailing_spool',
    'civicrm_mailing_event_queue',
    'civicrm_mailing_event_bounce',
    'civicrm_mailing_event_delivered',
    'civicrm_mailing_event_forward',
    'civicrm_mailing_event_opened',
    'civicrm_mailing_event_reply',
    'civicrm_mailing_event_trackable_url_open',
    'civicrm_mailing_event_unsubscribe',
    'civicrm_contribution_recur',
    'civicrm_financial_trxn',
    'civicrm_official_receipt',
    'civicrm_membership',
    'civicrm_membership_log',
    'civicrm_price_field',
    'civicrm_price_field_value',
    'civicrm_line_item',
    'civicrm_pcp_block',
    'civicrm_address',
    'civicrm_loc_block',
    'civicrm_group_contact',
    'civicrm_contribution',
    'civicrm_contribution_product',
    'civicrm_contribution_soft',
    'civicrm_entity_financial_trxn',
    'civicrm_membership_payment',
    'civicrm_event',
    'civicrm_participant',
    'civicrm_participant_payment',
    'civicrm_events_in_carts',
    'civicrm_pledge_payment',
   );

  static $daoToClass = array(

    'AddressFormat' => 'CRM_Core_DAO_AddressFormat',
    'Extension' => 'CRM_Core_DAO_Extension',
    'File' => 'CRM_Core_DAO_File',
    'LocationType' => 'CRM_Core_DAO_LocationType',
    'MailSettings' => 'CRM_Core_DAO_MailSettings',
    'Managed' => 'CRM_Core_DAO_Managed',
    'Mapping' => 'CRM_Core_DAO_Mapping',
    'OptionGroup' => 'CRM_Core_DAO_OptionGroup',
    'PreferencesDate' => 'CRM_Core_DAO_PreferencesDate',
    'Worldregion' => 'CRM_Core_DAO_Worldregion',
    'Component' => 'CRM_Core_DAO_Component',
    'Persistent' => 'CRM_Core_DAO_Persistent',
    'PrevNextCache' => 'CRM_Core_DAO_PrevNextCache',
    'ActionMapping' => 'CRM_Core_DAO_ActionMapping',
    'ACL' => 'CRM_ACL_DAO_ACL',
    'EntityRole' => 'CRM_ACL_DAO_EntityRole',
    'Contact' => 'CRM_Contact_DAO_Contact',
    'ACLContactCache' => 'CRM_Contact_DAO_ACLContactCache',
    'RelationshipType' => 'CRM_Contact_DAO_RelationshipType',
    'SavedSearch' => 'CRM_Contact_DAO_SavedSearch',
    'ContactType' => 'CRM_Contact_DAO_ContactType',
    'Batch' => 'CRM_Batch_DAO_Batch',
    'EntityBatch' => 'CRM_Batch_DAO_EntityBatch',
    'Component' => 'CRM_Mailing_DAO_Component',
    'BounceType' => 'CRM_Mailing_DAO_BounceType',
    'BouncePattern' => 'CRM_Mailing_DAO_BouncePattern',
    'Premium' => 'CRM_Contribute_DAO_Premium',
    'Currency' => 'CRM_Financial_DAO_Currency',
    'FinancialAccount' => 'CRM_Financial_DAO_FinancialAccount',
    'PaymentProcessorType' => 'CRM_Financial_DAO_PaymentProcessorType',
    'FinancialType' => 'CRM_Financial_DAO_FinancialType',
    'EntityFinancialAccount' => 'CRM_Financial_DAO_EntityFinancialAccount',
    'FinancialItem' => 'CRM_Financial_DAO_FinancialItem',
    'Provider' => 'CRM_SMS_DAO_Provider',
    'Project' => 'CRM_Project_DAO_Project',
    'Task' => 'CRM_Project_DAO_Task',
    'TaskStatus' => 'CRM_Project_DAO_TaskStatus',
    'MembershipStatus' => 'CRM_Member_DAO_MembershipStatus',
    'Campaign' => 'CRM_Campaign_DAO_Campaign',
    'CampaignGroup' => 'CRM_Campaign_DAO_CampaignGroup',
    'Survey' => 'CRM_Campaign_DAO_Survey',
    'ParticipantStatusType' => 'CRM_Event_DAO_ParticipantStatusType',
    'Cart' => 'CRM_Event_Cart_DAO_Cart',
    'RuleGroup' => 'CRM_Dedupe_DAO_RuleGroup',
    'Rule' => 'CRM_Dedupe_DAO_Rule',
    'Exception' => 'CRM_Dedupe_DAO_Exception',
    'Case' => 'CRM_Case_DAO_Case',
    'CaseContact' => 'CRM_Case_DAO_CaseContact',
    'Grant' => 'CRM_Grant_DAO_Grant',
    'Friend' => 'CRM_Friend_DAO_Friend',
    'PledgeBlock' => 'CRM_Pledge_DAO_PledgeBlock',
    'QueueItem' => 'CRM_Queue_DAO_QueueItem',
    'PCP' => 'CRM_PCP_DAO_PCP',
    'Cache' => 'CRM_Core_DAO_Cache',
    'Country' => 'CRM_Core_DAO_Country',
    'CustomGroup' => 'CRM_Core_DAO_CustomGroup',
    'CustomField' => 'CRM_Core_DAO_CustomField',
    'Domain' => 'CRM_Core_DAO_Domain',
    'Email' => 'CRM_Core_DAO_Email',
    'EntityFile' => 'CRM_Core_DAO_EntityFile',
    'IM' => 'CRM_Core_DAO_IM',
    'Job' => 'CRM_Core_DAO_Job',
    'JobLog' => 'CRM_Core_DAO_JobLog',
    'Log' => 'CRM_Core_DAO_Log',
    'MappingField' => 'CRM_Core_DAO_MappingField',
    'Menu' => 'CRM_Core_DAO_Menu',
    'Navigation' => 'CRM_Core_DAO_Navigation',
    'Note' => 'CRM_Core_DAO_Note',
    'OptionValue' => 'CRM_Core_DAO_OptionValue',
    'Phone' => 'CRM_Core_DAO_Phone',
    'StateProvince' => 'CRM_Core_DAO_StateProvince',
    'Tag' => 'CRM_Core_DAO_Tag',
    'UFMatch' => 'CRM_Core_DAO_UFMatch',
    'Timezone' => 'CRM_Core_DAO_Timezone',
    'OpenID' => 'CRM_Core_DAO_OpenID',
    'Website' => 'CRM_Core_DAO_Website',
    'Setting' => 'CRM_Core_DAO_Setting',
    'Cache' => 'CRM_ACL_DAO_Cache',
    'Group' => 'CRM_Contact_DAO_Group',
    'SubscriptionHistory' => 'CRM_Contact_DAO_SubscriptionHistory',
    'GroupContactCache' => 'CRM_Contact_DAO_GroupContactCache',
    'GroupNesting' => 'CRM_Contact_DAO_GroupNesting',
    'GroupOrganization' => 'CRM_Contact_DAO_GroupOrganization',
    'Relationship' => 'CRM_Contact_DAO_Relationship',
    'Subscribe' => 'CRM_Mailing_Event_DAO_Subscribe',
    'Confirm' => 'CRM_Mailing_Event_DAO_Confirm',
    'ContributionPage' => 'CRM_Contribute_DAO_ContributionPage',
    'Product' => 'CRM_Contribute_DAO_Product',
    'PremiumsProduct' => 'CRM_Contribute_DAO_PremiumsProduct',
    'Widget' => 'CRM_Contribute_DAO_Widget',
    'PaymentProcessor' => 'CRM_Financial_DAO_PaymentProcessor',
    'MembershipType' => 'CRM_Member_DAO_MembershipType',
    'MembershipBlock' => 'CRM_Member_DAO_MembershipBlock',
    'Activity' => 'CRM_Activity_DAO_Activity',
    'ActivityContact' => 'CRM_Activity_DAO_ActivityContact',
    'CaseActivity' => 'CRM_Case_DAO_CaseActivity',
    'Pledge' => 'CRM_Pledge_DAO_Pledge',
    'Instance' => 'CRM_Report_DAO_Instance',
    'Set' => 'CRM_Price_DAO_Set',
    'SetEntity' => 'CRM_Price_DAO_SetEntity',
    'County' => 'CRM_Core_DAO_County',
    'Dashboard' => 'CRM_Core_DAO_Dashboard',
    'Discount' => 'CRM_Core_DAO_Discount',
    'EntityTag' => 'CRM_Core_DAO_EntityTag',
    'MessageTemplates' => 'CRM_Core_DAO_MessageTemplates',
    'UFGroup' => 'CRM_Core_DAO_UFGroup',
    'UFField' => 'CRM_Core_DAO_UFField',
    'UFJoin' => 'CRM_Core_DAO_UFJoin',
    'ActionSchedule' => 'CRM_Core_DAO_ActionSchedule',
    'ActionLog' => 'CRM_Core_DAO_ActionLog',
    'DashboardContact' => 'CRM_Contact_DAO_DashboardContact',
    'Mailing' => 'CRM_Mailing_DAO_Mailing',
    'Group' => 'CRM_Mailing_DAO_Group',
    'TrackableURL' => 'CRM_Mailing_DAO_TrackableURL',
    'Job' => 'CRM_Mailing_DAO_Job',
    'Recipients' => 'CRM_Mailing_DAO_Recipients',
    'Spool' => 'CRM_Mailing_DAO_Spool',
    'Queue' => 'CRM_Mailing_Event_DAO_Queue',
    'Bounce' => 'CRM_Mailing_Event_DAO_Bounce',
    'Delivered' => 'CRM_Mailing_Event_DAO_Delivered',
    'Forward' => 'CRM_Mailing_Event_DAO_Forward',
    'Opened' => 'CRM_Mailing_Event_DAO_Opened',
    'Reply' => 'CRM_Mailing_Event_DAO_Reply',
    'TrackableURLOpen' => 'CRM_Mailing_Event_DAO_TrackableURLOpen',
    'Unsubscribe' => 'CRM_Mailing_Event_DAO_Unsubscribe',
    'ContributionRecur' => 'CRM_Contribute_DAO_ContributionRecur',
    'FinancialTrxn' => 'CRM_Financial_DAO_FinancialTrxn',
    'OfficialReceipt' => 'CRM_Financial_DAO_OfficialReceipt',
    'Membership' => 'CRM_Member_DAO_Membership',
    'MembershipLog' => 'CRM_Member_DAO_MembershipLog',
    'Field' => 'CRM_Price_DAO_Field',
    'FieldValue' => 'CRM_Price_DAO_FieldValue',
    'LineItem' => 'CRM_Price_DAO_LineItem',
    'PCPBlock' => 'CRM_PCP_DAO_PCPBlock',
    'Address' => 'CRM_Core_DAO_Address',
    'LocBlock' => 'CRM_Core_DAO_LocBlock',
    'GroupContact' => 'CRM_Contact_DAO_GroupContact',
    'Contribution' => 'CRM_Contribute_DAO_Contribution',
    'ContributionProduct' => 'CRM_Contribute_DAO_ContributionProduct',
    'ContributionSoft' => 'CRM_Contribute_DAO_ContributionSoft',
    'EntityFinancialTrxn' => 'CRM_Financial_DAO_EntityFinancialTrxn',
    'MembershipPayment' => 'CRM_Member_DAO_MembershipPayment',
    'Event' => 'CRM_Event_DAO_Event',
    'Participant' => 'CRM_Event_DAO_Participant',
    'ParticipantPayment' => 'CRM_Event_DAO_ParticipantPayment',
    'EventInCart' => 'CRM_Event_Cart_DAO_EventInCart',
    'PledgePayment' => 'CRM_Pledge_DAO_PledgePayment',
   );

  static public function getCoreTables() {
    return self::$tables;
  }

  static public function isCoreTable($tableName) {
    return FALSE !== array_search($tableName, self::$tables);
  }

  static public function getFullName($daoName) {
    return CRM_Utils_Array::value($daoName, self::$daoToClass);
  }

}