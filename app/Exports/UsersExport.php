<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    public function view(): View
    {
        return view('admin.user.excel', [
            'alluser' =>User::where('status','1')->orderBy('id','DESC')->get(),
        ]);
    }
}
