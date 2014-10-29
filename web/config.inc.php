<?php

// $Id: config.inc.php 2799 2014-01-09 12:44:22Z cimorrison $

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file.
 *
 *   This file has already been populated with the minimum set of configuration
 *   variables that you will need to change to get your system up and running.
 *   If you want to change any of the other settings in systemdefaults.inc.php
 *   or areadefaults.inc.php, then copy the relevant lines into this file
 *   and edit them here.   This file will override the default settings and
 *   when you upgrade to a new version of MRBS the config file is preserved.
 **************************************************************************/

/**********
 * Timezone
 **********/
 
// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// Note that timezones can be set on a per-area basis, so strictly speaking this
// setting should be in areadefaults.inc.php, but as it is so important to set
// the right timezone it is included here.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.  See the INSTALL document for more information.
//
// A list of valid timezones can be found at http://php.net/manual/timezones.php
// The following line must be uncommented by removing the '//' at the beginning
$timezone = "America/Los_Angeles";


/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL,
// "mysqli"=MySQL via the mysqli PHP extension
$dbsys = "mysqli";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP. For mysql/mysqli "localhost"
// tells the system to use Unix Domain Sockets, and $db_port will be ignored;
// if you want to force TCP connection you can use "127.0.0.1".
$db_host = "localhost";
// If you need to use a non standard port for the database connection you
// can uncomment the following line and specify the port number
// $db_port = 1234;
// Database name:
$db_database = "mrbs";
// Schema name.  This only applies to PostgreSQL and is only necessary if you have more
// than one schema in your database and also you are using the same MRBS table names in
// multiple schemas.
//$db_schema = "public";
// Database login user name:
$db_login = "root";
// Database login password:
$db_password = '';
// Prefix for table names.  This will allow multiple installations where only
// one database is available
$db_tbl_prefix = "mrbs_";
// Uncomment this to NOT use PHP persistent (pooled) database connections:
// $db_nopersist = 1;


/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */

$vocab_override['en']['mrbs'] = "Gracepoint Riverside Reservation System";

// Used in style.inc
$vocab_override['en']["mrbs"]               = "Resource Management System";

// Used in functions.inc
$vocab_override['en']["report"]             = "Report";
$vocab_override['en']["admin"]              = "Admin";
$vocab_override['en']["help"]               = "Help";
$vocab_override['en']["search"]             = "Search";
$vocab_override['en']["not_php3"]           = "WARNING: This probably doesn't work with PHP3";
$vocab_override['en']["outstanding"]        = "pending bookings";

// Used in day.php
$vocab_override['en']["bookingsfor"]        = "Bookings for";
$vocab_override['en']["bookingsforpost"]    = ""; // Goes after the date
$vocab_override['en']["areas"]              = "Categories";
$vocab_override['en']["daybefore"]          = "Go To Day Before";
$vocab_override['en']["dayafter"]           = "Go To Day After";
$vocab_override['en']["gototoday"]          = "Go To Today";
$vocab_override['en']["goto"]               = "goto";
$vocab_override['en']["highlight_line"]     = "Highlight this line";
$vocab_override['en']["click_to_reserve"]   = "Click on the cell to make a reservation.";
$vocab_override['en']["timezone"]           = "Timezone";

// Used in trailer.inc
$vocab_override['en']["viewday"]            = "View Day";
$vocab_override['en']["viewweek"]           = "View Week";
$vocab_override['en']["viewmonth"]          = "View Month";
$vocab_override['en']["ppreview"]           = "Print Preview";

// Used in edit_entry.php
$vocab_override['en']["addentry"]           = "Add Entry";
$vocab_override['en']["editentry"]          = "Edit Entry";
$vocab_override['en']["copyentry"]          = "Copy Entry";
$vocab_override['en']["editseries"]         = "Edit Series";
$vocab_override['en']["copyseries"]         = "Copy Series";
$vocab_override['en']["namebooker"]         = "Brief description";
$vocab_override['en']["fulldescription"]    = "Full description:<br>&nbsp;&nbsp;(Number of people,<br>&nbsp;&nbsp;Internal/External etc.)";
$vocab_override['en']["date"]               = "Date";
$vocab_override['en']["start"]              = "Start";
$vocab_override['en']["end"]                = "End";
$vocab_override['en']["start_date"]         = "Start time";
$vocab_override['en']["end_date"]           = "End time";
$vocab_override['en']["time"]               = "Time";
$vocab_override['en']["period"]             = "Period";
$vocab_override['en']["duration"]           = "Duration";
$vocab_override['en']["second_lc"]          = "second";
$vocab_override['en']["seconds"]            = "seconds";
$vocab_override['en']["minute_lc"]          = "minute";
$vocab_override['en']["minutes"]            = "minutes";
$vocab_override['en']["hour_lc"]            = "hour";
$vocab_override['en']["hours"]              = "hours";
$vocab_override['en']["day_lc"]             = "day";
$vocab_override['en']["days"]               = "days";
$vocab_override['en']["week_lc"]            = "week";
$vocab_override['en']["weeks"]              = "weeks";
$vocab_override['en']["year_lc"]            = "year";
$vocab_override['en']["years"]              = "years";
$vocab_override['en']["period_lc"]          = "period";
$vocab_override['en']["periods"]            = "periods";
$vocab_override['en']["all_day"]            = "All day";
$vocab_override['en']["area"]               = "Category";
$vocab_override['en']["type"]               = "Type";
$vocab_override['en']["save"]               = "Save";
$vocab_override['en']["rep_type"]           = "Repeat type";
$vocab_override['en']["rep_type_0"]         = "None";
$vocab_override['en']["rep_type_1"]         = "Daily";
$vocab_override['en']["rep_type_2"]         = "Weekly";
$vocab_override['en']["rep_type_3"]         = "Monthly";
$vocab_override['en']["rep_type_4"]         = "Yearly";
$vocab_override['en']["ord_1"]              = "first";
$vocab_override['en']["ord_2"]              = "second";
$vocab_override['en']["ord_3"]              = "third";
$vocab_override['en']["ord_4"]              = "fourth";
$vocab_override['en']["ord_5"]              = "fifth";
$vocab_override['en']["ord_-1"]             = "last";
$vocab_override['en']["ord_-2"]             = "second last";
$vocab_override['en']["ord_-3"]             = "third last";
$vocab_override['en']["ord_-4"]             = "fourth last";
$vocab_override['en']["ord_-5"]             = "fifth last";
$vocab_override['en']["rep_end_date"]       = "Repeat end date";
$vocab_override['en']["rep_rep_day"]        = "Repeat day";
$vocab_override['en']["rep_freq"]           = "Frequency";
$vocab_override['en']["rep_num_weeks"]      = "Repeat every";
$vocab_override['en']["month_absolute"]     = "On day";
$vocab_override['en']["month_relative"]     = "On the";
$vocab_override['en']["skip_conflicts"]     = "Skip past conflicts";
$vocab_override['en']["ctrl_click"]         = "Use Control-Click to select more than one room";
$vocab_override['en']["entryid"]            = "Entry ID ";
$vocab_override['en']["repeat_id"]          = "Repeat ID "; 
$vocab_override['en']["you_have_not_entered"] = "You have not entered a";
$vocab_override['en']["brief_description"]  = "Brief description.";
$vocab_override['en']["useful_n-weekly_value"] = "useful repeat frequency.";
$vocab_override['en']["status"]             = "Status";
$vocab_override['en']["public"]             = "Public";
$vocab_override['en']["private"]            = "Private";
$vocab_override['en']["unavailable"]        = "Private";
$vocab_override['en']["is_mandatory_field"] = "is a mandatory field, please supply a value.";
$vocab_override['en']["missing_mandatory_field"] = "You have not supplied a value for the mandatory field";
$vocab_override['en']["confirmed"]          = "Confirmed";
$vocab_override['en']["start_after_end"]    = "Start day after end day";
$vocab_override['en']["start_after_end_long"] = "Error: the start day cannot be after the end day.";

// Used in view_entry.php
$vocab_override['en']["description"]         = "Description";
$vocab_override['en']["room"]                = "Resource";
$vocab_override['en']["createdby"]           = "Created by";
$vocab_override['en']["modifiedby"]          = "Modified by";
$vocab_override['en']["lastupdate"]          = "Last updated";
$vocab_override['en']["repeat_on"]           = "Repeat day";
$vocab_override['en']["deleteentry"]         = "Delete Entry";
$vocab_override['en']["deleteseries"]        = "Delete Series";
$vocab_override['en']["exportentry"]         = "Export Entry";
$vocab_override['en']["exportseries"]        = "Export Series";
$vocab_override['en']["confirmdel"]          = "Are you sure\\nyou want to\\ndelete this entry?\\n\\n";
$vocab_override['en']["returnprev"]          = "Return to previous page";
$vocab_override['en']["invalid_entry_id"]    = "Invalid entry id.";
$vocab_override['en']["invalid_series_id"]   = "Invalid series id.";
$vocab_override['en']["confirmation_status"] = "Confirmation status";
$vocab_override['en']["tentative"]           = "Tentative";
$vocab_override['en']["approval_status"]     = "Approval status";
$vocab_override['en']["approved"]            = "Approved";
$vocab_override['en']["awaiting_approval"]   = "Awaiting approval";
$vocab_override['en']["approve"]             = "Approve";
$vocab_override['en']["reject"]              = "Reject";
$vocab_override['en']["more_info"]           = "More Info";
$vocab_override['en']["remind_admin"]        = "Remind Admin";
$vocab_override['en']["series"]              = "Series";
$vocab_override['en']["request_more_info"]   = "Please list the extra information you require";
$vocab_override['en']["reject_reason"]       = "Please give a reason for your rejection of this reservation request";
$vocab_override['en']["send"]                = "Send";
$vocab_override['en']["approve_failed"]      = "The reservation could not be approved.";
$vocab_override['en']["no_request_yet"]      = "No request has been sent yet"; // Used for the title tooltip on More Info button
$vocab_override['en']["last_request"]        = "Last request sent at";         // Used for the title tooltip on More Info button
$vocab_override['en']["by"]                  = "by";                           // Used for the title tooltip on More Info button
$vocab_override['en']["sent_at"]             = "Sent at ";
$vocab_override['en']["yes"]                 = "Yes";
$vocab_override['en']["no"]                  = "No";

// Used in edit_entry_handler.php
$vocab_override['en']["error"]              = "Error";
$vocab_override['en']["sched_conflict"]     = "Scheduling Conflict";
$vocab_override['en']["conflict"]           = "The new booking will conflict with the following entries";
$vocab_override['en']["no_conflicts"]       = "No scheduling conflicts";
$vocab_override['en']["rules_broken"]       = "The new booking will conflict with the following policies";
$vocab_override['en']["no_rules_broken"]    = "No policy conflicts";
$vocab_override['en']["schedule"]           = "Schedule";
$vocab_override['en']["policy"]             = "Policy";
$vocab_override['en']["too_may_entrys"]     = "The selected options will create too many entries.<br>Please use different options!";
$vocab_override['en']["returncal"]          = "Return to calendar view";
$vocab_override['en']["failed_to_acquire"]  = "Failed to acquire exclusive database access";
$vocab_override['en']["invalid_booking"]    = "Invalid booking";
$vocab_override['en']["must_set_description"] = "You must set a brief description for the booking. Please go back and enter one.";
$vocab_override['en']["no_rooms_selected"]    = "You must select a resource.";
$vocab_override['en']["mail_subject_approved"]  = "Entry approved for $mrbs_company MRBS";
$vocab_override['en']["mail_subject_rejected"]  = "Entry rejected for $mrbs_company MRBS";
$vocab_override['en']["mail_subject_more_info"] = "$mrbs_company MRBS: more information requested";
$vocab_override['en']["mail_subject_reminder"]  = "Reminder for $mrbs_company MRBS";
$vocab_override['en']["mail_body_approved"]     = "An entry has been approved by the administrators; here are the details:";
$vocab_override['en']["mail_body_rej_entry"]    = "An entry has been rejected by the administrators, here are the details:";
$vocab_override['en']["mail_body_more_info"]    = "The administrators require more information about an entry; here are the details:";
$vocab_override['en']["mail_body_reminder"]     = "Reminder - an entry is awaiting approval; here are the details:";
$vocab_override['en']["mail_body_repeats_booked"]   = "The following dates were booked:";
$vocab_override['en']["mail_body_repeats_deleted"]  = "The following bookings were deleted:";
$vocab_override['en']["mail_body_exceptions"]       = "The following dates could not be booked due to conflicts:";
$vocab_override['en']["mail_subject_new_entry"]     = "Entry added for $mrbs_company MRBS";
$vocab_override['en']["mail_subject_changed_entry"] = "Entry changed for $mrbs_company MRBS";
$vocab_override['en']["mail_subject_delete"]        = "Entry deleted for $mrbs_company MRBS";
$vocab_override['en']["mail_body_new_entry"]     = "A new entry has been booked, here are the details:";
$vocab_override['en']["mail_body_changed_entry"] = "An entry has been modified, here are the details:";
$vocab_override['en']["mail_body_del_entry"]     = "An entry has been deleted, here are the details:";
$vocab_override['en']["new_value"]               = "New";
$vocab_override['en']["old_value"]               = "Old";
$vocab_override['en']["deleted_by"]              = "Deleted by";
$vocab_override['en']["reason"]                  = "Reason";
$vocab_override['en']["info_requested"]          = "Information requested";
$vocab_override['en']["min_time_before"]         = "The minimum interval between now and the start of a booking is";
$vocab_override['en']["max_time_before"]         = "The maximum interval between now and the end of a booking is";
$vocab_override['en']["earliest_booking_date"]   = "The earliest booking date is";
$vocab_override['en']["latest_booking_date"]     = "The latest booking date is";
$vocab_override['en']["max_booking_duration"]    = "The maximum duration of a booking is";
$vocab_override['en']["max_per_day_global"]      = "The maximum number of bookings per day per user across the whole system is";
$vocab_override['en']["max_per_week_global"]     = "The maximum number of bookings per week per user across the whole system is";
$vocab_override['en']["max_per_month_global"]    = "The maximum number of bookings per month per user across the whole system is";
$vocab_override['en']["max_per_year_global"]     = "The maximum number of bookings per year per user across the whole system is";
$vocab_override['en']["max_per_future_global"]   = "The maximum number of outstanding bookings per user across the whole system is";
$vocab_override['en']["max_per_day_area"]        = "The maximum number of bookings per day per user in this area is";
$vocab_override['en']["max_per_week_area"]       = "The maximum number of bookings per week per user in this area is";
$vocab_override['en']["max_per_month_area"]      = "The maximum number of bookings per month per user in this area is";
$vocab_override['en']["max_per_year_area"]       = "The maximum number of bookings per year per user in this area is";
$vocab_override['en']["max_per_future_area"]     = "The maximum number of outstanding bookings per user in this area is";
$vocab_override['en']["skip_and_book"]           = "Skip and book";
$vocab_override['en']["skip_and_book_note"]      = "Carry on with the booking, skipping past the conflicting entries";
$vocab_override['en']["changes_saved"]           = "Changes saved";

// Used in pending.php
$vocab_override['en']["pending"]            = "Bookings awaiting approval";
$vocab_override['en']["none_outstanding"]   = "You have no bookings awaiting approval.";

// Authentication stuff
$vocab_override['en']["accessdenied"]       = "Access Denied";
$vocab_override['en']["norights"]           = "You do not have the necessary rights to view this page.";
$vocab_override['en']["please_login"]       = "Please log in";
$vocab_override['en']["users.name"]         = "Name";
$vocab_override['en']["users.password"]     = "Password";
$vocab_override['en']["users.level"]        = "Rights";
$vocab_override['en']["unknown_user"]       = "Unknown user";
$vocab_override['en']["you_are"]            = "You are";
$vocab_override['en']["login"]              = "Log in";
$vocab_override['en']["logoff"]             = "Log Off";

// Database upgrade code
$vocab_override['en']["database_login"]           = "Database login";
$vocab_override['en']["upgrade_required"]         = "The database needs to be upgraded.  Please backup your database before proceeding.";
$vocab_override['en']["supply_userpass"]          = "Please supply a database username and password that has admin rights.";
$vocab_override['en']["contact_admin"]            = "If you are not the MRBS administrator please contact $mrbs_admin.";
$vocab_override['en']["upgrade_to_version"]       = "Upgrading to database version";
$vocab_override['en']["upgrade_to_local_version"] = "Upgrading to database local version";
$vocab_override['en']["upgrade_completed"]        = "Database upgrade completed.";

// User access levels
$vocab_override['en']["level_0"]            = "none";
$vocab_override['en']["level_1"]            = "user";
$vocab_override['en']["level_2"]            = "admin";
$vocab_override['en']["level_3"]            = "user admin";

// Authentication database
$vocab_override['en']["user_list"]          = "User list";
$vocab_override['en']["edit_user"]          = "Edit user";
$vocab_override['en']["delete_user"]        = "Delete this user";
//$vocab_override['en']["users.name"]         = Use the same as above, for consistency.
//$vocab_override['en']["users.password"]     = Use the same as above, for consistency.
$vocab_override['en']["users.email"]        = "Email address";
$vocab_override['en']["password_twice"]     = "If you wish to change the password, please type the new password twice";
$vocab_override['en']["passwords_not_eq"]   = "The passwords did not match!";
$vocab_override['en']["password_invalid"]   = "The password does not conform to the policy.  It must contain at least:";
$vocab_override['en']["policy_length"]      = "character(s)";
$vocab_override['en']["policy_alpha"]       = "letter(s)";
$vocab_override['en']["policy_lower"]       = "lower-case letter(s)";
$vocab_override['en']["policy_upper"]       = "upper-case letter(s)";
$vocab_override['en']["policy_numeric"]     = "numeric character(s)";
$vocab_override['en']["policy_special"]     = "special character(s)";
$vocab_override['en']["add_new_user"]       = "Add a new user";
$vocab_override['en']["action"]             = "Action";
$vocab_override['en']["user"]               = "User";
$vocab_override['en']["administrator"]      = "Administrator";
$vocab_override['en']["unknown"]            = "Unknown";
$vocab_override['en']["ok"]                 = "OK";
$vocab_override['en']["show_my_entries"]    = "Click to display all my upcoming entries";
$vocab_override['en']["no_users_initial"]   = "No users in database, allowing initial user creation";
$vocab_override['en']["no_users_create_first_admin"] = "Create a user configured as an administrator and then you can log in and create more users.";
$vocab_override['en']["warning_last_admin"] = "Warning!  This is the last admin and so you cannot delete this user or remove admin rights, otherwise you will be locked out of the system.";

// Used in search.php
$vocab_override['en']["invalid_search"]     = "Empty or invalid search string.";
$vocab_override['en']["search_results"]     = "Search Results for";
$vocab_override['en']["nothing_found"]      = "No matching entries found.";
$vocab_override['en']["records"]            = "Records ";
$vocab_override['en']["through"]            = " through ";
$vocab_override['en']["of"]                 = " of ";
$vocab_override['en']["previous"]           = "Previous";
$vocab_override['en']["next"]               = "Next";
$vocab_override['en']["entry"]              = "Entry";
$vocab_override['en']["advanced_search"]    = "Advanced search";
$vocab_override['en']["search_button"]      = "Search";
$vocab_override['en']["search_for"]         = "Search For";
$vocab_override['en']["from"]               = "From";

// Used in report.php
$vocab_override['en']["report_on"]             = "Report on Meetings";
$vocab_override['en']["report_start"]          = "Report start date";
$vocab_override['en']["report_end"]            = "Report end date";
$vocab_override['en']["match_area"]            = "Match area";
$vocab_override['en']["match_room"]            = "Match resource";
$vocab_override['en']["match_type"]            = "Match type";
$vocab_override['en']["ctrl_click_type"]       = "Use Control-Click to select more than one type";
$vocab_override['en']["match_entry"]           = "Match brief description";
$vocab_override['en']["match_descr"]           = "Match full description";
$vocab_override['en']["output"]                = "Output";
$vocab_override['en']["summary"]               = "Summary";
$vocab_override['en']["format"]                = "Format";
$vocab_override['en']["html"]                  = "HTML";
$vocab_override['en']["csv"]                   = "CSV";
$vocab_override['en']["ical"]                  = "iCalendar (.ics file) - excluding periods";
$vocab_override['en']["combination_not_supported"] = "This output is not supported in this format";
$vocab_override['en']["summarize_by"]          = "Summarize by";
$vocab_override['en']["sum_by_descrip"]        = "Brief description";
$vocab_override['en']["sum_by_creator"]        = "Creator";
$vocab_override['en']["sum_by_type"]           = "Type";
$vocab_override['en']["entry_found"]           = "entry found";
$vocab_override['en']["entries_found"]         = "entries found";
$vocab_override['en']["summary_header"]        = "Summary of (Entries) Hours";
$vocab_override['en']["summary_header_per"]    = "Summary of (Entries) Periods";
$vocab_override['en']["summary_header_both"]   = "Summary of (Entries) Hours/Periods";
$vocab_override['en']["entries"]               = "entries";
$vocab_override['en']["total"]                 = "Total";
$vocab_override['en']["submitquery"]           = "Run Report";
$vocab_override['en']["sort_rep"]              = "Sort report by";
$vocab_override['en']["sort_rep_time"]         = "Start date/time";
$vocab_override['en']["sort_room"]             = "Resource";
$vocab_override['en']["fulldescription_short"] = "Full Description";
$vocab_override['en']["both"]                  = "All";
$vocab_override['en']["privacy_status"]        = "Privacy status";
$vocab_override['en']["search_criteria"]       = "Search criteria";
$vocab_override['en']["presentation_options"]  = "Output options";
$vocab_override['en']["delete_entries"]        = "Delete entries";
$vocab_override['en']["delete_entries_warning"] = "WARNING!  This will delete all the entries matching " .
                                   "the search string.  The operation cannot be undone.  Are " .
                                   "you sure you want to continue?\n\n" .
                                   "Total number of entries that will be deleted: ";
$vocab_override['en']["delete_entries_failed"] = "The entries could not be deleted.";

// Used in week.php
$vocab_override['en']["weekbefore"]         = "Go To Week Before";
$vocab_override['en']["weekafter"]          = "Go To Week After";
$vocab_override['en']["gotothisweek"]       = "Go To This Week";

// Used in month.php
$vocab_override['en']["monthbefore"]        = "Go To Month Before";
$vocab_override['en']["monthafter"]         = "Go To Month After";
$vocab_override['en']["gotothismonth"]      = "Go To This Month";

// Used in {day week month}.php
$vocab_override['en']["no_rooms_for_area"]  = "No rooms defined for this area";

// Used in admin.php
$vocab_override['en']["edit"]               = "Edit";
$vocab_override['en']["delete"]             = "Delete";
$vocab_override['en']["rooms"]              = "Resources";
$vocab_override['en']["in"]                 = "in";
$vocab_override['en']["noareas"]            = "No areas have been defined.";
$vocab_override['en']["noareas_enabled"]    = "No areas have been enabled.";
$vocab_override['en']["addarea"]            = "Add Area";
$vocab_override['en']["name"]               = "Name";
$vocab_override['en']["noarea"]             = "No area selected";
$vocab_override['en']["browserlang"]        = "Your browser is set with the following language preference order";
$vocab_override['en']["addroom"]            = "Add Resource";
$vocab_override['en']["capacity"]           = "Capacity";
$vocab_override['en']["norooms"]            = "No resources have been defined.";
$vocab_override['en']["norooms_enabled"]    = "No resources have been enabled.";
$vocab_override['en']["administration"]     = "Room Details";
$vocab_override['en']["invalid_area_name"]  = "This area name has already been used!";
$vocab_override['en']["empty_name"]         = "You have not entered a name!";

// Used in edit_area_room.php
$vocab_override['en']["editarea"]                = "Edit Area";
$vocab_override['en']["change"]                  = "Change";
$vocab_override['en']["backadmin"]               = "Back to Rooms";
$vocab_override['en']["editroomarea"]            = "Edit Area or Room Description";
$vocab_override['en']["editroom"]                = "Edit Room";
$vocab_override['en']["viewroom"]                = "View Room";
$vocab_override['en']["update_room_failed"]      = "Room update failed: ";
$vocab_override['en']["error_room"]              = "Error: room ";
$vocab_override['en']["not_found"]               = " not found";
$vocab_override['en']["update_area_failed"]      = "Area update failed: ";
$vocab_override['en']["error_area"]              = "Error: area ";
$vocab_override['en']["room_admin_email"]        = "Room admin email";
$vocab_override['en']["area_admin_email"]        = "Area admin email";
$vocab_override['en']["area_first_slot_start"]   = "Start of first slot";
$vocab_override['en']["area_last_slot_start"]    = "Start of last slot";
$vocab_override['en']["area_res_mins"]           = "Resolution (minutes)";
$vocab_override['en']["area_def_duration_mins"]  = "Default duration (minutes)";
$vocab_override['en']["invalid_area"]            = "Invalid area!";
$vocab_override['en']["invalid_room_name"]       = "This resource name has already been used in the category!";
$vocab_override['en']["invalid_email"]           = "Invalid email address!";
$vocab_override['en']["invalid_resolution"]      = "Invalid combination of first slot, last slot and resolution!";
$vocab_override['en']["too_many_slots"]          = 'You need to increase the value of $max_slots in the config file!';
$vocab_override['en']["general_settings"]        = "General";
$vocab_override['en']["time_settings"]           = "Slot times";
$vocab_override['en']["confirmation_settings"]   = "Confirmation settings";
$vocab_override['en']["allow_confirmation"]      = "Allow tentative bookings";
$vocab_override['en']["default_settings_conf"]   = "Default setting";
$vocab_override['en']["default_confirmed"]       = "Confirmed";
$vocab_override['en']["default_tentative"]       = "Tentative";
$vocab_override['en']["approval_settings"]       = "Approval settings";
$vocab_override['en']["enable_approval"]         = "Require bookings to be approved";
$vocab_override['en']["enable_reminders"]        = "Allow users to remind admins";
$vocab_override['en']["private_settings"]        = "Privacy settings";
$vocab_override['en']["allow_private"]           = "Allow private bookings";
$vocab_override['en']["force_private"]           = "Force private bookings";
$vocab_override['en']["default_settings"]        = "Default/forced settings";
$vocab_override['en']["default_private"]         = "Private";
$vocab_override['en']["default_public"]          = "Public";
$vocab_override['en']["private_display"]         = "Privacy settings (display)";
$vocab_override['en']["private_display_label"]   = "How should private bookings be displayed?";
$vocab_override['en']["private_display_caution"] = "CAUTION: think carefully about the privacy implications before changing these settings!";
$vocab_override['en']["treat_respect"]           = "Respect the privacy setting of the booking";
$vocab_override['en']["treat_private"]           = "Treat all bookings as private, ignoring their privacy settings";
$vocab_override['en']["treat_public"]            = "Treat all bookings as public, ignoring their privacy settings";
$vocab_override['en']["sort_key"]                = "Sort key";
$vocab_override['en']["sort_key_note"]           = "This is the key used for ordering rooms";
$vocab_override['en']["booking_policies"]        = "Booking policies";
$vocab_override['en']["min_book_ahead"]          = "Advance booking - minimum";
$vocab_override['en']["max_book_ahead"]          = "Advance booking - maximum";
$vocab_override['en']["this_area"]               = "This area";
$vocab_override['en']["whole_system"]            = "Whole system";
$vocab_override['en']["whole_system_note"]       = "The values for the whole system are set in the config file";
$vocab_override['en']["max_per_day"]             = "Maximum number per day";
$vocab_override['en']["max_per_week"]            = "Maximum number per week";
$vocab_override['en']["max_per_month"]           = "Maximum number per month";
$vocab_override['en']["max_per_year"]            = "Maximum number per year";
$vocab_override['en']["max_per_future"]          = "Maximum number in the future";
$vocab_override['en']["custom_html"]             = "Custom HTML";
$vocab_override['en']["custom_html_note"]        = "This field can be used for displaying your own HTML, for example an embedded Google map";
$vocab_override['en']["email_list_note"]         = "Enter a list of email addresses separated by commas or newlines";
$vocab_override['en']["mode"]                    = "Mode";
$vocab_override['en']["mode_periods"]            = "Periods";
$vocab_override['en']["mode_times"]              = "Times";
$vocab_override['en']["times_only"]              = "Times mode only";
$vocab_override['en']["enabled"]                 = "Enabled";
$vocab_override['en']["disabled"]                = "Disabled";
$vocab_override['en']["disabled_area_note"]      = "If this area is disabled, it will not appear in the calendar views " .
                                    "and it will not be possible to book rooms in it.   However existing bookings " .
                                    "will be preserved and will be visible in Search and Report results.";
$vocab_override['en']["disabled_room_note"]      = "If this room is disabled, it will not appear in the calendar views " .
                                    "and it will not be possible to book it.   However existing bookings " .
                                    "will be preserved and will be visible in Search and Report results.";
$vocab_override['en']["book_ahead_note_periods"] = "When using periods, book ahead times are rounded down to the nearest whole day.";

// Used in edit_users.php
$vocab_override['en']["name_empty"]         = "You must enter a name.";
$vocab_override['en']["name_not_unique"]    = "already exists.   Please choose another name.";

// Used in del.php
$vocab_override['en']["deletefollowing"]    = "This will delete the following bookings";
$vocab_override['en']["sure"]               = "Are you sure?";
$vocab_override['en']["YES"]                = "YES";
$vocab_override['en']["NO"]                 = "NO";
$vocab_override['en']["delarea"]            = "You must delete all rooms in this area before you can delete it<p>";

// Used in help.php
$vocab_override['en']["about_mrbs"]         = "About MRBS";
$vocab_override['en']["database"]           = "Database";
$vocab_override['en']["system"]             = "System";
$vocab_override['en']["servertime"]         = "Server time";
$vocab_override['en']["please_contact"]     = "Please contact ";
$vocab_override['en']["for_any_questions"]  = "for any questions that aren't answered here.";

// Used in import.php
$vocab_override['en']["import_icalendar"]            = "Import an iCalendar file";
$vocab_override['en']["area_room_settings"]          = "Categories and resources";
$vocab_override['en']["other_settings"]              = "Other settings";
$vocab_override['en']["import_intro"]                = "This form allows you to import an RFC 5545 compliant " .
                                        "iCalendar file into MRBS.   Only those repeating events " .
                                        "that have a recurrence rule with an equivalent repeat type in " .
                                        "MRBS will be imported.";
$vocab_override['en']["file_name"]                   = "File";
$vocab_override['en']["import"]                      = "Import";
$vocab_override['en']["upload_failed"]               = "Upload failed";
$vocab_override['en']["max_allowed_file_size"]       = "The maximum allowed file size is";
$vocab_override['en']["no_file"]                     = "No file was uploaded";
$vocab_override['en']["badly_formed_ics"]            = "Badly formed VCALENDAR file";
$vocab_override['en']["area_room_order"]             = "Order";
$vocab_override['en']["area_room_order_note"]        = "The order of the area and room names in the LOCATION property";
$vocab_override['en']["area_room"]                   = "Area-Room";
$vocab_override['en']["room_area"]                   = "Room-Area";
$vocab_override['en']["area_room_delimiter"]         = "Delimiter";
$vocab_override['en']["area_room_delimiter_note"]    = "The string separating the area and room names in the LOCATION property.  " .
                                        "If no delimiter is found MRBS will look for a unique room with the same " .
                                        "name as the LOCATION";
$vocab_override['en']["area_room_create"]            = "Create rooms if necessary";
$vocab_override['en']["default_type"]                = "Default type";
$vocab_override['en']["room_does_not_exist_no_area"] = "room does not exist and cannot be added - no area given";
$vocab_override['en']["room_not_unique_no_area"]     = "room name is not unique.  Cannot choose which one without an area.";
$vocab_override['en']["area_does_not_exist"]         = "Non-existent area:";
$vocab_override['en']["room_does_not_exist"]         = "Non-existent room:";
$vocab_override['en']["creating_new_area"]           = "Creating new area:";
$vocab_override['en']["creating_new_room"]           = "Creating new room:";
$vocab_override['en']["could_not_create_area"]       = "Could not create area";
$vocab_override['en']["could_not_create_room"]       = "Could not create room";
$vocab_override['en']["could_not_find_room"]         = "Could not find room";
$vocab_override['en']["could_not_import"]            = "Could not import";
$vocab_override['en']["no_LOCATION"]                 = "The VEVENT did not include a LOCATION property";
$vocab_override['en']["invalid_RRULE"]               = "Invalid RRULE: missing FREQ part";
$vocab_override['en']["more_than_one_BYDAY"]         = "MRBS does not support more than one BYDAY value when FREQ=";
$vocab_override['en']["BYDAY_equals_5"]              = "MRBS does not support a BYDAY value of 5";
$vocab_override['en']["unsupported_FREQ"]            = "MRBS does not support FREQ=";
$vocab_override['en']["unsupported_INTERVAL"]        = "MRBS does not support INTERVAL>1 with FREQ=";
$vocab_override['en']["unsupported_COUNT"]           = "COUNT not yet supported by MRBS";
$vocab_override['en']["no_indefinite_repeats"]       = "Indefinite repeats not yet supported by MRBS";
$vocab_override['en']["events_imported"]             = "events imported";
$vocab_override['en']["events_not_imported"]         = "events not imported";

// Used in mysql.inc AND pgsql.inc
$vocab_override['en']["failed_connect_db"]  = "Fatal error: failed to connect to database";

// Used in DataTables
$vocab_override['en']["show_hide_columns"]  = "Show / hide columns";
$vocab_override['en']["restore_original"]   = "Restore original";

// Entry types
$vocab_override['en']["type.I"]            = "Internal";
$vocab_override['en']["type.E"]            = "External";
 
// General
$vocab_override['en']["fatal_db_error"]     = "Fatal error: unfortunately the database is not available at the moment.";
$vocab_override['en']["back"]               = "Back";

