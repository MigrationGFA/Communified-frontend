<?php

namespace App\Models;

use CodeIgniter\Model;

class CalendarModel extends Model
{
    protected $table = 'calendar_scheduler';
    protected $primaryKey = 'id';
    protected $allowedFields = ['eventTitle', 'startDate', 'endDate', 'eventURL', 'allDay', 'location', 'host', 'guests', 'eventLabel', 'eventDescription'];

     public function getAllEvents($email)
    {
        return $this->where('host', $email)->findAll();
    }
    
     public function getAllStartupEvents($email)
    {
        return $this->where('host', $email)->orLike('guests', $email, 'both')->findAll();
        // return $this->where('host !=', $email)->orLike('guests', $email, 'both')->findAll();
    }

    public function insertEvent($data)
    {
        $this->insert($data);
        return $this->db->insertID();
    }

    public function updateEvent($id, $data)
    {
        $this->set('eventTitle', $data[0]);
        $this->set('startDate', $data[1]);
        $this->set('endDate', $data[2]);
        $this->set('eventURL', $data[3]);
        $this->set('location', $data[4]);
        $this->set('guests', $data[5]);
        $this->set('eventLabel', $data[6]);
        $this->set('eventDescription', $data[7]);
        $this->where('id', $id);
        return $this->update();
    }

    public function deleteEvent($id)
    {
        return $this->where('id', $id)->delete();
    }

    public function getSingleEvent($eventId)
    {
        return $this->where('id', $eventId)->first();
    }


     // public function mysqlCheck($input)
    // {
    //     // $getInput = str_replace("'", "", esc($input));
    //     $getInput = esc($input);
    //     return $getInput;
    // }

}
