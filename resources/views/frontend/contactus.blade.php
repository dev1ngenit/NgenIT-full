@extends('frontend.master')

@section('content')

    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->


    <!-- contact us banner -->

    <section class="contact_banner">
        <div class="container">
            <!-- content -->
            <div class="contact_banner_content">
                <h2 class="banner_content_title">Contact us</h2>
            </div>
        </div>
    </section>

    <!-- contact us banner end -->


    <!-- contact body -->

    <div class="contact_body section_padding">
        <div class="container">
            <!-- wrapper -->
            <div class="contact_body_wrapper">

                <!-- left content -->
                <div class="contact_left_content">
                    <p class="contact_left_title">Need immediate assistance?</p>
                    <p class="contact_left_text">Get assistance with tracking an order, requesting a quote, contacting your account representative and more by <a href="tel:01723507989">phone</a> or <a href="">over chat</a>.</p>

                    <!-- contact left phone -->
                    <div class="contact_anything_wrapper">
                        <!-- call -->
                        <div class="contact_call">
                            <div class="contact_call_title">Call us</div>
                            <div class="contact_call_number"> 01971-424220</div>
                        </div>

                        <!-- contact chat -->
                        <div class="contact_call contact_chat">
                            <div class="contact_call_title">Chat now</div>
                            <a href="" class="contact_chat_button"> <span> <i class="fa-solid fa-message"></i> </span> <span> Chat with us</span> </a>
                        </div>
                    </div>

                    <!-- contact global -->
                    <div class="contact_global">
                        <div class="contact_global_title">NGentIt global headquarters</div>
                        <!-- adress -->
                        <div class="gloabal_content_address">
                            <span>Panthapath, Dhaka 1215</span>
                        </div>

                        <!-- contact call or email -->

                        <div class="global_contact_phone">
                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>Billing & invoice: </span>  <a href="tel:01971-424220">01971-424220</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>Information and sales:</span>  <a href="tel:01971-424220">01971-424220</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>OneCall support:</span>  <a href="tel:01971-424220">01971-424220</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>Returns:</span>  <a href="tel:01971-424220">01971-424220</a>
                            </div>
                        </div>

                        <!-- location button -->
                        <a href="" class="product_button">View all NGentIt office locations</a>

                    </div>


                </div>


                <!-- right contact form -->
                <div class="right_contact_form">
                    <!-- form content -->
                    <div class="right_contact_form_content">
                        <p class="right_form_title">Hear from our team</p>
                        <p class="right_form_subtitle">A specialist will reach out soon.</p>
              
                <form action="{{ route('contactus.store') }}" method="post">
                    @csrf
                        <!-- wrapper -->
                        <div class="form_item_wrapper">

                            <!-- form item -->
                            <div class="form_item_inner">
                                <input class="form_input" name="first_name" type="text" placeholder="First Name">
                                <label class="form_label" for="">First Name: *</label>
                            </div>

                            <!-- form item -->
                            <div class="form_item_inner">
                                <input class="form_input" name="last_name" type="text" placeholder="Last Name">
                                <label class="form_label" for="">Last Name: *</label>
                            </div>

                            <!-- form item -->
                            <div class="form_item_inner">
                                <input class="form_input" name="phone" type="number" placeholder="Phone">
                                <label class="form_label" for="">Phone: *</label>
                            </div>

                            <!-- form item -->
                            <div class="form_item_inner">
                                <input class="form_input" name="email" type="email" placeholder="Business Email">
                                <label class="form_label" for="">Business Email: *</label>
                            </div>
                            
                            <!-- form item -->
                            <div class="form_item_inner">
                                <select name="state" id="state" class="form_input dynamic">
                                    <option value="">State</option>
                                </select>
                            </div>

                            <!-- form item -->
                            <div class="form_item_inner">
                                <select name="country" id="country" class="form_input dynamic"
                                data-dependent = "state">
                                <option value="">Country</option>
                                @foreach ($countries as $country )
                                  <option value="{{ $country->country }}">{{ $country->country }}</option>  
                                @endforeach
                                </select>

                                <!-- label -->
                                <label class="form_label" for="">Country: *</label>
                            </div>
                        </div>

                         <!-- form item -->
                         <div class="form_item_fullInner">
                            <input class="form_input" name="company" type="text" placeholder="Company/Organization">
                            <label class="form_label" for="">Company: *</label>
                        </div>

                        <!-- form item -->
                        <div class="form_item_fullInner">
                            <select name="help_type" id="" class="form_input">
                                <option value="Need help With...">Need help With...</option>
                                <option value="Exploring solutions and services">Exploring solutions and services </option>
                                <option value="Billing support">Billing support </option>
                                <option value="Order support">Order support </option>
                                <option value="A general inquiry">A general inquiry </option>
                            </select>
                        </div>

                        <!-- checkbox -->

                        <div class="form_checkbos_wrapper">
                            <!-- checkbox input -->
                            <div class="checkBox_inner">
                                <input type="checkbox">
                            </div>
                            <!-- content -->
                            <div class="checkBox_content">By checking this box, I consent to receive Insight marketing emails. We respect your privacy and will not share your personal information with any other company, person or identity.</div>
                        </div>

                        <!-- submit button -->
                        <button type="submit" class="single_banner_button" style="margin-top: 50px">Hear from a specialist</button>
                  </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- contact body end-->


    @include('frontend.footer')


    @endsection
 
    