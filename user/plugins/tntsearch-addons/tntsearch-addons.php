<?php
/**
 * TNT Search Add-ons
 *
 * Licensed under MIT, see LICENSE.
 */

namespace Grav\Plugin;

use Grav\Common\Grav;
use Grav\Common\Plugin;
use Grav\Common\Page\Page;
use Grav\Common\Uri;
use RocketTheme\Toolbox\Event\Event;

class TntsearchAddonsPlugin extends Plugin {
	public static function getSubscribedEvents() {
	    return [
		'onTNTSearchIndex' => ['onTNTSearchIndex', 0]
	    ];
	}

	public function onTNTSearchIndex(Event $e) {
	    $fields = $e['fields'];
	    $page = $e['page'];

	    if (isset($page->header()->sections)) {
		$fields->sections = serialize($page->header()->sections);
	    }
	}
}
