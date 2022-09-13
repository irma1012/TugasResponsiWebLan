<?php

namespace App\Controllers;

use App\Controllers\BaseController; 
use App\Models\Mahasiswa;

class Pages extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function view($page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    } 

    public function home()
    {
        $data['title'] = 'Home';
        return view('templates/header', $data)
            . view('pages/home')
            . view('templates/footer');
    }
    public function about()
    {
        $data['title'] = 'About';
        return view('templates/header', $data)
            . view('pages/about')
            . view('templates/footer');
    }

    public function mahasiswa()
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();

        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa        
        ];

        return view('templates/header', $data)
            . view('pages/mahasiswa', $data)
            . view('templates/footer');
    }
    public function test(){
        dd('test');
    }
    }


