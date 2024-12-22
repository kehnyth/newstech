<br />
<b>Fatal error</b>:  Uncaught exception 'Google_Service_Exception' with message 'Error calling GET https://www.googleapis.com/analytics/v3/data/realtime?ids=ga%3A101377040&amp;metrics=rt%3AactiveUsers: (400) Realtime reports are no longer available in Universal Analytics. Please migrate to GA4 https://support.google.com/analytics/answer/11583528.' in /home/newstech/www/ga/google-api-php-client-master/src/Google/Http/REST.php:110
Stack trace:
#0 /home/newstech/www/ga/google-api-php-client-master/src/Google/Http/REST.php(62): Google_Http_REST::decodeHttpResponse(Object(Google_Http_Request), Object(Google_Client))
#1 [internal function]: Google_Http_REST::doExecute(Object(Google_Client), Object(Google_Http_Request))
#2 /home/newstech/www/ga/google-api-php-client-master/src/Google/Task/Runner.php(174): call_user_func_array(Array, Array)
#3 /home/newstech/www/ga/google-api-php-client-master/src/Google/Http/REST.php(46): Google_Task_Runner-&gt;run()
#4 /home/newstech/www/ga/google-api-php-client-master/src/Google/Client.php(590): Google_Http_ in <b>/home/newstech/www/ga/google-api-php-client-master/src/Google/Http/REST.php</b> on line <b>110</b><br />
