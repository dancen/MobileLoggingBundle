<?php

namespace Mobile\LoggingBundle\Model\Logging;


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogPacker
 *
 * @author admin
 */

class LogPacker  {
    
  private $logs;
  private $normalized_row;
  private $max_rows = 10000;
  private $doctrine; 
    
  public function __construct($doctrine,$max_rows){
      
      $this->doctrine = $doctrine;
      $this->setLogs();
      $this->setMaxRows($max_rows);
      $this->entityToArray();
      $this->pack();      

  }
  
  public function setLogs(){
      
      $this->logs = $this->doctrine
                         ->getRepository('MobileLoggingBundle:Logger')
                         ->findAll();
      
  }
  
  public function unsetLogs(){
      
      $em = $this->doctrine->getEntityManager();
      
      for($i=0; $i<count($this->logs); $i++){
        $em->remove($this->logs[$i]);
        $em->flush();
      }
      
  }
    
  public function entityToArray(){
      
      for($i=0; $i<count($this->logs); $i++){
             
        $class = get_class($this->logs[$i]);
        $methods = get_class_methods($class);
      
        foreach( $methods as $method){
           if( substr($method,0,3) == "get" ){
             if($method=="getCreatedAt"){
                $this->normalized_row .= $this->logs[$i]
                                              ->$method()
                                              ->format("Y-m-d H:m:s")."|";
             } else {
                $this->normalized_row .= $this->logs[$i]
                                              ->$method()."|"; 
                    }
                }
             }
             
             $this->normalized_row .= "\n";
            
      }
  }
  
  public function setMaxRows($rows){
      $this->max_rows = $rows;
  }
  
  public function pack(){
      
      if( count($this->logs) > $this->max_rows ){
          
          try {
              
            $zp = gzopen("log.gz", "w9");
            gzwrite($zp, $this->normalized_row);
            gzclose($zp);
            
            $this->unsetLogs();
            
          } catch(Exception $e){
              var_dump($e);
          }                    
          
      }      
      
  }
  
   
  
          
      
}