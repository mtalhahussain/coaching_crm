<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0">Payments Management</h1>
            <button class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Add Payment
            </button>
        </div>
    </x-slot>

    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Collected</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$12,580</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$3,420</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Overdue</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$1,890</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">This Month</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$4,280</div>
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
                        <i class="fas fa-credit-card me-2"></i>Payment Records
                    </h5>
                    <div class="d-flex gap-2">
                        <select class="form-select" style="width: 150px;">
                            <option>All Status</option>
                            <option>Paid</option>
                            <option>Pending</option>
                            <option>Overdue</option>
                        </select>
                        <div class="input-group" style="width: 300px;">
                            <input type="text" class="form-control" placeholder="Search payments...">
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
                                    <th>Invoice#</th>
                                    <th>Student</th>
                                    <th>Batch</th>
                                    <th>Amount</th>
                                    <th>Due Date</th>
                                    <th>Paid Date</th>
                                    <th>Method</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Demo Data -->
                                <tr>
                                    <td><strong>INV-001</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=John Doe&background=667eea&color=fff" 
                                                 alt="Student" class="rounded-circle me-2" width="30" height="30">
                                            John Doe
                                        </div>
                                    </td>
                                    <td>B001 - Advanced Math</td>
                                    <td><strong>$480</strong></td>
                                    <td>{{ date('Y-m-d', strtotime('+5 days')) }}</td>
                                    <td>{{ date('Y-m-d') }}</td>
                                    <td>
                                        <span class="badge bg-primary">
                                            <i class="fas fa-credit-card me-1"></i>Credit Card
                                        </span>
                                    </td>
                                    <td><span class="badge bg-success">Paid</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="View Receipt"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-info" title="Download"><i class="fas fa-download"></i></button>
                                            <button class="btn btn-outline-secondary" title="Print"><i class="fas fa-print"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>INV-002</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Jane Smith&background=764ba2&color=fff" 
                                                 alt="Student" class="rounded-circle me-2" width="30" height="30">
                                            Jane Smith
                                        </div>
                                    </td>
                                    <td>B002 - Physics</td>
                                    <td><strong>$380</strong></td>
                                    <td>{{ date('Y-m-d', strtotime('+3 days')) }}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-success" title="Mark Paid"><i class="fas fa-check"></i></button>
                                            <button class="btn btn-outline-primary" title="Send Reminder"><i class="fas fa-bell"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>INV-003</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Mike Johnson&background=f093fb&color=fff" 
                                                 alt="Student" class="rounded-circle me-2" width="30" height="30">
                                            Mike Johnson
                                        </div>
                                    </td>
                                    <td>B001 - Advanced Math</td>
                                    <td><strong>$480</strong></td>
                                    <td>{{ date('Y-m-d', strtotime('-2 days')) }}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><span class="badge bg-danger">Overdue</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-success" title="Mark Paid"><i class="fas fa-check"></i></button>
                                            <button class="btn btn-outline-warning" title="Send Notice"><i class="fas fa-exclamation"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>INV-004</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Sarah Wilson&background=667eea&color=fff" 
                                                 alt="Student" class="rounded-circle me-2" width="30" height="30">
                                            Sarah Wilson
                                        </div>
                                    </td>
                                    <td>B003 - Chemistry</td>
                                    <td><strong>$420</strong></td>
                                    <td>{{ date('Y-m-d', strtotime('-1 day')) }}</td>
                                    <td>{{ date('Y-m-d', strtotime('-1 day')) }}</td>
                                    <td>
                                        <span class="badge bg-info">
                                            <i class="fas fa-university me-1"></i>Bank Transfer
                                        </span>
                                    </td>
                                    <td><span class="badge bg-success">Paid</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="View Receipt"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-info" title="Download"><i class="fas fa-download"></i></button>
                                            <button class="btn btn-outline-secondary" title="Print"><i class="fas fa-print"></i></button>
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