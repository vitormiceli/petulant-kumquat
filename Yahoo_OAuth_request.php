<?php
$consumer_key = 'dj0yJmk9ZjNiUkZCeGUweHJmJmQ9WVdrOVVHZzNUbE5DTnpJbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD0yZQ--';
$consumer_secret = '451671c074310bb5c0b47dafe7d5b076d6821392';

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
