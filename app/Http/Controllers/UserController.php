<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ambil semua data pengguna dari model User

        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'alamat' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan!');
    }

    /**
    * edit data products
    */

    public function edit( $id ) {
        return view( 'user.edit', [
            'user' => User::find( $id )
            
        ] );
    }

    /**
    * Update data products
    */

    public function update( Request $request, $id ) {
        $user = User::find( $id );
        $user->nama_barang = $request->nama_barang;
        $user->deskripsi = $request->deskripsi;
        $user->harga = $request->harga;
        $user->stok = $request->stok;

        if ( $request->hasFile( 'foto' ) ) {
            $destination = 'uploads/products/'.$product->foto;

            if ( File::exists( $destination ) ) {
                File::delete( $destination );
            }

            $file = $request->file( 'foto' );
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move( 'uploads/products/', $filename );
            $product->foto = $filename;
        }

        $product->update();

        return redirect( '/users' )->with( 'success', 'Users updated successfully.' );
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $users = User::all();
        if ($user->id === auth()->id()) {
            echo "<script>alert('Tidak dapat menghapus akun yang sedang login.')</script>";
            return view('user.index', compact('users'));
        }

        $user->delete();

        $users = User::all();
        echo "<script>alert('Pengguna berhasil dihapus.')</script>";
        return view('user.index', compact('users'));
    }

    public function updateType(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->usertype = $request->usertype;
        $user->save();

        return redirect()->back()->with('success', 'Tipe user berhasil diperbarui.');
    }


}