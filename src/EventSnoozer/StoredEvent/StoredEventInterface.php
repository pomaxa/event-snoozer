<?php

namespace EventSnoozer\StoredEvent;

interface StoredEventInterface
{
    /**
     * @param \DateTime $runtime
     * @return StoredEventInterface
     */
    public function setRuntime(\DateTime $runtime);

    /**
     * @return \DateTime
     */
    public function getRuntime();

    /**
     * @param string $className
     * @return StoredEventInterface
     */
    public function setEventClass($className);

    /**
     * @return string
     */
    public function getEventClass();

    /**
     * @param int $priority
     * @return StoredEventInterface
     */
    public function setPriority($priority);

    /**
     * @return int
     */
    public function getPriority();

    /**
     * @param array $additionalData
     * @return StoredEventInterface
     */
    public function setAdditionalData(array $additionalData);

    /**
     * @return array
     */
    public function getAdditionalData();
}
