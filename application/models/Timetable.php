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
    
    public function __construct(){
        parent::__construct();
        
        $this->xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . "/application/data/" . 'timetable.xml');
        
        //print_r($this->xml);
        
        //build a list of days of the week
        foreach($this->xml->week->dayofweek as $day){
            $this->daysofweek[(string)$day['day']] = $day;
        }
        
        //build a list of periods
        foreach($this->xml->periods->periodtimeslot as $period){
            $this->periods[(string)$period['time']] = $period;
        }
        
        //build a list of courses
        foreach($this->xml->courses->coursedetails as $course){
            $this->courses[(string)$course->coursename] = $course;
        }
    }
    
    function getDaysofweek(){
        return $this->daysofweek;
    }
    
    function getPeriods(){
        return $this->periods;
    }
    
    function getCourses(){
        return $this->courses;
    }
    
    
}