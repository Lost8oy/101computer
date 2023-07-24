<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;
class IssueController extends Controller
{
    public function create (){
        return view('issue.create');
    }

    public function index () {
        $issues = issue::all();
        return view('issue.index', ['issues' => $issues]);
    }
    public function store (Request $request) {
        $data = $request->validate([
            'item_id'=> 'required',
            'start_date'=> 'required',
            'solved'=> 'required',
            'finish_date'=> 'nullable',
            'comment'=> 'nullable'
        ]);

        $newissue = issue::create($data);
        return redirect(route('issue.index'));

    }
    public function edit (issue $issue){
        return view('issue.edit', ['issue' => $issue]);
    }
    public function update (issue $issue, Request $request) {
        $data = $request->validate([
            'item_id'=> 'required',
            'start_date'=> 'required',
            'solved'=> 'required',
            'finish_date'=> 'nullable',
            'comment'=> 'nullable'
        ]);

        $issue->update($data);
        return redirect(route('issue.index'))->with('success', 'Issue Update Successfully');

    }
    public function destroy (issue $issue) {
        $issue->delete();
        return redirect(route('issue.index'))->with('success', 'Issue delated Successfully');
    }
}
