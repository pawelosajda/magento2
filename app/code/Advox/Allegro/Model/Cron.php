<?php

namespace Advox\Allegro\Model;

/**
 * Description of Cron
 *
 * @author pawel
 */
class Cron
{
    protected $logger;
    
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function logHello()
    {
        $this->logger->info('Hello from cron job');
        return $this;
    }
}
