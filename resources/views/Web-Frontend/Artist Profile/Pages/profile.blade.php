@extends('Web-Frontend.Layout.layout3')

@section('title','My Information')

@section('content')
<div class="row">
    <h1 class="text-center" style="margin-bottom: 15px;">My Information</h1>
    <form>
        <div class="col-lg-6">
            <!-- Email -->
            <div class="form-group">
                <label class="control-label">{{ __('translation.Email') }} <span>*</span></label>
                <input type="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label class="col-form-label">{{ __('translation.First Name')}}</label>
                <input class="form-control" type="text" placeholder="First Name">
            </div>

            <div class="form-group">
                <label class="col-form-label">{{ __('translation.Mobile Number')}}</label>
                <input class="form-control" type="number" placeholder="Number">
            </div>

            <div class="form-group">
                <label class="col-form-label">{{ __('translation.Enter Website URL')}}</label>
                <input class="form-control" type="text" placeholder="url">
            </div>

            <div class="form-group">
                <label class="control-label">{{ __('translation.City/Town') }} <span>*</span></label>
                <select type="date" class="form-control">
                    <option>Select City</option>
                    <option>City 1</option>
                    <option>City 2</option>
                    <option>City 3</option>
                </select>
            </div>

            <div class="form-group">
                <label class="col-form-label">{{ __('translation.Postcode/Zip') }} <span>*</span></label>
                <select type="date" class="form-control">
                    <option>Select Zip Code</option>
                    <option>Zip Code 1</option>
                    <option>Zip Code 2</option>
                    <option>Zip Code 3</option>
                </select>
            </div>

            <div class="form-group">
                <label class="col-form-label">Artist Photo</label>
                <input class="form-control" type="file">
            </div>

            <div class="form-group">
                <label class="control-label">{{ __('translation.Twitter') }}</label>
                <input type="text" class="form-control">
            </div>

        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="col-form-label">{{ __('translation.Birth Day') }} </label>
                <input class="form-control" type="date" placeholder="Birthday">
            </div>

            <div class="form-group">

                <label class="col-form-label">{{ __('translation.Last Name') }}</label>
                <input class="form-control" type="text" placeholder="Last Name">
            </div>


            <div class="form-group">
                <label class="col-form-label">{{ __('translation.Select Medium')}}</label>
                <select class="form-control" type="text">
                    <option value="">Select Medium</option>
                    <option value="">Medium 1</option>
                    <option value="">Medium 2</option>
                </select>
            </div>

            <div class="form-group">
                <label class="col-form-label">{{ __('translation.Country') }} <span>*</span></label>
                <select type="date" class="form-control">
                    <option>Select Country</option>
                    <option>Country 1</option>
                    <option>Country 2</option>
                    <option>Country 3</option>
                </select>
            </div>

            <div class="form-group">
                <label class="col-form-label">{{ __('translation.District') }} <span>*</span></label>
                <select type="date" class="form-control">
                    <option>Select District</option>
                    <option>District 1</option>
                    <option>District 2</option>
                    <option>District 3</option>
                </select>
            </div>

            <div class="form-group">
                <label class="col-form-label">{{ __('translation.Address') }}</label>
                <input class="form-control" type="text" placeholder="Address">
            </div>

            <div class="form-group">
                <label class="col-form-label">Banner Photo</label>
                <input class="form-control" type="file">
            </div>

            <div class="form-group">
                <label class="control-label">{{ __('translation.Instagram') }} </label>
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label class="col-form-label">About Artist EN</label>
                <textarea rows="5" class="form-control"></textarea>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label class="col-form-label">About Artist AR</label>
                <textarea rows="5" class="form-control"></textarea>
            </div>
        </div>
        <button type="button" class="btn-primary">Preview</button>
        <button type="submit" class="btn-primary">Submit</button>
        <div style="margin-bottom: 20px;"></div>
    </form>
</div>

@endsection