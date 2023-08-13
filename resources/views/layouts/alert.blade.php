@if (session('sukses'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ session('sukses') }}</strong>
</div>
@endif