<?php

/**
 * PHPMaker 2020 user level settings
 */

namespace PHPMaker2020\revenue;

// User level info
$USER_LEVELS = [
	["-2", "Anonymous"],
	["0", "Default"]
];

// User level priv info
$USER_LEVEL_PRIVS = [
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}charge_group", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}charge_group", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}charges", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}charges", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}client", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}client", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}client_type", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}client_type", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}property", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}property", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}property_revenu", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}property_revenu", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}property_use", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}property_use", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}users", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}users", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}userlevelpermissions", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}userlevels", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}audittrail", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}audittrail", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}billsPrint.php", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}billsPrint.php", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}client_login", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}client_login", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}system_settings", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}system_settings", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}update_requests", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}update_requests", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}reportview", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}reportview", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}Rates_Report", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}Rates_Report", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}client_query", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}client_query", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}bills.php", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}bills.php", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}billRecords.php", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}billRecords.php", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}allBills.php", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}allBills.php", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}backup.php", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}backup.php", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}backupFiles.php", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}backupFiles.php", "0", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}billing_period", "-2", "0"],
	["{F82056AB-CEC6-48BF-AA9B-76524AD406BC}billing_period", "0", "0"]
];

// User level table info
$USER_LEVEL_TABLES = [
	["charge_group", "charge_group", "Charge Group", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["charges", "charges", "Charges", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["client", "client", "Clients", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["client_type", "client_type", "Client Type", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["property", "property", "Property Valuation", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["property_revenu", "property_revenu", "Property Revenue", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["property_use", "property_use", "Property Us", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["users", "users", "Users", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["userlevelpermissions", "userlevelpermissions", "User Permissions", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["userlevels", "userlevels", "Access Levels", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["audittrail", "audittrail", "System Audit", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["billsPrint.php", "billsPrint", "Billls Printing Script", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["client_login", "client_login", "client login", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["system_settings", "system_settings", "System Settings", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["update_requests", "update_requests", "Client Change Requests", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["reportview", "reportview", "reportview", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["Rates_Report", "Rates_Report", "Revenue Report", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["client_query", "client_query", "Messages", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["bills.php", "bills", "Client Bills", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["billRecords.php", "billRecords", "Bill Archieves", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["allBills.php", "allBills", "Print All Bills", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["backup.php", "backup", "System Backup", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["backupFiles.php", "backupFiles", "System Backup Archieves", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"],
	["billing_period", "billing_period", "Billing Period", true, "{F82056AB-CEC6-48BF-AA9B-76524AD406BC}"]
];
