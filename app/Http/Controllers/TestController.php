<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Files;
use Illuminate\support\Facades\Auth;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\BlogPost;
class TestController extends Controller



{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function post_list(){

        // $posts=BlogPost::latest()->paginate(5);
        // return view('test',compact('posts'))->with('i',(request()->input('page',1)-1)*5);

        // $data_name=BlogPost::all();
        // var_dump($data_name);
        $Test_post= DB::table('blog_posts')->get();
        return view('post_list',compact('Test_post'));
        
    }


    public function index3()
    {

        

        $data_name=BlogPost::all();
        session()->flash('succes', 'Post successfully updated.');
        return view('test',compact('data_name'));
    }

// just like create function 
    public function Add_Student(Request $request)
    {

        // if ($request->hasFile('image')){
        //     var_dump($request->file('image'));
        // }else{
        //     return view('addPost');
        // }
        $post = new BlogPost;
        return view('addPost',compact('post'));

        // $data_name=BlogPost::all();
        // var_dump($data_name);
    }
// this is store function 
//     public function saveStudent(Request $request)
//     {
    

//     //$formField=
//     $request->validate([
//         'title' => 'required',
//         'body' => 'required',
//         'image'=>'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
//        ]);

//         $add = BlogPost::create([
//         'title' => $request->input('title'),
//         'body'  => $request->input('body'),
//         'image'=> $request->input('image'),
//     ]);

//   if($request->hasFile('image')){
//     User::saveStudent($request->image);
//     return redirect()->back()->with('mesage','Image aploaded successfuly');
//   }

    
    


//         //  if($request->hasFile('image')){
//         //     $formField['image'] = $request->file('image')->store('image','public');


//         //  }
        
  
//        session()->flash('msg','not added successfully!');
  
       

//        return redirect()->back()->with('erro','Image not aploaded!');

        
//     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function logout(Request $request) {

        Auth::logout(); 
        return redirect('login')->with(Auth::logout());
    
   }


    public function create()
    {
        $post = new BlogPost;

        
        return view('addPost',compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     // this store function is not used so far 
    public function store(Request $request)

    {
        $post = new BlogPost;
        // $request->validate([

        //     'title'=>'required|max:255',
        //     'body'=>'required|max:255',
        //     'image'=>'required|mimes:csv,JPG,tmp,txt,xlx,xls,pdf|max:2048'
        // ]);
        $post->title = $request->input('title');
        $post->body = $request->input('body');

       if ($request->hasfile('image')) {
       $file = $request->file('image');
       $extension = $file->getClientOriginalExtension(); // getting image extension
       $filename = time() . '.' . $extension;
       $file->move('uploads/appsetting/', $filename);
       

       $post->image = $filename;
    } else {
    return $request;
    $pages->image = '';

     }
     $post->save();
     session()->flash('message', 'Post successfully created.');
     return redirect('/')->with('success', 'Post successfully created');














        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $destination_path = 'storage/image/';
        //     $filename = str::random(6) . '_' . $file->getClientOriginalName();
        //     $file->move($destination_path, $filename);
        //     $post->pImage = $filename;
            
        // }

        // if ($request->hasFile('image')) {
        //     // get the file object
        //     $file = $request->file('image');
        //     // set the upload path (starting form the public path)
        //     $rewardsUploadPath = 'public/storage/image/';
        //     // create a unique name for this file
        //     $fileName = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString())
        //         . '-' . str::random(5) . '.' . $file->getClientOriginalExtension();
        //     // move the uploaded file to its destination
        //     $file->move('storage/image' . $rewardsUploadPath, $fileName);
        //     // save the file path and name
        //     $filePathAndName = $rewardsUploadPath . $fileName;
        // }

        // $post->title= $request->title;
        // $post->body = $request->body;
        // $post->image=$request->image;
        // $post->save();
        
        
        
        
        
        
        
        


        // Session::flash('success','the blog post was successfully saved');
        // return redirect('/')->back()->with('succes', 'Project add successfully');
        //Session::flash('success','the blog post was successfully saved');
        //return redirect()->route('show', $post->id);

       

       
        
            
            
        
        
                //  if($request->hasFile('image')){
                //     $formField['image'] = $request->file('image')->store('image','public');
        
        
                //  }

                
          
            // session()->flash('msg','not added successfully!');
          
               
        
            // return redirect()->back()->with('erro','Image not aploaded!');

        
     


        
        // $this -> validated($request,array(
        // 'Title' => 'required|max:255',
        // 'Body' => 'required'
        
        // ));
        // $post = new Posts;
        // $post->Title = $request->Title;
        // $post->Body = $request->Body;
        // $post>save();

        // return redirect()-route('',$post->id)->with('success', 'Game is successfully saved');
    

    }

   
    public function show($id)
    {
        
        $data=BlogPost::find($id);
        return view('show',['product' =>$data]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posttest=BlogPost::find($id);
        return view('edit',compact('posttest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {









        $posttest=BlogPost::find($id);
        $posttest->title = $request->title;
        $posttest->body = $request->body;
        $posttest->image=$request->image;
    
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move('uploads/appsetting/', $filename);
            $posttest->image = $request->file('image')->getClientOriginalName();
        }
    
        $posttest->save();
        session()->flash('success','post updated successfully!');

    
        return redirect('');


        // $posttest=BlogPost::find($id);
        // $posttest->update($request->all());

        
        //$file->move('uploads/appsetting/', $filename);

        
        // Getting values from the blade template form
        // $posttest->title=  $request->input('title');
        // $posttest->body=  $request->input('body');
        // $posttest->image=  $request->input('image');
        // $posttest->update();


        
        
        //('show', $posttest->id)->with('success','updated data');
        
        
        // $posttest->save();
 
        //return redirect()->route('posts/show/'. $posttest->id)->with('success', 'Stock updated.');

        


    }

    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$posttest = BlogPost::find($id);
        $posttest = BlogPost::findOrFail($id);
        // $posttest = BlogPost::where('id',$id)->first();
        $posttest->delete();

        session()->flash('success','post deleted  successfully!');

        return view('destroy',compact('posttest'))->with('success','deleted succesfully');
        //return BlogPost::find($id);
    }
}


// below about authentication and user permission 







