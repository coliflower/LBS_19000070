###[DEF]###

[name		= Home-Connect-SSE, 19000070.0.4.01 BETA]

[e#1	trigger		= Trigger (sKO-2)				]	b stops SSE, 1 starts SEE, 9 creates link for authorization and resets, deletes some files/data
[e#2	important	= Client Api-Key				]
[e#3	important	= Client Secret					]
[e#4				= UserLogLevel		#init=8		]

[v#1	remanent = code								]	code
[v#2	remanent = access							]	access token
[v#3	remanent = refresh							]	refresh token
[v#4			 = 0								]	getAppliances()
[v#5			 = 0								]	stream_context_create() 
[v#6			 = 0								]	$client new ...
[v#7	remanent = 0								]	client_id
[v#8	remanent = 0								]	client_secret
[v#9	remanent = 0								]	stat
[v#10	remanent = DEVELOPER						]	scope
[v#11	remanent = 0								]	LogOption
[v#12	remanent = 8								]	LogLevel
[v#13			 = 									]	trigger
[v#14	remanent = /visu/hc/hc_code.php				]	self
[v#15	remanent = 0								]	lastToken

[v#100	remanent = V.0.4.01 BETA					]	LBS-version
[v#101	remanent = 19000070							]	LBS-number
[v#102	remanent = Home-Connect						]	LBS-name
[v#103	remanent = SSE								]	LBS-name-suffix
[v#104	= 0											]	
[v#105	remanent = Home-Connect | SSE | 			]	$remark: additional information in logfile
[v#106	remanent = 2.02								]	EDOMI-version
[v#107	remanent = V.0.4.01 BETA					]	class-version

[v#300	= 0			 								]	STOP (discontinue) while-loop (daemon) by user manually (with delay due to SSE)

[a#1	= SSE EVENTS		]
[a#2	= STOP				]
[a#3	= URL				]	
[a#4	= $ha				]	
[a#5	= ERROR				]	
[a#6	= Hob ID			]	
[a#7	= Hood ID			]	
[a#8	= Oven ID			]	
[a#9	= Dryer ID			]	
[a#10	= Washer ID			]	
[a#11	= WineCooler ID		]	
[a#12	= Dishwasher ID		]	
[a#13	= WasherDryer ID	]	
[a#14	= CoffeeMaker ID	]	
[a#15	= Refrigerator ID	]	
[a#16	= FridgeFreezer ID	]	
[a#17	= CleaningRobot ID	]	
[a#18	= CookProcessor ID	]	

###[/DEF]###


###[HELP]###

<h3 style="color:red;">DISCLAIMER</h3>
<p style="color:blue;">Copyright © 2026-10-25 300</p>
Der Baustein wurde nach bestem Wissen und Gewissen erstellt und wird so wie er ist als Muster für eigene LBS zur Verfügung gestellt. 
Der Autor/Uploader übernimmt keinerlei Haftung für eventuell mit der Nutzung oder dem Einsatz direkt oder indirekt entstandene Schäden. 

Die Logikbausteine (Software, Dokumentation) für EDOMI wird so zur Verfügung gestellt, wie sie sind - ohne Garantien irgendwelcher Art,
weder ausdrücklich noch sinngemäß, einschließlich der Gewährleistung für die Marktgängigkeit oder Eignung für einen bestimmten Zweck. 
Durch das Herunterladen und die Nutzung der Software übernehmen sie das vollständige Risiko des Gebrauchs der Software. 
Unter keinen Umständen ist eine Person, ein Unternehmen oder eine Organisation, die an der Entwicklung, dem Verkauf oder 
dem Vertrieb dieser Software beteiligt ist, für irgendwelche Schäden haftbar, die aus dem Gebrauch, dem Missbrauch oder 
dem Unvermögen, die Software anzuwenden, entstehen (einschließlich und ohne Einschränkung Schadenersatz für entgangenen 
Gewinn, Geschäftsunterbrechung, Informationsverlust oder jeden anderen Verlust). 

Die Urheberrechte an der Software liegen bei den jeweiligen Autoren. Für die Nutzung des LBS sind weitere Softwareklassen notwendig. 
Bitte beachten Sie die dafür gültigen Lizenzbedingungen und die eventuell in der Software LBS enthaltene Hinweise zu den 
eingeräumten Nutzungsrechten. 
Dieser Logikbaustein und deren Teile sind nicht für eine gewerbliche Nutzung freigegeben.
Dieser Logikbaustein und deren Teile dürfen nicht in anderen LBSen verwendet werden, wenn diese im knx-user-forum.de hochgeladen werden.
Dieser Logikbaustein darf bis zu einer anderslautenden Entscheidung durch den Uploader, <span style="color:red;">ausschließlich</span> über den Downloadbereich des knx-user-forum.de verteilt werden.
Das geistige Eigentum an diesem Werk darf nicht verletzt werden und liegen beim Ersteller.



<h3 style="color:red;">Revisions</h3>
<ul><li>V.0.4.01, beta, 20261025:
In Forum ab <a href="https://knx-user-forum.de/forum/projektforen/edomi/???????????????" target="_blank"> HIER </a>
</li></ul>




<h3 style="color:red;">Revisions</h3>
<ul><li>V.0.4.00, beta, 20200901:
In Forum ab <a href="https://knx-user-forum.de/forum/projektforen/edomi/???????????????" target="_blank"> HIER </a>
NEW, hc_code.php deleted and replaced by SYMLINK.
NEW, trigger = 5 deleted and included in trigger = 9.
NEW, redirect_uri removed as not necessary in LBS anymore (HC will use the FIRST one, entered in developer-portal).
NEW, additional events PAIRED and DEPAIRED.
...
NEW, automatic trigger 1 ... trigger 9 if empty, iKO2 ...  .
...
REMARK, trigger 9 to use in case of 1st LBS start or to reset ...
...
Some error-handling adapted ($line = '';)
Some logging adapted
NEW, each home-appliance has his own output in 70er LBS.
</li></ul>
<ul><li>V.0.3.05, beta, 20200407:
In Forum ab <a href="https://knx-user-forum.de/forum/projektforen/edomi/1280283-home-connect-2nd?p=1490475#post1490475" target="_blank"> HIER </a>
Some bug ...
</li></ul>
<ul><li>V.0.3.04, beta, 20200405:
In Forum ab <a href="https://knx-user-forum.de/forum/projektforen/edomi/1280283-home-connect-2nd?p=1489507#post1489507" target="_blank"> HIER </a>
WICHTIG, new Redirect-URI need to be insert/adapted in DEVELOPER-portal to ... http://{Edomi-IP}/visu/hc/hc_code.php --> very important
WICHTIG, Update der KLASSE somit auch notwendig - im Download-Anhang.
Some bugs ...
</li></ul>
<ul><li>V.0.3.03, beta, 20200401:
In Forum ab <a href="https://knx-user-forum.de/forum/projektforen/edomi/1280283-home-connect-2nd?p=1487829#post1487829" target="_blank"> HIER </a>
New, SCOPE nicht mehr notwendig - somit wird ein Maximum freigegeben, entfernt im Authorize-URL
New, Update der KLASSE somit auch notwendig - im Download-Anhang (WICHTIG).
</li></ul>
</li></ul>
<ul><li>V.0.3.02, beta, 20181216:
In Forum ab <a href="https://knx-user-forum.de/forum/projektforen/edomi/1280283-home-connect-2nd?p=1300925#post1300925" target="_blank"> HIER </a>
Additional events CONNECTED and DISCONNECTED in case of appliance is e.g. plugged on/off
</li></ul>
<ul><li>V.0.3.01, beta, 20181212:
In Forum ab <a href="https://knx-user-forum.de/forum/projektforen/edomi/1280283-home-connect-2nd?p=1300030#post1300030" target="_blank"> HIER </a>
Some small corrections in HELP-file ...
Additional trigger = 5 for "Reset" - be carefull and see description in chapter INPUTS below !!!
Some update in the CLASS-file because of option "client_secret" (ZIP-file)
</li></ul>
<ul><li>V.0.3.00, beta, 20181202:
In Forum ab <a href="https://knx-user-forum.de/forum/projektforen/edomi/1280283-home-connect-2nd?p=1295871#post1295871" target="_blank"> HIER </a>
New, HC allows one SSE (EVENT-Server) for all appliances, now
New, Some changes in CLASS-container (ZIP)
New, redirect_uri changed from individual one to http://{edomi-IP}/visu/hc_code.php (please adapt your App in developer-portal first!)
New, hc.php changed to hc_code.php - no need to store the file manually anymore. This will be done by this LBS, automatically
New, OAuth2 CODE will be stored via hc_code.php in hc_code.json, automatically afterwards to a remanent-variable ... 
New, edomi-version from hard-coded to custom-value (to test compatibility of new edomi-version)
New, LBS-inputs, reduced from 15 to 5 and re-arranged ... see description and take attention
New, LBS-outputs, reduced to 3 and re-arranged ... see description and take attention
</li></ul>
<ul><li>V.0.2.01, beta, 20181028:
Bug in Array ([0] -> [$i]) ...</li></ul>
<ul><li>V.0.2.00, beta, 20181022:
Integration of access-data into SSE (no need of extra OAuth2-LBS, CLASS via autoload.php, integration of Client-secret, reduction of complexity) ...
In Forum ab <a href="https://knx-user-forum.de/forum/projektforen/edomi/1280283-home-connect-2nd" target="_blank"> HIER </a>
</li></ul>
<ul><li>V.0.1.01, beta, 20180128:
Missing index in error-log ...</li></ul>
<ul><li>V.0.1.00, beta, 20180127:
First release ...
In Forum ab <a href="https://knx-user-forum.de/forum/projektforen/edomi/1187681-home-connect-lbs-19000070-1900071-19000072" target="_blank"> HIER </a>
</li></ul>


<h3 style="color:black;">Further Release Informationen</h3>
<font color="'FF0000';">Home-Connect Version 4:</font>
<ul><li>Tested with EDOMI-Version 1.62 and 2.02</li></ul>
<ul><li>Tested with CentOS 6.x and 7.x</li></ul>
<ul><li>Tested with PHP 5.3 and 7.x</li></ul>
<ul><li>Tested with <b>3</b> Home-Connect appliances (dishwasher/SX578S06TE, washer/WAYH2842 and dryer/WTYH7701)</li></ul>
<ul><li>Application-type / OAuth2-flow = Authorization Code Grant Flow</li></ul>
<ul><li>Main change to Version 3 - SYMLINK instead of hc_code.php file. The LBS still need to be triggered on E1=1 within 10 minutes to avoid the CODE become obsolete (solution maybe in version 5)</li></ul>
<ul><li>Appliance LBS e.g. 19000071, only in Version 4 compatible</li></ul>
<font color="'FF0000';">Home-Connect Version 3:</font>
<ul><li>Getestet mit EDOMI-Version 1.62</li></ul>
<ul><li>Getestet mit CentOS 6.5 minimal</li></ul>
<ul><li>Getestet mit PHP 5.3</li></ul>
<ul><li>Getestet mit nur <b>einem</b> Home-Connect Gerät (Geschirrspüler)</li></ul>
<ul><li>Application-type / OAuth2-flow = Authorization Code Grant Flow</li></ul>
<ul><li>Hauptänderung zur Version 2 ist, nur ein SSE LBS für alle Geräte (Geräte-Bausteine nur mit Version 3 kompatibel)</li></ul>
<font color="'FF0000';">Home-Connect Version 2:</font>
<ul><li>Getestet mit EDOMI-Version 1.62</li></ul>
<ul><li>Getestet mit CentOS 6.5 minimal</li></ul>
<ul><li>Getestet mit PHP 5.3</li></ul>
<ul><li>Getestet mit nur <b>einem</b> Home-Connect Gerät (Geschirrspüler)</li></ul>
<ul><li>Application-type / OAuth2-flow = Authorization Code Grant Flow</li></ul>
<font color="'FF0000';">Home-Connect Version 1:</font>
<ul><li>Getestet mir EDOMI-Version 1.xx (keine Ahnung mehr)</li></ul>
<ul><li>Getestet mit CentOS 6.5 minimal</li></ul>
<ul><li>Getestet mit PHP 5.3</li></ul>
<ul><li>Getestet mit nur <b>einem</b> Home-Connect Gerät (Geschirrspüler)</li></ul>


<h3 style="color:red;">TO-DOs</h3>
<ul><li>Automatischer Request for ACCESS-/REFRESH-Tokens after redirect_uri im hc_code.php Skript (no 10 Minuten Limitation) ...</li></ul>
<ul><li>Mögliche Fehler soweit möglich abfangen und in CUSTOM-Log schreiben, wenn notwendig (LBS / EXEC)</li></ul>
<ul><li>LogOption and style prüfen und adaptieren weiter testen ...</li></ul>
<ul><li>Debug-Funktionen erweitern (KLASSE) ...</li></ul>
<ul><li>Errorhandling / Exceptions erweitern (insbesondere in der KLASSE)...</li></ul>
<ul><li>Daemon == 0, einbauen (?) ...</li></ul>
<ul><li>PID ins Log schreiben (?) ...</li></ul>
<ul><li>SSE-Unterbrechung um ca. 00:15 und oder 01:15 hinterfragen (EDOMI, SSE, ISP) ... Unterbrechung wird grundsätzlich abgefangen</li></ul>
<ul><li>LogOption-Beschreibung ändern ...</li></ul>
<ul><li>State mit Hash, anstatt statisch ...</li></ul>
<ul><li>cURL-methods - Endschliff / EVENT ...</li></ul>


<h3 style="color:black;">Important Informationen</h3>
What is Home-Connect: <a href="https://developer.home-connect.com/?q=getting_started/overview" target="_blank">https://developer.home-connect.com/?q=getting_started/overview</a>
Registration for API-KEY as developer: <a href="https://developer.home-connect.com/?q=getting_started/ios/registration" target="_blank">https://developer.home-connect.com/?q=getting_started/ios/registration</a>
Api-Virtual-APPLIANCES: <a href="https://developer.home-connect.com/?q=simulator/oven" target="_blank">https://developer.home-connect.com/?q=simulator/oven</a>
Api-CLIENT-SwaggerUI: VIRTUAL-Appliances: <a href="https://apiclient.home-connect.com/?url=https://apiclient.home-connect.com/hcsdk.yaml" target="_blank">https://apiclient.home-connect.com/?url=https://apiclient.home-connect.com/hcsdk.yaml</a>
Api-CLIENT-SwaggerUI: REAL-Appliances: <a href="https://apiclient.home-connect.com/?url=https://apiclient.home-connect.com/hcsdk-production.yaml" target="_blank">https://apiclient.home-connect.com/?url=https://apiclient.home-connect.com/hcsdk-production.yaml</a>
Documentation: <a href="https://developer.home-connect.com/?q=docs/api/general/endpoints_dataencoding" target="_blank">https://developer.home-connect.com/?q=docs/api/general/endpoints_dataencoding</a>
Api-ERROR-description: <a href="https://developer.home-connect.com/?q=docs/api/general/apierrors" target="_blank">https://developer.home-connect.com/?q=docs/api/general/apierrors</a>
Auth-ERROR-descripton: <a href="https://developer.home-connect.com/?q=docs/api/authorization/authorizationerrors" target="_blank=">https://developer.home-connect.com/?q=docs/api/authorization/authorizationerrors</a>
SCOPE-permissions: <a href="https://developer.home-connect.com/?q=docs/api/authorization/scope" target="_blank">https://developer.home-connect.com/?q=docs/api/authorization/scope</a>
OPTIONS of relevant PROGRAMS: <a href="https://developer.home-connect.com/?q=docs/dishwasher/supported_programs_options" target="_blank">https://developer.home-connect.com/?q=docs/dishwasher/supported_programs_options</a>
Current LIMITATION: <a href="https://developer.home-connect.com/?q=docs/api/general/ratelimiting" target="_blank">https://developer.home-connect.com/?q=docs/api/general/ratelimiting</a>


<h3 style="color:black;">Authorization Flow ...</h3>
Theoretischer Link: application for CODE: <a href="https://api.home-connect.com/security/oauth/authorize?client_id={client_id}&response_type=code&state={state}" target="_blank">hhttps://api.home-connect.com/security/oauth/authorize?client_id={client_id}&response_type=code&state={state}</a>
Needed Link for authorization on Exit-A3 of this LBS.
<b>Important:</b> CODE to be used in a subsequent access-token request (see also Section 4.1.2 of [RFC6749]). <b style="color:red;">It expires after 10 minutes</b>


<h3 style="color:black;">Limitations (date 7.10.2018)</h3>
<ul><li>1000 requests per client and Home-Connect account per DAY</li></ul>
<ul><li>  50 requests per client and Home-Connect account per MINUTE (more requests will be blocked for one minute)</li></ul>
<ul><li>   5 program STARTS per client and Home-Connect account per DAY (more program starts will be blocked for one minute)</li></ul>
<ul><li>   5 program STOPS per client and Home-Connect account per DAY (more program stops will be blocked for one minute)</li></ul>
<ul><li>  10 successive requests per client and Home-Connect account per 10 minutes which result in an error (more requests will be blocked for 10 minutes)</li></ul>
<ul><li>  10 EVENT monitoring CHANNELS per client and Home-Connect account at any time (the request for further channels will be blocked)</li></ul>
<ul><li>  10 requests per second on average (20 requests max. burst) with leaky bucket algorithm, otherwise HTTP 429 error</li></ul>
<ul><li>	 PLEASE, do not reach the limits regularly. Otherwise your account may be locked</li></ul>


<h3 style="color:black;">INPUTS</h3>
<b>E1</b> : System-KO-2 (Systemstart) !!!
<b>E1 in Live-Ansicht</b>
Trigger = b ... stops SSE,
Trigger = 1 ... starts SSE,
Trigger = 9 ... reset - deletes several files and overrides remanent variables of CODE, ACCESS- and REFRESH-tokens with "NULL" (new authorization-flow is needed) !!!
Trigger = 9 ... creates authorization_url
<b>E2</b> : API-key (client_id) ... if E2 via iKO than as <b style="color:red;">initial-value</b> (Initialwert)
<b>E3</b> : CLIENT-secret (client_secret) ... if E3 via iKO than as <b style="color:red;">initial-value</b> (Initialwert)
<b>E4</b> : User-Log-Level (standard 4, debug 8, init 8), see below


<h3 style="color:black;">OUTPUTS</h3>
A1	: ARRAY-string with all available EVENTS (statuses) for use in special LBS e.g. Dishwasher, Washer, Dryer, etc.
A2	: STOP: status 1 if user stops the daemon manually else empty
A3  : Authorize URL to apply for CODE
A4	: All Home-Appliances
A5	: ERROR: usually "0" otherwise some message (currently only LBS-, not EXEC-part) only for LBS development


<h3 style="color:black;">LOG-Levels</h3>
1: Emergency
2: Alert
3: Critical
4: Error
5: Warning
6: Notice
7: Informational
8: Entwicklung

###[/HELP]###



###[LBS]###

<?

function LB_LBSID($id)
{
	if ($E=logic_getInputs($id))
	{
		if ($E[1]['refresh'] == 1)
		{
			$trigger = $E[1]['value'];
			$log	 = logic_getVar($id,  11);
			$remark	 = logic_getVar($id, 105);
///
			logic_setOutput($id, 2, 0);
			logic_setOutput($id, 3, 0);
			logic_setOutput($id, 5, 0);
///
			LB_LBSID_logAlways($id, '>', $log);
			LB_LBSID_logAlways($id, '>', $log);
			LB_LBSID_logAlways($id, '>', $log);
			LB_LBSID_logAlways($id, 'LBS-part started, E1 refreshed ... ', $log);
			LB_LBSID_logAlways($id, '>>> TEST >>> $trigger ... '.$trigger, $log);
			LB_LBSID_logAlways($id, '>', $log);
///
			if ($trigger == 'b')
			{
				logic_setVar($id, 300, 1);
			}
			else
			{
				if ($trigger == 1 || $trigger == 9)
				{
					if (logic_getStateExec($id) == 0)
					{
						logic_setVar($id, 13, $trigger);
						LB_LBSID_TRACE($id, $remark.' $trigger ..................... OK'			, 3, $log, 8, false);			
						LB_LBSID_TRACE($id, $remark.' LBS-Teil ..................... wird beendet'	, 3, $log, 8, false);			
						LB_LBSID_TRACE($id, $remark.' LBS-EXEC-Teil ................ wird initiiert', 3, $log, 8, false);			
						logic_callExec(LBSID, $id);
					}
					else
					{
						LB_LBSID_TRACE($id, $remark.' LBS-EXEC-Teil ................ is running and cannot starts again', 3, $log, 8, false);			
					}
				}
			}
		}
	}
}

function LB_LBSID_TRACE($id, $message, $LbsLogLevel, $einLog, $DebugLogLevel, $exit = false)
{
	$a = array('LOG_EMERG_', 'LOG_ALERT_', 'LOG_CRIT__', 'LOG_ERROR_', 'LOG_WARNING', 'LOG_NOTICE', 'LOG_INFO__', 'LOG_DEBUG_');
	if ($einLog == 1) $logName = logic_getVar($id, 102)."__LBSLBSID__";
	if ($einLog == 0) $logName = logic_getVar($id, 102)."__LBSLBSID__".logic_getVar($id, 103);
///	if ($einLog == 0) $logName = logic_getVar($id, 102).__LBSLBSID__".logic_getVar($id, 103).' '.logic_getVar($id, 104);
		$LbsLogLevel < $DebugLogLevel && writeToCustomLog($logName, $LbsLogLevel.' of '.$DebugLogLevel, "LBSLBSID (ID$id)".' | '.$message);
	if ($exit)
	{
		writeToCustomLog($logName, $LbsLogLevel.' of '.$DebugLogLevel, "LBSLBSID (ID$id)".' | Der LBS wird beendet: '.$message);
		writeToCustomLog($logName, $LbsLogLevel.' of '.$DebugLogLevel, "LBSLBSID (ID$id)".' | Baustein wurde aufgrund eines Fehlers beendet ...');
	}
}

function LB_LBSID_logAlways($id, $message, $einLog = 0)
{
	if ($einLog == 1) $logName = logic_getVar($id, 102)."__LBSLBSID__";
	if ($einLog == 0) $logName = logic_getVar($id, 102)."__LBSLBSID__".logic_getVar($id, 103);
///	if ($einLog == 0) $logName = logic_getVar($id, 102)."__LBSLBSID__".logic_getVar($id, 103).' '.logic_getVar($id, 104);
	writeToCustomLog($logName, '......', $message);
}

?>

###[/LBS]###



###[EXEC]###

<?
///		$pfad_hc_ablage			= '/var/tmp/19000070';
$pfad_hc_ablage = '/usr/local/edomi/www/data/19000070/';
///
///		Ablage in www ...
$pfad_hc_www = '/usr/local/edomi/www/visu/hc/';
///
///		Hier werden VARIABLEN für getAccessToken gespeichert ...
$pfad_hc_json_variables	= $pfad_hc_ablage.'hc_variables.json';
///
///		Hier wird die $config gespeichert ...
$pfad_hc_json_config	= $pfad_hc_ablage.'hc_config.json';
///
///		Hier wird der Access- und Refresh-Token gespeichert ...
$pfad_hc_json_tokens	= $pfad_hc_ablage.'hc_tokens.json';
///
///		Hier wird der CODE gespeichert ...
$pfad_hc_json_code		= $pfad_hc_ablage.'hc_code.json';
///
///		Hier wird die KLASSE gespeichert ...
$klasse		= '/usr/local/edomi/main/include/php/HOME-CONNECT-API-PHP/scr/HomeConnect/Clients/HcClient.php';
///
///
///
///	========================================================================================================================
///	Der nachfolgende Code, beginnend mit $_GET, wird ausgeführt, wenn HC (redirect_uri) das EXEC Skript über SYMLINK aufruft
///	AUTHORIZATION Endpoint ...
///	========================================================================================================================
///
///
if (isset($_GET['error']))		//	OK
{
	unset($redirect_uri, $trigger, $header);
	$url	= 'http://'.$_SERVER['SERVER_ADDR'].$_SERVER['SCRIPT_NAME'];
	$header = get_headers($url);
///
	echo "<h2>Home-Connect</h2>"."<br />\n";
	echo "<h1>ERROR ...</h1>"."<br />\n";
///
	If (!isset($header))
	{
		echo 'Header Informationen nicht verfügbar ... Warum auch immer ...'."<br />\n";
	}
	else
	{
		foreach ($header as $key => $value)
		{
			echo 'Header: '.$value."<br />\n";
		}
		echo "<br />\n";
		echo 'Redirect-Url: '.$url."<br />\n"."<br />\n"."<br />\n";
	}
///
	$error_description = isset($_GET['error_description']) ? $_GET['error_description'] : '';
	if ($error_description == 'login aborted by the user')
	{
		echo 'Home-Connect API ...'."<br />\n";
		echo '302 >> Found >> access_denied >> login aborted by the user'."<br />\n";
		echo "<br />\n";
		echo "<br />\n";
		echo 'Du hast die Authorisierung des Clients (Edomi) durch den Owner (Besitzer des Home-Connect Accounts) abgebrochen.'."<br />\n";
		echo 'Somit konnte der Umfang der Freigabe / des Zugriffs (Scope) nicht verifiziert und freigegeben werden.'."<br />\n";
	}
	elseif ($error_description == 'grant operation aborted by the user')
	{
		echo 'Home-Connect API ...'."<br />\n";
		echo '302 >> Found >> access_denied >> grant operation aborted by the user'."<br />\n";
		echo "<br />\n";
		echo "<br />\n";
		echo 'Du hast die Authorisierung des Clients (Edomi) durch den Owner (Besitzer des Home-Connect Accounts) nicht abgeschlossen/abgebrochen.'."<br />\n";
		echo 'Du hast den Umfang der Freigabe / des Zugriffs auf die Daten vorzeitig abgebrochen und nicht beendet (somit den Scope nicht freigegeben)'."<br />\n";
	}
	elseif ($error_description == 'missing or invalid request parameters')
	{
		echo 'Home-Connect API ...'."<br />\n";
		echo '302 >> Found >> invalid_request >> missing or invalid request parameters - Invalid request, response type is missing'."<br />\n";
		echo "<br />\n";
		echo "<br />\n";
		echo 'Du konntest die Authorisierung des Clients (Edomi) durch den Owner (Besitzer des Home-Connect Accounts) nicht abschliessen.'."<br />\n";
		echo 'Die Ursache ist entweder ein falscher oder ein fehlernder Parameter (Arg) in der Authorisierung-URL.'."<br />\n";
		echo 'Mandatory:'."<br />\n";
		echo 'response_type is required and must be "CODE" --> response_type=code'."<br />\n";
		echo 'client_id is required --> client_id={your API-key of your application you created in your developer-account.}'."<br />\n";
	}
	elseif ($error_description == 'given response_type not supported')
	{
		echo 'Home-Connect API ...'."<br />\n";
		echo '302 >> Found >> unsupported_response_type >> given response_type not supported'."<br />\n";
		echo "<br />\n";
		echo "<br />\n";
		echo 'Du konntest die Authorisierung des Clients (Edomi) durch den Owner (Besitzer des Home-Connect Accounts) nicht abschliessen.'."<br />\n";
		echo 'Die Ursache ist ein falscher Parameter (Arg) in der Authorisierung-URL.'."<br />\n";
		echo 'response_type is required and must be "CODE" --> response_type=code'."<br />\n";
	}
	elseif ($error_description == 'scope doesn\'t match requested scope')
	{
		echo 'Home-Connect API ...'."<br />\n";
		echo '302 >> Found >> invalid_scope >> scope does not match requested scope'."<br />\n";
		echo "<br />\n";
		echo "<br />\n";
		echo 'Du konntest die Authorisierung des Clients (Edomi) durch den Owner (Besitzer des Home-Connect Accounts) nicht abschliessen.'."<br />\n";
		echo 'Die Ursache scheint am falschen SCOPE zu liegen.'."<br />\n";
	}
	elseif ($error_description == 'client has limited user list - user not assigned to client')
	{
		echo 'Home-Connect API ...'."<br />\n";
		echo '302 >> Found >> unauthorized_client >> client has limited user list - user not assigned to client - Invalid HC account - please check configured test account'."<br />\n";
		echo "<br />\n";
		echo "<br />\n";
		echo 'Du konntest die Authorisierung des Clients (Edomi) durch den Owner (Besitzer des Home-Connect Accounts) nicht abschliessen.'."<br />\n";
		echo 'Die Ursache scheint darin zu liegen, dass die HC-Mail-Adresse für den Zugriff / die Applikation, nicht freigegeben ist.'."<br />\n";
		echo 'Die Ursache bitte in der API Beschreibung für weitere Hinweise nachlesen ...'."<br />\n";
	}
	else
	{
		echo 'Home-Connect API ...'."<br />\n";
		echo '302 >> Found >> ein unbekannter ERROR ...'."<br />\n";
		echo "<br />\n";
		echo "<br />\n";
		echo 'Du konntest die Authorisierung des Clients (Edomi) durch den Owner (Besitzer des Home-Connect Accounts) nicht abschliessen.'."<br />\n";
		echo 'Löse diesen Fehler, befor du in Edomi weiter machst.'."<br />\n";
		echo 'Error: '.$_GET['error']."<br />\n";
		echo 'Error-Description: '.$error_description."<br />\n";
	}
	echo "<br />\n";
	echo 'Um Zugriff auf den Endpoint (Home-Connect-Server) und die Daten des Owners zu erhalten, schliesse vorher die Authorisierung erfolgreich ab.'."<br />\n"."<br />\n";
	echo 'Schliesse diesen Browsertab um mögliche ungewollte Interaktionen mit Edomi zu verhindern (z.B. durch Refresh der URL !!!)'."<br />\n"."<br />\n";
	echo 'Copyright &copy 2016- '.date("Y").' coliflower'."<br />\n"."<br />\n"."<br />\n";
///	echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
	die();
	echo 'EXEC doch nicht gestorben ???'."<br />\n";
}
///
if (isset($_GET['code']))		//	OK bis zum CODE speichern (10 Minuten Zeit für den Token = Trigger=1) ... FEHLT = TOKEN reqeust
{
	unset($redirect_uri, $code, $header, $trigger, $state);
	$url	= 'http://'.$_SERVER['SERVER_ADDR'].$_SERVER['SCRIPT_NAME'];
	$header = get_headers($url);
	$state	= array('code' => $_GET['state']);
	$code	= array('code' => $_GET['code']);
	file_put_contents($pfad_hc_json_code, json_encode($code));
	echo "<h2>Home-Connect</h2>";
	echo "<h1>AUTHORIZIERUNG erfolgreich, der CODE wurde gespeichert</h1>";
	echo "<h2>You can close the tab and you need to trigger your LBS within 10 minutes</h2>";		//	???
	echo "<h2>Start the LBS 19000070 / Home-Connect-SSE with Trigger=1</h2>";						//	???
	echo 'CODE: '.serialize($code)."<br />\n"."<br />\n";
///
	If (!isset($header))
	{
		echo 'Header Informationen nicht verfügbar ... Warum auch immer ...'."<br />\n";
	}
	else
	{
		foreach ($header as $key => $value)
		{
			echo 'Header: '.$value."<br />\n";
		}
		unset($header, $key, $value‚);
	}
	echo "<br />\n";
	echo 'Arg: Redirect-Url:	'.$url."<br />\n";
	echo 'Arg: Grand-Type:		'.$_GET['grant_type']."<br />\n";
	echo 'Arg: State:			'.$_GET['state']."<br />\n";
	echo 'Arg: CODE:			'.$_GET['code']."<br />\n"."<br />\n";
///
///
///
///
	if (!file_exists($pfad_hc_json_variables))
	{
		echo 'Die benötigten JSON, für den Access- und Refresh-Token-Request, konnte im folgenden Pfad (Datei) nicht gefunden werden, bitte prüfe >> '.$pfad_hc_json_variables."<br />\n";
		echo 'Überprüfe deine Ordner-/Datei-Struktur und Zugriffsrechte.'."<br />\n";
		echo 'Automatik-Prozess \'getAccessTokenFromAuthorizationCode\' wurde abgebrochen, starte den LBS (70er) mit Trigger = 1 innerhalb von 10 Minuten !'."<br />\n";
	}
	else
	{
		echo 'Datei \'hc_variables.json\', notwendig für den Access- und Refresh-Token-Request, wurde gefunden ... OK'."<br />\n";
		$variables	= json_decode(file_get_contents($pfad_hc_json_variables), true);
///
		if (!isset($variables))
		{
			echo 'Die benötigten Variablen/Werte, notwendig für den Access- und Refresh-Token-Request, wurden im Array NICHT gefunden ... bitte prüfen'."<br />\n";
			echo 'Automatik-Prozess \'getAccessTokenFromAuthorizationCode\' wurde abgebrochen, versuche die Autorizierung bei HC zu wiederholen (um die Werte ins Array zu schreiben)'."<br />\n";
			echo 'Oder starte den LBS (70er) mit Trigger = 1 innerhalb von 10 Minuten (!), fall der LBS nicht läuft.'."<br />\n";
		}
		else
		{
			echo 'Variablen, notwendig für den Access- und Refresh-Token-Request, wurden gefunden ... OK'."<br />\n"."<br />\n";
			foreach ($variables as $key => $value)
			{
				echo 'Variable: '.$key.': '.$value."<br />\n";
			}
			echo "<br />\n";
///
			if (array_key_exists('client_id', $variables))		$client_id		= $variables['client_id'];
			if (array_key_exists('client_secret', $variables))	$client_secret	= $variables['client_secret'];
///
			$config = array(
			'client_secret' => $client_secret,
			'client_id'		=> $client_id,
			'state'			=> $state,
			'code'			=> $code,
			'refresh_token'	=> 'refresh',
			'access_token'	=> 'access',
			'self'			=> '/visu/hc/hc_code.php',		//	noch benötigt ? check !
			'ip'			=> $_SERVER['SERVER_ADDR']);







///
///
///
///
///			ACCESS TOKEN request ...
///			========================
///			HTTP Method		== POST
///			Request HEADER	== Content-Type: application/x-www-form-urlencoded
///			URL				== https://api.home-connect.com/security/oauth/token?
///			QUERY			== client_id={client_id}&client_secret={client_secret}&grant_type=authorization_code&code={code}
///
///
///			Additional Query PARAMETERS ...
///			-------------------------------
///			redirect_uri	== Required == Redirect URI which is defined in registered application. If this parameter isn't used then the first defined redirect URI is used. Please note that it is required if the redirect_uri parameter was included in the authorization request.
///			code_verifier	== Required == Code-verifier which was used during code challenge creation on client side. Please note that it is required if the code_challenge parameter was included in the authorization request.
///
///
///
			if (!file_exists($klasse))
			{
				echo 'class_exists() == FALSE'."<br />\n";
			}
			else
			{
				require_once(dirname(__FILE__).'/../../../../main/include/php/HOME-CONNECT-API-PHP/scr/HomeConnect/autoload.php');
///
				echo 'class_exists() == TRUE'."<br />\n"."<br />\n";
				echo '$config ... OK ... '.serialize($config)."<br />\n"."<br />\n";
				$client = new HomeConnect\Clients\HcClient($config);
				echo '$client ... OK ... '.serialize($client)."<br />\n"."<br />\n";
				echo '$code ..... OK ... '.serialize($code)."<br />\n"."<br />\n";



				$tokens = $client->getAccessTokenFromAuthorizationCode($code);
				echo 'Tokens ... OK ... '.serialize($tokens)."<br />\n"."<br />\n";
///
///
///
///				ACCESS TOKEN response ...
///				=========================
///				The request will return the access token and a refresh token in the HTTP BODY
///				Response header	== Content-Type: application/json
///
///				Response PARAMETER ... OK (Beispiel)
///				------------------------------------
///				{
///					"id_token": "{id_token}",
///					"access_token": "{access_token}",
///					"expires_in": 86400,
///					"scope": "{scope}",
///					"refresh_token": "{refresh_token}",
///					"token_type": "Bearer"
///				}
///
///				Response PARAMETER ... NOK (Beispiel)
///				-------------------------------------
///				{
///					"error": "invalid_grant",
///					"error_description": "invalid refresh_token"
///				}
///
///
///
///				WENN nicht ERROR (?) oder bestimmte http-CODES (?), DANN $tokens speichern ...
///				----------------------------------------------------------------------
///
///
				if (!isset($tokens))
				{
					echo 'Tokens konnten in Automatikprozess NICHT via getAccessTokenFromAuthorizationCode() abgerufen werden, der Prozess wurde abgebrochen ...'."<br />\n";
					echo 'Starte den LBS (70er) mit Trigger = 1 innerhalb von 10 Minuten !'."<br />\n";
					echo 'Tokens ... '.$tokens."<br />\n";
				}
				else
				{
					echo 'Tokens wurde abgerufen ... OK'."<br />\n";
					echo 'Tokens werden gespeicher in ...'.$pfad_hc_json_tokens."<br />\n";
///
					file_put_contents($pfad_hc_json_tokens, json_encode($tokens));
///
					echo '$tokens (array) ... '.serialize($tokens)."<br />\n";
					echo '$tokens (json ).... '.json_encode($tokens)."<br />\n";					
///
					foreach ($tokens as $key => $value)
					{
						echo '$tokens -> $value ... '.$value."<br />\n";
					}
				}
			}
		}
	}
				echo "<br />\n"."<br />\n";
				echo 'Schliesse diesen Browsertab um mögliche, ungewollte Interaktionen mit Edomi zu verhindern (z.B. durch Refresh der URL !!!)'."<br />\n"."<br />\n";
				echo 'Copyright &copy 2016- '.date("Y").' coliflower'."<br />\n"."<br />\n"."<br />\n";
///				echo "<p>Copyright &copy; 1999-" . date("Y") . " coliflower</p>"."<br />\n"."<br />\n"."<br />\n";
				die();
				echo 'EXEC doch nicht gestorben ???'."<br />\n";
}
///
///	Ende
///	AUTHORIZATION Endpoint ...
///	========================================================================================================================
///
///
///
require(dirname(__FILE__)."/../../../../main/include/php/incl_lbsexec.php");
require_once(dirname(__FILE__).'/../../../../main/include/php/HOME-CONNECT-API-PHP/scr/HomeConnect/autoload.php');
set_time_limit(0);
sql_connect();

if ($E=logic_getInputs($id))
{
	$client_id		= $E[2]['value'];
	$client_secret	= $E[3]['value'];
	$ll				= $E[4]['value'];
///
	logic_setVar($id,  7, $client_id);
	logic_setVar($id,  8, $client_secret);
	logic_setVar($id, 12, $ll);
///
	$str_result = '0123456789_ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
//	$state		= substr(bin2hex(random_bytes(64)), 0, 64);		//	PHP7 only
	$state		= substr(str_shuffle($str_result), 0, 64); 		//	PHP4,5,7
	$scope		= 'MAXIMUM';
	$fp			= '';
///
///
///	SCOPE entfernen, somit maximal erlaubter Zugriff freigegeben (Scope kann zur Begrenzung der Freigabe eingesetzt werden)
///	-----------------------------------------------------------------------------------------------------------------------
///	$scope = 'IdentifyAppliance Dishwasher Washer Dryer Monitor';
///	$scope = HomeConnect\Common\HcScopes::$scopes['sse'][$contotype];
///
///
///	https://api.home-connect.com/security/oauth/authorize?client_id=5ED927FD8AAE1319BCAA75DFC264ED5A26F19FBFCCDEAFCBE89C5CDE465AEB2D&redirect_uri=http://10.0.10.3/visu/hc_code.php&response_type=code&scope=IdentifyAppliance%20Dishwasher&state=homeconnect_auth
///	https://api.home-connect.com/security/oauth/token?client_id=5ED927FD8AAE1319BCAA75DFC264ED5A26F19FBFCCDEAFCBE89C5CDE465AEB2D&client_secret=9E4052745168B5127460609582B80650BB580D4292A252EFB5EB049A80E5B6EA&redirect_uri=http://10.0.10.3/visu/hc_code.php&grant_type=authorization_code&code=eyJ4LXJlZyI6IkVVIiwieC1lbnYiOiJQUkQiLCJ0b2tlbiI6IjY5MTk5YmNiLTA5NTktNGI0NS04MzFkLTMxNGEzMjQ4OTVjMyJ9
///	client_id		5ED927FD8AAE1319BCAA75DFC264ED5A26F19FBFCCDEAFCBE89C5CDE465AEB2D
///	client_secret	9E4052745168B5127460609582B80650BB580D4292A252EFB5EB049A80E5B6EA
///
///
///		Zum Testen, nicht vergessen zu löschen ... !!!
///		logic_setVar($id, 3, 'eyJ4LXJlZyI6IkVVIiwieC1lbnYiOiJQUkQiLCJ0b2tlbiI6ImFkMGVlZmQ3LTlmYjgtNDhlZi05NjkwLWQ1OTEzYzg5Yjk5ZSJ9');
///		logic_setVar($id, 3, 'eyJ4LXJlZyI6IkVVIiwieC1lbnYiOiJQUkQiLCJ0b2tlbiI6IjJjMDZlNmU1LTUxZTUtNDkzMi1hNzlmLTZmZDRiZGM2OGI2OSJ9');
///			
///				  
	$code			= logic_getVar($id,   1);		//	= 'new' if initial-lbs-start
	$access			= logic_getVar($id,   2);
	$refresh		= logic_getVar($id,   3);
	$contotype		= logic_getVar($id,  10);		//	DEVELOPER, da EDOMI kein PARTNER ist
	$log			= logic_getVar($id,  11);
	$trigger		= logic_getVar($id,  13);
	$self			= logic_getVar($id,  14);
	$lastToken		= logic_getVar($id,  15);
	$version		= logic_getVar($id, 100);
	$lebsi			= logic_getVar($id, 101);
	$remark			= logic_getVar($id, 105);
	$class_variable	= logic_getVar($id, 107);
///
///
	LB_LBSID_logImmer($id, '>', $log);
	LB_LBSID_logImmer($id, '>', $log);
	LB_LBSID_logImmer($id, 'Variablen eingelesen, EXEC-Teil gestartet ... ', $log);
	LB_LBSID_logImmer($id, '>', $log);
	LB_LBSID_DEBUG($id, $remark.' Host/IP (Edomi) .............. '.global_serverIP	, 3, $log, $ll, false);
	LB_LBSID_DEBUG($id, $remark.' $contotype ................... '.$contotype		, 3, $log, $ll, false);
	LB_LBSID_DEBUG($id, $remark.' $scope ....................... '.$scope			, 3, $log, $ll, false);
	LB_LBSID_DEBUG($id, $remark.' $state ....................... '.$state			, 3, $log, $ll, false);
///
///
	if (!isset($ll))
	{
		LB_LBSID_DEBUG($id, $remark.' STOP, LOG-level is EMPTY on INPUT >> set Log-Level to 8 by LBS works fine, than to 4', 3, $log, 8, true);
		logic_setOutput($id, 5, 'STOP, LOG-level is EMPTY on INPUT >> set Log-Level to 8 by LBS works fine, than to 4');
	}
	else
	{
		if (isEmpty($E[2]['value']) || isEmpty($E[3]['value']) || isEmpty($E[4]['value']))
		{
			logic_setOutput($id, 5, 'Einer der Eingänge ist LEER - EXEC not started');
			LB_LBSID_DEBUG($id, $remark.' Einer der Eingänge ist LEER - EXEC not started', 3, $log, $ll, true);
		}
		else
		{
			if (!preg_match("#^[0-9]+$#", $ll) || strlen($ll) != 1)
			{
				logic_setOutput($id, 5, 'set Log-Level to 8 by LBS works fine, than to 4');
				LB_LBSID_DEBUG($id, $remark.' ABBRUCH, LOG-level is not valid - EXEC not started', 3, $log, $ll, true);
			}
			else
			{
				if (strlen($client_id) != 64)
				{
					logic_setOutput($id, 5, 'API-Key must be 64-digits long ... check ');
					LB_LBSID_DEBUG($id, $remark.' API-Key must be 64-digits long, current: '.strlen($client_id).' digits long - EXEC not started', 3, $log, $ll, true);
				}
				else
				{
					if (strlen($client_secret) != 64)
					{
						logic_setOutput($id, 5, 'API-Secret must be 64-digits long ... check ');
						LB_LBSID_DEBUG($id, $remark.' API-Secret must be 64-digits long, current: '.strlen($client_secret).' digits long - EXEC not started', 3, $log, $ll, true);
					}
					else
					{
						if (!file_exists($klasse))
						{
							logic_setOutput($id, 5, 'Needed CLASS is missing or does not exist in correct path ... check '.$klasse);
							LB_LBSID_DEBUG($id, $remark.' Needed CLASS is missing or does not exist in correct path ... check '.$klasse, 3, $log, $ll, true);
						}
						else
						{
							$file = file($klasse, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);  
///
							if (!isset($file))
							{
								logic_setOutput($id, 5, 'no class-content available - class-version cannot be read');
								LB_LBSID_DEBUG($id, $remark.' CLASS-version ................ cannot be read', 3, $log, $ll, true);
							}
							else
							{
								$class_version = substr($file[1], 4);
///
								if ($class_variable != $class_version)
								{
									logic_setOutput($id, 5, 'CLASS-version  !=  needed version ... you need '.$version);
									LB_LBSID_DEBUG($id, $remark.' CLASS-version ................ wrong CLASS version, you need '.$version, 3, $log, $ll, true);
								}
								else
								{
									LB_LBSID_DEBUG($id, $remark.' LBS-Eingänge ................. all OK '			, 3, $log, $ll, false);
									LB_LBSID_DEBUG($id, $remark.' LBS-version .................. '.$version			, 3, $log, $ll, false);
									LB_LBSID_DEBUG($id, $remark.' CLASS-version ................ '.$class_version	, 3, $log, $ll, false);
									LB_LBSID_DEBUG($id, $remark.' $ll .......................... '.$ll				, 3, $log, $ll, false);
									LB_LBSID_DEBUG($id, $remark.' >>> T E S T >>> $trigger ..... '.$trigger			, 3, $log, $ll, false);
									unset($file, $klasse, $class_version, $class_variable);
///
									if (isset($version))
									{
										$stream = array('trigger' => array('version' => $version));
										logic_setOutputQueued($id, 1, serialize($stream));
										usleep(1000*10);
									}
///
///									Automatischer LBS Start mit Trigger = 1, wenn bestimmte Bedingungen erfüllt sind, ansonsten Trigger = 9 ...
///
									if ($trigger == 1)	//	START
									{
										LB_LBSID_DEBUG($id, $remark.' >>> .......................... Trigger 1 == starts SSE', 3, $log, $ll, false);
										LB_LBSID_logImmer($id, '>', $log);
										LB_LBSID_logImmer($id, '>', $log);
///
										if ($code === 'code')
										{
											$trigger = 9;
											LB_LBSID_DEBUG($id, $remark.' >>> T E S T >>> $code === code && $access === access && $refresh === refresh', 3, $log, 8, false);
										}
										else
										{
											if ($code === null)
											{
///												logic_setOutput($id, 5, 'Authorization at HC endpoint necessary - use the authorization LINK at LBS-A3');
///												LB_LBSID_DEBUG($id, $remark.' Authorization at HC endpoint necessary - use the authorization LINK at LBS-A3', 3, $log, $ll, false);
///
												if (!file_exists($pfad_hc_json_code))
												{
													$trigger = 9;
													LB_LBSID_DEBUG($id, $remark.' hc_code.JSON ................. not found', 3, $log, 8, false);
													LB_LBSID_DEBUG($id, $remark.' root-cause ................... missing authorization Endpoint - please (re-)start authorization reqeust and finish successfully', 3, $log, 8, false);
													LB_LBSID_DEBUG($id, $remark.' root-cause ................... or hc_code.json not found in path '.$pfad_hc_json_code, 3, $log, 8, false);
												}
												else
												{
													$code_get = json_decode(file_get_contents($pfad_hc_json_code), true);
													$code = $code_get['code'];

													logic_setVar($id,  1, $code);
													logic_setVar($id, 13, $trigger);

													LB_LBSID_DEBUG($id, $remark.' $code (found in JSON-file) ... '.$code, 6, $log, $ll, false);
													LB_LBSID_DEBUG($id, $remark.' $code (storred in V#1) ....... '.$code, 6, $log, $ll, false);
													LB_LBSID_logImmer($id, '>', $log);
												}
											}
// 											if ($access === 'access' && $refresh === 'refresh')
// 											{
// 												if (!file_exists($pfad_hc_json_tokens))
// 												{
// 													LB_LBSID_DEBUG($id, $remark.' hc_tokens.JSON ............... not found in path '.$pfad_hc_json_code, 3, $log, 8, false);
// 													LB_LBSID_DEBUG($id, $remark.' action needed ................ not found in path ', 3, $log, 8, false);
// 												}
// 												else
// 												{
// 													$tokens  = json_decode(file_get_contents($pfad_hc_json_tokens), true);
// 													$access  = $tokens['access_token'];
// 													$refresh = $tokens['refresh_token'];
// 												}
// 											}
										}
									}
///
									LB_LBSID_DEBUG($id, $remark.' >>> T E S T >>> $trigger ..... '.$trigger, 3, $log, $ll, false);
///
									if ($trigger == 9)
									{
										LB_LBSID_logImmer($id, '>', $log);
										LB_LBSID_logImmer($id, '>', $log);
										LB_LBSID_DEBUG($id, $remark.' >>> .......................... Trigger = 9 = RESET alter Variablen/Dateien/...',	3, $log, $ll, false);
										LB_LBSID_DEBUG($id, $remark.' >>> .......................... Trigger = 9 = (Re-)Authorization started ... ',		3, $log, $ll, false);
										LB_LBSID_logImmer($id, '>', $log);
///
///										Alte Dateien aus Vorversionen löschen:
										if (file_exists('/usr/local/edomi/www/visu/hc_tokens_request.php'))	unlink('/usr/local/edomi/www/visu/hc_tokens_request.php');
										if (file_exists('/usr/local/edomi/www/visu/hc_config.json'))		unlink('/usr/local/edomi/www/visu/hc_config.json');
										if (file_exists('/usr/local/edomi/www/visu/hc_tokens.json'))		unlink('/usr/local/edomi/www/visu/hc_tokens.json');
										if (file_exists('/usr/local/edomi/www/visu/hc_code.json'))			unlink('/usr/local/edomi/www/visu/hc_code.json');
										if (file_exists('/usr/local/edomi/www/visu/hc_code.php')) 			unlink('/usr/local/edomi/www/visu/hc_code.php');
										if (file_exists('/usr/local/edomi/www/visu/hc.php'))				unlink('/usr/local/edomi/www/visu/hc.php');
///
///										Aktuelle Dateien reseten:
										if (file_exists($pfad_hc_json_variables))	unlink($pfad_hc_json_variables);
										if (file_exists($pfad_hc_json_config))		unlink($pfad_hc_json_config);
										if (file_exists($pfad_hc_json_tokens))		unlink($pfad_hc_json_tokens);
										if (file_exists($pfad_hc_json_code))		unlink($pfad_hc_json_code);
///
										if (!is_writable($pfad_hc_ablage))
										{
											LB_LBSID_DEBUG($id, $remark.' Ablage (/19000070) ........... Nicht vorhanden oder schreibgeschützt, wird angelegt (777): '.$pfad_hc_ablage, 3, $log, $ll, false);
///											chown('/var/tmp', 'root');
///											shell_exec('chmod -R 777'.$pfad_hc_www);
											mkdir($pfad_hc_ablage, 0777, true);
											chmod($pfad_hc_ablage, 0777);
											LB_LBSID_DEBUG($id, $remark.' Ablage (mkdir /19000070) ..... Angelegt (777): '.$pfad_hc_ablage, 3, $log, $ll, false);
///											LB_LBSID_DEBUG($id, $remark.' Ablage (chown /var/tmp) ...... Vorhanden und Besitzer=root',	3, $log, $ll, false);
										}
///
										if (!is_writable($pfad_hc_www))
										{
											LB_LBSID_DEBUG($id, $remark.' WWW (/hc) .................... Nicht vorhanden oder schreibgeschützt, wird angelegt (777): '.$pfad_hc_www, 3, $log, $ll, false);
											mkdir($pfad_hc_www, 0777, true);
											chmod($pfad_hc_www, 0777);
											LB_LBSID_DEBUG($id, $remark.' WWW (mkdir /hc) .............. Angelegt (777): '.$pfad_hc_www,	3, $log, $ll, false);
											LB_LBSID_DEBUG($id, $remark.' WWW (chmod /hc) .............. Rechte=777', 3, $log, $ll, false);
										}
///
///
///										SYMLINK wird erstellt wenn nicht verfügbar ... wird für Redirect_URI benötigt um den Symlink-Teil zu triggern ...
										if (!is_link($pfad_hc_www.'hc_code.php')) symlink('/usr/local/edomi/www/data/liveproject/lbs/EXE19000070.php', $pfad_hc_www.'hc_code.php');
///
///										Permanente Variablen überschreiben ...
///
										If ($code != 'code')
										{
											logic_setVar($id,  1, null);
											logic_setVar($id,  2, null);
											logic_setVar($id,  3, null);
											logic_setVar($id,  4, 0);
											logic_setVar($id,  5, 0);
											logic_setVar($id,  6, 0);
											logic_setVar($id,  7, null);
											logic_setVar($id,  8, null);
											logic_setVar($id, 15, 0);
										}
///
										$authorize_url	= 'https://api.home-connect.com/security/oauth/authorize?client_id='.$client_id.'&state='.$state.'&response_type=code';
										LB_LBSID_DEBUG($id, $remark.' $authorize_url ............... '.$authorize_url, 6, $log, $ll, false);
										logic_setOutput($id, 3, $authorize_url);
///
										$variables	= array('client_secret' => $client_secret,
															'client_id'		=> $client_id,
															'lebsi'			=> $lebsi,
															'state'			=> $state,
															'self'			=> $self,
															'll'			=> $ll,
															'ip'			=> global_serverIP);
///
										LB_LBSID_DEBUG($id, $remark.' $variables/array Inhalt ...... '.serialize($variables), 6, $log, $ll, false);
///
///										Mittels ... die Datei dem Root als Besitzer zuweisen ...
///										shell_exec('chown root:root '.$pfad_hc_json_variables);
///
///										Mittels ... die Rechte setzen ...
///										shell_exec('chmod 777 '.$pfad_hc_json_variables);
///
///										Variablen in die JSON schreiben und diese im Pfad speichern ...
										file_put_contents($pfad_hc_json_variables, json_encode($variables));
///
///
///										Überprüfen ob die JSON vorhanden ist ... nicht den Inhalt ...
										if (!file_exists($pfad_hc_json_variables))
										{
											LB_LBSID_DEBUG($id, $remark.' JSON nicht gefunden .......... Notwendige Variablen für die Authorizierung nicht vorhanden, löse dieses Probelm zuerst !!!', 3, $log, $ll, true);			
										}
///
///										Überprüfen ob der Inhalt der JSON korrekt ist ...
										else
										{
											LB_LBSID_DEBUG($id, $remark.' JSON ......................... geschrieben/gespeichert ', 6, $log, $ll, false);			
											LB_LBSID_DEBUG($id, $remark.' JSON Inhalt $variables ....... '.json_encode($variables), 6, $log, $ll, false);			
											LB_LBSID_DEBUG($id, $remark.' JSON Inhalt im Pfad .......... '.file_get_contents($pfad_hc_json_variables, true), 6, $log, $ll, false);			
///
											if (json_encode($variables) !== file_get_contents($pfad_hc_json_variables, true))
											{
												LB_LBSID_DEBUG($id, $remark.' JSON Inhalt .................. entspricht nicht den tatsächlichen/notwendigen Werten - ABBRUCH', 3, $log, $ll, true);
											}
											else
											{
												LB_LBSID_DEBUG($id, $remark.' JSON Inhalt .................. entspricht den tatsächlichen/notwendigen Werte ... OK', 6, $log, $ll, false);			
												LB_LBSID_DEBUG($id, $remark.' >>> .......................... weiter mit authorize_url (LBS-Ausgang) im Browser '.$authorize_url, 6, $log, $ll, false);
												LB_LBSID_logImmer($id, '>', $log);
												LB_LBSID_FINISH($id, $log);
											}
										}		
									}
								}
							}
						}
					}
				}
			}
		}
	}
///
///
	while (logic_getEdomiState() == 1)		//	Daemon // Hauptschleife ... (wird beim Beenden oder Neustart von EDOMI verlassen) ... Wichtig: logic_getEdomiState() sorgt zudem dafür, dass die Datenbank-Verbindung aufrechterhalten wird!
	{
		usleep(1000*100);					//	CPU ... %
		if (logic_getVar($id, 300) == 1)	//	E1 = b -> $trigger = 1
		{
			logic_setVar($id, 300, 0);
			logic_setOutput($id, 2, 1);
			LB_LBSID_logImmer($id, '>', $log);
			LB_LBSID_DEBUG($id, $remark.' WHILE-loop (Daemon) disconnected by User ...', 3, $log, $ll, false);
			break;
		}
		else
		{
///			init = 0, am Ende 1 ... LBS-(initial-)Start, getAppliances() und um den ACCESS-token automatischen zu refreshen, wenn notwendig ...
			if (logic_getVar($id, 4) == 0)
			{
				LB_LBSID_logImmer($id, 'WHILE-loop / Daemon (re)started ... ', $log);
				LB_LBSID_logImmer($id, '>', $log);
				LB_LBSID_DEBUG($id, $remark.' Bereich ...................... V#4', 3, $log, $ll, false);
///
///				Initialwert ...
				if ($lastToken == 0)
				{
					$lastToken = time();
					logic_setVar($id, 15, $lastToken);
					LB_LBSID_DEBUG($id, $remark.' $lastToken == 0 .............. set to '.$lastToken, 3, $log, $ll, false);
				}
///
				$config = array(
				'client_secret' => $client_secret,
				'client_id'		=> $client_id,
				'refresh_token'	=> $refresh,
				'access_token'	=> $access,
				'lebsi'			=> $lebsi,
				'state'			=> $state,
				'code'			=> $code,
				'self'			=> $self,							//	benötigt in der KLASSE ohne redirect_uri ?!?
				'll'			=> $ll,
				'ip'			=> global_serverIP);
///
				if (!isset($config))
				{
					LB_LBSID_DEBUG($id, $remark.' $config ...................... fehlt, $client nicht möglich ... ABBRUCH', 3, $log, $ll, true);
				}
				else
				{
					if ($access == 'access' || $refresh === null)	//	???
					{
						LB_LBSID_DEBUG($id, $remark.' $access ...................... not set '.$access	, 6, $log, $ll, false);
						LB_LBSID_DEBUG($id, $remark.' $refresh ..................... not set '.$refresh	, 6, $log, $ll, false);
///
						$client = new HomeConnect\Clients\HcClient($config);
						$tokens = $client->getAccessTokenFromAuthorizationCode($code);
///
///
///						$tokens ...
///						a:6:{
///						s:8:"id_token";s:2171:"eyJ4LWVudiI6IlBSRCIsImFsZyI6IlJTMjU2IiwieC1yZWciOiJFVSIsImtpZCI6IlMxIn0.eyJmZ3JwIjpbXSwic3ViIjoiZjQzNjFiMWYtMWE4MS00ZDdjLWI2NDYtM2FhNTM5ZjhlOTcxIiwiYXVkIjoiNUVEOTI3RkQ4QUFFMTMxOUJDQUE3NURGQzI2NEVENUEyNkYxOUZCRkNDREVBRkNCRTg5QzVDREU0NjVBRUIyRCIsImF6cCI6IjVFRDkyN0ZEOEFBRTEzMTlCQ0FBNzVERkMyNjRFRDVBMjZGMTlGQkZDQ0RFQUZDQkU4OUM1Q0RFNDY1QUVCMkQiLCJzY29wZSI6WyJDb29rUHJvY2Vzc29yLU1vbml0b3IiLCJEcnllci1TZXR0aW5ncyIsIldhc2hlci1Db250cm9sIiwiRHJ5ZXItTW9uaXRvciIsIlNldHRpbmdzIiwiSWRlbnRpZnlBcHBsaWFuY2UiLCJDbGVhbmluZ1JvYm90IiwiV2FzaGVyLVNldHRpbmdzIiwiQ29mZmVlTWFrZXIiLCJXYXNoZXIiLCJDb29rUHJvY2Vzc29yLVNldHRpbmdzIiwiSG9iLVNldHRpbmdzIiwiT3Zlbi1Nb25pdG9yIiwiSG9vZC1Db250cm9sIiwiV2FzaGVyRHJ5ZXItTW9uaXRvciIsIk92ZW4tU2V0dGluZ3MiLCJDb2ZmZWVNYWtlci1Nb25pdG9yIiwiTW9uaXRvciIsIkhvYi1Nb25pdG9yIiwiV2FzaGVyRHJ5ZXItQ29udHJvbCIsIkRpc2h3YXNoZXItQ29udHJvbCIsIlJlZnJpZ2VyYXRvci1Db250cm9sIiwiRGlzaHdhc2hlciIsIkRyeWVyLUNvbnRyb2wiLCJDbGVhbmluZ1JvYm90LUNvbnRyb2wiLCJXaW5lQ29vbGVyIiwiRnJlZXplci1Nb25pdG9yIiwiV2FzaGVyRHJ5ZXIiLCJSZWZyaWdlcmF0b3ItTW9uaXRvciIsIkNvb2tQcm9jZXNzb3IiLCJGcmVlemVyIiwiRnJlZXplci1TZXR0aW5ncyIsIldpbmVDb29sZXItQ29udHJvbCIsIldpbmVDb29sZXItU2V0dGluZ3MiLCJEaXNod2FzaGVyLVNldHRpbmdzIiwiTW9uaXRvckFwcGxpYW5jZSIsIkhvb2QiLCJEcnllciIsIkZyaWRnZUZyZWV6ZXItTW9uaXRvciIsIkNsZWFuaW5nUm9ib3QtU2V0dGluZ3MiLCJSZWZyaWdlcmF0b3IiLCJSZWZyaWdlcmF0b3ItU2V0dGluZ3MiLCJEaXNod2FzaGVyLU1vbml0b3IiLCJDb2ZmZWVNYWtlci1TZXR0aW5ncyIsIkZyaWRnZUZyZWV6ZXItU2V0dGluZ3MiLCJDbGVhbmluZ1JvYm90LU1vbml0b3IiLCJXaW5lQ29vbGVyLU1vbml0b3IiLCJGcmVlemVyLUNvbnRyb2wiLCJDb2ZmZWVNYWtlci1Db250cm9sIiwiV2FzaGVyLU1vbml0b3IiLCJIb29kLU1vbml0b3IiLCJIb29kLVNldHRpbmdzIiwiRnJpZGdlRnJlZXplci1Db250cm9sIiwiQ29va1Byb2Nlc3Nvci1Db250cm9sIiwiV2FzaGVyRHJ5ZXItU2V0dGluZ3MiXSwiaXNzIjoiRVU6UFJEOjA0IiwiZXhwIjoxNTg2MTgyMjE4LCJpYXQiOjE1ODYwOTU4MTgsImp0aSI6IjZmZDA0ODQyLTcxMGItNGE4ZC1iZjdkLTI0M2I4M2QxZGNkMyJ9.M94oYagR3RwYEH06rh0FhxVMyg1ipNBDoqfnTy5etvPVyveyg-BDW-E3qyZz1qlueH7Mb-R-bKghUQF_onETezr6QCSs695JgpGbhhBIshypMQ35h1sFYcN6GQSbOx3kmdmdc_G55YIii6HUm0J5ineXwQ3xSw7j8RqC84lGGgHEMhd_6PYFLm4oCHAlpd5o0_wwxfWecPrfwtzZyT3ksOOs0u82JQgckACcD2QnDXyeR_KN6sSOKOyhwkvSdJgF_DQLvD0uHthYTPjJx0cciNvLIGTrSsDST6wP6fzZZysUvAlvyzP55SkLw5IInWnJVaFUrW-G4ulMLwZ7HosNag";
///						s:12:"access_token";s:2171:"eyJ4LWVudiI6IlBSRCIsImFsZyI6IlJTMjU2IiwieC1yZWciOiJFVSIsImtpZCI6IlMxIn0.eyJmZ3JwIjpbXSwic3ViIjoiZjQzNjFiMWYtMWE4MS00ZDdjLWI2NDYtM2FhNTM5ZjhlOTcxIiwiYXVkIjoiNUVEOTI3RkQ4QUFFMTMxOUJDQUE3NURGQzI2NEVENUEyNkYxOUZCRkNDREVBRkNCRTg5QzVDREU0NjVBRUIyRCIsImF6cCI6IjVFRDkyN0ZEOEFBRTEzMTlCQ0FBNzVERkMyNjRFRDVBMjZGMTlGQkZDQ0RFQUZDQkU4OUM1Q0RFNDY1QUVCMkQiLCJzY29wZSI6WyJDb29rUHJvY2Vzc29yLU1vbml0b3IiLCJEcnllci1TZXR0aW5ncyIsIldhc2hlci1Db250cm9sIiwiRHJ5ZXItTW9uaXRvciIsIlNldHRpbmdzIiwiSWRlbnRpZnlBcHBsaWFuY2UiLCJDbGVhbmluZ1JvYm90IiwiV2FzaGVyLVNldHRpbmdzIiwiQ29mZmVlTWFrZXIiLCJXYXNoZXIiLCJDb29rUHJvY2Vzc29yLVNldHRpbmdzIiwiSG9iLVNldHRpbmdzIiwiT3Zlbi1Nb25pdG9yIiwiSG9vZC1Db250cm9sIiwiV2FzaGVyRHJ5ZXItTW9uaXRvciIsIk92ZW4tU2V0dGluZ3MiLCJDb2ZmZWVNYWtlci1Nb25pdG9yIiwiTW9uaXRvciIsIkhvYi1Nb25pdG9yIiwiV2FzaGVyRHJ5ZXItQ29udHJvbCIsIkRpc2h3YXNoZXItQ29udHJvbCIsIlJlZnJpZ2VyYXRvci1Db250cm9sIiwiRGlzaHdhc2hlciIsIkRyeWVyLUNvbnRyb2wiLCJDbGVhbmluZ1JvYm90LUNvbnRyb2wiLCJXaW5lQ29vbGVyIiwiRnJlZXplci1Nb25pdG9yIiwiV2FzaGVyRHJ5ZXIiLCJSZWZyaWdlcmF0b3ItTW9uaXRvciIsIkNvb2tQcm9jZXNzb3IiLCJGcmVlemVyIiwiRnJlZXplci1TZXR0aW5ncyIsIldpbmVDb29sZXItQ29udHJvbCIsIldpbmVDb29sZXItU2V0dGluZ3MiLCJEaXNod2FzaGVyLVNldHRpbmdzIiwiTW9uaXRvckFwcGxpYW5jZSIsIkhvb2QiLCJEcnllciIsIkZyaWRnZUZyZWV6ZXItTW9uaXRvciIsIkNsZWFuaW5nUm9ib3QtU2V0dGluZ3MiLCJSZWZyaWdlcmF0b3IiLCJSZWZyaWdlcmF0b3ItU2V0dGluZ3MiLCJEaXNod2FzaGVyLU1vbml0b3IiLCJDb2ZmZWVNYWtlci1TZXR0aW5ncyIsIkZyaWRnZUZyZWV6ZXItU2V0dGluZ3MiLCJDbGVhbmluZ1JvYm90LU1vbml0b3IiLCJXaW5lQ29vbGVyLU1vbml0b3IiLCJGcmVlemVyLUNvbnRyb2wiLCJDb2ZmZWVNYWtlci1Db250cm9sIiwiV2FzaGVyLU1vbml0b3IiLCJIb29kLU1vbml0b3IiLCJIb29kLVNldHRpbmdzIiwiRnJpZGdlRnJlZXplci1Db250cm9sIiwiQ29va1Byb2Nlc3Nvci1Db250cm9sIiwiV2FzaGVyRHJ5ZXItU2V0dGluZ3MiXSwiaXNzIjoiRVU6UFJEOjA0IiwiZXhwIjoxNTg2MTgyMjE4LCJpYXQiOjE1ODYwOTU4MTgsImp0aSI6IjZmZDA0ODQyLTcxMGItNGE4ZC1iZjdkLTI0M2I4M2QxZGNkMyJ9.M94oYagR3RwYEH06rh0FhxVMyg1ipNBDoqfnTy5etvPVyveyg-BDW-E3qyZz1qlueH7Mb-R-bKghUQF_onETezr6QCSs695JgpGbhhBIshypMQ35h1sFYcN6GQSbOx3kmdmdc_G55YIii6HUm0J5ineXwQ3xSw7j8RqC84lGGgHEMhd_6PYFLm4oCHAlpd5o0_wwxfWecPrfwtzZyT3ksOOs0u82JQgckACcD2QnDXyeR_KN6sSOKOyhwkvSdJgF_DQLvD0uHthYTPjJx0cciNvLIGTrSsDST6wP6fzZZysUvAlvyzP55SkLw5IInWnJVaFUrW-G4ulMLwZ7HosNag";
///						s:10:"expires_in";i:86400;
///						s:5:"scope";s:897:"CookProcessor-Monitor Dryer-Settings Washer-Control Dryer-Monitor Settings IdentifyAppliance CleaningRobot Washer-Settings CoffeeMaker Washer CookProcessor-Settings Hob-Settings Oven-Monitor Hood-Control WasherDryer-Monitor Oven-Settings CoffeeMaker-Monitor Monitor Hob-Monitor WasherDryer-Control Dishwasher-Control Refrigerator-Control Dishwasher Dryer-Control CleaningRobot-Control WineCooler Freezer-Monitor WasherDryer Refrigerator-Monitor CookProcessor Freezer Freezer-Settings WineCooler-Control WineCooler-Settings Dishwasher-Settings MonitorAppliance Hood Dryer FridgeFreezer-Monitor CleaningRobot-Settings Refrigerator Refrigerator-Settings Dishwasher-Monitor CoffeeMaker-Settings FridgeFreezer-Settings CleaningRobot-Monitor WineCooler-Monitor Freezer-Control CoffeeMaker-Control Washer-Monitor Hood-Monitor Hood-Settings FridgeFreezer-Control CookProcessor-Control WasherDryer-Settings";
///						s:13:"refresh_token";s:100:"eyJ4LXJlZyI6IkVVIiwieC1lbnYiOiJQUkQiLCJ0b2tlbiI6ImFkMGVlZmQ3LTlmYjgtNDhlZi05NjkwLWQ1OTEzYzg5Yjk5ZSJ9";
///						s:10:"token_type";s:6:"Bearer";
///						}
///
						if (isset($tokens))
						{
							LB_LBSID_DEBUG($id, $remark.' $tokens ...................... '.serialize($tokens),			6, $log, $ll, false);
///
							if (array_key_exists('expires_in', $tokens))
								LB_LBSID_DEBUG($id, $remark.' EXPIRES in ................... '.$tokens['expires_in'],	6, $log, $ll, false);
							if (array_key_exists('token_type', $tokens))
								LB_LBSID_DEBUG($id, $remark.' TOKEN type ................... '.$tokens['token_type'],	6, $log, $ll, false);
							if (array_key_exists('id_token', $tokens))
								LB_LBSID_DEBUG($id, $remark.' TOKEN id ..................... '.$tokens['id_token'],		6, $log, $ll, false);
							if (array_key_exists('scope', $tokens))
								LB_LBSID_DEBUG($id, $remark.' SCOPE/MAXIMUM ................ '.$tokens['scope'],		6, $log, $ll, false);
///



									$access  = $tokens['access_token'];
									$refresh = $tokens['refresh_token'];
///
									logic_setVar($id, 1, $code);
									logic_setVar($id, 2, $access);
									logic_setVar($id, 3, $refresh);
///
									LB_LBSID_DEBUG($id, $remark.' $code from CODE storred ...... '.$access,  6, $log, $ll, false);
									LB_LBSID_DEBUG($id, $remark.' $access from CODE storred .... '.$access,  6, $log, $ll, false);
									LB_LBSID_DEBUG($id, $remark.' $refresh from CODE storred ... '.$refresh, 6, $log, $ll, false);
///
									$config['access_token']  = $access;
									$config['refresh_token'] = $refresh;
///
									unset($client, $tokens);
								}
							}
///




							file_put_contents($pfad_hc_json_config, json_encode($config));
///
							LB_LBSID_DEBUG($id, $remark.' $config ...................... '.serialize($config), 6, $log, $ll, false);
							LB_LBSID_DEBUG($id, $remark.' $lastToken ................... '.$lastToken, 6, $log, $ll, false);
///
///							if (class_exists($klasse))
							$client  = new HomeConnect\Clients\HcClient($config);
							$homsi	 = $client->getAppliances('', NULL);







// 2020-05-31 01:15:17	425324	2971	KLASSE	make/body/!200/decode .......... a:1:{s:5:"error";a:2:{s:3:"key";s:28:"SDK.Error.504.GatewayTimeout";s:11:"description";s:55:"Timeout on Home Connect subsystem. Please try it again.";}}
// 2020-05-31 01:15:17	425651	2971	KLASSE	make/body/!200/match3 .......... a:3:{i:0;s:29:"HTTP/1.1 504 Gateway Time-out";i:1;s:3:"504";i:2;s:16:"Gateway Time-out";}
// 2020-05-31 01:15:17	425852	2971	KLASSE	make/body/!200/match3[1] ....... 504
// 2020-05-31 01:15:17	426043	2971	KLASSE	make/body/!200/match3[2] ....... Gateway Time-out







							$accessi = $client->access_token;
							$decode  = $client->decode;
///
							LB_LBSID_DEBUG($id, $remark.' T E S T $accessi ............. '.serialize($accessi)	, 6, $log, $ll, false);
							LB_LBSID_DEBUG($id, $remark.' T E S T $access .............. '.serialize($access)	, 6, $log, $ll, false);
							LB_LBSID_DEBUG($id, $remark.' T E S T $decode .............. '.serialize($decode)	, 6, $log, $ll, false);
							LB_LBSID_DEBUG($id, $remark.' T E S T $homsi ............... '.serialize($homsi)	, 6, $log, $ll, false);
///
							if (isset($decode['error']['key']))
							{
								$http_code = $decode['error']['key'];
								$http_code_description = $decode['error']['description'];
								logic_setOutput($id, 5, $http_code);
								LB_LBSID_DEBUG($id, $remark.' http ERROR ................... '.$http_code, 3, $log, $ll, false);
								LB_LBSID_DEBUG($id, $remark.' http ERROR ................... '.$http_code_description, 3, $log, $ll, false);
///
								if ($accessi != $access)
								{
									$access = $accessi;
									$config['access_token']	= $access;
									$lastToken = time();
									unset($accessi);
									logic_setVar($id,  2, $access);
									logic_setVar($id, 15, $lastToken);
								}
								if ($http_code == 429)
								{
									if (preg_match('/ period of ([0-9]*) seconds/', $http_code_description, $time))
									{
										LB_LBSID_DEBUG($id, $remark.' http ERROR (429) ............. '.$time.' seconds HC-ACCOUNT is blocked, afterwards LBS should continue automaticaly', 3, $log, $ll, false);
										usleep(1000*1000*$time + 1000*1000*15);
									}
								}




								elseif ($http_code == 504)
								{
									LB_LBSID_DEBUG($id, $remark.' http ERROR (504) ............. LBS stopped '.$http_code.', '.$http_code_description, 3, $log, $ll, true);
								}




								elseif ($decode['error']['description'] == 'The access token expired')
								{
									LB_LBSID_DEBUG($id, $remark.' $access ...................... new Access-token refreshed', 3, $log, $ll, false);
								}
							}
							usleep(1000*1000);
							logic_setVar($id, 4, 1);
						}
					}






///
//					init = 0, am Ende 1 ... für ersten Durchlauf oder SSE Ausfall (time-out) -> stream_context_create()
					if (logic_getVar($id, 5) == 0)
					{
						LB_LBSID_DEBUG($id, $remark.' >>>'								, 3, $log, $ll, false);
						LB_LBSID_DEBUG($id, $remark.' bereich ...................... V#5', 3, $log, $ll, false);
						if (isset($http_response_header[0]))
						{
							LB_LBSID_DEBUG($id, $remark.' $http_response_header[0]-v ... '.$http_response_header[0], 3, $log, $ll, false);
							if ($http_response_header[0] == 'HTTP/1.1 504 Gateway Time-out')
							{
								usleep(1000*1000*10);
							}
						}
						$header  = array('Accept: text/event-stream','Cache-Control: no-cache','Authorization: Bearer '.$access);
						$options = array('http' => array('method' => 'GET','header' => $header));
						$context = stream_context_create($options);
						$url	 = 'https://api.home-connect.com/api/homeappliances/events';
						$fp		 = fopen($url, "rb", false, $context);
						stream_set_timeout($fp, 80);
///							
						if (isset($http_response_header[0]))
						{
							LB_LBSID_DEBUG($id, $remark.' $http_response_header[0]-n ... '.$http_response_header[0], 3, $log, $ll, false);
							if ($http_response_header[0] == 'HTTP/1.1 504 Gateway Time-out')
							{
								usleep(1000*1000*10);
							}
						}
						LB_LBSID_DEBUG($id, $remark.' $access (V#2) ................ '.$access	, 6, $log, $ll, false);
						LB_LBSID_Debug($id, $remark.' $refresh (V#3) ............... '.$refresh	, 6, $log, $ll, false);
						LB_LBSID_DEBUG($id, $remark.' fopen() ...................... EXECUTED'	, 6, $log, $ll, false);
						logic_setOutputQueued($id, 5, 0);
						logic_setVar($id, 5, 1);
					}
///
//					init = 0, am Ende 1 ... für ersten Durchlauf oder $client new oder new $access if available
					if (logic_getVar($id, 6) == 0)
					{
						LB_LBSID_DEBUG($id, $remark.' >>>'								, 3, $log, $ll, false);
						LB_LBSID_DEBUG($id, $remark.' bereich ...................... V#6', 3, $log, $ll, false);
///
						if (!isset($homsi))
						{
							$client = new HomeConnect\Clients\HcClient($config);
							$homeappliances = $client->getAppliances('', NULL);
							LB_LBSID_DEBUG($id, $remark.' API-request .................. EXECUTED'	, 6, $log, $ll, false);
							LB_LBSID_Debug($id, $remark.' ACCESS-token ................. VALIDATING'	, 6, $log, $ll, false);
///
							$accessi = $client->access_token;
///
							if ($accessi != $access)
							{
								$access = $accessi;
								$config['access_token']	= $access;
								logic_setVar($id,  2, $access);
								logic_setVar($id, 15, $lastToken);
///
								LB_LBSID_DEBUG($id, $remark.' ACCESS-token ................. EXPIRED'							, 3, $log, $ll, false);
								LB_LBSID_DEBUG($id, $remark.' $access ...................... new ACCESS-token stored (remanent)'	, 3, $log, $ll, false);
								LB_LBSID_DEBUG($id, $remark.' $access new storred in V#2 ... '.$access							, 3, $log, $ll, false);
							}
///
///								Refresh-Token wird nach 60 Tagen, wenn nicht benutzt, ungültig - ein neuer CODE "request" ist notwendig !!!
///								Refresh token doesn’t change – it expire when you not use it for 60 days. Otherwise it stays the same, while Access Token expire after 24 hours.
///
								$refreshi = $client->refresh_token;
///
							if ($refreshi != $refresh)
							{
								$refresh = $refreshi;
								$config['refresh_token'] = $refresh;
								logic_setVar($id, 3, $refresh);
								LB_LBSID_DEBUG($id, $remark.' $refresh storred in V#3 ...... '.$refresh, 3, $log, $ll, false);
							}
						}
						else
						{
							$homeappliances = $homsi;
							unset($homsi);
						}

						if (isset($homeappliances))
						{
							$ha = $client->foreachKeyIndex($homeappliances, 'data', 'homeappliances');
							logic_setOutputQueued($id, 4, serialize($homeappliances));
///
							if (isset($ha))
							{
								$count_ha = count($ha);
								LB_LBSID_DEBUG($id, $remark.' $ha .......................... '.$count_ha.' home-connect device(s) found', 3, $log, $ll, false);
///
								for ($i = 0; $i < $count_ha; $i++)
								{
									if (isset($ha[$i]))
									{
										LB_LBSID_DEBUG($id, $remark.' appliance '.$i.' .................. '.strtoupper($ha[$i]['type']).' with name '.strtoupper($ha[$i]['name']).' found == '.serialize($ha[$i]), 6, $log, $ll, false);
///
										if ($ha[$i]['type'] == 'Hob')
										{
											$stream = array('trigger' => array('Hob' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id,  6, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/hob .................. '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'Hood')
										{
											$stream = array('trigger' => array('Hood' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id,  7, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/hood ................. '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'Oven')
										{
											$stream = array('trigger' => array('Oven' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id,  8, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/oven ................. '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'Dryer')
										{
											$stream = array('trigger' => array('Dryer' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id,  9, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/dryer ................ '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'Washer')
										{
											$stream = array('trigger' => array('Washer' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id, 10, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/washer ............... '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'WineCooler')
										{
											$stream = array('trigger' => array('WineCooler' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id, 11, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/winecooler ........... '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'Dishwasher')
										{
											$stream = array('trigger' => array('Dishwasher' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id, 12, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/dishwasher ........... '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'WasherDryer')
										{
											$stream = array('trigger' => array('WasherDryer' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id, 13, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/washerdryer .......... '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'CoffeeMaker')
										{
											$stream = array('trigger' => array('CoffeeMaker' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id, 14, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/coffeemaker .......... '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'Refrigerator')
										{
											$stream = array('trigger' => array('Refrigerator' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id, 15, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/refrigerator ......... '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'FridgeFreezer')
										{
											$stream = array('trigger' => array('FridgeFreezer' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id, 16, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/fridgefreezer ........ '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'CleaningRobot')
										{
											$stream = array('trigger' => array('CleaningRobot' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id, 17, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/cleaningrobot ........ '.serialize($stream), 6, $log, $ll, false);
										}
										if ($ha[$i]['type'] == 'CookProcessor')
										{
											$stream = array('trigger' => array('CookProcessor' => $ha[$i]));
											logic_setOutputQueued($id,  1, serialize($stream));
											logic_setOutputQueued($id, 18, serialize($ha[$i]));
											LB_LBSID_DEBUG($id, $remark.' $stream/cookprocessor ........ '.serialize($stream), 6, $log, $ll, false);
										}
									}
								}
							}
						}
						LB_LBSID_logImmer($id, '>', $log);
						LB_LBSID_DEBUG($id, $remark.' new HTTP-CODE ................ '.$http_response_header[0]	, 3, $log, $ll, false);
						LB_LBSID_logImmer($id, '>', $log);
///
						unset($accessi, $refreshi);
						usleep(1000*1000);
						logic_setOutputQueued($id, 1, serialize($stream = array('trigger' => array('config' => $config))));
						logic_setVar($id, 6, 1);
					}
///
					$line = fgets($fp);
					$meta = stream_get_meta_data($fp);
///
					if ($meta['timed_out'])
					{
						if ($fp)
						{
							fclose($fp);
						}
						LB_LBSID_DEBUG($id, $remark.' SSE timeout .................. no EVENT for last 60 seconds, trying to reconnect', 3, $log, $ll, false);
						LB_LBSID_DEBUG($id, $remark.' SSE stopped .................. '.$http_response_header[0], 3, $log, $ll, false);
						logic_setOutputQueued($id, 5, 1);
						logic_setVar($id, 5, 0);
						usleep(1000*1000*5);
///						mache_reconnect();
					}
					else
					{
						if (empty($line))
						{
							if ($fp)
							{
								fclose($fp);
							}
///
///							Prüfen warum $line is empty ?!?
///							Oder einfach einfacher und mit  V#4 und V#5  darüberfahren ... ?!?
///
							LB_LBSID_logImmer($id, '>', $log);
							LB_LBSID_logImmer($id, '>', $log);
							LB_LBSID_DEBUG($id, $remark.' $line ........................ EMPTY'.$line, 3, $log, $ll, false);
							LB_LBSID_logImmer($id, '>', $log);
							LB_LBSID_logImmer($id, '>', $log);
							logic_setVar($id, 4, 0);
							logic_setVar($id, 5, 0);
							usleep(1000*1000*5);
///							mache_reconnect();
						}
						elseif (time() > $lastToken + 86400)									//	prüfen welche V# korrekt ist ... !!!
						{
							$lastToken = time();
							logic_setVar($id, 6, 0);
							LB_LBSID_DEBUG($id, $remark.' 24h .......................... new ACCESS-token needed', 3, $log, $ll, false);
						}
						else
						{
							LB_LBSID_DEBUG($id, $remark.' $line ........................ '.$line, 6, $log, $ll, false);
///							LB_LBSID_DEBUG($id, $remark.' T E S T $meta ................ '.serialize($meta), 6, $log, $ll, false);
					
///							if ($line !="\n")
							if (isset($line))
							{
								LB_LBSID_logImmer($id, '>', $log);
								LB_LBSID_DEBUG($id, $remark.' $line ........................ SSE OK, ACCESS-token OK', 6, $log, $ll, false);
								LB_LBSID_DEBUG($id, $remark.' $line ........................ '.$line, 6, $log, $ll, false);
								LB_LBSID_logImmer($id, '>', $log);
///
								usleep(1000*1000);
								$str = rtrim($line, "\n");
								if (!empty($str))
								{
///									LB_LBSID_DEBUG($id, $remark.' T E S T $str ................. '.$str, 6, $log, $ll, false);
									list ($links, $rechts) = explode(':', $str, 2);
///
									if ($links == 'id')
									{
///										LB_LBSID_DEBUG($id, $remark.' $links ....................... '.$links,  6, $log, $ll, false);
///										LB_LBSID_DEBUG($id, $remark.' $rechts (event/ha/id) ........ '.$rechts, 6, $log, $ll, false);
///										LB_LBSID_logImmer($id, '>', $log);
										usleep(1000*10);
									}
									elseif ($links == 'event')
									{
										$stream = array('trigger' => array('event' => array('event' => $rechts)));								
										logic_setOutputQueued($id, 1, serialize($stream));
///										LB_LBSID_DEBUG($id, $remark.' $links ....................... '.$links,  6, $log, $ll, false);
///										LB_LBSID_DEBUG($id, $remark.' $rechts (event/ha/event) ..... '.$rechts, 6, $log, $ll, false);
										LB_LBSID_DEBUG($id, $remark.' $stream/ha/event ............. '.serialize($stream), 6, $log, $ll, false);
										LB_LBSID_logImmer($id, '>', $log);
										usleep(1000*10);
									}
									elseif ($links == 'data')
									{
										$data = json_decode($rechts, true);
										$haid = $data['haId'];
///
										if (isset($ha))
										{
///											LB_LBSID_DEBUG($id, $remark.' $ha .......................... '.serialize($ha), 6, $log, $ll, false);
											for ($i = 0; $i < count($ha); $i++)
											{
///												$ha[$i] = a:7:{s:4:"name";s:15:"Geschirrspüler";s:5:"brand";s:7:"SIEMENS";s:3:"vib";s:10:"SX578S06TE";s:9:"connected";b:1;s:4:"type";s:10:"Dishwasher";s:7:"enumber";s:13:"SX578S06TE/01";s:4:"haId";s:31:"SIEMENS-SX578S06TE-68A40E0021F0";}
///												$haid =	SIEMENS-SX578S06TE-68A40E0021F0
												if ($ha[$i]['haId'] == $haid)
												{
													$stream = array('trigger' => array('data' => array($ha[$i]['type'] => array($haid => array('data' => $data)))));
													logic_setOutputQueued($id, 1, serialize($stream));
///													LB_LBSID_DEBUG($id, $remark.' $links ....................... '.$links,  6, $log, $ll, false);
///													LB_LBSID_DEBUG($id, $remark.' $rechts (event/ha/data) ...... '.$rechts, 6, $log, $ll, false);
													LB_LBSID_DEBUG($id, $remark.' $stream/data ................. '.serialize($stream), 6, $log, $ll, false);
///																				  $stream/data ................. a:1:{s:7:"trigger";a:1:{s:4:"data";a:1:{s:10:"Dishwasher";a:1:{s:31:"SIEMENS-SX578S06TE-68A40E0021F0";a:1:{s:4:"data";a:2:{s:5:"items";a:1:{i:0;a:7:{s:9:"timestamp";i:1588430736;s:8:"handling";s:4:"none";s:3:"uri";s:114:"/api/homeappliances/SIEMENS-SX578S06TE-68A40E0021F0/programs/active/options/BSH.Common.Option.RemainingProgramTime";s:3:"key";s:38:"BSH.Common.Option.RemainingProgramTime";s:4:"unit";s:7:"seconds";s:5:"value";i:9480;s:5:"level";s:4:"hint";}}s:4:"haId";s:31:"SIEMENS-SX578S06TE-68A40E0021F0";}}}}}}
///																				  $stream/data ................. a:1:{s:7:"trigger";a:1:{s:4:"data";a:1:{s:10:"Dishwasher";a:1:{s:31:"SIEMENS-SX578S06TE-68A40E0021F0";a:1:{s:4:"data";a:2:{s:5:"items";a:1:{i:0;a:7:{s:9:"timestamp";i:1588430736;s:8:"handling";s:4:"none";s:3:"uri";s:109:"/api/homeappliances/SIEMENS-SX578S06TE-68A40E0021F0/programs/active/options/BSH.Common.Option.ProgramProgress";s:3:"key";s:33:"BSH.Common.Option.ProgramProgress";s:4:"unit";s:1:"%";s:5:"value";i:27;s:5:"level";s:4:"hint";}}s:4:"haId";s:31:"SIEMENS-SX578S06TE-68A40E0021F0";}}}}}}
													LB_LBSID_logImmer($id, '>', $log);
													usleep(1000*500);	//	ohne kann nur ein Wert aus dieser Schleife am Eingang des anderen LBS verarbeitet werden (zu schnell)
												}
											}
										}
									}
									else
									{
										LB_LBSID_DEBUG($id, $remark.' $stream/data ................. no DATA from SSE', 6, $log, $ll, false);
										LB_LBSID_logImmer($id, '>', $log);
									}
								}
							}
						}
					}
				}
			}
		}
		if ($fp)
		{
			fclose($fp);
		}
		LB_LBSID_DEBUG($id, $remark.' WHILE-loop (Daemon) stopped ...', 3, $log, $ll, false);
		LB_LBSID_logImmer($id, '>', $log);
///
		logic_setVar($id,   4, 0);
		logic_setVar($id,   5, 0);
		logic_setVar($id,   6, 0);
		logic_setVar($id, 300, 0);
///
		LB_LBSID_FINISH($id, $log);
	}
}



function LB_LBSID_DEBUG($id, $message, $LbsLogLevel, $einLog, $DebugLogLevel, $exit = false)
{
	$a = array('LOG_EMERG_','LOG_ALERT_','LOG_CRIT__','LOG_ERROR_','LOG_WARNING','LOG_NOTICE','LOG_INFO__','LOG_DEBUG_');
	if ($einLog == 1) $logName = logic_getVar($id, 102)."__LBSLBSID__";
	if ($einLog == 0) $logName = logic_getVar($id, 102)."__LBSLBSID__".logic_getVar($id, 103);
///	if ($einLog == 0) $logName = logic_getVar($id, 102)."__LBSLBSID__".logic_getVar($id, 103).' '.logic_getVar($id, 104);
	$LbsLogLevel < $DebugLogLevel && writeToCustomLog($logName, $LbsLogLevel.' of '.$DebugLogLevel, "EXELBSID (ID$id)".' | '.$message);
	if ($exit)
	{
		writeToCustomLog($logName, $LbsLogLevel.' of '.$DebugLogLevel, "EXELBSID (ID$id)".' | Home-Connect | Der LBS wurde aufgrund eines ERRORs abgebrochen !!!');
		sql_disconnect();
		exit();
	}
}

function LB_LBSID_FINISH($id, $einLog = 0)
{
	if ($einLog == 1) $logName = logic_getVar($id, 102)."__LBSLBSID__";
	if ($einLog == 0) $logName = logic_getVar($id, 102)."__LBSLBSID__".logic_getVar($id, 103);
///	if ($einLog == 0) $logName = logic_getVar($id, 102)."__LBSLBSID__".logic_getVar($id, 103).' '.logic_getVar($id, 104);
	writeToCustomLog($logName, '......', "EXELBSID (ID$id) der Baustein wurde abgearbeitet .... EXEC beendet");
	sql_disconnect();
	exit();
}

function LB_LBSID_logImmer($id, $message, $einLog = 0)
{
	if ($einLog == 1) $logName = logic_getVar($id, 102)."__LBSLBSID__";
	if ($einLog == 0) $logName = logic_getVar($id, 102)."__LBSLBSID__".logic_getVar($id, 103);
///	if ($einLog == 0) $logName = logic_getVar($id, 102)."__LBSLBSID__".logic_getVar($id, 103).' '.logic_getVar($id, 104);
	writeToCustomLog($logName, '......', $message);
}

?>

###[/EXEC]###
