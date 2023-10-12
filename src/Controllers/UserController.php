<?php

namespace Guirod\SimpleMvc\Controllers;

use Guirod\SimpleMvc\Controller;
use Guirod\SimpleMvc\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $this->render('user/index', ['users' => $this->getUsers()]);
    }

    public function view(array $params)
    {
        if (!isset($this->getUsers()[$params['id']-1])) {
            $this->index();
        } else {
            $user = $this->getUsers()[$params['id']-1];
        }
        
        $this->render(
            'user/view', 
            [
                'user' => $user,
                'citation' => [
                    'quote' => "Lorsqu'une porte du bonheur se ferme, une autre s'ouvre ; mais parfois on observe si longtemps celle qui est fermée qu'on ne voit pas celle qui vient de s'ouvrir à nous.",
                    'author' => 'Helen Keller'
                ],
            ]
        );
    }

    /**
     * getUsers returns fixtures data. 
     */
    public function getUsers(): array
    {
        return [
            new User('John Doe', 'john@example.com'),
            new User('Jane Doe', 'jane@example.com')
        ];
    }
}