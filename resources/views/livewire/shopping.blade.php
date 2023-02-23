<div>
   <div class="container">
   <div class="row">
    <div class="col-3">
        <div class="card">
            <div class="card-header">
              KERANJANG
            </div>
            <div class="card-body">
                {{$jumlah}}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
              Belanjaan saya
            </div>
            <div class="card-body">
                @foreach ($datas as $item)
                <p> {{ $item->nama_barang}}</p>
                @endforeach

        </div>
    </div>
    </div>

    <div class="col-9">
        <div class="card">
            <div class="card-header">
              Produk
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                        <img src="{{ asset('gambar/ps 5.jpg') }}" class="card-img-top"
                        alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Playstation 5</h5>
                        <p class="card-text"></p>
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">Rp. 5.000.000</li>
                        </ul>
                        <div class="card-body">
                        <button class="btn btn-primary" wire:click="simpan('Play station 5', '5000000')">BELI</button>
                        </div>
                     </div>
                </div>
                <div class="col-3">
                    <div class="card">
                    <img src="{{ asset('gambar/ps 5.jpg') }}" class="card-img-top"
                    alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Playstation 5</h5>
                    <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Rp. 5.000.000</li>
                    </ul>
                    <div class="card-body">
                    <button class="btn btn-primary"wire:click="simpan('Play station 5', '5000000')">BELI</button>
                    </div>
                 </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="{{ asset('gambar/ps 5.jpg') }}" class="card-img-top"
                alt="...">
                <div class="card-body">
                <h5 class="card-title">Playstation 5</h5>
                <p class="card-text"></p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Rp. 5.000.000</li>
                </ul>
                <div class="card-body">
                <button class="btn btn-primary"wire:click="simpan('Play station 5', '5000000')">BELI</button>
                </div>
             </div>
             @foreach ( $datas as $row )
                 <i>{{$row->nama_barang}}</i>

             <button class="btn btn-primary" wire:click="destroy( {{ $row->id }} )" >Delete</button>
            </p>
             @endforeach
        </div>
            </div>
        </div>
    </div>
</div>

