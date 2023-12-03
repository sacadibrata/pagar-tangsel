@include('backend.admin.layout.header')

@include('backend.admin.layout.topbar')

@include('backend.admin.layout.navbar1')

@include('backend.admin.layout.navbar2')

@include('sweetalert::alert')

<main class="main-content-wrapper">
    <!-- container -->
    <div class="container">
            <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-md-flex justify-content-between align-items-center">
                        <!-- page header -->
                    <div>
                        <h2>Add New Category</h2>
                            <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboardAdmin') }}" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}" class="text-inherit">Categories</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Category</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{ route('kategori.index') }}" class="btn btn-outline-secondary mb-2">Back to Categories</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <!-- card -->
                <div class="card mb-6 shadow border-0">
                    <!-- card body -->
                    <div class="card-body p-6 ">
                        <form action='{{ route('kategori.store') }}' method='POST' enctype="multipart/form-data">
                            @csrf
                            <h4 class="mb-5 h5">Category Image</h4>
                            <div class="mb-4 d-flex">
                                <div class="position-relative" >
                                    <img class="image  icon-shape icon-xxxl bg-light rounded-4" src="{{ asset('dist/assets/images/icons/upload.svg') }}" alt="Image">

                                    <div class="file-upload position-absolute end-0 top-0 mt-n2 me-n1">
                                        <input type="file" class="file-input" name="gambar_kategori">
                                        <span class="icon-shape icon-sm rounded-circle bg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-fill text-muted" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-4 h5 mt-5">Category Information</h4>
                            <div class="row">
                                <!-- input -->
                                <div class="mb-3 col-lg-12">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" class="form-control" placeholder="Category Name" name="nama_kategori"  required>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-outline-primary mb-2">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('backend.admin.layout.footer')

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script>
   new DataTable('#example', {
    responsive: true
});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search').on('input', function() {
            var searchValue = $(this).val();
            $.get('{{ route('kategori.index') }}', { search: searchValue }, function(data) {
                // Memperbarui isi tabel yang ada dengan hasil pencarian
                $('#table-responsive tbody').html(data);
            });
        });
    });
</script>


