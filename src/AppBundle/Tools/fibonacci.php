<?php
namespace AppBundle\Tools;

/**
 * Class fibonacci
 * @author Nicolas Touzanne
 * @package AppBundle\Tools
 */
class fibonacci implements \Iterator, \ArrayAccess
{
    public function offsetExists($offset)
    {
        return
            is_int($offset) &&
            $offset >= 0 &&
            $offset <= $this->maxPosition;
    }

    public function offsetGet($offset)
    {
        If($this->offsetExists($offset)){
            throw new \OutOfBoundsException("Offset demande n'existe pas");
        }
        for ($this->rewind();$this->valid();$this->next()) {
            if($offset == $this->key()){
                $currentValue=$this->current();
                $this->rewind();
                return $currentValue;
                break;
            }
        }
        throw new \LogicException("on ne devrait pas avoir cette erreur");
    }

    public function offsetSet($offset, $value)
    {
        throw new \LogicException('Offset not implemented');
    }

    public function offsetUnset($offset)
    {
        throw new \LogicException('Offset not implemented');
    }

    /**
     * @var int
     */
    private $position = 0;

    /**
     * @var int
     */
    private $currentValue = 0;

    /**
     * @var int
     */
    private $previousValue = 1;

    /**
     * @var int
     */
    private $maxPosition = 20;

    public function __construct($maxPosition = 20)
    {
        $this->maxPosition = $maxPosition;
    }

    public function current()
    {
        return  $this->currentValue;
    }
    public function  next()
    {
        $previousValue = $this->currentValue;
        $this->currentValue += $this->previousValue;
        $this->previousValue = $previousValue;
        $this->position++ ;
    }
    public function key()
    {
        return $this->position;
    }
    public function valid()
    {
        return $this->position <= $this->maxPosition;
    }
    public function rewind()
    {
        $this->position = 0;
        $this->currentValue = 0;
        $this->previousValue = 0;
    }
}