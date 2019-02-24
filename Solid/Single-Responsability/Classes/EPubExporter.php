<?php

namespace Classes;

use Interfaces\Exportable;

class EPubExporter implements Exportable
{
    public function export(Book $book)
    {
        $content = "The book {$book->getTitle()} from the author {$book->getAuthor()} ";
        $content .= "published in the year {$book->getYear()} and contains the following content: ";
        $content .= "{$book->getContent()} is being exported into ePub format";
        
        return $content;
    }
}