@extends('layouts.main')

@section('title', 'Pesan Masuk | Admin Nirmala Filter Air')

@section('styles')
<style>
    .table-auto th, .table-auto td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid #e5e7eb;
    }
    .table-auto th {
        background-color: #f9fafb;
        font-weight: 600;
    }
    .badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 500;
    }
    .badge-read {
        background-color: #d1fae5;
        color: #065f46;
    }
    .badge-unread {
        background-color: #fee2e2;
        color: #991b1b;
    }
</style>
@endsection

@section('content')
<div class="bg-gray-50 min-h-screen py-8">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Pesan Masuk</h1>
            <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-700">← Kembali ke Website</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Pesan</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pesans as $index => $pesan)
                        <tr class="{{ $pesan->dibaca ? '' : 'bg-blue-50' }}">
                            <td>{{ $index + 1 }}</td>
                            <td class="font-medium">{{ $pesan->nama }}</td>
                            <td>{{ $pesan->email }}</td>
                            <td>{{ $pesan->telepon }}</td>
                            <td class="max-w-xs truncate">{{ $pesan->pesan }}</td>
                            <td>
                                <span class="badge {{ $pesan->dibaca ? 'badge-read' : 'badge-unread' }}">
                                    {{ $pesan->dibaca ? 'Dibaca' : 'Baru' }}
                                </span>
                            </td>
                            <td class="text-sm text-gray-500">{{ $pesan->created_at->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-8 text-gray-500">Belum ada pesan masuk</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $pesans->links() }}
        </div>
    </div>
</div>
@endsection