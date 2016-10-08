<?php

namespace App\Services;

use Michelf\MarkdownExtra;
use Michelf\SmartyPants;

class Markdowner
{

    public function toHTML($text)
    {
        $text = $this->preTransFromText($text);
        $text = MarkdownExtra::defaultTransform($text);
        //$text = SmartyPants::defaultTransform($text);
        $text = $this->postTransFromText($text);
        return $text;
    }

    protected function preTransFromText($text)
    {
        return $text;
    }

    protected function postTransFromText($text)
    {
        return $text;
    }
}