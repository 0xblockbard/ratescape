<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;

class ProcessBrowsershot implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $file_name;
    public $width;
    public $height;
    public $browsershot_url;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($file_name, $width, $height, $browsershot_url)
    {
        $this->file_name    = $file_name;
        $this->width        = $width;
        $this->height       = $height;
        $this->browsershot_url    = $browsershot_url;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $file_name  = $this->file_name;
        $width      = $this->width;
        $height     = $this->height;
        $browsershot_url  = $this->browsershot_url;

        $image = Browsershot::url($browsershot_url)
            ->setScreenshotType('png')
            ->windowSize($width, $height)
            ->setOption('viewport.deviceScaleFactor', 1)
            ->screenshot();


        Storage::disk('s3')->put($file_name, $image, 'public');
    }
}
