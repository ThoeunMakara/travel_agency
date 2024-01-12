<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * បង្ហាញនូវ Record ទាំងអស់នៅលើ List នៃ View របស់យើងក្នុងទម្រង់ Table
     */
    public function index()
    {
        // return view('admin.services.index');
        $data['services']=Service::get();
        return view('admin.services.index',$data);
    }

    /**
     * បង្ហាញ Form សម្រាប់បង្កើតថ្មី
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * ធ្វើការរក្សាទុកទិន្នន័យថ្មី ទៅកាន់ Storage(Table)
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'status' => 'required',
        ]);

        $file = $request->file('image');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/uploads', $fileName);

		$saveData = ['title' => $request->title,
                    'description' => $request->description,
                    'status'=>$request->status=='on'?1:0,
                    'image' => $fileName
                ];
        Service::create($saveData);


        return redirect()->route('admin.services')->with('success','Service has been created successfully.');
    }

    /**
     * ធ្វើការបង្ហាញ Record តាម ID (Read Data)
     */
    public function show(string $id)
    {
        $service=Service::find($id);
        return view('admin.services.show',compact('service'));
    }

    /**
     * ធ្វើការបង្ហាញ Form ដើម្បីកែប្រែនូវ Record ជាក់លាក់ណាមួយ
     */
    public function edit(string $id)
    {
        // $data['service']=Service::find($id);
        // return view('admin.services.edit',$data);
        $service=Service::find($id);
        return view('admin.services.edit',compact('service'));
    }

    /**
     * ដើម្បីកែប្រែនូវ Record ជាក់លាក់ណាមួយនៅក្នុង Storage (Table)
     */
    public function update(Request $request, string $id)
    {
        $fileName = '';
		$editData = Service::find($id);
		if ($request->hasFile('image')) {
			$file = $request->file('image');
			$fileName = time() . '.' . $file->getClientOriginalExtension();
			$file->storeAs('public/uploads', $fileName);
			if ($editData->image) {
				Storage::delete('public/uploads/' . $editData->image);
			}
		} else {
			$fileName = $request->old_image;
		}

		$editDataRecord = ['title' => $request->title,
                            'description' => $request->description,
                            'status'=>$request->status=='on'?1:0,
                            'image' => $fileName
                            ];

		$editData->update($editDataRecord);
        if($editData){
            return redirect()->route('admin.services')->with('success','Service has been update successfully');
        }
    }

    /**
     * លុប
     */
    public function destroy(string $id)
    {
        $service=Service::find($id);
        // dd($service);
        $service->delete();
        return redirect()->route('admin.services')->with('success','Service has been deleted successfully');
    }
}
