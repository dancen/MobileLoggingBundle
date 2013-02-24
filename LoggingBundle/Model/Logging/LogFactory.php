<?php

namespace Mobile\LoggingBundle\Model\Logging;

use Mobile\LoggingBundle\Model\Logging\LogManager;
use Mobile\LoggingBundle\Entity\Logger;


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogManager
 *
 * @author admin
 */

class LogFactory  {
    
  public static function createLogManager($controller){
      return new LogManager($controller);
  } 
  
  public static function createLogger(){
      return new Logger();
  }
      
}