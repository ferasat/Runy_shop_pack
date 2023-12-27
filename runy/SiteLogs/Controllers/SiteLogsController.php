<?php

namespace SiteLogs\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SiteLogs\Models\SiteLogs;

class SiteLogsController extends Controller
{
    public function index()
    {
        $logs = SiteLogs::query()->orderByDesc('id')->paginate(50);
        return view('SiteLogsView::indexSiteLogs' , compact('logs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(SiteLogs $siteLogs)
    {
        //
    }

    public function edit(SiteLogs $siteLogs)
    {
        //
    }

    public function update(Request $request, SiteLogs $siteLogs)
    {
        //
    }

    public function destroy(SiteLogs $siteLogs)
    {
        //
    }
}
