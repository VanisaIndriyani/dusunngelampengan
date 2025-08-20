<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UMKM;
use App\Models\Content;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        // Middleware akan diterapkan di routes
    }

    public function dashboard()
    {
        $stats = [
            'total_users' => User::count(),
            'total_umkm' => UMKM::count(),
            'total_content' => Content::count(),
        ];

        $recent_umkm = UMKM::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_umkm'));
    }



    public function umkm(Request $request)
    {
        $query = UMKM::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('owner_name', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        // Category filter
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $umkm = $query->latest()->paginate(10)->withQueryString();
        return view('admin.umkm.index', compact('umkm'));
    }

    public function umkmCreate()
    {
        return view('admin.umkm.create');
    }

    public function umkmStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'owner_name' => 'required|string|max:255',
            'owner_phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(storage_path('app/public/images/umkm'), $imageName);
            $data['image'] = 'images/umkm/' . $imageName;
        }

        UMKM::create($data);

        return redirect()->route('admin.umkm.index')->with('success', 'UMKM berhasil ditambahkan!');
    }

    public function umkmEdit($id)
    {
        $umkm = UMKM::findOrFail($id);
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function umkmUpdate(Request $request, $id)
    {
        $umkm = UMKM::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'owner_name' => 'required|string|max:255',
            'owner_phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            if ($umkm->image && file_exists(storage_path('app/public/' . $umkm->image))) {
                unlink(storage_path('app/public/' . $umkm->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(storage_path('app/public/images/umkm'), $imageName);
            $data['image'] = 'images/umkm/' . $imageName;
        }

        $umkm->update($data);

        return redirect()->route('admin.umkm.index')->with('success', 'UMKM berhasil diperbarui!');
    }

    public function umkmDestroy($id)
    {
        $umkm = UMKM::findOrFail($id);
        
        if ($umkm->image && file_exists(storage_path('app/public/' . $umkm->image))) {
            unlink(storage_path('app/public/' . $umkm->image));
        }
        
        $umkm->delete();

        return redirect()->route('admin.umkm.index')->with('success', 'UMKM berhasil dihapus!');
    }

    public function content()
    {
        $contents = Content::where('type', 'video')->latest()->paginate(10);
        return view('admin.content.index', compact('contents'));
    }

    public function contentCreate()
    {
        return view('admin.content.create');
    }

    public function contentStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video_url' => 'required|url|max:500',
        ]);

        $data = [
            'title' => $request->title,
            'content' => 'Video YouTube', // Default content
            'type' => 'video', // Default type
            'video_url' => $request->video_url,
        ];

        Content::create($data);

        return redirect()->route('admin.content')->with('success', 'Video berhasil ditambahkan!');
    }

    public function contentEdit($id)
    {
        $content = Content::findOrFail($id);
        return view('admin.content.edit', compact('content'));
    }

    public function contentUpdate(Request $request, $id)
    {
        $content = Content::findOrFail($id);
        
        $request->validate([
            'title' => 'required|string|max:255',
            'video_url' => 'required|url|max:500',
        ]);

        $data = [
            'title' => $request->title,
            'video_url' => $request->video_url,
        ];

        $content->update($data);

        return redirect()->route('admin.content')->with('success', 'Video berhasil diperbarui!');
    }

    public function contentDestroy($id)
    {
        $content = Content::findOrFail($id);
        
        if ($content->image && file_exists(public_path($content->image))) {
            unlink(public_path($content->image));
        }
        
        $content->delete();

        return redirect()->route('admin.content')->with('success', 'Video berhasil dihapus!');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function settingsUpdate(Request $request)
    {
        $user = auth()->user();
        
        // Admin account update validation
        if ($request->filled('admin_email') || $request->filled('new_password')) {
            $request->validate([
                'admin_email' => 'required|email|unique:users,email,' . $user->id,
                'current_password' => 'required_with:new_password',
                'new_password' => 'nullable|min:8|confirmed',
                'confirm_password' => 'required_with:new_password',
            ]);
            
            // Verify current password if trying to change password
            if ($request->filled('new_password')) {
                if (!Hash::check($request->current_password, $user->password)) {
                    return back()->withErrors(['current_password' => 'Password saat ini tidak sesuai'])->withInput();
                }
            }
        }
        
        // Update admin account if provided
        if ($request->filled('admin_email') || $request->filled('new_password')) {
            $userData = [];
            
            // Update email if changed
            if ($request->filled('admin_email') && $request->admin_email !== $user->email) {
                $userData['email'] = $request->admin_email;
            }
            
            // Update password if provided
            if ($request->filled('new_password')) {
                $userData['password'] = Hash::make($request->new_password);
            }
            
            // Update user data
            if (!empty($userData)) {
                $user->update($userData);
            }
        }
        
        return redirect()->route('admin.settings')->with('success', 'Pengaturan akun admin berhasil diperbarui!');
    }

    // User Management Methods
    public function users(Request $request)
    {
        $query = User::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%');
            });
        }

        $users = $query->latest()->paginate(10)->withQueryString();
        return view('admin.users.index', compact('users'));
    }

    public function usersCreate()
    {
        return view('admin.users.create');
    }

    public function usersStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => true,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function usersEdit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function usersUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        // Update password if provided
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui!');
    }

    public function usersDestroy($id)
    {
        $user = User::findOrFail($id);
        
        // Prevent deleting own account
        if ($user->id === auth()->id()) {
            return redirect()->route('admin.users.index')->with('error', 'Tidak dapat menghapus akun sendiri!');
        }
        
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus!');
    }
} 