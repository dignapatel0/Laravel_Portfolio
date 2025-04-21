@extends('layout.console')

@section('content')
<div class="dashboard-page">
  <!-- Header -->
  <div class="dashboard-header">
    <h1>Console Dashboard</h1>
    <p>Select an action below:</p>
  </div>

  <!-- Grid of Cards -->
  <div class="dashboard-grid">
    <a href="/console/projects/list" class="dashboard-card">
      <div class="card-icon">📁</div>
      <div class="card-title">Projects</div>
      <div class="card-desc">Manage all your projects</div>
    </a>

    <ul id="dashboard"> 
        <li><a href="/console/educations/list">Manage Educations</a></li>
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/types/list">Manage Types</a></li>
        <li><a href="/console/skills/list">Manage Skills</a></li>
        <li><a href="/console/experiences/list">Manage Experiences</a></li>
        <li><a href="/console/users/list">Manage Users</a></li>
        <li><a href="/console/logout">Log Out</a></li>
    </ul>

    <a href="/console/skills/list" class="dashboard-card">
      <div class="card-icon">💡</div>
      <div class="card-title">Skills</div>
      <div class="card-desc">Manage skill listings</div>
    </a>

    <a href="/console/experiences/list" class="dashboard-card">
      <div class="card-icon">🚀</div>
      <div class="card-title">Experiences</div>
      <div class="card-desc">Edit experience entries</div>
    </a>

    <a href="/console/users/list" class="dashboard-card">
      <div class="card-icon">👥</div>
      <div class="card-title">Users</div>
      <div class="card-desc">User management</div>
    </a>

  </div>
</div>
@endsection
