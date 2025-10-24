<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create permissions
        $permissions = [
            // Student permissions
            'view-students',
            'create-students',
            'edit-students',
            'delete-students',
            
            // Teacher permissions
            'view-teachers',
            'create-teachers',
            'edit-teachers',
            'delete-teachers',
            
            // Batch permissions
            'view-batches',
            'create-batches',
            'edit-batches',
            'delete-batches',
            
            // Attendance permissions
            'view-attendance',
            'create-attendance',
            'edit-attendance',
            'delete-attendance',
            
            // Payment permissions
            'view-payments',
            'create-payments',
            'edit-payments',
            'delete-payments',
            
            // Lead permissions
            'view-leads',
            'create-leads',
            'edit-leads',
            'delete-leads',
            
            // Dashboard permission
            'view-dashboard',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $teacherRole = Role::create(['name' => 'teacher']);
        $studentRole = Role::create(['name' => 'student']);

        // Assign all permissions to admin
        $adminRole->givePermissionTo(Permission::all());

        // Assign limited permissions to teacher
        $teacherRole->givePermissionTo([
            'view-dashboard',
            'view-students',
            'create-students',
            'edit-students',
            'view-batches',
            'create-batches',
            'edit-batches',
            'view-attendance',
            'create-attendance',
            'edit-attendance',
            'view-payments',
            'create-payments',
            'edit-payments',
            'view-leads',
            'create-leads',
            'edit-leads',
        ]);

        // Assign minimal permissions to student
        $studentRole->givePermissionTo([
            'view-dashboard',
        ]);

        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@coaching.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        $admin->assignRole('admin');

        // Create teacher user
        $teacher = User::create([
            'name' => 'Teacher User',
            'email' => 'teacher@coaching.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        $teacher->assignRole('teacher');

        // Create student user
        $student = User::create([
            'name' => 'Student User',
            'email' => 'student@coaching.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        $student->assignRole('student');
    }
}
