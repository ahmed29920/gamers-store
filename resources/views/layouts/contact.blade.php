    <!-- start Contact Us-->

    <div id="plant" class="contact_us layout_padding pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2><strong class="black"> Contact</strong> Us</h2>
                        <span style="text-align: center;">available, but the majority have suffered alteration in some
                            form, by injected randomised words which don't look even slightly believable</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact_us_2 layout_padding paddind_bottom_0">
        <div class="container pb-5">
            @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('message') }}
                    <button type="button" class="close mt-1" data-dismiss="alert" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <img class="img w-100" src="{{asset('images/contact.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="email_btn">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" placeholder="Name"
                                    name="name">
                            </div>
                            @error('name')
                                <div class="alert">
                                    <div class="alert-danger">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <div class="form-group">
                                <input type="email" class="form-control form-control-sm" placeholder="Email"
                                    name="email">
                            </div>
                            @error('email')
                                <div class="alert">
                                    <div class="alert-danger">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <div class="form-group">
                                <input type="number" class="form-control form-control-sm" placeholder="Phone"
                                    name="phone">
                            </div>
                            @error('phone')
                                <div class="alert">
                                    <div class="alert-danger">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <div class="form-group">
                                {{-- <input type="text" class="form-control form-control-sm" placeholder="Massage"
                                    name="message"> --}}
                                    <textarea style="resize: none;" name="message" id="message" placeholder="Massage" rows="5"></textarea>
                            </div>
                            @error('message')
                                <div class="alert">
                                    <div class="alert-danger">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <div class="submit_btn">
                                <button type="submit" class="btn btn-primary"
                                    style="background: #081b30; color: #fff; padding: 11px;">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>