<section class="contact_section layout_padding">
    <div class="contact_bg_box">
    <div class="img-box">
        <img src="{{ asset('assets/images/contact-bg.jpg') }}" alt="">
    </div>
    </div>
    <div class="container">
    <div class="heading_container heading_center">
        <h2>
        {{ __('contact.formTitle') }}
        </h2>
    </div>
    <div class="">
        <div class="row">
        <div class="col-md-7 mx-auto">
            <form action="#">
            <div class="contact_form-container">
                <div>
                <div>
                    <input type="text" placeholder="{{ __('contact.name') }}" />
                </div>
                <div>
                    <input type="email" placeholder="{{ __('contact.email') }}" />
                </div>
                <div>
                    <input type="text" placeholder="{{ __('contact.number') }}" />
                </div>
                <div class="">
                    <input type="text" placeholder="{{ __('contact.message') }}" class="message_input" />
                </div>
                <div class="btn-box ">
                    <button type="submit">
                    {{ __('contact.button') }}
                    </button>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</section>