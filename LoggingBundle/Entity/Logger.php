<?php

namespace Mobile\LoggingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mobile\LoggingBundle\Entity\Logger
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Logger
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $log_url
     *
     * @ORM\Column(name="log_url", type="string", length=255)
     */
    private $log_url;

    /**
     * @var string $log_level
     *
     * @ORM\Column(name="log_level", type="string", length=50)
     */
    private $log_level;
    
    /**
     * @var string $log_ipaddress
     *
     * @ORM\Column(name="log_ipaddress", type="string", length=50)
     */
    private $log_ipaddress;
    
    /**
     * @var string $log_sid
     *
     * @ORM\Column(name="log_sid", type="string", length=100)
     */
    private $log_sid;
    
    /**
     * @var string $log_commcode
     *
     * @ORM\Column(name="log_commcode", type="string", length=100)
     */
    private $log_commcode;
    
    /**
     * @var string $log_stage
     *
     * @ORM\Column(name="log_stage", type="string", length=10)
     */
    private $log_stage;

    /**
     * @var string $log_message
     *
     * @ORM\Column(name="log_message", type="text")
     */
    private $log_message;

    /**
     * @var datetime $created_at
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set log_url
     *
     * @param string $logUrl
     */
    public function setLogUrl($logUrl)
    {
        $this->log_url = $logUrl;
    }

    /**
     * Get log_url
     *
     * @return string 
     */
    public function getLogUrl()
    {
        return $this->log_url;
    }

    /**
     * Set log_level
     *
     * @param string $logLevel
     */
    public function setLogLevel($logLevel)
    {
        $this->log_level = $logLevel;
    }

    /**
     * Get log_level
     *
     * @return string 
     */
    public function getLogLevel()
    {
        return $this->log_level;
    }

    /**
     * Set log_message
     *
     * @param string $logMessage
     */
    public function setLogMessage($logMessage)
    {
        $this->log_message = $logMessage;
    }

    /**
     * Get log_message
     *
     * @return string 
     */
    public function getLogMessage()
    {
        return $this->log_message;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set log_stage
     *
     * @param string $logStage
     */
    public function setLogStage($logStage)
    {
        $this->log_stage = $logStage;
    }

    /**
     * Get log_stage
     *
     * @return string 
     */
    public function getLogStage()
    {
        return $this->log_stage;
    }

    /**
     * Set log_ipaddress
     *
     * @param string $logIpaddress
     */
    public function setLogIpaddress($logIpaddress)
    {
        $this->log_ipaddress = $logIpaddress;
    }

    /**
     * Get log_ipaddress
     *
     * @return string 
     */
    public function getLogIpaddress()
    {
        return $this->log_ipaddress;
    }

    /**
     * Set log_sid
     *
     * @param string $logSid
     */
    public function setLogSid($logSid)
    {
        $this->log_sid = $logSid;
    }

    /**
     * Get log_sid
     *
     * @return string 
     */
    public function getLogSid()
    {
        return $this->log_sid;
    }

    /**
     * Set log_commcode
     *
     * @param string $logCommcode
     */
    public function setLogCommcode($logCommcode)
    {
        $this->log_commcode = $logCommcode;
    }

    /**
     * Get log_commcode
     *
     * @return string 
     */
    public function getLogCommcode()
    {
        return $this->log_commcode;
    }
}