<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class SalokaController extends Controller
{
    //
    public function DataTentang() {
        try {
            $result = DB::select("SELECT*FROM tentang");

            return response()->json([
                'success' => true,
                'message' => 'Data barang Berhasil Ditampilkan',
                'result' => $result
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data barang Gagal Ditampilkan',
                'result' => $e->getMessage()
            ]);
        }
    }
    public function Update_DataTentang(Request $request){
        try{
                DB::beginTransaction();
                DB::table("tentang")->update([
                    'detail'=> $request->tentang
                ]);
                DB::commit();

                return response()->json([
                    'success' => true,
                    'total_row' => 0,
                    'message' => 'Berhasil Di Update',
                    'status' => '1',
                    'detail'=> $request->tentang,
                    
                ]); 

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Diupdate',
                'result' => $e->getMessage()
            ]);
        }

    }

    public function DeleteImage($ids){
        try {
            $result = DB::select("SELECT name_img from walpaper where id='".$ids."'");
            $filePathName = 'upload/walpaper/' . $result[0]->name_img;
                if( file_exists($filePathName) ){
                unlink($filePathName);
            }

            DB::beginTransaction();
            DB::table('walpaper')->where('id', $ids)->delete();
            DB::commit();

            

            return response()->json([
                'success' => false,
                'message' => 'berhasil dihapus',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'gagal dihapus',
                'result' => $e->getMessage()
            ]);
        }

    }
    public function GetImage(Request $request){
        try{
                
            $result = DB::select("SELECT id,srcs from walpaper");
            return response()->json([
                'success' => true,
                'message' => 'Data CustomerLog Berhasil Ditampilkan',
                'result' => $result
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data Customer Gagal Ditampilkan',
                'result' => $e->getMessage()
            ]);
        }

    }


    public function uploadFile(Request $request){
        try {
            DB::beginTransaction();
            if (DB::table('walpaper')->where('name_img', "walpaper_". $request->nama_file)->exists()) {
                return response()->json([
                    'message' => ['walpaper sudah ada'],
                ]);
            }else{
    
                $folderName = $request->nama;
                $fileName = "walpaper_". $request->nama_file;
                // $request->file->move(public_path('upload/tentang/' . $folderName), $fileName);
                $request->file->move(public_path('upload/walpaper'), $fileName);
    
                
                DB::table('walpaper')->insert([
                    'name_img' => "walpaper_". $request->nama_file,
                    'srcs'  => "../../../api/public/upload/walpaper/walpaper_". $request->nama_file,
                ]);
                DB::commit();
                return response()->json([
                    "message" => "Berhasil di upload",
                ],200);
            }
            
            
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                "message" => "Gagal",
            ],500);
        }
    }
}
