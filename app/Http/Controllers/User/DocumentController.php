<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\EditUploadBerkas;
use App\Http\Requests\User\UploadBerkas;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('siswas')->where('users_id',Auth::user()->id)->first();
        $data = DB::table('documents')
                ->where('siswas_id',$users->id)
                ->get();
        if($data->isEmpty()){
            return view('user.siswa.upload-berkas');
        }else{
            return view('user.siswa.edit-upload-berkas', [
                'data' => $data[0],
                'user' => $users
            ]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadBerkas $request)
    {
        // return $request->all();
        $data = $request->all();
        $users = DB::table('siswas')->where('users_id',Auth::user()->id)->first();
        $data['siswas_id'] = $users->id;
       
        if ($request->hasFile('rapor')) {
            $file = $request->file('rapor');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/documents', $fileName);
            $data['rapor'] = 'assets/documents/' . $fileName;
        }
        if ($request->hasFile('ijazah')) {
            $file = $request->file('ijazah');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/documents', $fileName);
            $data['ijazah'] = 'assets/documents/' . $fileName;
        }
        if ($request->hasFile('kartu_keluarga')) {
            $file = $request->file('kartu_keluarga');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/documents', $fileName);
            $data['kartu_keluarga'] = 'assets/documents/' . $fileName;
        }
        if ($request->hasFile('akta_kelahiran')) {
            $file = $request->file('akta_kelahiran');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/documents', $fileName);
            $data['akta_kelahiran'] = 'assets/documents/' . $fileName;
        }

        
        Document::create($data);
        $request->session()->flash('success', "Berhasil Melakukan Upload Foto");
        return redirect(route('user.document.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(EditUploadBerkas $request, Document $document)
    {
        $data = $request->all();
        if($request->file('kartu_keluarga')){
           $foto = public_path($document->kartu_keluarga);
            if(file_exists($foto)){
                unlink($foto);    
            }
            $data['kartu_keluarga'] = $request->file('kartu_keluarga')->store('assets/documents', 'public');
        }
        if($request->file('akta_kelahiran')){
            $foto = public_path($document->akta_kelahiran);
            if (file_exists($foto)) {
                unlink($foto);
            }
            $data['akta_kelahiran'] = $request->file('akta_kelahiran')->store('assets/documents', 'public');
        }
        if($request->file('ijazah')){
            $foto = public_path($document->ijazah);
            if (file_exists($foto)) {
                unlink($foto);    
            }
            $data['ijazah'] = $request->file('ijazah')->store('assets/documents', 'public');
        }
        if($request->file('rapor')){
            $file = public_path($document->rapor);
            if ($document->rapor) {
                unlink($file);
            }
            $data['rapor'] = $request->file('rapor')->store('assets/documents', 'public');
        }
        $document->update($data);
        $request->session()->flash('success', "Berhasil Melakukan Upload Foto");
        return redirect(route('user.document.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
    

}
