<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-11-14
 * Time: 下午 8:26.
 */

namespace xltxlm\page\tests;

use setup\Doc\GoodsModel;
use setup\Doc\GoodsPage;
use xltxlm\page\PageObject;

class PageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * 带 where 条件,非赋值查询.
     */
    public function test1()
    {
        $page = (new PageObject());
        $Prepage = 10;
        $total = 100;
        $pageID = 3;
        $page->setPageID($pageID)->setPrepage($Prepage)->setTotal($total);
        $this->assertEquals($Prepage, $page->getPrepage());
        $this->assertEquals($total, $page->getTotal());
        $this->assertEquals($pageID, $page->getCurrentpage());
        //条目的偏移量
        $this->assertEquals(20, $page->getFrom());
        $this->assertEquals($pageID, $page->getCurrentpage());
    }

}
