
<html dir="ltr">



    <footer  class="site-footer section-padding" id="contact">
        <div class="container">
            <div class="row">
    
                <div class="col-lg-5 me-auto col-12">
                    <h5 class="mb-lg-4 mb-3">ساعات الدوام</h5>
    
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex">
                            {{config('app.closed')}}  : مغلق
                        </li>
    
                        <li class="list-group-item d-flex">
                            {{config('app.start_day')}} -   {{config('app.final_day')}}
                            <span>8:00 AM - 3:30 PM</span>
                        </li>
    
                         
                    </ul>
                </div>
    
                <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                    <h5 class="mb-lg-4 mb-3">العنوان</h5>
    
                    
    
                    <p ></p> {{config('app.address')}}
                        
                        </p>


                        <p><a href="  {{config('app.email')}}">  {{config('app.email')}}</a><p>
                </div>
    
                <div class="col-lg-3 col-md-6 col-12 ms-auto">
                    <h5 class="mb-lg-4 mb-2">السوشال ميديا</h5>
    
                    <ul class="social-icon">
                        <li><a href="  {{config('app.facebook')}}" class="social-icon-link bi-facebook"></a></li>
    
                        <li><a href="  {{config('app.twitter')}}" class="social-icon-link bi-twitter"></a></li>
    
                        <li><a href="  {{config('app.insta')}}" class="social-icon-link bi-instagram"></a></li>
                        <li><a href="  {{config('app.youtube')}}" class="social-icon-link bi-youtube"></a></li>
                        <li>
                           <a href="  {{config('app.tick_tock')}}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                          </svg></a> 
                           
                        
                        </a></li>
                    </ul>
    
                    <div>
                         
                    </div>
                </div>
    
               
    
            </div>
        </section>
    </footer>
    
</html>