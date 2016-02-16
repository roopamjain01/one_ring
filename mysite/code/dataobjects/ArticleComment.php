<?php

class ArticleComment extends DataObject
{
    private static $db = array (
        'Email' => 'Varchar',
        'Comment' => 'Text'
    );

    private static $has_one = array (
        'ArticlePage' => 'ArticlePage'
    );
}
