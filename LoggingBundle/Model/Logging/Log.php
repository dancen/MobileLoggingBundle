<?php

namespace Mobile\LoggingBundle\Model\Logging;



/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Log
 *
 * @author admin
 */

abstract class Log {
    
  abstract protected function setIpAddress($ip);
  abstract protected function setSid($sid);
  abstract protected function setCommCode($comm_code);
  abstract protected function setUrl($url);
  abstract protected function setLevel($level);
  abstract protected function setMessage($message);
  abstract protected function setDatetime($datetime);
  abstract protected function setStage($stage); 
  
  public function getDateTime(){
      return new \DateTime();
  }  
        
      
}