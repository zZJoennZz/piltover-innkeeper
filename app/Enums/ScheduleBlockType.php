<?php
namespace App\Enums;

enum ScheduleBlockType:string
{
    case ClientAppointment = 'client_appointment';
    case InternalAppointment = 'internal_appointment';
    case OtherAppointment = 'other_appointment';
    case Holiday = 'holiday';
    case Unavailable = 'unavailable';
}