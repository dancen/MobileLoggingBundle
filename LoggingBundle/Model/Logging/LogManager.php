<?php

namespace Mobile\LoggingBundle\Model\Logging;

use Mobile\LoggingBundle\Model\Logging\Log;
use Mobile\LoggingBundle\Model\Logging\LogPacker;
use Mobile\LoggingBundle\Model\Logging\LogFactory;



/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogManager
 *
 * @author admin
 */

class LogManager extends Log  {
    
  private $url;
  private $ip_address;
  private $comm_code;
  private $session_id;
  private $level;
  private $message;
  private $stage;
  private $datetime;
  private $doctrine;
  
  public function __construct($controller){
      
      $packer = new LogPacker($controller->getDoctrine(),10000);
      $this->doctrine = $controller->getDoctrine();
      $this->setUrl($controller->getRequest()->getUri());
      $this->setIpAddress($controller->getRequest()->getClientIp());
      $this->setSid($controller->getRequest()->getSession()->getId());
      $this->setDatetime(new \DateTime());
  }
  
  public function setMessageLog( $comm_code,
                                 $level,
                                 $stage,
                                 $message ){
      
      $this->setCommCode($comm_code);
      $this->setLevel($level);
      $this->setStage($stage);
      $this->setMessage($message);     
      $this->save();
      
  }
      
  protected function setUrl($url){ $this->url = $url; }          
  protected function setLevel($level){ $this->level = $level; }
  protected function setMessage($message){ $this->message = $message; }
  protected function setDatetime($datetime){ $this->datetime = $datetime; }
  protected function setStage($stage){ $this->stage = $stage; }
  protected function setIpAddress($ip){ $this->ip_address = $ip; }
  protected function setSid($sid){ $this->session_id = $sid; }
  protected function setCommCode($comm_code){ $this->comm_code = $comm_code; }
  
  private function save(){
        $broker_logger = LogFactory::createLogger();
        $broker_logger->setCreatedAt($this->datetime);
        $broker_logger->setLogLevel($this->level);
        $broker_logger->setLogMessage($this->message);
        $broker_logger->setLogStage($this->stage);
        $broker_logger->setLogUrl($this->url);
        $broker_logger->setLogIpaddress($this->ip_address);
        $broker_logger->setLogCommcode($this->comm_code);
        $broker_logger->setLogSid($this->session_id);
        $this->doctrine->getEntityManager()->persist($broker_logger);
        $this->doctrine->getEntityManager()->flush();
  }
  
  
      
}