@extends('layout.console')

@section('content')
<div class="dashboard-page">
  <!-- Header -->
  <div class="dashboard-header">
    <h1>Console Dashboard</h1>

  </div>

  <!-- Grid of Cards -->
  <div class="dashboard-grid">
    <a href="/console/projects/list" class="dashboard-card">
      <div class="card-icon">📁</div>
      <div class="card-title">Projects</div>
      <div class="card-desc">Manage all your projects</div>
    </a>

    <a href="/console/types/list" class="dashboard-card">
      <div class="card-icon">🔖</div>
      <div class="card-title">Types</div>
      <div class="card-desc">Configure content types</div>
    </a>
    
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

    <a href="/console/educations/list" class="dashboard-card">
      <div class="card-icon">🎓</div>
      <div class="card-title">Educations</div>
      <div class="card-desc">Manage education entries</div>
    </a>

    <a href="/console/users/list" class="dashboard-card">
      <div class="card-icon">👥</div>
      <div class="card-title">Users</div>
      <div class="card-desc">User management</div>
    </a>

  </div>
</div>
@endsection
