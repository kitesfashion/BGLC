@extends('frontend.master')

@section('mainContent')
<style type="text/css">
    .one-second.column {
        margin: 0px;
</style>
  <div class="section mcb-section equal-height-wrap  hide-tablet hide-mobile" style="padding-top:60px; padding-bottom:60px; background-color:">
    <div class="section_wrapper mcb-section-inner">
      <div class="wrap mcb-wrap three-fifth  valign-top clearfix" style="">
        <div class="mcb-wrap-inner">
          <div class="column mcb-column one column_column  column-margin-">
            <div class="column_attr clearfix align_left" style="">
              <h4>{{$contactBlock->firstHomeTitle}}</h4>
              
              @php
                echo $contactBlock->homeDescription;
              @endphp
              <hr class="no_line" style="margin: 0 auto 20px;" />

              <div role="form" class="wpcf7" id="wpcf7-f2378-p16-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="" method="post" name="contactForm">
                  {{ csrf_field() }}
                  <div class="column one-second" style="margin: 0px 14px 25px 8px;">
                    <span class="wpcf7-form-control-wrap your-name">
                      <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contactName" type="text" placeholder="Full Name" id="contact_name" name="contactName" required="" />
                    </span> 
                  </div>
                  <div class="column one-second">
                    <span class="wpcf7-form-control-wrap your-email">
                      <input class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email contactEmail" type="email" placeholder="Email address" id="contact_email" name="contactEmail" required=""/>
                    </span> 
                  </div>
                  <div class="column one">
                    <span class="wpcf7-form-control-wrap your-subject">
                      <input type="text" name="contactTitle" value="" size="40" class="wpcf7-form-control wpcf7-text contactTitle" aria-invalid="false" placeholder="Subject"  required=""/>
                    </span> 
                    </div>
                  <div class="column one">
                    <span class="wpcf7-form-control-wrap your-message">
                      <textarea name="contactMessage" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea contactMessage" placeholder="Message" required=""></textarea>
                    </span>
                  </div>
                  <div class="column one">
                      <input type="submit" value="{{$contactBlock->buttonName}}" class="wpcf7-form-control wpcf7-submit button_full_width contactFormButton" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="wrap mcb-wrap two-fifth  valign-top clearfix" style="">
        <div class="mcb-wrap-inner">
          <div class="column mcb-column one column_column  column-margin-">
            <div class="column_attr clearfix" style="">
                @foreach ($contactAddressList as $contactAddress)
                    <div style="color: #DA2784">
                        <h3>{{$contactAddress->officeLocation}}</h3>
                        <h5 style="color: #DA2784">{{$contactAddress->officeName}}</h5>
                        <strong>{{$contactAddress->addressTitle1}}: </strong>
                        @php
                          echo $contactAddress->address1;
                        @endphp
                        @if($contactAddress->mobile1)
                            <div style="margin-top: -12px;">
                                Contact: {{$contactAddress->mobile1}}
                                <br> <span style="margin-left: 58px">{{$contactAddress->mobile2}}</span>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 {{--  <div class="section mcb-section   " style="padding-top:20px; padding-bottom:60px; background-color:">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one  column-margin-40px valign-top clearfix" style="">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column five-sixth column_column  column-margin-">
                    <div class="column_attr clearfix align_left" style="">
                        <h3>Our Branches</h3></div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-fourth  valign-top clearfix" style="">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column  column-margin-">
                    <div class="column_attr clearfix align_left" style="">
                        <h4 style="font-size: 17px;">Sibu</h4>
                        <a href="https://goo.gl/maps/ZGFFScqeyQ62" target="_blank">No. 2, 2nd Floor,
<br>Jalan Merdeka Barat
<br>96000 Sibu, Sarawak,
<br>Malaysia<br><br></a>
                        <b>Mobile: </b>
                        <br>+6019 858 5532
                        <br>+6016 889 5536
                        <br> +6016 879 3538
                        <p></p>
                        E-mail: sibu@gesglobal.co

                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-fourth  valign-top clearfix" style="">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column  column-margin-">
                    <div class="column_attr clearfix align_left" style="">
                        <h4 style="font-size: 17px;">Kuching</h4>
                        <a href="https://goo.gl/maps/C8SS8GyUHr32" target="_blank">First floor, Sublot 4, Cha Yi Goldland,
<br>Jalan Tun Jugah/Jalan Stutong,
<br>93350 Kuching, Sarawak, Malaysia.</a>
                        <br>Tel: +6082 577 802 , 577801
                        <br>Fax: +6082 577 803
                        <br>
                        <br>
                        <b>Mobile: </b>
                        <br>+6016 889 5532
                        <br>+6016 878 5532
                        <br>
                        <br> E-mail: kuching@gesglobal.co</div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-fourth  valign-top clearfix" style="">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column  column-margin-">
                    <div class="column_attr clearfix align_left" style="">
                        <h4 style="font-size: 17px;">Miri</h4>
                        <a href="https://goo.gl/maps/JGYK84DzGNT2" target="_blank">Lot 1378, 2nd Floor
<br>(Next to OCBC Bank)
<br>Miri Center Point Phase 2, Jalan Kubu,
<br>98000 Miri, Sarawak, Malaysia</a>
                        <br>Tel: +6085 434 236
                        <br>Fax: +6085 414 333
                        <br>
                        <br>
                        <b>Mobile: </b>
                        <br>+6010 982 5561
                        <br>+6012 875 5532
                        <br>
                        <br> E-mail: miri@gesglobal.co
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-fourth  valign-top clearfix" style="">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column  column-margin-">
                    <div class="column_attr clearfix align_left" style="">
                        <h4 style="font-size: 17px;">Bintulu</h4>
                        <a href="https://goo.gl/maps/THf3CrBzDoy" target="_blank">No. 4, Lot 7255, 2nd Floor,
<br>(Next to Public Bank)
<br>Medan Sentral Commercial Centre
<br>97000 Bintulu, Sarawak, Malaysia</a>
                        <br>Tel: +6086 333 405
                        <br>Fax: 6086 333 405
                        <br>
                        <br>
                        <b>Mobile: </b>
                        <br>+6016 879 5532
                        <br>
                        <br> E-mail: globalbintulu@gesglobal.co
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap divider  valign-top clearfix" style="">
            <div class="mcb-wrap-inner"></div>
        </div>
        <div class="wrap mcb-wrap one-fourth  valign-top clearfix" style="">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column  column-margin-">
                    <div class="column_attr clearfix align_left" style="">
                        <h4 style="font-size: 17px;">Kota Kinabalu</h4>
                        <a href="https://goo.gl/maps/6MH7KRWeVYP2" target="_blank">Metro Town Block A
<br>Unit No. 2, 1st Floor
<br>Jalan Bunga Ulam Raja
<br>88300 Kota Kinabalu, Sabah, Malaysia</a>
                        <br>Tel: +6088 431 778
                        <br>Fax: +6088 439 778
                        <br>
                        <br>
                        <b>Mobile: </b>
                        <br>+6016 886 5561
                        <br>+6016 889 5218
                        <br>+6016 889 7618
                        <br>
                        <br> E-mail: sabah@gesglobal.co</div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-fourth  valign-top clearfix" style="">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column  column-margin-">
                    <div class="column_attr clearfix align_left" style="">
                        <h4 style="font-size: 17px;">Sandakan</h4>
                        <a href="https://goo.gl/maps/ukmQAh3xbz82" target="_blank">1st Floor, Lot 2, Block 17,
<br>Bandar Indah,
<br>98000 Sandakan, Sabah, Malaysia</a>
                        <br>Tel: +6089 276 900
                        <br>Fax: +6085 276 900
                        <br>
                        <br>
                        <b>Mobile: </b>
                        <br>+6019 853 0013
                        <br>
                        <br> E-mail: ges.sandakan@gesglobal.co
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection