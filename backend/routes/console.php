<?php

use Illuminate\Support\Facades\Schedule;

// Hourly roulette draw — runs at :00 every hour
Schedule::command('roulette:draw')
    ->hourly()
    ->name('roulette-draw')
    ->withoutOverlapping();

// Sync fee balances every 5 minutes
Schedule::command('roulette:sync-fees')
    ->everyFiveMinutes()
    ->name('roulette-sync-fees')
    ->withoutOverlapping();

// Daily cleanup of old draw snapshots
Schedule::command('roulette:cleanup')
    ->dailyAt('03:00')
    ->name('roulette-cleanup')
    ->withoutOverlapping();
