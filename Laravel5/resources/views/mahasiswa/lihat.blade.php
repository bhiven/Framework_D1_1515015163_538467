@extends('master')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong>
			<a href="{{url('mahasiswa')}}">
				<i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i>
			</a>Detail Data Mahasiswa
		</strong>
	</div>

	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $Mahasiswa->nama }}</td>
		</tr>

		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{ $Mahasiswa->nim }}</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $Mahasiswa->alamat }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{ $Mahasiswa->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{ $Mahasiswa->updated_at }}</td>
		</tr>
	</table>
</div>