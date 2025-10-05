<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Register health check command
Artisan::command('app:health-check', function () {
    $this->info('Running application health check...');
    
    $status = [
        'timestamp' => now()->toISOString(),
        'services' => []
    ];
    
    // Check database connection
    try {
        DB::connection()->getPdo();
        $status['services']['database'] = 'ok';
    } catch (\Exception $e) {
        Log::error('Database health check failed: ' . $e->getMessage());
        $status['services']['database'] = 'error: ' . $e->getMessage();
    }
    
    // Check cache
    try {
        $key = 'health_check_' . time();
        Cache::put($key, 'ok', 10);
        $result = Cache::get($key);
        Cache::forget($key);
        
        $status['services']['cache'] = $result === 'ok' ? 'ok' : 'error: Cache test failed';
    } catch (\Exception $e) {
        Log::error('Cache health check failed: ' . $e->getMessage());
        $status['services']['cache'] = 'error: ' . $e->getMessage();
    }
    
    // Check storage permissions
    try {
        $testFile = storage_path('app/health_check_test.txt');
        file_put_contents($testFile, 'test');
        $content = file_get_contents($testFile);
        unlink($testFile);
        
        $status['services']['storage'] = $content === 'test' ? 'ok' : 'error: Storage test failed';
    } catch (\Exception $e) {
        Log::error('Storage health check failed: ' . $e->getMessage());
        $status['services']['storage'] = 'error: ' . $e->getMessage();
    }
    
    // Determine overall status
    $overallStatus = 'ok';
    foreach ($status['services'] as $serviceStatus) {
        if ($serviceStatus !== 'ok') {
            $overallStatus = 'error';
            break;
        }
    }
    
    $status['status'] = $overallStatus;
    
    // Log the health check results
    Log::info('Health check completed', $status);
    
    // Display results
    $this->line('Health Check Results:');
    $this->line('====================');
    $this->line('Status: ' . strtoupper($overallStatus));
    $this->line('Timestamp: ' . $status['timestamp']);
    $this->line('');
    
    foreach ($status['services'] as $service => $serviceStatus) {
        $this->line(ucfirst($service) . ': ' . strtoupper($serviceStatus));
    }
    
    // Send alert if there are issues
    if ($overallStatus === 'error') {
        $this->error('Health check failed! Some services are not working properly.');
        return 1;
    }
    
    $this->info('Health check completed successfully!');
    return 0;
})->purpose('Check the health of the application');