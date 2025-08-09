<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Product model removed
use App\Models\UMKM;
use Illuminate\Support\Facades\Auth;

class RTController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rt');
    }

    /**
     * RT Dashboard
     */
    public function dashboard()
    {
        $user = Auth::user();
        
        $stats = [
            'total_umkm' => UMKM::where('rt_number', $user->rt_number)->count(),
            'active_umkm' => UMKM::where('rt_number', $user->rt_number)->where('is_active', true)->count(),
        ];
            
        $recent_umkm = UMKM::where('rt_number', $user->rt_number)
            ->latest()
            ->take(5)
            ->get();

        return view('rt.dashboard', compact('stats', 'recent_umkm'));
    }

    // Product management methods removed

    /**
     * RT UMKM Management
     */
    public function umkm()
    {
        $user = Auth::user();
        $umkm = UMKM::where('rt_number', $user->rt_number)
            ->latest()
            ->paginate(10);
            
        return view('rt.umkm.index', compact('umkm'));
    }

    public function umkmCreate()
    {
        return view('rt.umkm.create');
    }

    public function umkmStore(Request $request)
    {
        $user = Auth::user();
        
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
        $data['rt_number'] = $user->rt_number;
        $data['is_active'] = true;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(storage_path('app/public/images/umkm'), $imageName);
            $data['image'] = 'images/umkm/' . $imageName;
        }

        UMKM::create($data);

        return redirect()->route('rt.umkm')->with('success', 'UMKM berhasil ditambahkan!');
    }

    public function umkmEdit($id)
    {
        $user = Auth::user();
        $umkm = UMKM::where('rt_number', $user->rt_number)
            ->findOrFail($id);
            
        return view('rt.umkm.edit', compact('umkm'));
    }

    public function umkmUpdate(Request $request, $id)
    {
        $user = Auth::user();
        $umkm = UMKM::where('rt_number', $user->rt_number)
            ->findOrFail($id);
        
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
            // Delete old image
            if ($umkm->image && file_exists(storage_path('app/public/' . $umkm->image))) {
                unlink(storage_path('app/public/' . $umkm->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(storage_path('app/public/images/umkm'), $imageName);
            $data['image'] = 'images/umkm/' . $imageName;
        }

        $umkm->update($data);

        return redirect()->route('rt.umkm')->with('success', 'UMKM berhasil diperbarui!');
    }

    public function umkmDestroy($id)
    {
        $user = Auth::user();
        $umkm = UMKM::where('rt_number', $user->rt_number)
            ->findOrFail($id);

        // Delete image
        if ($umkm->image && file_exists(storage_path('app/public/' . $umkm->image))) {
            unlink(storage_path('app/public/' . $umkm->image));
        }

        $umkm->delete();

        return redirect()->route('rt.umkm')->with('success', 'UMKM berhasil dihapus!');
    }

    /**
     * RT Profile Management
     */
    public function profile()
    {
        $user = Auth::user();
        return view('rt.profile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ]);

        $user->update($request->only(['name', 'email', 'phone', 'address']));

        return redirect()->route('rt.profile')->with('success', 'Profil berhasil diperbarui!');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('rt.profile')->with('success', 'Password berhasil diubah!');
    }
}
