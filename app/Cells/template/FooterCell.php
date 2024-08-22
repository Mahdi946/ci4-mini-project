<?php
namespace App\Cells\template;

class FooterCell
{
    public function rtlFooter(): string
    {
        return "<footer class='mastfoot mt-auto'>
        <div class='inner'>
            <p>تهیه شده توسط مهدی مهدوی, <a href='https://github.com/Mahdi946'>Mahdi Github</a>.</p>
        </div>
    </footer>";
    }

    public function ltrFooter(): string
    {
        return "<footer class='mastfoot mt-auto'>
        <div class='inner'>
            <p>Made By Mahdi Mahdavi, <a href='https://github.com/Mahdi946'>Mahdi Github</a>.</p>
        </div>
    </footer>";
    }
}