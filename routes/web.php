<?php

// use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\cities;
use App\Models\Artist;
use App\Models\LikeArtist;
use App\Models\countries;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware'=>'auth'],function(){
    Route::get('/web/user/profile', function () {
        $city=cities::get();
        $count=countries::get();
        return view('Web-Frontend.User Profile.user_profile',compact('city'),compact('count'));
    })->name('user-profile');
    Route::get('/ufnoon/user/liked-artworks', function () {
        return view('Web-Frontend.User Profile.liked_artwork');
    })->name('user-liked-artwork');

    Route::get('/ufnoon/user/liked-artist', function () {
        $likedWork=auth()->user()->getLikedArtist;
        return view('Web-Frontend.User Profile.liked_artist',compact('likedWork'));
    })->name('user-liked-artist');


    Route::get('/ufnoon/user/orders', function () {
        return view('Web-Frontend.User Profile.user_order');
    })->name('user-orders');


    Route::post('/update', [CustomerController::class, 'update'])->name('update');

    Route::post('/update_password', [CustomerController::class, 'update_password'])->name('update_password');
    Route::post('/update_delivery', [CustomerController::class, 'update_delivery'])->name('update_delivery');
    Route::get('/logout', [CustomerController::class, 'logout'])->name('logout');
    Route::post('/likeartist', [ArtistController::class, 'likeartist'])->name('likeartist');
    Route::post('/dislikedartist', [ArtistController::class, 'dislikedartist'])->name('dislikedartist');


});
Route::post('/registaration', [CustomerController::class, 'registaration'])->name('registaration');
Route::post('/verification', [CustomerController::class, 'verification'])->name('verification');
//Error
Route::get('/*', function () {
    return view('Error_Page.404');
});
Route::get('/**', function () {
    return view('Error_Page.500');
});

//Login
Route::get('/', function () {
    return view('Login.login');
})->name('login');


//Register
Route::get('/register', function () {
    return view('Register.register');
})->name('register');

//Dashboard

Route::get('/admin/dashboard', function () {
    return view('Dashboard.dashboard');
})->name('dashboard');

Route::get('/admin/artist/edit/edit-artist', function () {
    return view('Dashboard.Edit.pages.edit_artist');
})->name('edit_artist_page');
Route::get('/admin/artist/edit/change_password', function () {
    return view('Dashboard.Edit.pages.change_password');
})->name('change_pass');
Route::get('/admin/artist/edit/artworks', function () {
    return view('Dashboard.Edit.pages.artwork');
})->name('artworks');
Route::get('/admin/artist/edit/exhibitions', function () {
    return view('Dashboard.Edit.pages.exhibition');
})->name('exhibition');
Route::get('/admin/artist/edit/subscription_history', function () {
    return view('Dashboard.Edit.pages.subscription_history');
})->name('subs_history');
Route::get('/admin/artist/edit/add_exhibitions', function () {
    return view('Dashboard.Exhibition.pages.edit_exhibition');
})->name('edit_exhibition');



//Super Admin
Route::get('/admin/admin', function () {
    return view('Super_Admin.admin');
})->name('admins');
Route::get('/admin/admin/edit/change_password', function () {
    return view('Super_Admin.Edit.pages.password');
})->name('edit_admin_password');
Route::get('/admin/admin/edit/super-admin', function () {
    return view('Super_Admin.Edit.pages.edit_super_admin');
})->name('edit_admin');
Route::get('/admin/artist/add', function () {
    return view('Super_Admin.Add.super_admin');
})->name('add_super_admin');


//Banner
Route::get('/admin/admin/banner', function () {
    return view('Master.banner.banner');
})->name('banner');
Route::get('/admin/admin/add/banner', function () {
    return view('Master.banner.Add.add_banner');
})->name('add_banner');
Route::get('/admin/admin/edit/banner', function () {
    return view('Master.banner.Edit.edit_banner');
})->name('edit_banner');


//Subscription
Route::get('/admin/admin/subscription', function () {
    return view('Master.subscription.subscription');
})->name('subscription');
Route::get('/admin/admin/edit/subscription', function () {
    return view('Master.subscription.Edit.edit_subscription');
})->name('edit_subscription');


//Coupon
Route::get('/admin/admin/coupon', function () {
    return view('Master.Coupon.coupon');
})->name('coupon');
Route::get('/admin/admin/add/coupon', function () {
    return view('Master.Coupon.Add.add_coupon');
})->name('add_coupon');
Route::get('/admin/admin/edit/coupon', function () {
    return view('Master.Coupon.Edit.edit_coupon');
})->name('edit_coupon');


//FAQS
Route::get('/admin/admin/faqs', function () {
    return view('Master.Faqs.faqs');
})->name('faqs');
Route::get('/admin/admin/add/faqs', function () {
    return view('Master.Faqs.Add.add_faqs');
})->name('add_faqs');
Route::get('/admin/admin/edit/faqs', function () {
    return view('Master.Faqs.Edit.edit_faqs');
})->name('edit_faqs');

//Support
Route::get('/admin/admin/support', function () {
    return view('Master.support.support');
})->name('support');
Route::get('/admin/admin/add/support', function () {
    return view('Master.support.Add.add_support');
})->name('add_support');
Route::get('/admin/admin/edit/support', function () {
    return view('Master.support.Edit.edit_support');
})->name('edit_support');


//Work
Route::get('/admin/admin/howitwork', function () {
    return view('Master.How_its_work.work');
})->name('work');
Route::get('/admin/admin/how_it_work/add', function () {
    return view('Master.How_its_work.Add.add_work');
})->name('add_work');
Route::get('/admin/admin/how_it_work/edit', function () {
    return view('Master.How_its_work.Edit.edit_work');
})->name('edit_work');

//Color
Route::get('/admin/admin/color', function () {
    return view('Master.Color.color');
})->name('color');
Route::get('/admin/admin/color/add', function () {
    return view('Master.Color.Add.add_color');
})->name('add_color');
Route::get('/admin/admin/color/edit', function () {
    return view('Master.Color.Edit.edit_color');
})->name('edit_color');


//User
Route::get('/admin/admin/user/user', function () {
    return view('Users.User_List.user');
})->name('user_list');
Route::get('/admin/admin/user/user/add', function () {
    return view('Users.User_List.Add.user_add');
})->name('user_add');
Route::get('/admin/admin/user/edit-user', function () {
    return view('Users.User_List.Edit.pages.edit_user');
})->name('edit_user');
Route::get('/admin/admin/user/change-user-pass', function () {
    return view('Users.User_List.Edit.pages.change_user_password');
})->name('change_user_password');
Route::get('/admin/admin/user/liked-artworks', function () {
    return view('Users.User_List.Edit.pages.liked_artwork');
})->name('liked_artworks');
Route::get('/admin/admin/user/liked-artists', function () {
    return view('Users.User_List.Edit.pages.liked_artist');
})->name('liked_artists');
Route::get('/admin/admin/user/order-listings', function () {
    return view('Users.User_List.Edit.pages.order_history');
})->name('order-history');
Route::get('/admin/admin/user/guest', function () {
    return view('Users.Guest.guest');
})->name('guest_user_list');


//Artist
Route::get('/admin/admin/artist/artist', function () {
    return view('Artists.Artist.artist');
})->name('artist');
Route::get('/admin/admin/artist/artist/add', function () {
    return view('Artists.Artist.Add.add');
})->name('add_artist');
Route::get('/admin/admin/artist/artist_list', function () {
    return view('Artists.Artist_Type.artisttype');
})->name('artist_type');
Route::get('/admin/admin/artist/artist_list/add', function () {
    return view('Artists.Artist_Type.Add.add_artist_type');
})->name('add_artist_type');
Route::get('/admin/admin/artist/artist_list/edit', function () {
    return view('Artists.Artist_Type.Edit.edit_artist_type');
})->name('edit_artist_type');
Route::get('/admin/admin/artist/add-artist', function () {
    return view('Artists.Artist.Add.add_artist');
})->name('add-artist');

// Product
Route::get('/admin/admin/product', function () {
    return view('Product.product');
})->name('all_products');
Route::get('/admin/admin/product/edit', function () {
    return view('Product.Edit.edit_product');
})->name('edit_products');
Route::get('/admin/admin/orders/order', function () {
    return view('Orders.Order.order');
})->name('orders');
Route::get('/admin/admin/orders/coupon-used', function () {
    return view('Orders.Coupon_used.coupon_used');
})->name('coupon_used');

// Category
Route::get('/admin/admin/categories', function () {
    return view('Category.category');
})->name('category');
Route::get('/admin/admin/categories/add', function () {
    return view('Category.Add.add_category');
})->name('add_category');
Route::get('/admin/admin/categories/edit', function () {
    return view('Category.Edit.pages.edit_category');
})->name('edit_category');
Route::get('/admin/admin/categories/edit/subcategory', function () {
    return view('Category.Edit.pages.sub_category');
})->name('subcategory');
Route::get('/admin/admin/categories/subcategory/add', function () {
    return view('Category.Edit.pages.Add-SubCategory.add_subcategory');
})->name('add_subcategory');
Route::get('/admin/admin/categories/all/medium', function () {
    return view('Category.Edit.pages.medium');
})->name('medium');
Route::get('/admin/admin/categories/all/add-medium', function () {
    return view('Category.Edit.pages.Add-Medium.add_medium');
})->name('add_medium');
Route::get('/admin/admin/categories/all/material', function () {
    return view('Category.Edit.pages.material');
})->name('material');
Route::get('/admin/admin/categories/all/add-material', function () {
    return view('Category.Edit.pages.Add-Material.add_material');
})->name('add_material');

//Shipping Location
Route::get('/admin/admin/shipping_location/shipping_location', function () {
    return view('Shipping_Address.Shipping_Location.shipping_location');;
})->name('shipping_location');
Route::get('/admin/admin/shipping_location/shipping_location/add', function () {
    return view('Shipping_Address.Shipping_Location.Add.add_shipping');;
})->name('add_shipping_location');
Route::get('/admin/admin/shipping_location/shipping_location/edit', function () {
    return view('Shipping_Address.Shipping_Location.Edit.edit_shipping');;
})->name('edit_shipping_location');

//Hub
Route::get('/admin/admin/shipping_location/hub', function () {
    return view('Shipping_Address.hub.hub');
})->name('shipping_hub');
Route::get('/admin/admin/shipping_location/hub/add', function () {
    return view('Shipping_Address.Hub.Add.add_hub');
})->name('add_shipping_hub');
Route::get('/admin/admin/shipping_location/hub/edit', function () {
    return view('Shipping_Address.Hub.Edit.edit_hub');
})->name('edit_shipping_hub');

//Cities
Route::get('/admin/admin/shipping_location/cities', function () {
    return view('Shipping_Address.Cities.cities');
})->name('shipping_city');
Route::get('/admin/admin/shipping_location/cities/add', function () {
    return view('Shipping_Address.Cities.Add.add_cities');
})->name('add_shipping_city');
Route::get('/admin/admin/shipping_location/cities/edit', function () {
    return view('Shipping_Address.Cities.Edit.edit_cities');
})->name('edit_shipping_city');

//Emails
Route::get('/admin/admin/user-emails/bulk-emails', function () {
    return view('User_Email.Bulk_Email.bulk_email');
})->name('bulk_emails');
Route::get('/admin/admin/user-emails/all-contacts', function () {
    return view('User_Email.All_Contact.contact_us');
})->name('all-contacts');
Route::get('/admin/admin/user-emails/subscribers', function () {
    return view('User_Email.Subscribers.subscriber');
})->name('subscribers');

//Language Labels
Route::get('/admin/admin/language-label/language-label', function () {
    return view('Language_Label.language_label');
})->name('language-label');
Route::get('/admin/admin/language-label/language-label/add', function () {
    return view('Language_Label.Add.add_language');
})->name('add-language-label');
Route::get('/admin/admin/language-label/language-label/edit', function () {
    return view('Language_Label.Edit.edit_language');
})->name('edit-language-label');


//System Email
Route::get('/admin/admin/email/system-email', function () {
    return view('Email.System_Email.system_email');
})->name('system_email');
Route::get('/admin/admin/email/system-email/add', function () {
    return view('Email.System_Email.Add.add_email');
})->name('add_system_email');
Route::get('/admin/admin/email/system-email/edit', function () {
    return view('Email.System_Email.Edit.edit_email');
})->name('edit_system_email');

//Notifications
Route::get('/admin/admin/email/notification_master', function () {
    return view('Email.Notification_Master.notification');
})->name('notification_master');
Route::get('/admin/admin/email/notification_master/add', function () {
    return view('Email.Notification_Master.Add.add_notification');
})->name('add_notification_master');
Route::get('/admin/admin/email/notification_master/edit', function () {
    return view('Email.Notification_Master.Edit.edit_notification');
})->name('edit_notification_master');

//Page Settings
Route::get('/admin/admin/page-settings', function () {
    return view('Page_Setting.setting');
})->name('page_setting');
Route::get('/admin/admin/page-settings/add', function () {
    return view('Page_Setting.Add.add_setting');
})->name('add_page_setting');
Route::get('/admin/admin/page-settings/edit', function () {
    return view('Page_Setting.Edit.edit_setting');
})->name('edit_page_setting');


//Settings
Route::get('/admin/admin/settings/general-settings', function () {
    return view('Settings.General_Settings.general_setting');
})->name('general_setting');

Route::get('/admin/admin/settings/email-settings', function () {
    return view('Settings.Email_Settings.email_setting');
})->name('email_setting');

Route::get('/admin/admin/settings/company-information', function () {
    return view('Settings.Company_Info.company_info');
})->name('company_information');

Route::get('/admin/admin/settings/meta', function () {
    return view('Settings.Meta.meta');
})->name('meta');

Route::get('/admin/admin/settings/social-media', function () {
    return view('Settings.Socials.social');
})->name('social');

Route::get('/admin/admin/settings/payment', function () {
    return view('Settings.Payment.payment');
})->name('payment');

Route::get('/admin/admin/settings/shipping-info', function () {
    return view('Settings.Shipping-info.shipping');
})->name('shipping_info');




//WEBSITE ROUTES
Route::get('/web/ufnoon', function () {
    return view('Web-Frontend.Home.home');
})->name('web-home');

Route::get('/web/login', function () {
    return view('Web-Frontend.Login.login');
})->name('web-login');

Route::get('/web/artist/apply-now', function () {
    return view('Web-Frontend.Register.artist_register');
})->name('web-artist-register');

Route::get('/web/user/apply-now', function () {
    return view('Web-Frontend.Register.user_register');
})->name('web-user-register');




Route::get('/web/artist/profile', function () {
    return view('Web-Frontend.Artist Profile.artist_profile');
})->name('artist-profile');

Route::get('/web/artist/my_profile', function () {
    return view('Web-Frontend.Artist Profile.Pages.profile');
})->name('artist-my-profile');

Route::get('/web/artist/artwork-listing', function () {
    return view('Web-Frontend.Artist Profile.Pages.artworks');
})->name('artist_artworks');
Route::get('/web/artist/artwork-listing/add', function () {
    return view('Web-Frontend.Artist Profile.Pages.Add-Artwork.add_artworks');
})->name('add_artist_artworks');

Route::get('/web/artist/exhibitions-listing', function () {
    return view('Web-Frontend.Artist Profile.Pages.exhibition');
})->name('exhibition_artworks');

Route::get('/web/artist/exhibition-listing/add', function () {
    return view('Web-Frontend.Artist Profile.Pages.Add-Exhibition.add_exhibition');
})->name('add_exhibition_artworks');

Route::get('/web/artist/orders', function () {
    return view('Web-Frontend.Artist Profile.Pages.order');
})->name('artist-orders');

Route::get('/web/artist/subscription-history', function () {
    return view('Web-Frontend.Artist Profile.Pages.subscription');
})->name('artist-subscription-history');

Route::get('/web/artist/subscription-listings', function () {
    return view('Web-Frontend.Artist Profile.Pages.subscription_history');
})->name('artist-subscription');

Route::get('/web/artist/change-password', function () {
    return view('Web-Frontend.Artist Profile.Pages.change_password');
})->name('artist-change-password');

Route::get('/web/artist/support', function () {
    return view('Web-Frontend.Artist Profile.Pages.support');
})->name('artist-support');

Route::get('/web/artist/registration-process', function () {
    return view('Web-Frontend.Artist Profile.Apply-Process.process');
})->name('artist-register-process');






Route::get('/web/ufnoon/shops', function () {
    return view('Web-Frontend.Shops.shops');
})->name('web-shops');

Route::get('/ufnoon/artist/feature-artists', function () {
    $artist=Artist::with('getCategory','getlikes')->get();
    // $liked=LikeArtist::where('iUserId',auth()->user()->id)->get();
    return view('Web-Frontend.Artists.Feature-Artists.feature_artist',compact('artist'));
})->name('web-feature-artist');

Route::get('/web/faqs', function () {
    return view('Web-Frontend.Faqs.faqs');
})->name('web-faqs');


Route::get('/web/artwork', function () {
    return view('Web-Frontend.ArtWorks.artwork');
})->name('web-artwork');


Route::get('/web/cart', function () {
    return view('Web-Frontend.Cart.cart');
})->name('web-cart');

Route::get('/web/cart/checkout', function () {
    return view('Web-Frontend.CheckOut.checkout');
})->name('web-cart-checkout');

Route::get('set/language/{lang}/{direction}', function ($lang, $direction) {
    session()->put('lang', $lang);
    session()->put('direction', $direction);
    return redirect()->back();
})->name('set_language');

Route::get('/web/artist/featured-artist/artist-name', function () {
    return view('Web-Frontend.Artists.Single Artist.artist');
})->name('single-artist');

Route::get('/web/ufnoon/shops/paintings', function () {
    return view('Web-Frontend.Shops.Paintings.painting');
})->name('web-painting');


Route::get('/web/ufnoon/contact-us', function () {
    return view('Web-Frontend.Contact.contact');
})->name('web-contact-us');

Route::get('/ufnoon/shops/sculptures', function () {
    return view('Web-Frontend.Shops.Sculpture.sculpture');
})->name('web-sculptures');

Route::get('/ufnoon/shops/photography', function () {
    return view('Web-Frontend.Shops.Photography.photography');
})->name('web-photography');


Route::get('/ufnoon/pages/term-and-condition', function () {
    return view('Web-Frontend.Pages.Terms_condition');
})->name('web-terms_and_condition');

Route::get('/ufnoon/pages/our-story', function () {
    return view('Web-Frontend.Pages.our_story');
})->name('web-our_story');

Route::get('/ufnoon/pages/values-and-services', function () {
    return view('Web-Frontend.Pages.values');
})->name('web-values');

Route::get('/ufnoon/pages/guidelines', function () {
    return view('Web-Frontend.Pages.guidelines');
})->name('web-guidelines');

Route::get('/ufnoon/pages/advantages', function () {
    return view('Web-Frontend.Pages.advantages');
})->name('web-advantages');


// Artist Portal
Route::get('/ufnoon/artist/dashboard', function () {
    return view('Artist-Portal.Dashboard.dashboard');
})->name('artist-portal-dashboard');

Route::get('/ufnoon/artist/dashboard/profile', function () {
    return view('Artist-Portal.Profile.artist_profile');
})->name('artist-portal-profile');

Route::get('/ufnoon/artist/dashboard/artwork', function () {
    return view('Artist-Portal.Artwork.artwork');
})->name('artist-portal-artwork');

Route::get('/ufnoon/artist/dashboard/artwork/add', function () {
    return view('Artist-Portal.Artwork.Add.add_artwork');
})->name('artist-portal-add-artwork');

Route::get('/ufnoon/artist/dashboard/exhibition', function () {
    return view('Artist-Portal.Exhibitions.exhibition');
})->name('artist-portal-exhibitions');

Route::get('/ufnoon/artist/dashboard/exhibition/add', function () {
    return view('Artist-Portal.Exhibitions.Add.add_exhibition');
})->name('artist-portal-add-exhibitions');

Route::get('/ufnoon/artist/dashboard/order', function () {
    return view('Artist-Portal.Orders.order_history');
})->name('artist-portal-order');

Route::get('/ufnoon/artist/dashboard/subscription-history', function () {
    return view('Artist-Portal.Subscription-History.subscription-history');
})->name('artist-portal-Subscription-History');

Route::get('/ufnoon/artist/dashboard/support', function () {
    return view('Artist-Portal.Support.support');
})->name('artist-portal-support');

Route::get('/ufnoon/artist/dashboard/change-password', function () {
    return view('Artist-Portal.Change-Password.change_password');
})->name('artist-portal-change-password');

Route::get('/ufnoon/artist/dashboard/upgrade-plan', function () {
    return view('Artist-Portal.Upgrade.upgrade');
})->name('artist-portal-upgrade');




// Route::resource('admin', AdminController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
