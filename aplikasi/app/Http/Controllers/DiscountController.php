<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use Carbon\Carbon;

class DiscountController extends Controller
{
    public function index()
    {
        return view('discounts',[
            'namaHalaman'=>'discounts',
            'discounts'=>Discount::all()
            // 'daftarmenu'=>Category::tipe()
        ]);
    }

    public function create_discount(Request $request)
    {
        $request->validate([
            'minimumBeli'=>'required',
            'potonganHarga'=>'required',
            'diskon_mulai'=>'required',
            'diskon_selesai'=>'required',
        ],
        [
            'minimumBeli.required'=>'Minimum spending cannot be empty',
            'potonganHarga.required'=>'Discount cannot be empty',
            'diskon_mulai.required'=>'Starting date cannot be empty',
            'diskon_selesai.required'=>'Expired date cannot be empty',
        ]);
        Discount::create([
            'minimumBeli'=>$request->minimumBeli,
            'potonganHarga'=>$request->potonganHarga,
            'diskon_mulai' => Carbon::parse($request->input('diskon_mulai'))->format('Y-m-d'),
            'diskon_selesai' => Carbon::parse($request->input('diskon_selesai'))->format('Y-m-d'),
        ]);
        return back();
    }

    public function update_discount(Request $request, $id)
    {
        $request->validate([
            'minimumBeli'=>'required',
            'potonganHarga'=>'required',
            'diskon_mulai'=>'required',
            'diskon_selesai'=>'required',
        ],
        [
            'minimumBeli.required'=>'Minimum spending cannot be empty',
            'potonganHarga.required'=>'Discount cannot be empty',
            'diskon_mulai.required'=>'Starting date cannot be empty',
            'diskon_selesai.required'=>'Expired date cannot be empty',
        ]);
        $discount = Discount::findorfail($id);
        $new_data = [
            'minimumBeli'=>$request->minimumBeli,
            'potonganHarga'=>$request->potonganHarga,
            'diskon_mulai' => Carbon::parse($request->input('diskon_mulai'))->format('Y-m-d'),
            'diskon_selesai' => Carbon::parse($request->input('diskon_selesai'))->format('Y-m-d'),
        ];
        $discount->update($new_data);
        return back();
    }


    public function delete_discount($id)
    {
        $discount = Discount::findorfail($id);
        $discount->delete();

        return back();
    }


}
