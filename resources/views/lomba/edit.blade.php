@extends('layouts.base')
@section('title', "Ubah Lomba")

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('content')
<div class="container page__heading-container">
    <div class="page__heading d-flex align-items-center justify-content-between">
        <h1 class="m-0">Ubah Bidang Lomba</h1>
    </div>
</div>

<div class="container page__container">
    <div class="mb-2">
      <a href="{{route('lomba.index')}}" class="btn btn-light"><i class="fas fa-chevron-left"></i> Batal</a>
    </div>
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-3 card-body">
                <p><strong class="headings-color">Form Ubah Bidang Lomba</strong></p>
                <p class="text-muted">Bidang lomba yang dirubah harus sesuai dengan ketentuan bidang lomba yang tersedia dalam pedoman PKM terbaru.</p>
            </div>
            <div class="col-lg-9 card-form__body card-body">
                <form action="{{route('lomba.update',$lomba->id)}}" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label for="lomba">Nama Bidang Lomba</label>
                      <input type="lomba" class="form-control" id="lomba" placeholder="Bidang Lomba" name="nama" value="{{$lomba->nama}}">
                  </div>
                  <div class="form-group">
                      <label for="date-time">Batas Waktu Lomba</label>
                      <input type="datetime-local" class="form-control" id="date-time" name="batas_waktu" value="{{$lomba->batas_waktu}}">
                  </div>
            </div>
          </div>
        <button type="submit"class="btn btn-success">Simpan</button>
      </form>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr@4.6.8/dist/l10n/id.js"></script>
<script src="{{ asset('js/flatpickr-init.js')}}"></script>
<script type="text/javascript">
flatpickr('#date-time', {
    "locale": "id",
    "enableTime": true,
    "defaultDate": "{{$lomba->batas_waktu}}",
    "minDate": "today",
    "defaultHour": "{{$lomba->batas_waktu}}",
});
</script>
@endsection
