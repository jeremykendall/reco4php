<?php

/**
 * This file is part of the GraphAware Reco4PHP package.
 *
 * (c) GraphAware Limited <http://graphaware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace GraphAware\Reco4PHP\Filter;

use GraphAware\Common\Type\NodeInterface;

class ExcludeSelf implements Filter
{
    public function doInclude(NodeInterface $input, NodeInterface $item)
    {
        return $input->identity() !== $item->identity();
    }
}
