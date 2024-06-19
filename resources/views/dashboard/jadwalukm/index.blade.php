@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Jadwal Sekretariat Cyber</h1>
</div> 

<style>
    .schedule-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .schedule-box {
        background-color: #dee6e7;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(236, 181, 0, 0.322);
        padding: 20px;
        flex: 1 0 300px;
        max-width: 300px;
        transition: transform 0.3s ease;
    }
    .schedule-box:hover {
        transform: translateY(-5px);
    }
    .month-heading {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }
    .schedule-item {
        margin-bottom: 10px;
    }
    .schedule-item strong {
        color: #000000;
    }
    .edit-button {
        padding: 8px 12px;
        background-color: #4CAF50;
        border: none;
        color: white;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .edit-button:hover {
        background-color: #45a049;
    }
</style>

<div class="schedule-container">
    <div class="schedule-box">
        <h3 class="month-heading">Januari</h3>
        <div class="schedule-item"><strong> 1: </strong>klKSL</div>
        <div class="schedule-item"><strong> 2: </strong> Jane Smith</div>
        <div class="schedule-item"><strong> 3: </strong> Michael Johnson</div>
        <div class="schedule-item"><strong> 4: </strong> Emily Brown</div>
        <div class="schedule-item"><strong> 5: </strong> David Lee</div>
        <a href="/dashboard/jadwalukm/create" class="btn btn-primary mb-3">Edit</a>
    </div>

    <div class="schedule-box">
      <h3 class="month-heading">Februari</h3>
      <div class="schedule-item"><strong> 1: </strong> John Doe</div>
      <div class="schedule-item"><strong> 2: </strong> Jane Smith</div>
      <div class="schedule-item"><strong> 3: </strong> Michael Johnson</div>
      <div class="schedule-item"><strong> 4: </strong> Emily Brown</div>
      <div class="schedule-item"><strong> 5: </strong> David Lee</div>
      <a href="/dashboard/jadwalukm/create" class="btn btn-primary mb-3">Edit</a>
  </div>
  <div class="schedule-box">
    <h3 class="month-heading">Maret</h3>
    <div class="schedule-item"><strong> 1: </strong> John Doe</div>
    <div class="schedule-item"><strong> 2: </strong> Jane Smith</div>
    <div class="schedule-item"><strong> 3: </strong> Michael Johnson</div>
    <div class="schedule-item"><strong> 4: </strong> Emily Brown</div>
    <div class="schedule-item"><strong> 5: </strong> David Lee</div>
    <a href="/dashboard/jadwalukm/create" class="btn btn-primary mb-3">Edit</a>
</div>
<div class="schedule-box">
  <h3 class="month-heading">April</h3>
  <div class="schedule-item"><strong> 1: </strong> John Doe</div>
  <div class="schedule-item"><strong> 2: </strong> Jane Smith</div>
  <div class="schedule-item"><strong> 3: </strong> Michael Johnson</div>
  <div class="schedule-item"><strong> 4: </strong> Emily Brown</div>
  <div class="schedule-item"><strong> 5: </strong> David Lee</div>
  <a href="/dashboard/jadwalukm/create" class="btn btn-primary mb-3">Edit</a>
</div>
<div class="schedule-box">
  <h3 class="month-heading">Mei</h3>
  <div class="schedule-item"><strong> 1: </strong> John Doe</div>
  <div class="schedule-item"><strong> 2: </strong> Jane Smith</div>
  <div class="schedule-item"><strong> 3: </strong> Michael Johnson</div>
  <div class="schedule-item"><strong> 4: </strong> Emily Brown</div>
  <div class="schedule-item"><strong> 5: </strong> David Lee</div>
  <a href="/dashboard/jadwalukm/create" class="btn btn-primary mb-3">Edit</a>
</div>
<div class="schedule-box">
  <h3 class="month-heading">Juni</h3>
  <div class="schedule-item"><strong> 1: </strong> John Doe</div>
  <div class="schedule-item"><strong> 2: </strong> Jane Smith</div>
  <div class="schedule-item"><strong> 3: </strong> Michael Johnson</div>
  <div class="schedule-item"><strong> 4: </strong> Emily Brown</div>
  <div class="schedule-item"><strong> 5: </strong> David Lee</div>
  <a href="/dashboard/jadwalukm/create" class="btn btn-primary mb-3">Edit</a>
</div>
<div class="schedule-box">
  <h3 class="month-heading">Juli</h3>
  <div class="schedule-item"><strong> 1: </strong> John Doe</div>
  <div class="schedule-item"><strong> 2: </strong> Jane Smith</div>
  <div class="schedule-item"><strong> 3: </strong> Michael Johnson</div>
  <div class="schedule-item"><strong> 4: </strong> Emily Brown</div>
  <div class="schedule-item"><strong> 5: </strong> David Lee</div>
  <a href="/dashboard/jadwalukm/create" class="btn btn-primary mb-3">Edit</a>
</div>
<div class="schedule-box">
    <h3 class="month-heading">Agustus</h3>
    <div class="schedule-item"><strong> 1: </strong> John Doe</div>
    <div class="schedule-item"><strong> 2: </strong> Jane Smith</div>
    <div class="schedule-item"><strong> 3: </strong> Michael Johnson</div>
    <div class="schedule-item"><strong> 4: </strong> Emily Brown</div>
    <div class="schedule-item"><strong> 5: </strong> David Lee</div>
    <a href="/dashboard/jadwalukm/create" class="btn btn-primary mb-3">Edit</a>
  </div>
  <div class="schedule-box">
    <h3 class="month-heading">Oktober</h3>
    <div class="schedule-item"><strong> 1: </strong> John Doe</div>
    <div class="schedule-item"><strong> 2: </strong> Jane Smith</div>
    <div class="schedule-item"><strong> 3: </strong> Michael Johnson</div>
    <div class="schedule-item"><strong> 4: </strong> Emily Brown</div>
    <div class="schedule-item"><strong> 5: </strong> David Lee</div>
    <a href="/dashboard/jadwalukm/create" class="btn btn-primary mb-3">Edit</a>
  </div>
  <div class="schedule-box">
    <h3 class="month-heading">November</h3>
    <div class="schedule-item"><strong> 1: </strong> John Doe</div>
    <div class="schedule-item"><strong> 2: </strong> Jane Smith</div>
    <div class="schedule-item"><strong> 3: </strong> Michael Johnson</div>
    <div class="schedule-item"><strong> 4: </strong> Emily Brown</div>
    <div class="schedule-item"><strong> 5: </strong> David Lee</div>
    <a href="/dashboard/jadwalukm/create" class="btn btn-primary mb-3">Edit</a>
  </div>
  <div class="schedule-box">
    <h3 class="month-heading">Desember</h3>
    <div class="schedule-item"><strong> 1: </strong> John Doe</div>
    <div class="schedule-item"><strong> 2: </strong> Jane Smith</div>
    <div class="schedule-item"><strong> 3: </strong> Michael Johnson</div>
    <div class="schedule-item"><strong> 4: </strong> Emily Brown</div>
    <div class="schedule-item"><strong> 5: </strong> David Lee</div>
    <a href="/dashboard/jadwalukm/create" class="btn btn-primary mb-3">Edit</a>
  </div>
    
    <!-- Tambahkan jadwal lainnya di sini -->
</div>

@endsection
