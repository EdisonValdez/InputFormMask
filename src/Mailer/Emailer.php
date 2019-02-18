<?php
/**
 * Created by PhpStorm.
 * User: valdez
 * Date: 2/18/2019
 * Time: 1:00 PM
 */

namespace App\Mailer;


use Psr\Log\LoggerInterface;

class Emailer
{
    /**
     * @var string|string
     */
    private $mySweetParam;
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Emailer constructor.
     * @param string $mySweetParam
     */
    public function __construct(string $mySweetParam, LoggerInterface $logger)
    {
        $this->mySweetParam = $mySweetParam;
        $this->logger = $logger;
    }

    /**
     * @return \Swift_Message
     */
    public function create() : \Swift_Message
    {

    }
}