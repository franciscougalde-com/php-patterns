<?php 

namespace Classes;

class Book
{
    public function getTitle()
    {
        return 'SOLID';
    }

    public function getContent()
    {
        return 'Patrones de Diseño en PHP: SOLID';
    }

    public function getAuthor()
    {
        return 'Francisco Ugalde';
    }

    public function getYear()
    {
        return '2019';
    }
    public function getBookContent()
    {
        return [
            'title'  => $this->getTitle(),
            'title'  => $this->getContent(),
            'author' => $this->getDate(),
            'year'   => $this->getYear(),
        ];
    }
}
