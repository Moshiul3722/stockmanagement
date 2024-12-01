<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionEntryController extends Controller
{
    public function DaptarList()
    {
        return view('admin.section.list_daptar');
    }
    public function DaptarAdd()
    {
        return view('admin.section.add_daptar');
    }
    public function WingList()
    {
        return view('admin.section.list_wing');
    }
    public function WingAdd()
    {
        return view('admin.section.add_wing');
    }
    public function subSectionList()
    {
        return view('admin.section.list_sub_section');
    }
    public function subSectionAdd()
    {
        return view('admin.section.add_sub_section');
    }
    public function sectionList()
    {
        return view('admin.section.list_section');
    }
    public function sectionAdd()
    {
        return view('admin.section.add_section');
    }
}
