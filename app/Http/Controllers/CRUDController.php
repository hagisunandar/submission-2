<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function form()
    {
        $data['utama'] = 'Halaman Utama';

        return view ('home', $data);
    }

    public function create()
    {
        $data['tambah'] = 'My Create';

        return view ('create', $data);
    }

    public function update()
    {
        $data['ubah'] = 'My Update';

        return view ('update', $data);
    }

    public function delete()
    {
        $data['hapus'] = 'My Delete';

        return view ('delete', $data);
    }
}
