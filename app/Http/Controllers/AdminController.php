<?php

namespace App\Http\Controllers;

use App\AboutRhema;
use App\Author;
use App\Banner;
use App\Reason;
use App\RhemaSpeak;
use App\Testimonial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /////////////////////////banner
    public function viewUploadBanner(){
        return view('admin.upload_banner');
    }
    public function uploadBanner(Request $request)
    {

        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $banner = new Banner();

        $imageName = time(). '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images/file'), $imageName);

        $banner->image            = $imageName;
        $banner->title               = $request->title;
        $banner->body            = $request->body;
        $banner->save();

        return back()
            ->with('success','Banner successfully uploaded.');
    }

    public function viewBanner(){
        $data['banners'] = Banner::all();
        return view('admin.list_banner', $data);
    }

    public function viewEditBanner($id){
        $data['banner'] = Banner::find($id);
        return view('admin.edit_banner',$data);
    }

    public function editBanner($id, Request $request) {
        request()->validate([
            'title' => 'required',
            'body' => 'required',

        ]);

        $store = Banner::find($id);

        if($request->has("image")){

            $imageName = time(). '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/file'), $imageName);
            $store->image       = $imageName;

        }

        $store->title             = $request->title;
        $store->body                    = $request->body;

        $store->save();

        return redirect()->route('viewBanner')
            ->with('success','Successfully updated.');
    }


    public function deleteBanner($id){
        $banner = Banner::where('id', $id);
        $banner->delete();
        return back()->with('success', 'Banner successfully deleted');
    }

//////////////////////////Authors
    public function viewUploadAuthor(){
        return view('admin.upload_author');
    }
    public function uploadAuthor(Request $request)
    {

        request()->validate([
            'name' => 'required',
            'body' => 'required',

        ]);


        $banner = new Author();
        $banner->name               = $request->name;
        $banner->body            = $request->body;
        $banner->save();
        return back()
            ->with('success','Author successfully uploaded.');
    }

    public function viewAuthor(){
        $data['authors'] = Author::all();
        return view('admin.list_author', $data);
    }

    public function viewEditAuthor($id){
        $data['author'] = Author::find($id);
        return view('admin.edit_author',$data);
    }
    public function editAuthor($id, Request $request) {
        request()->validate([
            'name' => 'required',
            'body' => 'required',

        ]);

        $store = Author::find($id);

        $store->name             = $request->name;
        $store->body             = $request->body;

        $store->save();

        return redirect()->route('viewAuthor')
            ->with('success','Successfully updated.');
    }

    public function deleteAuthor($id){
        $banner = Author::where('id', $id);
        $banner->delete();
        return back()->with('success', 'Author successfully deleted');
    }

////////////////////////About rhema
    public function viewUploadRhema(){
        return view('admin.upload_rhema');
    }
    public function uploadRhema(Request $request)
    {

        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $banner = new AboutRhema();

        $imageName = time(). '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images/file'), $imageName);

        $banner->image            = $imageName;
        $banner->title               = $request->title;
        $banner->body            = $request->body;
        $banner->save();

        return back()
            ->with('success','Info successfully uploaded.');
    }

    public function viewRhema(){
        $data['rhemas'] = AboutRhema::all();
        return view('admin.list_rhema', $data);
    }

    public function viewEditRhema($id){
        $data['rhema'] = AboutRhema::find($id);
        return view('admin.edit_rhema',$data);
    }

    public function editRhema($id, Request $request) {
        request()->validate([
            'title' => 'required',
            'body' => 'required',

        ]);

        $store = AboutRhema::find($id);

        if($request->has("image")){

            $imageName = time(). '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/file'), $imageName);
            $store->image       = $imageName;

        }

        $store->title             = $request->title;
        $store->body                    = $request->body;

        $store->save();

        return redirect()->route('viewRhema')
            ->with('success','Successfully updated.');
    }

    public function deleteRhema($id){
        $banner = AboutRhema::where('id', $id);
        $banner->delete();
        return back()->with('success', 'Successfully deleted');
    }

    //////////////////////////reasons
    public function viewUploadReason(){
        return view('admin.upload_reasons');
    }
    public function uploadReason(Request $request)
    {

        request()->validate([
            'title' => 'required',
            'reason1' => 'required',
            'reason2' => 'required',
            'reason3'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $reason = new Reason();

        $imageName = time(). '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images/file'), $imageName);

        $reason->image            = $imageName;
        $reason->title               = $request->title;
        $reason->reason1               = $request->reason1;
        $reason->reason2            = $request->reason2;
        $reason->reason3            = $request->reason3;
        $reason->save();

        return back()
            ->with('success','Reason successfully uploaded.');
    }

    public function viewReason(){
        $data['reasons'] = Reason::all();
        return view('admin.list_reason', $data);
    }

    public function viewEditReason($id){
        $data['reason'] = Reason::find($id);
        return view('admin.edit_reason',$data);
    }

    public function editReason($id, Request $request) {
        request()->validate([
            'title' => 'required',
            'reason1' => 'required',
            'reason2' => 'required',
            'reason3'=> 'required',
        ]);

        $store = Reason::find($id);

        if($request->has("image")){

            $imageName = time(). '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/file'), $imageName);
            $store->image       = $imageName;

        }

        $store->title              = $request->title;
        $store->reason1            = $request->reason1;
        $store->reason2            = $request->reason2;
        $store->reason3            = $request->reason3;
        $store->save();

        return redirect()->route('viewReason')
            ->with('success','Successfully updated.');
    }

    public function deleteReason($id){
        $reason = Reason::where('id', $id);
        $reason->delete();
        return back()->with('success', 'Successfully deleted');
    }

    ///////////////////Testimonials
    public function viewUploadTestimonial(){
        return view('admin.testimonial');
    }
    public function uploadTestimonial(Request $request)
    {

        request()->validate([
            'name' => 'required',
            'country' => 'required',
            'testimony' => 'required',

        ]);


        $testimony = new Testimonial();


        $testimony->name               = $request->name;
        $testimony->country               = $request->country;
        $testimony->testimony               = $request->testimony;
        $testimony->save();

        return back()
            ->with('success','Successfully uploaded.');
    }

    public function viewTest(){
        $data['tests'] = Testimonial::all();
        return view('admin.list_test', $data);
    }

    public function viewEditTest($id){
        $data['test'] = Testimonial::find($id);
        return view('admin.edit_test',$data);
    }

    public function editTest($id, Request $request) {
        request()->validate([
            'name' => 'required',
            'country' => 'required',
            'testimony' => 'required',
        ]);

        $store = Testimonial::find($id);

        $store->name              = $request->name;
        $store->country            = $request->country;
        $store->testimony            = $request->testimony;
        $store->save();

        return redirect()->route('viewTest')
            ->with('success','Successfully updated.');
    }

    public function deleteTest($id){
        $reason = Testimonial::where('id', $id);
        $reason->delete();
        return back()->with('success', 'Successfully deleted');
    }

    /////////////////////////////Rhema speaks
    public function viewUploadSpeak(){
        return view('admin.upload_speak');
    }
    public function uploadSpeak(Request $request)
    {

        request()->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $banner = new RhemaSpeak();

        $imageName = time(). '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images/file'), $imageName);

        $banner->image            = $imageName;
        $banner->title               = $request->title;
        $banner->subtitle               = $request->subtitle;
        $banner->body            = $request->body;
        $banner->save();

        return back()
            ->with('success','Successfully uploaded.');
    }

    public function viewSpeak(){
        $data['speaks'] = RhemaSpeak::all();
        return view('admin.list_speak', $data);
    }

    public function viewEditSpeak($id){
        $data['speak'] = RhemaSpeak::find($id);
        return view('admin.edit_speak',$data);
    }

    public function editSpeak($id, Request $request) {
        request()->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
        ]);

        $store = RhemaSpeak::find($id);

        if($request->has("image")){

            $imageName = time(). '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/file'), $imageName);
            $store->image       = $imageName;

        }

        $store->title              = $request->title;
        $store->subtitle            = $request->subtitle;
        $store->body            = $request->body;
        $store->save();

        return redirect()->route('viewSpeak')
            ->with('success','Successfully updated.');
    }

    public function deleteSpeak($id){
        $banner = RhemaSpeak::where('id', $id);
        $banner->delete();
        return back()->with('success', 'Successfully deleted');
    }
}
