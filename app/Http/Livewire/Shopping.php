<?php

namespace App\Http\Livewire;

use App\Models\keranjang;

use Livewire\Component;

class Shopping extends Component
{

    public function simpan($nama_barang,$harga_barang)
    {
      $simpan = new keranjang();
      $simpan->nama_barang = $nama_barang;
      $simpan->harga_barang = $harga_barang;
      $simpan->save();
      $this->reset();

    }

    public function destroy($idhapus)
    {
        $hapus = keranjang::findOrFail ($idhapus);
        $hapus->delete();
        $this->reset();

    }

    public function render()
    {
        return view('livewire.shopping',['datas'=> Keranjang::all(),'jumlah'=>keranjang::sum('harga_barang'),]);


    }
}
