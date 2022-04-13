<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $posts = Post::all();

        return view('home',['posts' => $posts]);

        //return view('home');
    }

    public function create(Request $request)
    {
        return view('create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'Name' => 'required',
            'Surname' => 'required',
            'idNumber' => 'required|digits:13|unique:posts',
            'mobileNumber' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|digits:10',
            'emailAddress' => 'required|email|unique:posts',
            'dateOfBirth' => 'required|date_format:Y-m-d|before:today|nullable',
            'language' => 'required',
            'interest[]' => "json_encode(['interest'])",
        ]);

        Post::create([
            'Name' => request('Name'),
            'Surname' => request('Surname'),
            'idNumber' => request('idNumber'),
            'mobileNumber' => request('mobileNumber'),
            'emailAddress' => request('emailAddress'),
            'dateOfBirth' => request('dateOfBirth'),
            'language' => request('language'),
            'interest' => request('interest'),
        ]);

        $user = new Post();
        $user->Name = $request->Name;
        $user->emailAddress = $request->emailAddress;

        if('email' != null){
            MailController::sendRegistrationEmail($user->Name, $user->emailAddress);
            return redirect('home')->with('jsAlert','User added and email sent!');
            //not null send email
        }
        return flash('alert-danger', 'Something went wrong');
    }

    public function edit(Post $post)
    {
        return view('edit',['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'Name' => 'required',
            'Surname' => 'required',
            'idNumber' => 'required|digits:13',
            'mobileNumber' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|digits:10',
            'emailAddress' => 'required|email',
            'dateOfBirth' => 'required|date_format:Y-m-d|before:today|nullable',
            'language' => 'required',
            'interest[]' => "json_encode(['interest'])",
        ]);

        $post->update([
            'Name' => request('Name'),
            'Surname' => request('Surname'),
            'idNumber' => request('idNumber'),
            'mobileNumber' => request('mobileNumber'),
            'emailAddress' => request('emailAddress'),
            'dateOfBirth' => request('dateOfBirth'),
            'language' => request('language'),
            'interest' => request('interest'),
        ]);

        return redirect('home');
    }

    public function delete(Post $post)
    {
        return view('delete',['post' => $post]);
    }

    public function destroy(POST $post)
    {
        $post->delete();

        return redirect('home');
    }
    
}
