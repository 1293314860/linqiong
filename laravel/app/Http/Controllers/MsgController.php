<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Msg;
class MsgController extends Controller
{
    public function index(){
        $msg=Msg::get();
        return view('msg.index',['msg'=>$msg]);
    }

    public function add(){
        return view('msg.add');
    }

    public function addPost(){
        $msg = new Msg();
        $msg->title = $_POST['title'];
        $msg->content = $_POST['content'];
        if($msg->save()){
            return redirect('msg/index');
        }else{
            echo '添加失败';
            exit();
        }
    }

    public function del($id){
        $res=Msg::find($id)->delete();
        if ($res) {
            return redirect('msg/index');
        }else{
            echo '删除失败';
        }
    }

    public function edit(Request $request,$id){
        if (empty($_POST)) {
            $msg=Msg::find($id);
            return view('msg.edit',['msg'=>$msg]);
        }else{
            //var_dump($request->input('title'));exit;
            $msg=Msg::find($id);
            $msg->title=$_POST['title'];
            $msg->content=$_POST['content'];
            $res=$msg->save();
            if ($res) {
                return redirect('msg/index');
            }else{
                echo '更新失败 ';
            }
        }
    }
}
