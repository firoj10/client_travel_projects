<form class="submit_quote_form" action="{{ route('quotation.store') }}" method="POST" novalidate="novalidate">
    @csrf
    <div class="form-body py-3 px-4">
        <div class="row justify-content-between">
            <div class="col-6 input d-flex align-items-center">
                <img src="{{ asset('frontend/img/form/calendar.png') }}" alt="Calendar"
                    class="img-fluid">
                <input type="text" placeholder="Tentative Arrival Date"
                    class="date_picker" id="datepicker" name="date" aria-invalid="true">

            </div>
            <div class="col-6 input d-flex align-items-center">
                <img src="{{ asset('frontend/img/form/sleeping.png') }}" alt="Sleeping"
                    class="img-fluid">
                <input type="number" placeholder="No of Nights" min="1"
                    max="100" name="no_off_nights" aria-invalid="true">

            </div>
        </div>
        <div class="row justify-content-between my-4">
            <div class="col-6 input d-flex align-items-center">
                <img src="{{ asset('frontend/img/form/couple.png') }}" alt="Couple"
                    class="img-fluid">
                <input type="number" placeholder="No of Adults" min="1"
                    max="100" name="no_off_adults">

            </div>
            <div class="col-6 input d-flex align-items-center">
                <img src="{{ asset('frontend/img/form/children.png') }}" alt="Children"
                    class="img-fluid">
                <input type="number" placeholder="No of Kids" min="0"
                    max="100" name="no_off_kids">

            </div>
        </div>
        <div class="row justify-content-between my-4">
            <div class="col-6 input d-flex align-items-center">
                <img src="{{ asset('frontend/img/form/couple.png') }}" alt="Couple"
                    class="img-fluid">
                <select class="form-select" aria-label="Interested In*"
                    name="interested_in">
                    <option value="">Interested In*</option>
                    <option value="Local island Hotel">Local island Hotel</option>
                    <option value="4 star resort">4 star resort</option>
                    <option value="5 star resort">5 star resort</option>
                    <option value="5 star luxury resort">5 star luxury resort</option>
                </select>
            </div>
            <div class="col-6 input d-flex align-items-center">
                <img src="{{ asset('frontend/img/form/user.png') }}" alt="User"
                    class="img-fluid">
                <input type="text" placeholder="Your Name*" name="name">
            </div>
        </div>

        <div class="row justify-content-between my-4">
            <div class="col-6 input d-flex align-items-center">
                <img src="{{ asset('frontend/img/form/email.png') }}" alt="Email"
                    class="img-fluid">
                <input type="text" placeholder="Your Email*" name="email">

            </div>
            <div class="col-6 input d-flex align-items-center">
                <img src="{{ asset('frontend/img/form/phone.png') }}" alt="Phone"
                    class="img-fluid">
                <input type="num" placeholder="Phone / Whatsapp*"
                    name="phone_number">

            </div>

        </div>
        <div class="row">
            <div class="col-12 text-area">
                <textarea width="100%" name="description" id="" cols="20" rows="1"
                    placeholder="Please advise your required villa category." aria-invalid="false"></textarea>
            </div>
        </div>
      

        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-primary px-5">Submit</button>
        </div>
    </div>
    
</form>