@extends('base')

@section('header')
    <title>Data Rekening {{ $userData->name }}</title>
@endsection

@section('content')
    <div class="container content mt-3">
        <h2 class="mb-4">Data Rekening {{ $userData->name }}</h2>
        @include('notification')

        <div class="d-flex justify-content-end align-items-center mb-4">
            <div class="text-end">
                <a href="{{ route('user.index') }}" class="btn btn-secondary mr-2">Kembali</a>
                <a href="{{ route('user.bank-accounts.create', $userData) }}" class="btn btn-success">Buat Rekening</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Bank</th>
                        <th class="text-center">Rekening</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($userData->bankAccounts as $bankAccount)
                        <tr>
                            <td class="text-center">{{ $bankAccount->bank_name }}</td>
                            <td class="text-center">{{ $bankAccount->account_number }}</td>
                            <td class="text-center">{{ ucfirst($bankAccount->status) }}</td>
                            <td class="text-center">
                                <a href="{{ route('user.bank-accounts.edit', [$userData, $bankAccount]) }}" class="btn btn-sm btn-warning">Ubah</a>
                                <form action="{{ route('user.bank-accounts.destroy', [$userData, $bankAccount]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus Rekening ini? Tindakan ini tidak dapat dibatalkan.')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Rekening Tidak Ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('javascript')
@endpush
