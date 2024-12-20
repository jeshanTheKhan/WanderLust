<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CaroselController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\GuideController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\OfficeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/Admin/Admin-Dashboard', [AdminController::class, 'index'])->name('home');
// Carosel Section
Route::get('/Admin/Add-Carosel', [CaroselController::class, 'index'])->name('add.carosel');
Route::get('/Admin/All-Carosel', [CaroselController::class, 'table'])->name('all.carosel');
Route::post('/Admin/Save-Carosel', [CaroselController::class, 'addSave'])->name('save.carosel');
Route::post('/Admin/Update-status/{id}', [CaroselController::class, 'UpdateStatus'])->name('updateStatus');
Route::get('/Admin/Edit-Carosel/{id}', [CaroselController::class, 'edit'])->name('edit.carosel');
Route::post('/Admin/Update-Carosel', [CaroselController::class, 'update'])->name('update.carosel');
Route::get('/Admin/Delete-Carosel/{id}', [CaroselController::class, 'del'])->name('del.carosel');


// Place Added
Route::get('/Admin/Add-Place', [PlaceController::class, 'index'])->name('add.place');
Route::post('/Admin/Save-Place', [PlaceController::class, 'save'])->name('place.save');
Route::get('/Admin/All-Place', [PlaceController::class, 'table'])->name('all.place');
Route::post('/Admin/Place-status/{id}', [PlaceController::class, 'UpdateStatus'])->name('place.updatestatus');
Route::get('/Admin/Edit-Place/{id}', [PlaceController::class, 'edit'])->name('edit.place');
Route::post('/Admin/Update-Place', [PlaceController::class, 'update'])->name('place.update');
Route::get('/Admin/Delete-Place/{id}', [PlaceController::class, 'del'])->name('del.place');

// Services Section
Route::get('/Admin/Add-Services', [ServiceController::class, 'index'])->name('add.services');
Route::post('/Admin/Save-Service', [ServiceController::class, 'save'])->name('service.save');
Route::get('/Admin/All-Services', [ServiceController::class, 'table'])->name('all.services');
Route::post('/Admin/Service-Update-status/{id}', [ServiceController::class, 'UpdateStatus'])->name('service.updatestatus');
Route::get('/Admin/Edit-Service/{id}', [ServiceController::class, 'edit'])->name('service.edit');
Route::post('/Admin/Update-Services', [ServiceController::class, 'update'])->name('service.update');
Route::get('/Admin/Delete-Service/{id}', [ServiceController::class, 'del'])->name('service.del');

// User Section
Route::get('/Admin/Add-User', [AdminController::class, 'user_index'])->name('add.user');
Route::post('/Admin/Save-User', [AdminController::class, 'save'])->name('user.save');
Route::get('/Admin/All-User', [AdminController::class, 'table'])->name('all.user');
Route::post('/Admin/USer-status/{id}', [AdminController::class, 'UpdateStatus'])->name('user.updatestatus');
Route::get('/Admin/Edit-User/{id}', [AdminController::class, 'edit'])->name('user.edit');
Route::post('/Admin/Update-User', [AdminController::class, 'update'])->name('user.update');
Route::get('/Admin/Delete-User/{id}', [AdminController::class, 'del'])->name('user.del');

// User_Type
Route::get('/Admin/Add-User-Type', [AdminController::class, 'type_index'])->name('add.user_rule');
Route::post('/Admin/Save-user_role', [AdminController::class, 'user_role'])->name('save.user_role');
Route::get('/Admin/All-User-Type', [AdminController::class, 'type_table'])->name('all.user_rule');
Route::post('/Admin/USer_role-status/{id}', [AdminController::class, 'user_roleUpdateStatus'])->name('user_role.updatestatus');
Route::get('/Admin/Edit-user_role/{id}', [AdminController::class, 'user_roleedit'])->name('user_role.edit');
Route::post('/Admin/Update-user_role', [AdminController::class, 'user_roleupdate'])->name('user_role.update');
Route::get('/Admin/Delete-user_role/{id}', [AdminController::class, 'user_roledel'])->name('user_role.del');


// Package
Route::get('/Admin/Add-Package', [PackageController::class, 'index'])->name('add.package');
Route::post('/Admin/Save-Package', [PackageController::class, 'save'])->name('save.package');
Route::get('/Admin/All-Package', [PackageController::class, 'table'])->name('all.package');
Route::post('/Admin/Package-status/{id}', [PackageController::class, 'UpdateStatus'])->name('package.updatestatus');
Route::get('/Admin/Edit-Package/{id}', [PackageController::class, 'edit'])->name('package.edit');
Route::get('/Admin/Ciew-Package/{id}', [PackageController::class, 'view'])->name('package.view');
Route::post('/Admin/Update-Package', [PackageController::class, 'update'])->name('update.package');
Route::get('/Admin/Delete-Package/{id}', [PackageController::class, 'del'])->name('package.del');


// Destination Section
Route::get('/Admin/Add-Destination', [DestinationController::class, 'index'])->name('add.destination');
Route::post('/Admin/Save-Destination', [DestinationController::class, 'Save'])->name('save.destination');
Route::get('/Admin/All-Destination', [DestinationController::class, 'table'])->name('all.destination');
Route::post('/Admin/Destination-Update-status/{id}', [DestinationController::class, 'UpdateStatus'])->name('destination.updateStatus');
Route::get('/Admin/Destination-Edit/{id}', [DestinationController::class, 'edit'])->name('destination.edit');
Route::post('/Admin/Update-Destination', [DestinationController::class, 'update'])->name('update.destination');
Route::get('/Admin/Destination-Delete/{id}', [DestinationController::class, 'del'])->name('destination.del');

// Guide Section
Route::get('/Admin/Add-Guide', [GuideController::class, 'index'])->name('add.guide');
Route::post('/Admin/Save-Guide', [GuideController::class, 'Save'])->name('save.guide');
Route::get('/Admin/All-Guide', [GuideController::class, 'table'])->name('all.guide');
Route::post('/Admin/Guide-status/{id}', [GuideController::class, 'UpdateStatus'])->name('guide.updatestatus');
Route::get('/Admin/Guide-Edit/{id}', [GuideController::class, 'edit'])->name('guide.edit');
Route::post('/Admin/Update-Guide', [GuideController::class, 'update'])->name('update.guide');
Route::get('/Admin/Guide-Delete/{id}', [GuideController::class, 'del'])->name('guide.del');

// Blog Section
Route::get('/Admin/Add-Blog', [BlogController::class, 'index'])->name('add.blog');
Route::post('/Admin/Save-Blog', [BlogController::class, 'Save'])->name('save.blog');
Route::get('/Admin/All-Blog', [BlogController::class, 'table'])->name('all.blog');
Route::post('/Admin/blog-status/{id}', [BlogController::class, 'blogUpdateStatus'])->name('blog.updatestatus');
Route::get('/Admin/Edit-blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/Admin/Update-blog', [BlogController::class, 'update'])->name('update.blog');
Route::get('/Admin/Edit-Delete/{id}', [BlogController::class, 'del'])->name('blog.del');

// Testimonial
Route::get('/Admin/Add-testimonial', [TestimonialController::class, 'index'])->name('add.testimonial');
Route::post('/Admin/Save-testimonial', [TestimonialController::class, 'Save'])->name('save.testimonial');
Route::get('/Admin/All-testimonial', [TestimonialController::class, 'table'])->name('all.testimonial');
Route::post('/Admin/testimonial-Update-status/{id}', [TestimonialController::class, 'UpdateStatus'])->name('testimonial.updatestatus');
Route::get('/Admin/Edit-testimonial/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
Route::post('/Admin/Update-testimonial', [TestimonialController::class, 'update'])->name('update.testimonial');
Route::get('/Admin/Delete-testimonial/{id}', [TestimonialController::class, 'del'])->name('testimonial.del');

// About Section
Route::get('/Admin/Add-About', [AboutController::class, 'index'])->name('add.about');
Route::post('/Admin/Save-About', [AboutController::class, 'Save'])->name('save.about');
Route::get('/Admin/All-About', [AboutController::class, 'table'])->name('all.about');
Route::post('/Admin/about-Update-status/{id}', [AboutController::class, 'UpdateStatus'])->name('about.updatestatus');
Route::get('/Admin/Edit-About/{id}', [AboutController::class, 'edit'])->name('about.edit');
Route::post('/Admin/Update-About', [AboutController::class, 'update'])->name('update.about');
Route::get('/Admin/Delete-About/{id}', [AboutController::class, 'del'])->name('about.del');

// Office Section
Route::get('/Admin/Add-Office', [OfficeController::class, 'index'])->name('add.office');
Route::post('/Admin/Save-Office', [OfficeController::class, 'Save'])->name('save.office');
Route::get('/Admin/All-Office', [OfficeController::class, 'table'])->name('all.office');
Route::post('/Admin/Office-Update-status/{id}', [OfficeController::class, 'UpdateStatus'])->name('office.updatestatus');
Route::get('/Admin/View-Office/{id}', [OfficeController::class, 'view'])->name('office.view');
Route::get('/Admin/Edit-Office/{id}', [OfficeController::class, 'edit'])->name('office.edit');
Route::post('/Admin/Update-Office', [OfficeController::class, 'update'])->name('update.office');
Route::get('/Admin/Delete-Office/{id}', [OfficeController::class, 'del'])->name('office.del');

Route::get('/Admin/message', [WelcomeController::class, 'message'])->name('all.message');


Route::middleware('auth')->group(function () {
    Route::get('/Admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/Admin/profile', [ProfileController::class, 'upload'])->name('profile.upload');
    Route::delete('/Admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/Admin-logout', [AuthenticatedSessionController::class, 'destroy'])
->name('out');

require __DIR__.'/auth.php';