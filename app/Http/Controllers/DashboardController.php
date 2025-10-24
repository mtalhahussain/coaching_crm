<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Batch;
use App\Models\Payment;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'total_students' => Student::count(),
            'active_students' => Student::where('status', 'active')->count(),
            'total_teachers' => Teacher::count(),
            'active_teachers' => Teacher::where('status', 'active')->count(),
            'total_batches' => Batch::count(),
            'active_batches' => Batch::where('status', 'active')->count(),
            'total_leads' => Lead::count(),
            'new_leads' => Lead::where('status', 'new')->count(),
            'monthly_revenue' => Payment::where('status', 'paid')
                ->whereMonth('payment_date', now()->month)
                ->sum('amount'),
            'pending_payments' => Payment::where('status', 'pending')->sum('amount'),
        ];

        $recent_students = Student::latest()->take(5)->get();
        $recent_leads = Lead::latest()->take(5)->get();
        $recent_payments = Payment::with(['student', 'batch'])->latest()->take(5)->get();

        return view('dashboard', compact('stats', 'recent_students', 'recent_leads', 'recent_payments'));
    }
}
