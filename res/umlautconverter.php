<?php

/*
 * The MIT License
 * 
 * Copyright 2015 mmk2410.
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FINESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 */

/**
 * This is a small tool for converting german umlauts into HTML codes.
 * This fixes the error that one some servers weird sings are displayed.
 * 
 * @author Marcel Kapfer <marcelmichaelkapfer@yahoo.co.nz>
 */

class UmlautConverter
{
    function convert($text)
    {
        $output = str_replace("ä","&auml;",$text);
        $output = str_replace("Ä","&Auml;",$output);
        $output = str_replace("ö","&ouml;",$output);
        $output = str_replace("Ö","&Ouml;",$output);
        $output = str_replace("ü","&uuml;",$output);
        $output = str_replace("Ü","&Uuml;",$output);
        $output = str_replace("ß","&szlig;",$output);
        return $output;
    }
}