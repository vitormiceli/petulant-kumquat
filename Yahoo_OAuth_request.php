<?php
$consumer_key = 'dj0yJmk9U2psa3RIZzNoUE1lJmQ9WVdrOVMwOXNSMnRJTkhNbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD0wNw--';
$consumer_secret = 'e7dd8d64fee90d2067665c23e28d2f8d74d1f269';

$o = new OAuth( $consumer_key, $consumer_secret,
                OAUTH_SIG_METHOD_HMACSHA1,
                OAUTH_AUTH_TYPE_URI );

$url = 'http://fantasysports.yahooapis.com/fantasy/v2/game/nfl';

try {
  if( $o->fetch( $url ) ) {

    print $o->getLastResponse();

    print "Successful fetch\n";
  } else {
    print "Couldn't fetch\n";
  }
} catch( OAuthException $e ) {
  print 'Error: ' . $e->getMessage() . "\n";
  print 'Response: ' . $e->lastResponse . "\n";

}
?>
