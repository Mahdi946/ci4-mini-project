<?php
namespace App\Cells\home;

class MainCell
{
    public function rtlMain(): string
    {
        $dashboardBtn = "";

        if(service('auth')->user()){
            if(service('auth')->user()->inGroup('superadmin')){
                $dashboardBtn = "<p class='lead'>
            <a href='/admin/panel' class='btn btn-lg btn-secondary'>داشبورد</a>
        </p>";
            }
            else
            {
                $dashboardBtn = "<p class='lead'>
            <a href='/user/panel' class='btn btn-lg btn-secondary'>داشبورد</a>
        </p>";
            }
        }

       return "<main role='main' class='inner cover'>
        <h1 class='cover-heading'>سلام به پروژه نمونه من خوش آمدید</h1>
        <p class='lead'>در اینجا میتونی عضو بشی و پروفایل خودت رو مدیریت کنی. میتونی مقاله آپلود کنی و اون ها رو مدیریت کنی</p>".
        $dashboardBtn.
    "</main>";
    }

    public function ltrMain(): string
    {
        $dashboardBtn = "";

        if(service('auth')->user()){
            if(service('auth')->user()->inGroup('superadmin')){
                $dashboardBtn = "<p class='lead'>
            <a href='/admin/panel' class='btn btn-lg btn-secondary'>Dashboard</a>
        </p>";
            }
            else
            {
                $dashboardBtn = "<p class='lead'>
            <a href='/user/panel' class='btn btn-lg btn-secondary'>Dashboard</a>
        </p>";
            }
        }

        return "<main role='main' class='inner cover'>
        <h1 class='cover-heading'>Hi Welcome To My Sample Project</h1>
        <p class='lead'>You Can Here Make Account And Manage That , Make Articles Or Upload Your Articles , Hopefully Enjoyed</p>".
        $dashboardBtn.
    "</main>";
    }
}