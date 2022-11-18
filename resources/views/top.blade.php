<body id="top"  >
    
    

        <nav   style="background: {{config('app.bg_color')}} " class="navbar navbar-expand-lg navbar-dark  fixed-top shadow-lg">
            <div class="container" dir="rtl" >

               
                <img src="{{asset('logo.webp')}}"     width="150" height="150">
                @include('success')
                       

                <a class="navbar-brand mx-auto d-lg-none"  >
                   
<h3 style="color: white;">    {{config('app.name')}}</h3>
<h style="color: white;">  {{config('app.sub_name')}} </h>
                     
                    <br>
                    <strong class="d-white">   </strong>
                </a>

              
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#hero">الرئيسية</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">من نحن</a>
                        </li>

                       

                        <a class="navbar-brand d-none d-lg-block" href="index.html">
                            عيادة
                            <strong class="d-block">رويال</strong>
                        </a>

                        

                        <li class="nav-item">
                            <a class="nav-link" href="#booking">حجز موعد</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">تواصل معنا</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        </body>