<?php

namespace App\Http\Controllers;

use DB;
use App\Data;
use App\Kabupaten;
use App\Kelurahan;
use App\Kecamatan;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class DataController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Data::select('tb_data.id','id_kelurahan','kabupaten','kecamatan','kelurahan','sembuh','rawat','total','meninggal')
                ->join('tb_kelurahan','tb_data.id_kelurahan','=','tb_kelurahan.id')
                ->join('tb_kecamatan','tb_kelurahan.id_kecamatan','=','tb_kecamatan.id')
                ->join('tb_kabupaten','tb_kecamatan.id_kabupaten','=','tb_kabupaten.id')
                ->get();

        $test = Data::select('tb_data.id','id_kelurahan','kabupaten','kecamatan','kelurahan','sembuh','rawat','total','meninggal')
                ->join('tb_kelurahan','tb_data.id_kelurahan','=','tb_kelurahan.id')
                ->join('tb_kecamatan','tb_kelurahan.id_kecamatan','=','tb_kecamatan.id')
                ->join('tb_kabupaten','tb_kecamatan.id_kabupaten','=','tb_kabupaten.id')
                ->where('tanggal', Data::max('tanggal'))->orderBy('tanggal','desc')
                ->get();

        $sembuh = Data::where('tanggal', Data::max('tanggal'))->orderBy('tanggal','desc')
                ->sum('sembuh');

        $positif = Data::where('tanggal', Data::max('tanggal'))->orderBy('tanggal','desc')
                ->sum('total');

        $meninggal = Data::where('tanggal', Data::max('tanggal'))->orderBy('tanggal','desc')
                ->sum('meninggal');

        $rawat = Data::where('tanggal', Data::max('tanggal'))->orderBy('tanggal','desc')
                ->sum('rawat');

        

       $kabupaten = Kabupaten::all();



       // $kecamatan = 'option.value=""></option';
       // foreach (Kecamatan::where('id_kabupaten',Kecamatan::get('id'))->get() as $row)
       //  $kecamatan .= "option value='$row->id>$row->kecamatan</option>";

        
        // $kabupaten = array('' => '');
        // foreach(Kabupaten::all() as $item)

        // $kabupaten[$item->id] = $item->kabupaten;



        $kelurahan = Kelurahan::all();
        $kecamatan = kecamatan::all();


        $date   = \Carbon\Carbon::now()->format('d F Y');
        return view('create' ,compact('kecamatan','kelurahan','data','test','sembuh','positif','rawat','meninggal','date'),['kabupaten' => $kabupaten,]
    );

        //
    }


    // public function postData(Request $request) {
    //         $kecamatan = Kecamatan::where('id_kabupaten', $request->get('id')->pluck('kecamatan','id'));

    //     return response()->json($kecamatan);
    // }

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
    public function store(Request $request)
    {
    
    $kelurahan = $request->kelurahan;
    $kabupaten = $request->kabupaten;
    $tanggal = $request->tanggal;
    $ppln= $request->ppln;
    $ppdn= $request->ppdn;
    $tl= $request->tl;
    $lainnya= $request->lainnya;
    $rawat= $request->rawat;
    $sembuh= $request->sembuh;
    $meninggal= $request->meninggal;

    $positif = $rawat+$sembuh+$meninggal;


    $data = array(
        'Kelurahan' => $kelurahan,
        'Tanggal' => $tanggal
    );

    $count = DB::table('tb_data')->where('id_kelurahan', $kelurahan)
                                ->where('tanggal',  $tanggal)
                                ->count();
    if($count > 0){
        return redirect()->back();
    }else{
        // DB::table('teammembersall')->insert($data);
        $data = new Data;
        $data->tanggal= $request->tanggal;
        $data->id_kelurahan= $request->kelurahan;
        $data->ppln= $request->ppln;
        $data->ppdn= $request->ppdn;
        $data->tl= $request->tl;
        $data->lainnya= $request->lainnya;
        $data->sembuh = $request->sembuh;
        $data->rawat= $request->rawat;
        $data->total= $positif;
        $data->meninggal= $request->meninggal;
        $data->save();
    }

    session()->flash('msg', 'Successfully done!.');
    return redirect('/data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show($data)
    {
        $data = Data::select('tb_data.id','kabupaten','kecamatan','kelurahan','sembuh','rawat','total','meninggal','tanggal')
                ->join('tb_kelurahan','tb_data.id_kelurahan','=','tb_kelurahan.id')
                ->join('tb_kecamatan','tb_kelurahan.id_kecamatan','=','tb_kecamatan.id')
                ->join('tb_kabupaten','tb_kecamatan.id_kabupaten','=','tb_kabupaten.id')
                ->where('tb_data.id_kelurahan','=',$data)
                ->get();
        
        return view('detail',compact('data'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Data $data)
    {
        // $data->update($request->all());
        // $test = $request->id;
        $ppln= $request->ppln;
        $ppdn= $request->ppdn;
        $tl= $request->tl;
        $lainnya= $request->lainnya;
        $rawat= $request->rawat;
        $sembuh= $request->sembuh;
        $meninggal= $request->meninggal;
        $positif = $rawat+$sembuh+$meninggal;

        $data->ppln= $request->ppln;
        $data->ppdn= $request->ppdn;
        $data->tl= $request->tl;
        $data->lainnya= $request->lainnya;
        $data->sembuh = $request->sembuh;
        $data->rawat= $request->rawat;
        $data->total= $positif;
        $data->meninggal= $request->meninggal;
        $data->save();

        return redirect('/data');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        $data->delete(); 
                $data = Data::select('tb_data.id','kelurahan','sembuh','rawat','total','meninggal','tanggal')
                ->join('tb_kelurahan','tb_data.id_kelurahan','=','tb_kelurahan.id')
                ->where('tb_data.id_kelurahan','=',$data)
                ->get();
        
        return redirect('/data');
    }

    public function search(Request $request){
        $cari = $request-'search';
        $data = Data::where('kabupaten','kelurahan','kecamatan','LIKE','%'.$cari.'%')->paginate(20);
        return view('index',compact('data'));
    }


        public function getKecamatan(Request $request){
        return Kecamatan::where('id_kabupaten',$request->id_kabupaten)->get();
    }

    public function getKelurahan(Request $request){
        return Kelurahan::where('id_kecamatan',$request->id_kecamatan)->get();
     }
}
