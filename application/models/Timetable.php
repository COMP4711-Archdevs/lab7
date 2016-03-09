<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Timetable extends CI_Model{
    
    //for the root element of the xml document
    protected $xml = null;
    protected $daysofweek = array(); 
    protected $periods = array(); 
    protected $courses = array();
    protected $daydropdown = array();
    protected $bookingdropdown = array();
    
    public function __construct(){
        parent::__construct();
        
        $this->xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . "/application/data/" . 'timetable.xml');
        
        //print_r($this->xml);
        
        //build a list of days of the week
        foreach($this->xml->week->dayofweek as $day){
            $this->daysofweek[(string)$day['day']] = $day;
        }
        
        //build a list of days of the week
        foreach($this->xml->week->dayofweek as $day){
            $this->daydropdown[(string)$day['day']] = (string)$day['day'];
        }
        
        //build a list of periods
        foreach($this->xml->periods->periodtimeslot as $period){
            $this->periods[(string)$period['time']] = $period;
        }
        
        //build a list of days of the week
        foreach($this->xml->periods->periodtimeslot as $period){
            $this->bookingdropdown[(string)$period['time']] =(string)$period['time'];
        }
        
        //build a list of courses
        foreach($this->xml->courses->coursedetails as $course){
            $this->courses[(string)$course->coursename] = $course;
        }
    }
    
    //returns each xml child "daysofweek" as object in an array
    function getDaysofweek(){
        return $this->daysofweek;
    }
    
    //returns the name of the days currently stored in the xml (ex. Monday)
    function getDayDropDown(){
        return $this->daydropdown;
    }
    
    //returns each xml child "periodtimeslot" as object in an array
    function getPeriods(){
        return $this->periods;
    }
    
    //returns the time values currently stored in the xml (ex. 8:30)
    function getBookingDropDown(){
        return $this->bookingdropdown;
    }
    
    //returns each xml child "coursedetails" as object in an array
    function getCourses(){
        return $this->courses;
    }
}