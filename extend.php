<?php

/*
 * This file is part of duroom/last-tweet.
 *
 * Copyright (c) 2022 NKDuy
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace DuRoom\EventsCountDown;

use DuRoom\Extend;
use DuRoom\Api\Event\Serializing;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/less/admin.less'),
    new Extend\Locales(__DIR__.'/locale'),
    (new Extend\Settings)
        ->serializeToForum('countdownEndTime', 'duroom-events-countdown.countdownEndTime')
        ->serializeToForum('event_title', 'duroom-events-countdown.event_title')
        ->serializeToForum('fontawesome_events_icon', 'duroom-events-countdown.fontawesome_events_icon'),

];
