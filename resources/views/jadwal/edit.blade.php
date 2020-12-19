@extends('layouts.base')
@section('title', "Ubah Jadwal")

@section('css')
@endsection

@section('content')
<div class="container page__heading-container">
    <div class="page__heading d-flex align-items-center justify-content-between">
        <h1 class="m-0">Ubah Jadwal Presentasi</h1>
    </div>
</div>

<div class="container page__container">
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-3 card-body">
                <p><strong class="headings-color">Form Ubah Jadwal Presentasi</strong></p>
                <p class="text-muted">Jika melakukan perubahan jadwal, mohon menginformasikannya kepada juri dan peserta</p>
            </div>
            <div class="col-lg-9 card-form__body card-body">
                <form>
                    <div class="form-group">
                        <label for="select01">Nama Ketua</label>
                        <select id="select01" data-toggle="select" class="form-control">
                            <option selected="">My first option</option>
                            <option>Another option</option>
                            <option>Third option is here</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select01">Judul Proposal</label>
                        <select id="select01" data-toggle="select" class="form-control">
                            <option selected="">My first option</option>
                            <option>Another option</option>
                            <option>Third option is here</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="flatpickrSample04">Tanggal Presentasi</label>
                        <input id="flatpickrSample04" type="hidden" class="form-control flatpickr-input" placeholder="Flatpickr date time example" data-toggle="flatpickr" data-flatpickr-enable-time="true" data-flatpickr-alt-format="F j, Y at H:i" data-flatpickr-date-format="Y-m-d H:i" value="2018-10-07 15:35"><input class="form-control flatpickr-input" placeholder="Flatpickr date time example" tabindex="0" type="text" readonly="readonly">
                    </div>
                    <div class="flex">
                        <label for="subscribe">Status Presentasi</label><br>
                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                            <input checked="" type="checkbox" id="subscribe" class="custom-control-input">
                            <label class="custom-control-label" for="subscribe">Yes</label>
                        </div>
                        <label for="subscribe" class="mb-0">Selesai</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="text-right mb-5">
      <a href="" class="btn btn-danger">Batal</a>
      <a href="" class="btn btn-warning">Ubah</a>
    </div>
</div>
@endsection

@section('js')
@endsection