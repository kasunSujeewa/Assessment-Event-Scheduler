<?php

namespace App\Jobs;

use App\Mail\EventReminder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailNotifierUser implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    protected $email;
    protected $title;
    protected $start_time;
    public function __construct($email,$title,$start_time)
    {
        $this->email = $email;
        $this->title = $title;
        $this->start_time = $start_time;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send(new EventReminder($this->title,$this->start_time));
        Log::info("emails - ",['email' => $this->email]);
    }
}
