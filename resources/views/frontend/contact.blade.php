@extends("frontend.layouts.main")

@section("main-container")

<div class="page_title1 sty7">
            <div class="container">

                <h1>Contact Us <em>Power Pack Theme</em></h1>

            </div>
        </div><!-- end page title -->


        <div class="clearfix"></div>


        <div class="content_fullwidth less2">
            <div class="container">

                <div class="one_half">

                    <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
                    <br />
                    <p>Please be patient while waiting for response. (24/7 Support!) <strong>Phone General Inquiries: 1-888-123-4567-8900</strong></p>
                    <br /><br />

                    <div class="cforms">


                        <div id="form_status"></div>
                        <form type="POST" id="gsr-contact" onSubmit="return valid_datas( this );">
                            <label class="label">Name <em>*</em></label>
                            <label class="input">
                                <input type="text" name="name" id="name">
                            </label>

                            <div class="clearfix"></div>

                            <label class="label">E-mail <em>*</em></label>
                            <label class="input">
                                <input type="email" name="email" id="email">
                            </label>

                            <!-- <div class="clearfix"></div>
	
	
	        <label class="label">Phone <em>*</em></label>
	        <label class="input">
	            <input type="text" name="phone" id="phone">
	        </label> -->

                            <div class="clearfix"></div>

                            <label class="label">Subject <em>*</em></label>
                            <label class="input">
                                <input type="text" name="subject" id="subject">
                            </label>

                            <div class="clearfix"></div>

                            <label class="label">Message <em>*</em></label>
                            <label class="textarea">
                                <textarea rows="5" name="message" id="message"></textarea>
                            </label>

                            <div class="clearfix"></div>
                            <input type="hidden" name="token" value="FsWga4&@f6aw" />
                            <button type="submit" class="button">Send Message</button>

                        </form>





                    </div>

                </div>

                <div class="one_half last">

                    <div class="address_info">

                        <h4>Company <strong>Address</strong></h4>
                        <ul>
                            <li> <strong>Company Name</strong><br />
                                2901 Marmora Road, Glassgow, Seattle, WA 98122-1090<br />
                                Telephone: +1 1234-567-89000<br />
                                FAX: +1 0123-4567-8900<br />
                                E-mail: <a href="mailto:mail@companyname.com">mail@companyname.com</a><br />
                                Website: <a href="index.html">www.yoursitename.com</a> </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <h4>Find the <strong>Address</strong></h4>
                    <iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A&amp;output=embed"></iframe>
                    <br />
                    <small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A">View Larger Map</a></small>
                </div>

            </div>
        </div><!-- end content area -->

        @endsection