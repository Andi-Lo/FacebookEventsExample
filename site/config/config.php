<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

c::set('debug', true);
c::set('whoops', false);

/*---------------------------------------
Kirby Routing Configuration
---------------------------------------*/

c::set('routes', array(
  array(
      'pattern' => '(:all)/FacebookEvents.php',
      'action'  => function($uri) {
        $news = page('home'); // a kirby page object related to the fb events
        $fbe = FacebookEvents($news);
        $events = $fbe->getFacebookEvents('1676014109285451'); // your facebook page ID
        $fb_event = $fbe->getEvent($events, 0); // the first event
        snippet('sections/contentnews', array('event' => $fb_event, 'news' => $news)); // call your snippet for rendering
      },
      'method' => 'POST'
  )
));


/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
