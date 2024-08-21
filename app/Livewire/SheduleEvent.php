<?php

namespace App\Livewire;

use App\Events\NotifyEventWhenEventCreated;
use App\Http\Resources\EventResource;
use App\Models\Course;
use App\Models\ScheduledEvent;
use App\Services\ScheduleEventServise;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Masmerise\Toaster\Toaster;

class SheduleEvent extends Component
{
    use WithPagination;
    public $title, $description, $starting_time, $ending_time, $notify_data, $scheduleEvent = [], $scheduleEventService, $now, $courses, $notifcation_data = [];



    public function render()
    {
        $this->now = Carbon::now()->format('Y-m-d H:i');
        $this->courses = Course::orderBy('created_at', 'desc')->get();
        return view('livewire.shedule-event', [
            'Events' => ScheduledEvent::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:3',
            'starting_time' => 'required|unique:scheduled_events,starting_time',
            'ending_time' => 'nullable|after:starting_time',
            'notify_data' => 'required'
        ]);

        $this->store();
    }

    public function store()
    {
        $this->notifcation_data['department'] = $this->notify_data;

        $scheduleEvent = ScheduledEvent::create([
            'title' => $this->title,
            'description' => $this->description,
            'starting_time' => $this->starting_time,
            'ending_time' => $this->ending_time,
            'notify_data' => $this->notify_data,
        ]);

        event(new NotifyEventWhenEventCreated(json_decode($this->notify_data), $this->title, $this->starting_time));
        $this->reset(['title', 'description', 'starting_time', 'ending_time', 'notify_data', 'notifcation_data']);

        //session()->flash('message', 'Your event scheduled successfully.');
        //$this->dispatch('notify', ['type' => 'success', 'message' => 'Your message has been sent successfully!']);
        Toaster::success('Your event scheduled successfully!!');
    }

    public function remove($id)
    {


        $event = ScheduledEvent::find($id);
        if ($event != null) {
            $event->delete();
        }
        Toaster::warning('Your event deleted successfully!!');
    }
}
