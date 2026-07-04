<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gbook;
use App\Models\Msg;
use Illuminate\Http\Request;

class MsgController extends Controller
{
    //
    public function index(Msg $msg)
    {
        $msgs_list = $msg->orderBy('id','desc')
        ->paginate(5);
        $data = [
            'msgs'=>$msgs_list
        ];
        return view('gbook', $data);
    }
    public function save(Gbook $request, Msg $msg)
    {
        try {

            $postdate = $request->validated();
            $msg->create($postdate);

            return redirect()
                ->route('index')
                ->with('success', '投稿が完了しました。');

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->with('error', '投稿に失敗しました。');
        }
    }

}
