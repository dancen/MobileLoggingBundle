<?php

namespace Mobile\LoggingBundle\Model\Logging;


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogStage
 *
 * @author admin
 */
interface LogStage  {
    
  const LOG_DEV       = "DEV";
  const LOG_TEST      = "TEST";
  const LOG_PREPROD   = "PREPROD";
  const LOG_PROD      = "PROD";
      
}