<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\queue;

/**
 * Job Interface.
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
interface JobInterface
{
    /**
     * @param $id  queue id
     * @param Queue $queue which pushed and is handling the job
     */
    public function execute($id, $queue);
}
