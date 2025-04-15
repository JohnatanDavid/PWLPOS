<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $breadcrumb->title ?? 'Judul Halaman' }}</h1>
            </div>
            <div class="col-sm-6">
                @if(isset($breadcrumb->list) && is_array($breadcrumb->list))
                <ol class="breadcrumb float-sm-right">
                    @foreach($breadcrumb->list as $key => $value)
                        @if($key === count($breadcrumb->list) - 1)
                            <li class="breadcrumb-item active">{{ $value }}</li>
                        @else
                            <li class="breadcrumb-item">{{ $value }}</li>
                        @endif
                    @endforeach
                </ol>
                @endif
            </div>
        </div>
    </div>
</section>
