<?php

/**
 * This file is part of plumphp/plum.
 *
 * (c) Florian Eckerstorfer <florian@eckerstorfer.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Plum\Plum;

use Plum\Plum\Reader\ReaderInterface;
use Plum\Plum\Writer\WriterInterface;

/**
 * WorkflowConcatenator.
 *
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2014-2016 Florian Eckerstorfer
 */
class WorkflowConcatenator implements ReaderInterface, WriterInterface
{
    /** @var mixed[] */
    private $data = [];

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->data);
    }

    /**
     * Write the given item.
     *
     * @param mixed $item
     */
    public function writeItem($item)
    {
        $this->data[] = $item;
    }

    /**
     * Prepare the writer.
     */
    public function prepare()
    {
    }

    /**
     * Finish the writer.
     */
    public function finish()
    {
    }
}
