<?php
	$sso_settings = array (
  '' => 
  array (
    'timezone' => 'America/Toronto',
    'clock_drift' => 300,
    'iprestrict' => 
    array (
      'patterns' => '*:*:*:*:*:*:*:*',
      'dnsrbl_lists' => '# dnsbl.tornevall.org offers HTTP blacklisting via StopForumSpam.com\'s database.
# To add a spammer to this list, visit:  http://www.stopforumspam.com/add.php
# For more information, visit:  http://www.stopforumspam.com/usage
# Be sure to donate:  http://www.stopforumspam.com/donate
https://dnsbl.tornevall.org/|dnsbl.tornevall.org|127.0.0.&64

# HTTP:bl is a Honeypot Project DNSRBL.  Registration is required to use the service.
# For more information, visit:  http://www.projecthoneypot.org/httpbl.php
# Be sure to donate:  http://www.projecthoneypot.org/donate.php
#http://www.projecthoneypot.org/list_of_ips.php|[YourPassword].@IP@.dnsbl.httpbl.org|127.<60.>9.>0

# dnsbl.sorbs.net offers a limited HTTP DNSRBL that doesn\'t catch many spammers.
# For more information, visit:  http://dnsbl.sorbs.net/
http://dnsbl.sorbs.net/|dnsbl.sorbs.net|127.0.0.2|127.0.0.7',
      'dnsrbl_mincount' => 1,
      'geoip_lists' => '',
      'geoip_map_continent_code' => '',
      'geoip_map_continent_name' => '',
      'geoip_map_country_code' => '',
      'geoip_map_country_name' => '',
      'geoip_map_city' => '',
      'geoip_map_region' => '',
      'geoip_map_region_code' => '',
      'geoip_map_postal_code' => '',
      'geoip_map_latitude' => '',
      'geoip_map_longitude' => '',
      'geoip_map_metro_code' => '',
      'geoip_map_time_zone' => '',
      'ip_cache_len' => 14,
    ),
    'no_providers_msg' => 'This is Mark',
    'expose_namespaces' => 0,
    'hide_index' => 0,
    'first_activated_map' => '',
    'created_map' => '',
    'order' => 
    array (
    ),
    'dbversion' => 3,
    'namespacekey' => '3e43eb954946ef528f1dd841569552ccfdbe504db1431e078f874569561a694c7ab4c68fa3536022e5dde3a2f18016ac7133901c8dc9f5e4',
    'namespaceiv' => '6c758c43de547882',
    'namespacekey2' => '75eeee20099afac0c7e04c02511fe3ee76997dad0734121f901274390826175da6b0ccdd7564b62ffd17dbe55dd26c47b1e2d25a29b2a1b4',
    'namespaceiv2' => 'a5514129390fa7cd',
    'namespacekey3' => 'f528d062b9c616e7d56dbc4730aa503bb8ea63dc3d4692e5805766ab4c82eccafcde76ed8e7243e4ff509303f6600f9ccc5aac30daf99dd4',
    'namespaceiv3' => '664987fceeca9eab',
    'namespacekey4' => '22ce8e7e26c87694d0c2d965d8d82ec8296b558e1d86ba066e138d6f79b5abd161f0b6097b0c8d07eaada8eee1707f4a2881490b33224cb8',
    'namespaceiv4' => 'a6a8f52c9c7e8545',
    'search_order' => 
    array (
      'id' => false,
      'provider_name' => false,
      'provider_id' => false,
      'version' => false,
      'lastipaddr' => false,
      'lastactivated' => true,
      'tag_id' => false,
    ),
  ),
  'sso_facebook' => 
  array (
    'app_id' => '',
    'app_secret' => '',
    'enabled' => false,
    'username_blacklist' => '',
    'email_bad_domains' => '',
    'iprestrict' => 
    array (
      'patterns' => '*:*:*:*:*:*:*:*',
      'allchecks' => true,
      'sfs_ip_mincount' => 0,
      'sfs_ip_maxage' => 0,
      'dnsrbl_lists' => '',
      'dnsrbl_mincount' => 1,
      'geoip_lists' => '',
    ),
    'map_email' => '',
    'map_username' => '',
    'map_age_range' => '',
    'map_name' => '',
    'map_first_name' => '',
    'map_middle_name' => '',
    'map_last_name' => '',
    'map_gender' => '',
    'map_link' => '',
    'map_locale' => '',
    'map_timezone' => '',
    'map_verified' => '',
    'map_third_party_id' => '',
    'map_about' => '',
    'map_bio' => '',
    'map_birthday' => '',
    'map_birthday_year' => '',
    'map_birthday_month' => '',
    'map_birthday_day' => '',
    'map_education' => '',
    'map_hometown' => '',
    'map_is_verified' => '',
    'map_location' => '',
    'map_name_format' => '',
    'map_political' => '',
    'map_quotes' => '',
    'map_relationship_status' => '',
    'map_religion' => '',
    'map_significant_other' => '',
    'map_website' => '',
    'map_work' => '',
  ),
  'sso_google' => 
  array (
    'client_id' => '',
    'client_secret' => '',
    'enabled' => false,
    'email_bad_domains' => '',
    'iprestrict' => 
    array (
      'patterns' => '*:*:*:*:*:*:*:*',
      'allchecks' => true,
      'sfs_ip_mincount' => 0,
      'sfs_ip_maxage' => 0,
      'dnsrbl_lists' => '',
      'dnsrbl_mincount' => 1,
      'geoip_lists' => '',
    ),
    'map_name' => '',
    'map_given_name' => '',
    'map_family_name' => '',
    'map_gender' => '',
    'map_picture' => '',
    'map_locale' => '',
    'map_timezone' => '',
    'map_email' => '',
  ),
  'sso_ldap' => 
  array (
    'server' => '',
    'dn' => '',
    'enabled' => false,
    'map_username' => '',
    'remove_domain' => true,
    'map_custom' => '',
    'password' => true,
    'debug' => false,
    'iprestrict' => 
    array (
      'patterns' => '*:*:*:*:*:*:*:*',
      'allchecks' => true,
      'sfs_ip_mincount' => 0,
      'sfs_ip_maxage' => 0,
      'dnsrbl_lists' => '',
      'dnsrbl_mincount' => 1,
      'geoip_lists' => '',
    ),
  ),
  'sso_linkedin' => 
  array (
    'client_id' => '',
    'client_secret' => '',
    'enabled' => false,
    'email_bad_domains' => '',
    'iprestrict' => 
    array (
      'patterns' => '*:*:*:*:*:*:*:*',
      'allchecks' => true,
      'sfs_ip_mincount' => 0,
      'sfs_ip_maxage' => 0,
      'dnsrbl_lists' => '',
      'dnsrbl_mincount' => 1,
      'geoip_lists' => '',
    ),
    'map_firstName' => '',
    'map_lastName' => '',
    'map_maidenName' => '',
    'map_formattedName' => '',
    'map_phoneticFirstName' => '',
    'map_phoneticLastName' => '',
    'map_formattedPhoneticName' => '',
    'map_headline' => '',
    'map_location_name' => '',
    'map_location_country_code' => '',
    'map_industry' => '',
    'map_currentShare' => '',
    'map_currentStatus' => '',
    'map_numConnections' => '',
    'map_summary' => '',
    'map_specialties' => '',
    'map_pictureUrl' => '',
    'map_siteStandardProfileRequest_url' => '',
    'map_emailAddress' => '',
  ),
  'sso_login' => 
  array (
    'installed' => true,
    'enabled' => true,
    'install_type' => 'email_username',
    'open_reg' => true,
    'change_username' => false,
    'change_email' => true,
    'require_two_factor' => false,
    'two_factor_order' => 25,
    'username_minlen' => 4,
    'username_blacklist' => '',
    'email_verify_from' => '',
    'email_verify_subject' => 'verify your account',
    'email_verify_msg' => '<html>
<body>
@USERNAME@,<br />
<br />
In order to verify your new WebsiteName account, please use the link below:<br />
<br />
@VERIFY@<br />
<br />
If clicking the link doesn\'t work, try copying it and then pasting it into your web browser\'s address bar.<br />
<br />
If you did not sign up for a WebsiteName account, please ignore this e-mail.<br />
<br />
Your anti-phishing phrase is:<br />
<br />
@ANTIPHISH@
</body>
</html>',
    'email_verify_msg_text' => '@USERNAME@,

In order to verify your new WebsiteName account, please use the link below:

@VERIFY@

If clicking the link doesn\'t work, try copying it and then pasting it into your web browser\'s address bar.

If you did not sign up for a WebsiteName account, please ignore this e-mail.

Your anti-phishing phrase is:

@ANTIPHISH@',
    'email_recover_from' => '',
    'email_recover_subject' => 'Recovey your account',
    'email_recover_msg' => '<html>
<body>
@USERNAME@,<br />
<br />
In order to recover your WebsiteName account, use the link below:<br />
<br />
@VERIFY@<br />
<br />
If clicking the link doesn\'t work, try copying it and then pasting it into your web browser\'s address bar.<br />
<br />
If you did not request recovery for a WebsiteName account, please ignore this e-mail.<br />
<br />
Your anti-phishing phrase is:<br />
<br />
@ANTIPHISH@
</body>
</html>',
    'email_recover_msg_text' => '@USERNAME@,

In order to recover your WebsiteName account, use the link below:

@VERIFY@

If clicking the link doesn\'t work, try copying it and then pasting it into your web browser\'s address bar.

If you did not request recovery for a WebsiteName account, please ignore this e-mail.

Your anti-phishing phrase is:

@ANTIPHISH@',
    'email_session' => 'verify',
    'email_bad_domains' => '',
    'password_minlen' => 8,
    'password_mode' => 'password_hash_bcrypt',
    'password_mintime' => 250,
    'password_minrounds' => 4096,
    'modules' => 
    array (
      'sso_antiphish' => 
      array (
        '_a' => false,
      ),
      'sso_google_authenticator' => 
      array (
        '_a' => false,
      ),
      'sso_password' => 
      array (
        '_a' => false,
      ),
      'sso_ratelimit' => 
      array (
        '_a' => true,
      ),
      'sso_recaptcha' => 
      array (
        '_a' => false,
      ),
      'sso_remember_me' => 
      array (
        '_a' => false,
      ),
      'sso_sms_recovery' => 
      array (
        '_a' => false,
      ),
      'sso_tos' => 
      array (
        '_a' => true,
      ),
      'sso_email_two_factor' => 
      array (
        '_a' => false,
      ),
    ),
    'map_username' => 'username',
    'map_email' => 'email',
    'iprestrict' => 
    array (
      'patterns' => '*:*:*:*:*:*:*:*',
      'allchecks' => true,
      'dnsrbl_lists' => '',
      'dnsrbl_mincount' => 1,
      'geoip_lists' => '',
    ),
  ),
  'sso_remote' => 
  array (
    'installed' => false,
    'enabled' => false,
    'map_remote_id' => '',
    'iprestrict' => 
    array (
      'patterns' => '*:*:*:*:*:*:*:*',
      'allchecks' => true,
      'sfs_ip_mincount' => 0,
      'sfs_ip_maxage' => 0,
      'dnsrbl_lists' => '',
      'dnsrbl_mincount' => 1,
      'geoip_lists' => '',
    ),
  ),
);
?>