<?php

// Controller ADMIN
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ArtikelController as AdminArtikelController;
use App\Http\Controllers\Admin\TestimoniController as AdminTestimoniController;
use App\Http\Controllers\Admin\BidangStudiController as AdminBidangStudiController;
use App\Http\Controllers\Admin\LayananJasaController as AdminLayananJasaController;
use App\Http\Controllers\Admin\KaryaSiswaController as AdminKaryaSiswaController;
use App\Http\Controllers\Admin\TeamMemberController as AdminTeamMemberController;
use App\Http\Controllers\Admin\PesanKontakController as AdminPesanKontakController;

// Controller PUBLIK
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BidangstudiController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KaryasiswaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\Auth\RegisteredUserController;


// Register
Route::get('register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

// Grup Route Admin
Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Controller Admin
    Route::resource('artikel', AdminArtikelController::class);
    Route::resource('testimonial', AdminTestimoniController::class);
    Route::resource('bidang-studi', AdminBidangStudiController::class);
    Route::resource('layanan-jasa', AdminLayananJasaController::class);
    Route::resource('karya-siswa', AdminKaryaSiswaController::class);
    Route::resource('team-member', AdminTeamMemberController::class);

    Route::get('pesan-kontak', [AdminPesanKontakController::class, 'index'])->name('pesan-kontak.index');
    Route::delete('pesan-kontak/{pesanKontak}', [AdminPesanKontakController::class, 'destroy'])->name('pesan-kontak.destroy');
});

// Route /dashboard (Admin)
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route Publik
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/bidangstudi', [BidangstudiController::class, 'index'])->name('bidangstudi');
Route::get('/bidangstudi/{slug}', [BidangstudiController::class, 'index'])->name('bidangstudi.detail');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/layanan/{slug}', [LayananController::class, 'show'])->name('layanan.detail');
Route::get('/karyasiswa', [KaryasiswaController::class, 'index'])->name('karyasiswa');
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{slug}', [ArtikelController::class, 'index'])->name('artikel.detail');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
