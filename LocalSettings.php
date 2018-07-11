<?php
# This file was automatically generated by the MediaWiki 1.28.2
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgShowExceptionDetails = true;

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Shardsmith Forge";
$wgMetaNamespace = "Forge";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://www.zenakrua.com";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/wiki.png";

## Fix local image embedding in MediaWiki 1.20.2+
$wgUrlProtocols[] = "file://";

## UPO means: this is also a user preference option

$wgEnableEmail = false;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "";
$wgPasswordSender = "";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "zendb.cn5kmpwmbexo.us-east-1.rds.amazonaws.com:3306";
$wgDBname = "wiki";
$wgDBuser = "wiki";
$wgDBpassword = "wxVQwxFqddzFrWbf";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=utf8";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

$wgSecretKey = "1813b6e69ca135fe1d0bd2fcf73c84dd3d60e1f5569a3247cfe580f07bde4051";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "c7f3e862712c5fe3";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "C:\Program Files (x86)\GnuWin\bin";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['read'] = false;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'CologneBlue' );
wfLoadSkin( 'Modern' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Vector' );
wfLoadSkin( 'Etria' );


# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtensions('ExtensionName');
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'LocalisationUpdate' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'SimpleBatchUpload' );

# End of automatically generated settings.
# Add more configuration options below.

$wgAllowExternalImages = true;
$wgAllowExternalImagesFrom = array( 'http://img2.finalfantasyxiv.com', 'http://img.finalfantasyxiv.com/' );

require_once "$IP/extensions/Tabber/Tabber.php";

require_once "$IP/extensions/ExternalData/ExternalData.php";

$edgDBServer['pokedex-db'] = "127.0.0.1";
$edgDBServerType['pokedex-db'] = "mysql"; 
$edgDBName['pokedex-db'] = "pokedex";
$edgDBUser['pokedex-db'] = "pkmn";
$edgDBPass['pokedex-db'] = "Mg7W0sJYZ7BokFge";

require_once "$IP/extensions/Scribunto/Scribunto.php";
$wgScribuntoDefaultEngine = 'luastandalone';
wfLoadExtension( 'TemplateData' );

/*
	Modified to work with 1.25.
	Antony D'Andrea - contactme at antonydandrea dot com

        This also has a couple of bug fixes on the code, but the config below
        along with the bug fixes definitely works in MediaWiki 1.25.
*/

// s3 filesystem repo
$wgUploadDirectory = 'images';
$wgUploadS3Bucket = 'zenakrua';
$wgUploadS3SSL = false; // true if SSL should be used
$wgPublicS3 = false; // true if public, false if authentication should be used

$wgS3BaseUrl = "http".($wgUploadS3SSL?"s":"")."://s3.amazonaws.com/$wgUploadS3Bucket";

//viewing needs a different url from uploading. Uploading doesnt work on the below url and viewing doesnt work on the above one.
$wgS3BaseUrlView = "http".($wgUploadS3SSL?"s":"")."://".$wgUploadS3Bucket.".s3.amazonaws.com";
$wgUploadBaseUrl = "$wgS3BaseUrlView/$wgUploadDirectory";

// leave $wgCloudFrontUrl blank to not render images from CloudFront
$wgCloudFrontUrl = "http".($wgUploadS3SSL?"s":"").'://d14ip4zpeqbziu.cloudfront.net/';//"http".($wgUploadS3SSL?"s":"").'://YOUR_CLOUDFRONT_SUBDOMAIN.cloudfront.net/';
$wgLocalFileRepo = array(
        'class' => 'LocalS3Repo',
        'name' => 's3',
        'directory' => $wgUploadDirectory,
        'url' => $wgUploadBaseUrl ? $wgUploadBaseUrl . $wgUploadPath : $wgUploadPath,
        'urlbase' => $wgS3BaseUrl ? $wgS3BaseUrl : "",
        'hashLevels' => $wgHashedUploadDirectory ? 2 : 0,
        'thumbScriptUrl' => $wgThumbnailScriptPath,
        'transformVia404' => !$wgGenerateThumbnailOnParse,
        'initialCapital' => $wgCapitalLinks,
        'deletedDir' => $wgUploadDirectory.'/deleted',
        'deletedHashLevels' => $wgDeletedDirectory['deleted']['hash'],
        'AWS_ACCESS_KEY' => 'AKIAJPN37LPAMNSPNTPA',
        'AWS_SECRET_KEY' => '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',
        'AWS_S3_BUCKET' => $wgUploadS3Bucket,
        'AWS_S3_PUBLIC' => $wgPublicS3,
        'AWS_S3_SSL' => $wgUploadS3SSL,
        'cloudFrontUrl' => $wgCloudFrontUrl,
);
require_once("$IP/extensions/LocalS3Repo/LocalS3Repo.php");