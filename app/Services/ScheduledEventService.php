<?php

namespace App\Services;

use App\Models\ScheduledEvent;



class ScheduleEventServise{

    public function __construct(private ScheduledEvent $event) {
        $this->event = new ScheduledEvent();
    }

    public function getAllEvents()
    {
        //all product
        return $this->event->orderBy('created_at','desc')->get();
    }

    public function showEvent($id)
    {
        //show product
        return $this->event->find($id);
    }

    public function createEvent($data)
    {
        //show product
        return $this->event->create($data);
    }

    public function updateEvent($id,$data)
    {
        //find product
        $updateEvent = $this->event->showEvent($id);
        if($updateEvent != null)
        {
            //update event
            $updateEvent->update($data);

            return $this->event->showEvent($id);
        }
        else
        {
            return null;
        }
    }

    public function deleteEvent($id)
    {
        //find product
        $updateEvent = $this->event->showEvent($id);
        if($updateEvent != null)
        {
            // delete event
            return $updateEvent->delete();
        }
        else
        {
            return false;
        }
    }


}