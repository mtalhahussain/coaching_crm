<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0">Attendance Management</h1>
            <button class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Mark Attendance
            </button>
        </div>
    </x-slot>

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Today's Attendance</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">85%</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">This Week</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">92%</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chart-line fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">This Month</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">89%</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
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
                        <i class="fas fa-calendar-check me-2"></i>Attendance Records
                    </h5>
                    <div class="d-flex gap-2">
                        <select class="form-select" style="width: 150px;">
                            <option>All Batches</option>
                            <option>B001 - Advanced Math</option>
                            <option>B002 - Physics</option>
                            <option>B003 - Chemistry</option>
                        </select>
                        <input type="date" class="form-control" style="width: 150px;" value="{{ date('Y-m-d') }}">
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Date</th>
                                    <th>Batch</th>
                                    <th>Student</th>
                                    <th>Time In</th>
                                    <th>Time Out</th>
                                    <th>Duration</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Demo Data -->
                                <tr>
                                    <td>{{ date('Y-m-d') }}</td>
                                    <td>B001 - Advanced Math</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=John Doe&background=667eea&color=fff" 
                                                 alt="Student" class="rounded-circle me-2" width="30" height="30">
                                            John Doe
                                        </div>
                                    </td>
                                    <td>09:00 AM</td>
                                    <td>11:00 AM</td>
                                    <td>2h 00m</td>
                                    <td><span class="badge bg-success">Present</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="Edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ date('Y-m-d') }}</td>
                                    <td>B001 - Advanced Math</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Jane Smith&background=764ba2&color=fff" 
                                                 alt="Student" class="rounded-circle me-2" width="30" height="30">
                                            Jane Smith
                                        </div>
                                    </td>
                                    <td>09:15 AM</td>
                                    <td>11:00 AM</td>
                                    <td>1h 45m</td>
                                    <td><span class="badge bg-warning">Late</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="Edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ date('Y-m-d') }}</td>
                                    <td>B001 - Advanced Math</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Mike Johnson&background=f093fb&color=fff" 
                                                 alt="Student" class="rounded-circle me-2" width="30" height="30">
                                            Mike Johnson
                                        </div>
                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><span class="badge bg-danger">Absent</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-success" title="Mark Present"><i class="fas fa-check"></i></button>
                                            <button class="btn btn-outline-primary" title="Edit"><i class="fas fa-edit"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ date('Y-m-d', strtotime('-1 day')) }}</td>
                                    <td>B002 - Physics</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Sarah Wilson&background=667eea&color=fff" 
                                                 alt="Student" class="rounded-circle me-2" width="30" height="30">
                                            Sarah Wilson
                                        </div>
                                    </td>
                                    <td>02:00 PM</td>
                                    <td>04:00 PM</td>
                                    <td>2h 00m</td>
                                    <td><span class="badge bg-success">Present</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="Edit"><i class="fas fa-edit"></i></button>
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