@extends('main')

@section('title', 'Proses Eclat')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Proses Eclat</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-2">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Support & Confidence</strong>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{ route('dataproses.result') }}" method="POST">
                        @csrf
                        <!-- Field-form yang sesuai -->
                    </form>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nilai Support</th>
                            <th>Nilai Confidence</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result)
                            <tr>
                                <td>{{ $result->min_support }}</td>
                                <td>{{ $result->min_confidence }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <form method="POST" action="{{ route('check.variasi') }}">
    @csrf
    <label for="item1">Item 1:</label>
    <input type="text" id="item1" name="item1">
    <br><br>
    <label for="item2">Item 2:</label>
    <input type="text" id="item2" name="item2">
    <br><br>
    <button type="submit" class="btn btn-primary">Check Variasi Itemset</button>
</form>

@isset($result)
    <div class="mt-3">
        <strong>Hasil:</strong> {{ $result }}
    </div>
@endisset

<p>Minimum Support: {{ $min_support }}</p>
        <p>Minimum Confidence: {{ $min_confidence }}</p>
        <p>Total Transactions: {{ $jumlah_transaksi }}</p>
        <p>Minimum Support Relative: {{ $min_support_relative }}%</p>
        
        <h2>Transaction Data</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataTransaksi as $transaksi)
                <tr>
                    <td>{{ $transaksi['produk'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Item List</h2>
        <ul>
            @foreach ($item_list as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
        
        <!-- Include additional visualization or processing logic as needed -->
    </div>
</p>
<h2>Itemset 2</h2>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Item 1</th>
            <th>Item 2</th>
            <th>Jumlah</th>
            <th>Support</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($itemset2_var1 as $key => $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item }}</td>
            <td>{{ $itemset2_var2[$key] }}</td>
            <td>{{ $jumlahItemset2[$key] }}</td>
            <td>{{ $supportItemset2[$key] }}</td>
            <td>{{ ($supportItemset2[$key] >= $min_support_relative) ? 'Lolos' : 'Tidak Lolos' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div> --}}
{{-- <h1>Itemset 3 Mining Result</h1>
        
        <p>Minimum Support: {{ $min_support }}</p>
        <p>Minimum Confidence: {{ $min_confidence }}</p>
        <p>Total Transactions: {{ $jumlah_transaksi }}</p>
        <p>Minimum Support Relative: {{ $min_support_relative }}%</p>
        
        <h2>Itemset 3</h2>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Item 1</th>
                    <th>Item 2</th>
                    <th>Item 3</th>
                    <th>Jumlah</th>
                    <th>Support</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($itemset3_var1 as $key => $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item }}</td>
                    <td>{{ $itemset3_var2[$key] }}</td>
                    <td>{{ $itemset3_var3[$key] }}</td>
                    <td>{{ $jumlahItemset3[$key] }}</td>
                    <td>{{ $supportItemset3[$key] }}</td>
                    <td>{{ ($supportItemset3[$key] >= $min_support_relative) ? 'Lolos' : 'Tidak Lolos' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h1>Confidence Result</h1>
    <table border="1">
        <tr>
            <th>Kombinasi 1</th>
            <th>Kombinasi 2</th>
            <th>Support xUy</th>
            <th>Support x</th>
            <th>Confidence</th>
            <th>Lolos</th>
            <th>Min Support</th>
            <th>Min Confidence</th>
            <th>Nilai Uji Lift</th>
            <th>Korelasi Rule</th>
            <th>ID Process</th>
            <th>Jumlah A</th>
            <th>Jumlah B</th>
            <th>Jumlah AB</th>
            <th>PX</th>
            <th>PY</th>
            <th>PXUy</th>
            <th>From Itemset</th>
        </tr>
        @foreach($result as $row)
        <tr>
            <td>{{ $row->kombinasi1 }}</td>
            <td>{{ $row->kombinasi2 }}</td>
            <td>{{ $row->support_xUy }}</td>
            <td>{{ $row->support_x }}</td>
            <td>{{ $row->confidence }}</td>
            <td>{{ $row->lolos }}</td>
            <td>{{ $row->min_support }}</td>
            <td>{{ $row->min_confidence }}</td>
            <td>{{ $row->nilai_uji_lift }}</td>
            <td>{{ $row->korelasi_rule }}</td>
            <td>{{ $row->id_process }}</td>
            <td>{{ $row->jumlah_a }}</td>
            <td>{{ $row->jumlah_b }}</td>
            <td>{{ $row->jumlah_ab }}</td>
            <td>{{ $row->px }}</td>
            <td>{{ $row->py }}</td>
            <td>{{ $row->pxuy }}</td>
            <td>{{ $row->from_itemset }}</td>
        </tr>
        @endforeach
    </table>
    <h1>Input Data untuk Menghitung Confidence</h1>
    <form action="/hitung-confidence" method="post">
        @csrf
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required><br><br>
        
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required><br><br>

        <label for="supp_xuy">Support XUY:</label>
        <input type="number" id="supp_xuy" name="supp_xuy" step="0.01" required><br><br>

        <label for="min_support">Minimum Support:</label>
        <input type="number" id="min_support" name="min_support" step="0.01" required><br><br>

        <label for="min_confidence">Minimum Confidence:</label>
        <input type="number" id="min_confidence" name="min_confidence" step="0.01" required><br><br>

        <label for="atribut1">Atribut 1:</label>
        <input type="text" id="atribut1" name="atribut1" required><br><br>

        <label for="atribut2">Atribut 2:</label>
        <input type="text" id="atribut2" name="atribut2" required><br><br>

        <label for="atribut3">Atribut 3:</label>
        <input type="text" id="atribut3" name="atribut3" required><br><br>

        <label for="id_process">ID Process:</label>
        <input type="number" id="id_process" name="id_process" required><br><br>

        <button type="submit">Hitung Confidence</button>
    </form> --}}
@endsection
