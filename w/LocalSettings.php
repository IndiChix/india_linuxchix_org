<?php

# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# If you customize your file layout, set $IP to the directory that contains
# the other MediaWiki files. It will be used as a base to locate files.
if( defined( 'MW_INSTALL_PATH' ) ) {
	$IP = MW_INSTALL_PATH;
} else {
	$IP = dirname( __FILE__ );
}

$path = array( $IP, "$IP/includes", "$IP/languages" );
set_include_path( implode( PATH_SEPARATOR, $path ) . PATH_SEPARATOR . get_include_path() );

require_once( "$IP/includes/DefaultSettings.php" );

# If PHP's memory limit is very low, some operations may fail.
# ini_set( 'memory_limit', '20M' );

if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
}
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename         = "LinuxChix - India";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "/w";
$wgScriptExtension  = ".php";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = false; # UPO

$wgEmergencyContact = "ketanpadegaonkar@gmail.com";
$wgPasswordSender = "ketanpadegaonkar@gmail.com";

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = "localhost";
$wgDBname           = "ketan_indichix";
$wgDBuser           = "ketan_indichix";
$wgDBpassword       = "69df8470";

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = true;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads       = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = false;

$wgLocalInterwiki   = $wgSitename;

$wgLanguageCode = "en";

$wgProxyKey = "c5550f8262a08257c4a55017a313ed56dfcc0a72cc064177f3b4f305ee803d4d";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook':
$wgDefaultSkin = 'monobook';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
# $wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used

$wgDiff3 = "/usr/bin/diff3";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
$wgCacheEpoch = max( $wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );



# Custom configuration for urls of the format http://foo/wiki/Page_Name
$wgScriptPath = '/w';         # Path to the actual files. This should already be there
$wgArticlePath = '/wiki/$1';  # Virtual path. This directory MUST be different from the one used in $wgScriptPath
$wgUsePathInfo = true;

$wgLogo = '/w/images/logo.png';

# Users need an account for everything
# See http://www.mediawiki.org/wiki/Help:User_rights

# Disable for everyone.
$wgGroupPermissions['*']['edit']              = false;
# Disable for users, too: by default 'user' is allowed to edit, even if '*' is not.
$wgGroupPermissions['user']['edit']           = false;
# Make it so users with confirmed e-mail addresses are in the group.
$wgAutopromote['emailconfirmed'] = APCOND_EMAILCONFIRMED;
# Hide group from user list. 
$wgImplicitGroups = array( 'emailconfirmed' );
# Finally, set it to true for the desired group.
$wgGroupPermissions['emailconfirmed']['edit'] = true;

# same for uploads
$wgGroupPermissions['emailconfirmed']['upload'] = false;

# Allow only these uploads
$wgFileExtensions = array('png', 'gif', 'jpg', 'jpeg', 'doc', 'xls', 'mpp', 'pdf', 'zip');

