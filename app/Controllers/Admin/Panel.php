<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Panel extends BaseController
{
    public ?array $users = null;
    public ?array $articles = null;
    public ?string $locale = null;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger); // TODO: Change the autogenerated stub
        $this ->locale = setting()->get('App.defaultLocale','locale');
        $this->articles = model('Article')->join('users','users.id = articles.user_id')->select(['articles.id','username','title','description','file'])->findAll();
        $this->users = service('auth')->getProvider()->findAll();
        service('language')->setLocale($this->locale);
    }

    public function index()
    {
        return view('panel/admin/dashboard_'.$this->locale,['users'=>$this->users,'articles'=>$this->articles]);
    }
}
