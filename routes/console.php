<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('rune:cache-holder-count')->hourly();
