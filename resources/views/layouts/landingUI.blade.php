<!--
  @WeatherTeam 2018
  @StudioUnwanted 2018
  Unwanted.kr
-->

<html lang="{{ app()->getLocale() }}">

    @include('inc.head')
    <body>

      <div class="bodybg">

      </div>
      @include('inc.navbar')
          

        <section>
          <section class="xbox expand">

              <section id="content">
                  <section class="xbox expand">
                      <section>
                          <section class="ybox">
                              <section class="scrollable padder-lg w-f-md">

                                  <div class="row row-sm">
                                      @yield('content')

                                     
                                  </div>
 @include('inc.footer')




    
    
  
                        
                                
                        
                        
                        
                      
             
















                                </section>
                              </section>
                          </section>
                      </section>
                  </section>
              </section>
          </section>













                
<script src="{{asset('js/jsdepends/jquery.js')}}"></script>
<script src="{{asset('js/jsdepends/jsbundler.js')}}"></script>
    </body>
    </html>