@extends('layouts.master')

@section('header')
@section('pages','Data')
@section('title','Semarang')
@include('layouts.component.header')
@endsection

@push('page-styles')

@endpush

@push('page-scripts')

@endpush

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Penjelasan</h4>
                    <div class="card-header-action">
                        <a data-collapse="#penjelasan" class="btn btn-icon btn-info" href="#"><i class="fas fa-chevron-down"></i></a>
                    </div>
                </div>
                <div class="collapse" id="penjelasan">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p style="text-align: justify;">Pada sistem ini menampilkan peta wilayah semarang yang merupakan beberapa wilayah daripada alternatif sistem pendukung keputusan penentuan lokasi embung. Menggunakan bantuan <b>CartoDB</b>, yaitu platform yang memberikan sarana membuat peta dan visualisasi data-data berbasis lokasi (spasial).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-body">
                    <iframe width="100%" height="520" frameborder="0" src="https://prawito.carto.com/builder/0a97a764-9180-4d4b-8c9e-c04c0421e6db/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection