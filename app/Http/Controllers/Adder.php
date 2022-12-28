<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Adder extends Controller
{
    public function index(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $data = array('username' => $username, 'password' => $password);
        DB::table('add_users')->insert($data);
        
        echo "<script>
        alert('Successfully Updated');
         window.location.href= '/login';
         </script>";
    }
    public function logging(){
        return view('login');
    }
    public function loginvalidate(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        // $data = array('username' => $username, 'password' => $password);
        $userDetails = DB::table('add_users')->where('username', $username)->where('password', $password)->value('id');
        // return $userDetails;
        
        if($userDetails > 0){
            $data = DB::table('add_users')->where('id', $userDetails)->get();
            // return $data;
            return view('homepage', ['data' => $data]);
        }
    }
    public function delete(Request $request){
        $id = $request->query('id');
        // return $id;
        DB::table('add_users')->delete($id);
        return "
        <script>
            alert('User deleted Successfully')
            window.location.href='/'
        </script>
        ";

    }

    public function updateuser(Request $request){

        $id = $request->query('id');
        $data =DB::table('add_users')->where('id', $id);
        return 'hello';

    }
}
