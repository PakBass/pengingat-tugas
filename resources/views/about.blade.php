@extends('layouts.app')
@section('title', 'About')
@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
                </ol>
            </div>

            <div class="col-md-12 mt-3">
                <h4 class="text-center mb-0">Teknologi Informasi</h4>
                <h4 class="text-center mb-0">Kelompok</h4>
                <h1 class="text-center">6</h1>

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <table class="table table-hover table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NPM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                    <td>Nurjanna</td>
                                    <td>2211102441214</td>
                                </tr>
                                <tr class="table-active">
                                    <td>Selma Alfionita</td>
                                    <td>2211102441208</td>
                                </tr>
                                <tr class="table-active">
                                    <td>Nabila Salsabila yusri</td>
                                    <td>2211102441038</td>
                                </tr>
                                <tr class="table-active">
                                    <td>Andi Ryan Pradana putra</td>
                                    <td>2211102441084</td>
                                </tr>
                                <tr class="table-active">
                                    <td>Nurul Khafifah hamrun</td>
                                    <td>2211102441078</td>
                                </tr>
                                <tr class="table-active">
                                    <td>Andi Akbar Soleh</td>
                                    <td>2211102441096</td>
                                </tr>
                                <tr class="table-active">
                                    <td>Rifqa Nabilla Aprillia</td>
                                    <td>2211102441194</td>
                                </tr>
                                <tr class="table-active">
                                    <td>Dhimas Arief Kurniawan</td>
                                    <td>2211102441171</td>
                                </tr>
                                <tr class="table-active">
                                    <td>M Nur Bahri </td>
                                    <td>2211102441122</td>
                                </tr>
                                <tr class="table-active">
                                    <td>Hendy Prayoga </td>
                                    <td>2211102441054</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- end of row --}}

            </div>
            {{-- end of col --}}
        </div>
        {{-- end of row --}}
    </div>
    {{-- end of container --}}
@endsection
