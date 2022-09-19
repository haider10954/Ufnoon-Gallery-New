@extends('layouts.layout')

@section('title','Edit System Email')

@section('content')
<div class="row">
    <div class="card shadow-lg">
        <div class="card-body">
            <h4 class="card-title">Edit System Emails</h4>
            <form>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label class="col-form-label">Email Code*</label>
                        <input class="form-control" placeholder="Enter Email Code">

                        <label class="col-form-label">From Name</label>
                        <input class="form-control" placeholder="Enter Name">

                        <label class="col-form-label">CC Email</label>
                        <input class="form-control" placeholder="Enter Cc Email">

                        <label class="col-form-label">Sms Message EN</label>
                        <input class="form-control" placeholder="Enter Message EN">

                        <label class="col-form-label">Email Subject EN</label>
                        <input class="form-control" placeholder="Enter Email Subject EN">

                        <label class="col-form-label">Internal Message EN</label>
                        <input class="form-control" placeholder="Enter Internal Message EN">

                        <label class="col-form-label">Status</label>
                        <select class="form-control">
                            <option>Select Status</option>
                            <option>Active</option>
                            <option>InActive</option>
                        </select>
                    </div>
                    <div class="col-lg-6">

                        <label class="col-form-label">Email Title</label>
                        <input class="form-control" placeholder="Enter Email Title">


                        <label class="col-form-label">From Email</label>
                        <input class="form-control" placeholder="Enter From Email">

                        <label class="col-form-label">Bcc Email</label>
                        <input class="form-control" placeholder="Enter Bcc Email">


                        <label class="col-form-label">Sms Message AR</label>
                        <input class="form-control" placeholder="Enter Sms Message AR">


                        <label class="col-form-label">Email Subject AR</label>
                        <input class="form-control" placeholder="Enter Email Subject AR">

                        <label class="col-form-label">Internal Message AR</label>
                        <input class="form-control" placeholder="Enter Internal Message AR">
                    </div>
                </div>
                <div class="row">
                    <h4 class="card-title">Constant Keywords</h4>
                    <div class="col-lg-4">
                        <p class="text-muted">
                            Contact Us mail <br />
                            #vFullName# - Full Name of Customer <br />
                            #vEmail# - Email <br />
                            #tMessage# - Message of Customer <br />
                        </p>
                        <p class="text-muted">
                            User Account Activation <br />
                            #vName# - Name of the User
                        </p>
                        <p class="text-muted">
                            Guest User Admin Mail <br />
                            #VNAME# - Admin <br />>
                            #vFirstName# - First name of guest user <br />
                            #vLastName# - Last name of guest user <br />
                            #vEmail# - Email of guest user <br />
                            #vMobile# - Mobile no. of guest user <br />
                        </p>
                        <p class="text-muted">
                            Order status changed <br />
                            #vName# - Customer name <br />
                            #eStatus# - Status of Order
                        </p>
                        <p class="text-muted">
                            Subscribe Mail to Admin <br />
                            #vName# - Admin <br />
                            #SITE_NAME# - Ufnoon
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <p class="text-muted">
                            Forgot Password mail <br />
                            #Name# - Name of registered Customer or Artist
                        </p>
                        <p class="text-muted">
                            Approved mail to user <br />
                            #vEmail# - Email is the ID <br />
                            #vPassword# - Password
                        </p>
                        <p class="text-muted">
                            Order mail to Admin <br />
                            #VNAME# - Admin <br />
                            #vBillingFirstName# - Billing First name <br />
                            #vBillingLastName# - Billing Last name <br />
                            #vBillingEmail# - Billing Email <br />
                            #vBillingMobilePhone# - Billing Phone no. <br />
                            #vBillingAddress# - Billing Address <br />
                        </p>
                        <p class="text-muted">
                            Bulk Mail to Users <br />
                            #vTitle# - Email Title to send <br />
                            #tDescription# - Email Description to send <br />
                        </p>
                        <p class="text-muted">
                            Subscribe Mail to User <br />
                            #SITE_NAME# - Ufnoon
                        </p>
                    </div>

                    <div class="col-lg-4">
                        <p class="text-muted">
                            Registration Mail to Admin <br />
                            #VNAME# - Admin <br />
                            #SITE_NAME# - Ufnoon <br />
                            #vLastName# - New User's Last name <br />
                            #vEmail# - New User's Email
                        </p>
                        <p class="text-muted">
                            Guest User Register <br />
                            #vName# - Guest User Name
                        </p>
                        <p class="text-muted">
                            Order mail to User <br />
                            #vName# - Customer name <br />
                            #vOrderNumber# - Order no./Invoice no.
                        </p>
                        <p class="text-muted">
                            Bulk Mail to Subscribers <br />
                            #vTitle# - Email Title to send
                    </div>
                    <div class="row p-3">
                        <div class="col-lg-12">
                            <label class="col-form-label">Artwork Description EN</label>
                            <textarea class="form-control" rows="5" placeholder="Artwork Description EN"></textarea>

                            <label class="col-form-label">Artwork Description AR</label>
                            <textarea class="form-control" rows="5" placeholder="Artwork Description AR"></textarea>
                        </div>
                    </div>

                </div>
            </form>
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-dark" type="submit">Cancel</button>
        </div>
    </div>
</div>
@endsection