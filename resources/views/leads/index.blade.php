<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0">Leads Management</h1>
            <button class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Add New Lead
            </button>
        </div>
    </x-slot>

    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Leads</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">48</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Hot Leads</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Converted</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">This Month</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-user-plus me-2"></i>Leads List
                    </h5>
                    <div class="d-flex gap-2">
                        <select class="form-select" style="width: 150px;">
                            <option>All Status</option>
                            <option>New</option>
                            <option>Contacted</option>
                            <option>Hot</option>
                            <option>Converted</option>
                            <option>Lost</option>
                        </select>
                        <div class="input-group" style="width: 300px;">
                            <input type="text" class="form-control" placeholder="Search leads...">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Lead ID</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Interest</th>
                                    <th>Source</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Demo Data -->
                                <tr>
                                    <td><strong>L001</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Alex Thompson&background=667eea&color=fff" 
                                                 alt="Lead" class="rounded-circle me-2" width="30" height="30">
                                            Alex Thompson
                                        </div>
                                    </td>
                                    <td>
                                        <small class="d-block">alex@example.com</small>
                                        <small class="text-muted">+1 234 567 8901</small>
                                    </td>
                                    <td>Advanced Mathematics</td>
                                    <td>
                                        <span class="badge bg-info">Website</span>
                                    </td>
                                    <td>{{ date('Y-m-d', strtotime('-2 days')) }}</td>
                                    <td><span class="badge bg-warning">Hot</span></td>
                                    <td>
                                        <span class="badge bg-danger">
                                            <i class="fas fa-exclamation"></i> High
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-success" title="Contact"><i class="fas fa-phone"></i></button>
                                            <button class="btn btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>L002</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Emma Wilson&background=764ba2&color=fff" 
                                                 alt="Lead" class="rounded-circle me-2" width="30" height="30">
                                            Emma Wilson
                                        </div>
                                    </td>
                                    <td>
                                        <small class="d-block">emma@example.com</small>
                                        <small class="text-muted">+1 234 567 8902</small>
                                    </td>
                                    <td>Physics</td>
                                    <td>
                                        <span class="badge bg-success">Referral</span>
                                    </td>
                                    <td>{{ date('Y-m-d', strtotime('-1 day')) }}</td>
                                    <td><span class="badge bg-primary">New</span></td>
                                    <td>
                                        <span class="badge bg-warning">
                                            <i class="fas fa-minus"></i> Medium
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-success" title="Contact"><i class="fas fa-phone"></i></button>
                                            <button class="btn btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>L003</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=David Brown&background=f093fb&color=fff" 
                                                 alt="Lead" class="rounded-circle me-2" width="30" height="30">
                                            David Brown
                                        </div>
                                    </td>
                                    <td>
                                        <small class="d-block">david@example.com</small>
                                        <small class="text-muted">+1 234 567 8903</small>
                                    </td>
                                    <td>Chemistry</td>
                                    <td>
                                        <span class="badge bg-secondary">Social Media</span>
                                    </td>
                                    <td>{{ date('Y-m-d', strtotime('-3 days')) }}</td>
                                    <td><span class="badge bg-info">Contacted</span></td>
                                    <td>
                                        <span class="badge bg-secondary">
                                            <i class="fas fa-circle"></i> Low
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-success" title="Follow Up"><i class="fas fa-phone"></i></button>
                                            <button class="btn btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>L004</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Lisa Garcia&background=667eea&color=fff" 
                                                 alt="Lead" class="rounded-circle me-2" width="30" height="30">
                                            Lisa Garcia
                                        </div>
                                    </td>
                                    <td>
                                        <small class="d-block">lisa@example.com</small>
                                        <small class="text-muted">+1 234 567 8904</small>
                                    </td>
                                    <td>Advanced Mathematics</td>
                                    <td>
                                        <span class="badge bg-success">Referral</span>
                                    </td>
                                    <td>{{ date('Y-m-d', strtotime('-5 days')) }}</td>
                                    <td><span class="badge bg-success">Converted</span></td>
                                    <td>
                                        <span class="badge bg-danger">
                                            <i class="fas fa-exclamation"></i> High
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-info" title="View Student"><i class="fas fa-user-graduate"></i></button>
                                            <button class="btn btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-success" title="Complete"><i class="fas fa-check"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>