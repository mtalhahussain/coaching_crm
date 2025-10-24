<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0">Batches Management</h1>
            <button class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Create New Batch
            </button>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-layer-group me-2"></i>Batches List
                    </h5>
                    <div class="d-flex gap-2">
                        <select class="form-select" style="width: 150px;">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Completed</option>
                            <option>Upcoming</option>
                        </select>
                        <div class="input-group" style="width: 300px;">
                            <input type="text" class="form-control" placeholder="Search batches...">
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
                                    <th>Batch Code</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Teacher</th>
                                    <th>Students</th>
                                    <th>Schedule</th>
                                    <th>Duration</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Demo Data -->
                                <tr>
                                    <td><strong>B001</strong></td>
                                    <td>Advanced Mathematics</td>
                                    <td>Mathematics</td>
                                    <td>Sarah Johnson</td>
                                    <td>
                                        <span class="badge bg-info">25 Students</span>
                                    </td>
                                    <td>Mon, Wed, Fri<br><small class="text-muted">9:00 AM - 11:00 AM</small></td>
                                    <td>6 Months</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-outline-info" title="Students"><i class="fas fa-users"></i></button>
                                            <button class="btn btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>B002</strong></td>
                                    <td>Physics Fundamentals</td>
                                    <td>Physics</td>
                                    <td>Michael Brown</td>
                                    <td>
                                        <span class="badge bg-info">18 Students</span>
                                    </td>
                                    <td>Tue, Thu, Sat<br><small class="text-muted">2:00 PM - 4:00 PM</small></td>
                                    <td>4 Months</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-outline-info" title="Students"><i class="fas fa-users"></i></button>
                                            <button class="btn btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>B003</strong></td>
                                    <td>Organic Chemistry</td>
                                    <td>Chemistry</td>
                                    <td>Emily Davis</td>
                                    <td>
                                        <span class="badge bg-warning">15 Students</span>
                                    </td>
                                    <td>Mon, Wed<br><small class="text-muted">11:00 AM - 1:00 PM</small></td>
                                    <td>5 Months</td>
                                    <td><span class="badge bg-warning">On Hold</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-outline-info" title="Students"><i class="fas fa-users"></i></button>
                                            <button class="btn btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>B004</strong></td>
                                    <td>Calculus Masterclass</td>
                                    <td>Mathematics</td>
                                    <td>Sarah Johnson</td>
                                    <td>
                                        <span class="badge bg-secondary">0 Students</span>
                                    </td>
                                    <td>To be scheduled</td>
                                    <td>3 Months</td>
                                    <td><span class="badge bg-primary">Upcoming</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-outline-info" title="Students"><i class="fas fa-users"></i></button>
                                            <button class="btn btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
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