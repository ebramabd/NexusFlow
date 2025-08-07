<?php

namespace App\Http\Controllers\admin;

use App\Enums\PermissionEnum;
use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PagesController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function getPagesData()
    {
        $category = Settings::where('key', 'like', 'page_%')->get();
        return DataTables::of($category)
            ->addColumn('name', function ($category) {
                return $category->title;
            })
            ->addColumn('value', function ($category) {
                return $category->value;
            })
            ->addColumn('actions', function ($category) {
                $actions = '';
                if (auth()->user()->hasAnyPermission([
                    PermissionEnum::UPDATE_SETTINGS->value,
                ])) {
                    $actions = '<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                       <i class="fa-solid fa-caret-down"></i>
                                   </span>
                                </a>';

                    $actions .= '<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">';

                    if (auth()->user()->hasPermissionTo(PermissionEnum::UPDATE_SETTINGS->value)) {
                        $actions .= '<div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-user-id="' . $category->id . '" data-bs-toggle="modal" data-bs-target="#kt_modal_update_school">
                                Edit
                            </a>
                        </div>';
                    }

                    $actions .= '</div>';
                }
                return $actions;
            })
            ->rawColumns(['name', 'value','actions'])
            ->make(true);
    }

    public function edit(string $id)
    {
        $setting = Settings::findOrFail($id);
        return response()->json($setting);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'value' => 'required|string|max:255',
        ]);

        try {
            Settings::where('id' , $id)->update([
                'value' => $request->value,
            ]);
            return response()->json(['message' => 'Settings updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error updating Settings'] , 500);
        }
    }


    public function uploadImage(Request $request)
    {
        $funcNum = $request->input('CKEditorFuncNum');
        $request->validate([
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);

        if (!$request->hasFile('upload')) {
            $msg = 'No file uploaded';
            return response("<script>window.parent.CKEDITOR.tools.callFunction($funcNum, '', '$msg');</script>");
        }

        $file = $request->file('upload');
        $path = public_path('uploads/ckeditor');
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        $filename = uniqid() . '_' . str_replace(' ', '_', $file->getClientOriginalName());
        $file->move($path, $filename);

        $url = asset("uploads/ckeditor/{$filename}");
        $msg = 'Image uploaded successfully';

        return response("<script>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$msg');</script>");
    }
}
