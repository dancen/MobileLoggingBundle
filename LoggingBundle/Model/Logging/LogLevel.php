<?php

namespace Mobile\LoggingBundle\Model\Logging;


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogLevel
 *
 * @author admin
 */
interface LogLevel  {
    
  const LOG_DEBUG    = "DEBUG";
  const LOG_INFO     = "INFO";
  const LOG_NOTICE   = "NOTICE";
  const LOG_WARNING  = "WARNING";
  const LOG_ERROR    = "ERROR";
  const LOG_CRITICAL = "CRITICAL";
      
}