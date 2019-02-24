<?php

namespace Interfaces;

Use Classes\Book;

interface Exportable 
{
    public function export(Book $book);
}