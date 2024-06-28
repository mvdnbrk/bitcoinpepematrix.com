<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('rune:cache-floor-price')->everyFiveMinutes();
Schedule::command('rune:cache-market-cap')->everyFifteenMinutes();
Schedule::command('rune:cache-holder-count')->hourly();
