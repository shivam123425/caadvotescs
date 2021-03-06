<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use DB;
use Auth;
use App\Mail\EmployeeReg;
use Illuminate\Support\Facades\Mail;
use Sichikawa\LaravelSendgridDriver\SendGrid;

class RegisterController extends Controller
{
    
    public function register(Request $request)
    {
        $this->validate(request(), [
            'emp_name' => 'required',
            'emp_email' => 'required|email',
            'emp_phone' => 'required',
            'emp_category' => 'required',
            'emp_type' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('emp_email');
        
        Employee::create(request(['emp_name', 'emp_phone', 'emp_category', 'emp_type', 'emp_email', 'password']));
        Mail::to($email)->send(new EmployeeReg());
        return redirect()->to(route('admin.register.employee'))->with('status', 'Employee Registered Successfully');

    }
}

