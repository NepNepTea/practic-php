<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Model\Discipline;
use Model\Group;
use Model\Student;
use Src\Auth\Auth;
class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/go');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function disciplines(): string
    {
        $disciplines = Discipline::all();
        return (new View())->render('site.discipline', ['disciplines' => $disciplines]);
    }

    public function users(): string
    {
        $users = User::where('role', 'сотрудник')->get();
        return (new View())->render('site.user', ['users' => $users]);
    }
    public function groups(): string
    {
        $groups = Group::all();
        return (new View())->render('site.group', ['groups' => $groups]);
    }

    public function students(): string
    {
        $students = Student::all();
        return (new View())->render('site.student', ['students' => $students]);
    }

    public function add_user(): string
    {
        return (new View())->render('site.add_user');
    }
    public function add_discipline(Request $request): string
    {
        if ($request->method === 'POST' && Discipline::create($request->all())) {
        app()->route->redirect('/disciplines');
        }
        return (new View())->render('site.add_discipline');
    }
    public function add_group(): string
    {
        return (new View())->render('site.add_group');
    }

    public function add_student(): string
    {
        return (new View())->render('site.add_student');
    }
}