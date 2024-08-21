<?php

namespace App\Listeners;

use App\Events\NotifyEventWhenEventCreated;
use App\Jobs\EmailNotifierUser;
use App\Mail\EventReminder;
use App\Models\Lecturer;
use App\Models\Student;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendNotificationsWhenEventCreated
{
    /**
     * Create the event listener.
     */
   
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     */
    public function handle(NotifyEventWhenEventCreated $event): void
    {
        $notification_data = $event->notifyData;
        //get all emails 
        $emails = $this->getUserDataFromCourse($notification_data->id);

        $this->sendEmails($emails,$event->title,$event->start_time);


        Log::info("data notifications",['data' => $notification_data]);
    }

    public function getUserDataFromCourse($id) 
    {
        $emails_students = Student::where('course_id',$id)->pluck('email');
        $emails_lecturers = Lecturer::where('course_id',$id)->pluck('email');

        $emails = array_merge($emails_students->toArray(),$emails_lecturers->toArray());

        return $emails;
        
    }
    public function sendEmails($emails,$title,$start_time) 
    {
        
        foreach ($emails as $email) {
            EmailNotifierUser::dispatch($email,$title,$start_time)->onQueue('low');
           
        }
        
    }
}
