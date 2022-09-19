<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/web/ufnoon',function(){
return view('Web-Frontend.Home.home');
})->name('web-home');

Route::get('/web/login',function(){
return view('Web-Frontend.Login.login');
})->name('web-login');