<?php

class PageAbuseReport extends DataObject {
    private static $db = array('Reason' => 'Text');
    private static $has_one = array('Page' => 'Page');
}
