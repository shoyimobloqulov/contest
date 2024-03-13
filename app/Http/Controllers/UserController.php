<?php
namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        return view('users.profile', compact('user'));
    }

    public function personal(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'region_id' => 'required|integer',
        ]);

        $user = auth()->user();

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->region = $request->region_id;

        $user->save();

        return redirect()->back()->with('success', 'Profil muvaffaqiyatli yangilandi');
    }

    public function userList(Request $request)
    {
        $users = User::paginate(10);

        if ($request->has('search')) {
            $query = $request->get('search');
            $users = User::where('name', 'like', "%$query%")
                ->orWhere('username', 'like', "%$query%")
                ->paginate(10);
        }

        foreach ($users as $user) {
            $user->is_online = $this->isOnline($user);
            $user->last_seen_human = $this->getLastSeenHuman($user);
        }

        return view('users.list', compact('users'));
    }

    public function system(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('system');
    }

    private function isOnline($user): bool
    {
        return $user->last_seen && Carbon::parse($user->last_seen)->diffInHours(Carbon::now()) < 1;
    }

    private function getLastSeenHuman($user)
    {
        if ($user->last_seen) {
            return Carbon::parse($user->last_seen)->diffForHumans();
        } else {
            return "Bunday ma'lumot yo'q";
        }
    }
}
