<?php

return [
    'sidebar_settings' => 'Account settings',
    'sidebar_personalization' => 'Personalization',
    'sidebar_settings_export' => 'Export data',
    'sidebar_settings_users' => 'Users',
    'sidebar_settings_subscriptions' => 'Subscription',
    'sidebar_settings_import' => 'Import data',
    'sidebar_settings_tags' => 'Tags management',
    'sidebar_settings_api' => 'API',
    'sidebar_settings_security' => 'Security',

    'export_title' => 'Export your account data',
    'export_be_patient' => 'Click the button to start the export. It might take several minutes to process the export – please be patient and do not spam the button.',
    'export_title_sql' => 'Export to SQL',
    'export_sql_explanation' => 'Exporting your data in SQL format allows you to take your data and import it to your own Monica instance. This is only valuable if you do have your own server.',
    'export_sql_cta' => 'Export to SQL',
    'export_sql_link_instructions' => 'Note: <a href=":url">read the instructions</a> to learn more about importing this file to your instance.',

    'firstname' => 'First name',
    'lastname' => 'Last name',
    'name_order' => 'Name order',
    'name_order_firstname_first' => 'First name first (John Doe)',
    'name_order_lastname_first' => 'Last name first (Doe John)',
    'currency' => 'Currency',
    'name' => 'Your name: :name',
    'email' => 'Email address',
    'email_placeholder' => 'Enter email',
    'email_help' => 'This is the email used to login, and this is where you’ll receive your reminders.',
    'timezone' => 'Timezone',
    'layout' => 'Layout',
    'layout_small' => 'Maximum 1200 pixels wide',
    'layout_big' => 'Full width of the browser',
    'save' => 'Update preferences',
    'delete_title' => 'Delete your account',
    'delete_desc' => 'Do you wish to delete your account? Warning: deletion is permanent and all your data will be erased permamently.',
    'reset_desc' => 'Do you wish to reset your account? This will remove all your contacts, and the data associated with them. Your account will not be deleted.',
    'reset_title' => 'Reset your account',
    'reset_cta' => 'Reset account',
    'reset_notice' => 'Are you sure to reset your account? There is no turning back.',
    'reset_success' => 'Your account has been reset successfully',
    'delete_notice' => 'Are you sure to delete your account? There is no turning back.',
    'delete_cta' => 'Delete account',
    'settings_success' => 'Preferences updated!',
    'locale' => 'Language used in the app',
    'locale_cs' => 'Czech',
    'locale_de' => 'German',
    'locale_en' => 'English',
    'locale_es' => 'Spanish',
    'locale_fr' => 'French',
    'locale_he' => 'Hebrew',
    'locale_it' => 'Italian',
    'locale_nl' => 'Dutch',
    'locale_pt' => 'Portuguese',
    'locale_ru' => 'Russian',
    'locale_zh' => 'Chinese Simplified',

    'security_title' => 'Security',
    'security_help' => 'Change security matters for your account.',
    'password_change' => 'Password change',
    'password_current' => 'Current password',
    'password_current_placeholder' => 'Enter your current password',
    'password_new1' => 'New password',
    'password_new1_placeholder' => 'Enter a new password',
    'password_new2' => 'Confirmation',
    'password_new2_placeholder' => 'Retype the new password',
    'password_btn' => 'Change password',
    '2fa_title' => 'Two Factor Authentication',
    '2fa_enable_title' => 'Enable Two Factor Authentication',
    '2fa_enable_description' => 'Enable Two Factor Authentication to increase security with your account.',
    '2fa_enable_otp' => 'Open up your two factor authentication mobile app and scan the following QR barcode:',
    '2fa_enable_otp_help' => 'If your two factor authentication mobile app does not support QR barcodes, enter in the following code:',
    '2fa_enable_otp_validate' => 'Please validate the new device you’ve just set:',
    '2fa_enable_success' => 'Two Factor Authentication activated',
    '2fa_enable_error' => 'Error when trying to activate Two Factor Authentication',
    '2fa_disable_title' => 'Disable Two Factor Authentication',
    '2fa_disable_description' => 'Disable Two Factor Authentication for your account. Be careful, your account will not be secured anymore !',
    '2fa_disable_success' => 'Two Factor Authentication disabled',
    '2fa_disable_error' => 'Error when trying to disable Two Factor Authentication',
    'u2f_enable_description' => 'Add a new U2F security key',
    'u2f_buttonAdvise' => 'If your security key has a button, press it.',
    'u2f_noButtonAdvise' => 'If it does not, remove it and insert it again.',
    'u2f_success' => 'Your key is detected and validated.',
    'u2f_insertKey' => 'Insert your security key.',
    'u2f_error_other_error' => 'An error occurred.',
    'u2f_error_bad_request' => 'The visited URL doesn’t match the App ID or your are not using HTTPS',
    'u2f_error_configuration_unsupported' => 'Client configuration is not supported.',
    'u2f_error_device_ineligible' => 'The presented device is not eligible for this request. For a registration request this may mean that the token is already registered, and for a sign request it may mean that the token does not know the presented key handle.',
    'u2f_error_timeout' => 'Timeout reached before request could be satisfied.',

    'users_list_title' => 'Users with access to your account',
    'users_list_add_user' => 'Invite a new user',
    'users_list_you' => 'That’s you',
    'users_list_invitations_title' => 'Pending invitations',
    'users_list_invitations_explanation' => 'Below are the people you’ve invited to join Monica as a collaborator.',
    'users_list_invitations_invited_by' => 'invited by :name',
    'users_list_invitations_sent_date' => 'sent on :date',
    'users_blank_title' => 'You are the only one who has access to this account.',
    'users_blank_add_title' => 'Would you like to invite someone else?',
    'users_blank_description' => 'This person will have the same access that you have, and will be able to add, edit or delete contact information.',
    'users_blank_cta' => 'Invite someone',
    'users_add_title' => 'Invite a new user by email to your account',
    'users_add_description' => 'This person will have the same rights as you do, including inviting other users and deleting them (including you). Therefore, make sure you trust this person.',
    'users_add_email_field' => 'Enter the email of the person you want to invite',
    'users_add_confirmation' => 'I confirm that I want to invite this user to my account. This person will access ALL my data and see exactly what I see.',
    'users_add_cta' => 'Invite user by email',
    'users_accept_title' => 'Accept invitation and create a new account',
    'users_error_please_confirm' => 'Please confirm that you want to invite this user before proceeding with the invitation',
    'users_error_email_already_taken' => 'This email is already taken. Please choose another one',
    'users_error_already_invited' => 'You already have invited this user. Please choose another email address.',
    'users_error_email_not_similar' => 'This is not the email of the person who’ve invited you.',
    'users_invitation_deleted_confirmation_message' => 'The invitation has been successfully deleted',
    'users_invitations_delete_confirmation' => 'Are you sure you want to delete this invitation?',
    'users_list_delete_confirmation' => 'Are you sure to delete this user from your account?',
    'users_invitation_need_subscription' => 'Adding more users requires a subscription.',

    'subscriptions_account_current_plan' => 'Your current plan',
    'subscriptions_account_current_paid_plan' => 'You are on the :name plan. Thanks so much for being a subscriber.',
    'subscriptions_account_next_billing' => 'Your subscription will auto-renew on <strong>:date</strong>. You can <a href=":url">cancel subscription</a> anytime.',
    'subscriptions_account_free_plan' => 'You are on the free plan.',
    'subscriptions_account_free_plan_upgrade' => 'You can upgrade your account to the :name plan, which costs $:price per month. Here are the advantages:',
    'subscriptions_account_free_plan_benefits_users' => 'Unlimited number of users',
    'subscriptions_account_free_plan_benefits_reminders' => 'Reminders by email',
    'subscriptions_account_free_plan_benefits_import_data_vcard' => 'Import your contacts with vCard',
    'subscriptions_account_free_plan_benefits_support' => 'Support the project on the long run, so we can introduce more great features.',
    'subscriptions_account_upgrade' => 'Upgrade your account',
    'subscriptions_account_upgrade_title' => 'Upgrade Monica today and have more meaningful relationships.',
    'subscriptions_account_upgrade_choice' => 'Pick a plan below and join over :customers persons who upgraded their Monica.',
    'subscriptions_account_invoices' => 'Invoices',
    'subscriptions_account_invoices_download' => 'Download',
    'subscriptions_account_payment' => 'Which payment option fits you best?',
    'subscriptions_downgrade_title' => 'Downgrade your account to the free plan',
    'subscriptions_downgrade_limitations' => 'The free plan has limitations. In order to be able to downgrade, you need to pass the checklist below:',
    'subscriptions_downgrade_rule_users' => 'You must have only 1 user in your account',
    'subscriptions_downgrade_rule_users_constraint' => 'You currently have <a href=":url">1 user</a> in your account.|You currently have <a href=":url">:count users</a> in your account.',
    'subscriptions_downgrade_rule_invitations' => 'You must not have pending invitations',
    'subscriptions_downgrade_rule_invitations_constraint' => 'You currently have <a href=":url">1 pending invitation</a> sent to people.|You currently have <a href=":url">:count pending invitations</a> sent to people.',
    'subscriptions_downgrade_cta' => 'Downgrade',
    'subscriptions_downgrade_success' => 'You are back to the Free plan!',
    'subscriptions_downgrade_thanks' => 'Thanks so much for having tried the paid plan. We keep adding new features on Monica all the time – so you might want to come back in the future to see if you might be interested in taking a subscription again.',
    'subscriptions_back' => 'Back to settings',
    'subscriptions_upgrade_title' => 'Upgrade your account',
    'subscriptions_upgrade_choose' => 'You picked the :plan plan.',
    'subscriptions_upgrade_infos' => 'We couldn’t be happier. Enter your payment info below.',
    'subscriptions_upgrade_name' => 'Name on card',
    'subscriptions_upgrade_zip' => 'ZIP or postal code',
    'subscriptions_upgrade_credit' => 'Credit or debit card',
    'subscriptions_upgrade_submit' => 'Submit Payment',
    'subscriptions_upgrade_charge' => 'We’ll charge your card USD $:price now. The next charge will be on :date. If you ever change your mind, you can cancel anytime, no questions asked.',
    'subscriptions_upgrade_charge_handled' => 'The payment is handled by <a href=":url">Stripe</a>. No card information touches our server.',
    'subscriptions_upgrade_success' => 'Thank you! You are now subscribed.',
    'subscriptions_upgrade_thanks' => 'Welcome to the community of people who try to make the world a better place.',

    'subscriptions_pdf_title' => 'Your :name monthly subscription',
    'subscriptions_plan_choose' => 'Choose this plan',
    'subscriptions_plan_year_title' => 'Pay annually',
    'subscriptions_plan_year_cost' => '$45/year',
    'subscriptions_plan_year_cost_save' => 'you’ll save 25%',
    'subscriptions_plan_year_bonus' => 'Peace of mind for a whole year',
    'subscriptions_plan_month_title' => 'Pay monthly',
    'subscriptions_plan_month_cost' => '$5/month',
    'subscriptions_plan_month_bonus' => 'Cancel any time',
    'subscriptions_plan_include1' => 'Included with your upgrade:',
    'subscriptions_plan_include2' => 'Unlimited number of users • Reminders by email • Import with vCard • Personalization of the contact sheet',
    'subscriptions_plan_include3' => '100% of the profits go the development of this great open source project.',
    'subscriptions_help_title' => 'Additional details you may be curious about',
    'subscriptions_help_opensource_title' => 'What is an open source project?',
    'subscriptions_help_opensource_desc' => 'Monica is an open source project. This means it is built by an entirely benevolent community who just wants to provide a great tool for the greater good. Being open source means the code is publicly available on GitHub, and everyone can inspect it, modify it or enhance it. All the money we raise is dedicated to build better features, have more powerful servers, help pay the bills. Thanks for your help. We couldn’t do it without you – litterally.',
    'subscriptions_help_limits_title' => 'Is there any limit to the number of contacts we can have on the free plan?',
    'subscriptions_help_limits_plan' => 'Absolutely not. Free plans do not have limitations on the number of contacts you can have.',
    'subscriptions_help_discounts_title' => 'Do you have discounts for non-profits and education?',
    'subscriptions_help_discounts_desc' => 'We do! Monica is free for students, and free for non-profits and charities. Just contact <a href=":support">the support</a> with a proof of your status and we’ll apply this special status in your account.',
    'subscriptions_help_change_title' => 'What if I change my mind?',
    'subscriptions_help_change_desc' => 'You can cancel anytime, no questions asked, and all by yourself – no need to contact support or whatever. However, you will not be refunded for the current period.',

    'import_title' => 'Import contacts in your account',
    'import_cta' => 'Upload contacts',
    'import_stat' => 'You’ve imported :number files so far.',
    'import_result_stat' => 'Uploaded vCard with 1 contact (:total_imported imported, :total_skipped skipped)|Uploaded vCard with :total_contacts contacts (:total_imported imported, :total_skipped skipped)',
    'import_view_report' => 'View report',
    'import_in_progress' => 'The import is in progress. Reload the page in one minute.',
    'import_upload_title' => 'Import your contacts from a vCard file',
    'import_upload_rules_desc' => 'We do however have some rules:',
    'import_upload_rule_format' => 'We support <code>.vcard</code> and <code>.vcf</code> files.',
    'import_upload_rule_vcard' => 'We support the vCard 3.0 format, which is the default format for Contacts.app (macOS) and Google Contacts.',
    'import_upload_rule_instructions' => 'Export instructions for <a href="http://osxdaily.com/2015/07/14/export-contacts-mac-os-x/" target="_blank">Contacts.app (macOS)</a> and <a href="http://www.akruto.com/backup-phone-contacts-calendar/how-to-export-google-contacts-to-csv-or-vcard/" target="_blank">Google Contacts</a>.',
    'import_upload_rule_multiple' => 'For now, if your contacts have multiple email addresses or phone numbers, only the first entry will be picked up.',
    'import_upload_rule_limit' => 'Files are limited to 10MB.',
    'import_upload_rule_time' => 'It might take up to 1 minute to upload the contacts and process them. Be patient.',
    'import_upload_rule_cant_revert' => 'Make sure data is accurate before uploading, as you can’t undo the upload.',
    'import_upload_form_file' => 'Your <code>.vcf</code> or <code>.vCard</code> file:',
    'import_upload_behaviour' => 'Import behaviour:',
    'import_upload_behaviour_add' => 'Add new contacts, skip existing',
    'import_upload_behaviour_replace' => 'Replace existing contacts',
    'import_upload_behaviour_help' => 'Note: Replacing will replace all data found in the vCard, but will keep existing contact fields.',
    'import_report_title' => 'Importing report',
    'import_report_date' => 'Date of the import',
    'import_report_type' => 'Type of import',
    'import_report_number_contacts' => 'Number of contacts in the file',
    'import_report_number_contacts_imported' => 'Number of imported contacts',
    'import_report_number_contacts_skipped' => 'Number of skipped contacts',
    'import_report_status_imported' => 'Imported',
    'import_report_status_skipped' => 'Skipped',
    'import_vcard_contact_exist' => 'Contact already exists',
    'import_vcard_contact_no_firstname' => 'No firstname (mandatory)',
    'import_vcard_file_not_found' => 'File not found',
    'import_vcard_unknown_entry' => 'Unknown contact name',
    'import_vcard_file_no_entries' => 'File contains no entries',
    'import_blank_title' => 'You haven’t imported any contacts yet.',
    'import_blank_question' => 'Would you like to import contacts now?',
    'import_blank_description' => 'We can import vCard files that you can get from Google Contacts or your Contact manager.',
    'import_blank_cta' => 'Import vCard',
    'import_need_subscription' => 'Importing data requires a subscription.',

    'tags_list_title' => 'Tags',
    'tags_list_description' => 'You can organize your contacts by setting up tags. Tags work like folders, but you can add more than one tag to a contact. To add a new tag, add it on the contact itself.',
    'tags_list_contact_number' => '1 contact|:count contacts',
    'tags_list_delete_success' => 'The tag has been successfully deleted',
    'tags_list_delete_confirmation' => 'Are you sure you want to delete the tag? No contacts will be deleted, only the tag.',
    'tags_blank_title' => 'Tags are a great way of categorizing your contacts.',
    'tags_blank_description' => 'Tags work like folders, but you can add more than one tag to a contact. Go to a contact and tag a friend, right below the name. Once a contact is tagged, go back here to manage all the tags in your account.',

    'api_title' => 'API access',
    'api_description' => 'The API can be used to manipulate Monica’s data from an external application, like a mobile application for instance.',

    'api_personal_access_tokens' => 'Personal access tokens',
    'api_pao_description' => 'Make sure you give this token to a source you trust – as they allow you to access all your data.',
    'api_token_title' => 'Personal access token',
    'api_token_create_new' => 'Create New Token',
    'api_token_not_created' => 'You have not created any personal access tokens.',
    'api_token_name' => 'Name',
    'api_token_delete' => 'Delete',
    'api_token_create' => 'Create Token',
    'api_token_scopes' => 'Scopes',
    'api_token_help' => 'Here is your new personal access token. This is the only time it will be shown so don’t lose it! You may now use this token to make API requests.',

    'api_oauth_clients' => 'Your Oauth clients',
    'api_oauth_clients_desc' => 'This section lets you register your own OAuth clients.',
    'api_oauth_title' => 'Oauth Clients',
    'api_oauth_create_new' => 'Create New Client',
    'api_oauth_not_created' => 'You have not created any OAuth clients.',
    'api_oauth_clientid' => 'Client ID',
    'api_oauth_name' => 'Name',
    'api_oauth_name_help' => 'Something your users will recognize and trust.',
    'api_oauth_secret' => 'Secret',
    'api_oauth_create' => 'Create Client',
    'api_oauth_redirecturl' => 'Redirect URL',
    'api_oauth_redirecturl_help' => 'Your application’s authorization callback URL.',

    'api_authorized_clients' => 'List of authorized clients',
    'api_authorized_clients_desc' => 'This section lists all the clients you’ve authorized to access your application. You can revoke this authorization at anytime.',
    'api_authorized_clients_title' => 'Authorized Applications',
    'api_authorized_clients_name' => 'Name',
    'api_authorized_clients_scopes' => 'Scopes',

    'personalization_tab_title' => 'Personalize your account',

    'personalization_title' => 'Here you can find different settings to configure your account. These features are more for “power users” who want maximum control over Monica.',
    'personalization_contact_field_type_title' => 'Contact field types',
    'personalization_contact_field_type_add' => 'Add new field type',
    'personalization_contact_field_type_description' => 'Here you can configure all the different types of contact fields that you can associate to all your contacts. If in the future, a new social network appears, you will be able to add this new type of ways of contacting your contacts right here.',
    'personalization_contact_field_type_table_name' => 'Name',
    'personalization_contact_field_type_table_protocol' => 'Protocol',
    'personalization_contact_field_type_table_actions' => 'Actions',
    'personalization_contact_field_type_modal_title' => 'Add a new contact field type',
    'personalization_contact_field_type_modal_edit_title' => 'Edit an existing contact field type',
    'personalization_contact_field_type_modal_delete_title' => 'Delete an existing contact field type',
    'personalization_contact_field_type_modal_delete_description' => 'Are you sure you want to delete this contact field type? Deleting this type of contact field will delete ALL the data with this type for all your contacts.',
    'personalization_contact_field_type_modal_name' => 'Name',
    'personalization_contact_field_type_modal_protocol' => 'Protocol (optional)',
    'personalization_contact_field_type_modal_protocol_help' => 'Each new contact field type can be clickable. If a protocol is set, we will use it to trigger the action that is set.',
    'personalization_contact_field_type_modal_icon' => 'Icon (optional)',
    'personalization_contact_field_type_modal_icon_help' => 'You can associate an icon with this contact field type. You need to add a reference to a Font Awesome icon.',
    'personalization_contact_field_type_delete_success' => 'The contact field type has been deleted with success.',
    'personalization_contact_field_type_add_success' => 'The contact field type has been successfully added.',
    'personalization_contact_field_type_edit_success' => 'The contact field type has been successfully updated.',

    'personalization_genders_title' => 'Gender types',
    'personalization_genders_add' => 'Add new gender type',
    'personalization_genders_desc' => 'You can define as many genders as you need to. You need at least one gender type in your account.',
    'personalization_genders_modal_add' => 'Add gender type',
    'personalization_genders_modal_question' => 'How should this new gender be called?',
    'personalization_genders_modal_edit' => 'Update gender type',
    'personalization_genders_modal_edit_question' => 'How should this new gender be renamed?',
    'personalization_genders_modal_delete' => 'Delete gender type',
    'personalization_genders_modal_delete_desc' => 'Are you sure you want to delete {name}?',
    'personalization_genders_modal_delete_question' => 'You currently have {count} contact that has this gender. If you delete this gender, what gender should this contact have?|You currently have {count} contacts that have this gender. If you delete this gender, what gender should these contacts have?',
    'personalization_genders_modal_error' => 'Please choose a valid gender from the list.',

    'personalization_reminder_rule_save' => 'The change has been saved',
    'personalization_reminder_rule_title' => 'Reminder rules',
    'personalization_reminder_rule_line' => '{count} day before|{count} days before',
    'personalization_reminder_rule_desc' => 'For every reminder that you set, we can send you an email some days before the event happens. You can toggle those notifications here. Note that those notifications only apply to monthly and yearly reminders.',

    'personalization_module_save' => 'The change has been saved',
    'personalization_module_title' => 'Features',
    'personalization_module_desc' => 'Some people don’t need all the features. Below you can toggle specific features that are used on a contact sheet. This change will affect ALL your contacts. Note that if you turn off one of these features, data will not be lost - we will simply hide the feature.',

    'personalisation_paid_upgrade' => 'This is a premium feature that requires a Paid subscription to be active. Upgrade your account by visiting Settings > Subscription.',

    'reminder_time_to_send' => 'Time of the day reminders should be sent',
];
