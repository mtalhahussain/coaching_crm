<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0">Teachers Management</h1>
            <button class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Add New Teacher
            </button>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-chalkboard-teacher me-2"></i>Teachers List
                    </h5>
                    <div class="d-flex gap-2">
                        <div class="input-group" style="width: 300px;">
                            <input type="text" class="form-control" placeholder="Search teachers..." id="searchInput">
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
                                    <th>ID</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Experience</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($teachers ?? [] as $teacher)
                                <tr>
                                    <td>#{{ $teacher->id ?? 'T001' }}</td>
                                    <td>
                                        <img src="{{ $teacher->avatar ?? 'https://ui-avatars.com/api/?name=Teacher&background=667eea&color=fff' }}" 
                                             alt="Teacher" class="rounded-circle" width="40" height="40">
                                    </td>
                                    <td>{{ $teacher->name ?? 'John Doe' }}</td>
                                    <td>{{ $teacher->email ?? 'john@example.com' }}</td>
                                    <td>{{ $teacher->phone ?? '+1 234 567 8900' }}</td>
                                    <td>{{ $teacher->subject ?? 'Mathematics' }}</td>
                                    <td>{{ $teacher->experience ?? '5 years' }}</td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="View">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-outline-secondary" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-outline-danger" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <!-- Demo Data -->
                                <tr>
                                    <td>#T001</td>
                                    <td>
                                        <img src="https://ui-avatars.com/api/?name=Sarah Johnson&background=667eea&color=fff" 
                                             alt="Teacher" class="rounded-circle" width="40" height="40">
                                    </td>
                                    <td>Sarah Johnson</td>
                                    <td>sarah@coaching.com</td>
                                    <td>+1 234 567 8901</td>
                                    <td>Mathematics</td>
                                    <td>8 years</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#T002</td>
                                    <td>
                                        <img src="https://ui-avatars.com/api/?name=Michael Brown&background=764ba2&color=fff" 
                                             alt="Teacher" class="rounded-circle" width="40" height="40">
                                    </td>
                                    <td>Michael Brown</td>
                                    <td>michael@coaching.com</td>
                                    <td>+1 234 567 8902</td>
                                    <td>Physics</td>
                                    <td>6 years</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#T003</td>
                                    <td>
                                        <img src="https://ui-avatars.com/api/?name=Emily Davis&background=f093fb&color=fff" 
                                             alt="Teacher" class="rounded-circle" width="40" height="40">
                                    </td>
                                    <td>Emily Davis</td>
                                    <td>emily@coaching.com</td>
                                    <td>+1 234 567 8903</td>
                                    <td>Chemistry</td>
                                    <td>4 years</td>
                                    <td><span class="badge bg-warning">On Leave</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary" title="View"><i class="fas fa-eye"></i></button>
                                            <button class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-outline-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>