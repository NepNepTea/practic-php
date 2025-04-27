<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Model\Discipline;
use Model\Group;
use Model\Student;
use Model\Speciality;
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
        return new View('site.hello', ['message' => 'Здравствуйте']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/disciplines');
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
            app()->route->redirect('/disciplines');
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
        $specialities = Speciality::all();
        $groups = Group::all();
        return (new View())->render('site.group', ['groups' => $groups, 'specialities' => $specialities]);
    }

    public function students(): string
    {
        $students = Student::all();
        return (new View())->render('site.student', ['students' => $students]);
    }

    public function add_discipline(Request $request): string
    {
        if ($request->method === 'POST' && Discipline::create($request->all())) {
        app()->route->redirect('/disciplines');
        }
        return (new View())->render('site.add_discipline');
    }
    public function add_group(Request $request): string
    {
        $specialities = Speciality::all();
        if ($request->method === 'POST' && Group::create($request->all())) {
            app()->route->redirect('/groups');
        }
        return (new View())->render('site.add_group', ['specialities' => $specialities]);
    }

    public function add_student(Request $request): string
    {
        $groups = Group::all();
        if ($request->method === 'POST' && Student::create($request->all())) {
            app()->route->redirect('/students');
        }
        return (new View())->render('site.add_student', ['groups' => $groups]);
    }

    public function student_info(Request $request): string
    {
        $students = Student::where('id', $request->id)->get();
        return (new View())->render('site.student_info', ['students' => $students]);
    }
}