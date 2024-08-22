<?php

namespace App\Cells\template;

class HeaderCell
{
    public function rtlHeader(array $header): string
    {
        return "<header class='masthead mb-auto'>
    <div class='inner'>
    
        <h3 class='masthead-brand'>{$header['title']}</h3>
        <nav class='nav nav-masthead justify-content-center'>
        <a class='nav-link ml-3' href='/lang/en'>English</a>
            <a class='nav-link' href='/'>صفحه اصلی</a>
    <a class='nav-link' href='fa/login'>ورود</a>
            <a class='nav-link' href='fa/register'>ثبت نام</a>
        </nav>
    </div>
</header>";
    }

    public function ltrHeader(array $header): string
    {
        return "<header class='masthead mb-auto'>
    <div class='inner'>
        <h3 class='masthead-brand'>{$header['title']}</h3>
        <nav class='nav nav-masthead justify-content-center'>
            <a class='nav-link' href='/'>Home</a>
    <a class='nav-link' href='en/login'>Login</a>
            <a class='nav-link' href='en/login'>Register</a>
            <a class='nav-link ml-3' href='/lang/fa'>فارسی</a>
        </nav>
    </div>
</header>";
    }
}
