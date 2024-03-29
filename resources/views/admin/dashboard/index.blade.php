@extends('admin.layouts.main', ['title' => 'Dashboard', 'page_heading' => 'Dashboard'])
@section('content')
{{-- Section Pemasukan Terakhir --}}
<section class="row">
    <div class="d-flex gap-3">
        <div class="col-6 col-lg-6 col-md-6">
            <div class="card card-stat">
                <div class="card-body px-4 py-4-5">
                    
                        <h3 class="ps-2">Total User</h3>
                        <div class="d-flex align-items-start flex-column p-2 mb-2">
                            <p class="fs-1 p-3 rounded fw-bolder text-success">{{ $totalUser }}</p>
                        </div>
                    
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-6 col-md-6">
            <div class="card card-stat">
                <div class="card-body px-4 py-4-5">
                    
                        <h3 class="ps-2">Total Menu</h3>
                        <div class="d-flex align-items-start flex-column p-2 mb-2">
                            <p class="fs-1 p-3 rounded fw-bolder text-success">{{ $totalMenu }}</p>
                        </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="row">
	<div class="col card px-3 py-3">

		<div class="my-3 p-3 rounded">
			<div class="mb-3">
				<h2>List User</h2>
			</div>
			
			
			<!-- Table untuk memanggil data dari database -->
			<table class="table">
				<thead>	
					<tr>
						<th class="col-md-2">No</th>
						<th class="col-md-2">Nama</th>
						<th class="col-md-2">Email</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $item)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $item->name }}</td>
							<td>{{ $item->email }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $users->withQueryString()->links() }}
		</div>
	</div>
</section>

@endsection
{{-- Import modal form --}}
@push('modal')
{{-- @include('dashboard.modal.show') --}}
@endpush

@push('js')
{{-- @include('dashboard.script') --}}
@endpush
