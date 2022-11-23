<section class="section-padding" id="booking"  >
    <div class="container">
        <div class="row">
        
            <div class="col-lg-8 col-12 mx-auto">
                <div class="booking-form">
                   
                    <h2 class="text-center mb-lg-3 mb-2">احجز موعد</h2>
                
                    <form role="form" action="{{URL::to('/orders')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input  style="background: #E8E8E8" type="text" name="name" id="name" class="form-control" placeholder="الأسم" required>
                            </div>

                            

                            <div class="col-lg-6 col-12">
                                <input style="background: #E8E8E8" type="number" name="phone" id="phone" class="form-control" placeholder=" الهاتف " required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <br>
                                <h>نوع الخدمة </h>
                                <br>
                                <br>
                                <select style="background: #E8E8E8"  id="course" name="type" type="text" placeholder="نوع الخدمة">
                                    <option value="   عرض زراعة الاسنان لأول مرة"   > 
                                        
                                    
                                    عرض زراعة الاسنان لأول مرة
                                    </option>





                                    <option value="     عرض ابتسامة هوليود  "   > 
                                        
                                    
                                    عرض ابتسامة هوليود 
                                    </option>
                                    



                                    <option value="         عرض تركيبات الاسنان"   > 
                                        
                                    عرض تركيبات الاسنان
                                    
                                    </option>
                                    
                                    <option value="    عرض تنظيف الاسنان"   > 
                                        
                                         
                                        عرض تنظيف الاسنان
                                        </option>


                                        <option value="     عرض التقويم بانواعة "   > 
                                        
                                         
                                        عرض التقويم بانواعة 
                                        </option>
                                        

                                        
                                        

                                        <option value="     عرض تبييض الاسنان "   > 
                                        
                                         عرض تبييض الاسنان
                                        
                                        </option>
                                        

                                         

                                        <option value="   عروض المعالجات  "   > 
                                        
                                         عروض المعالجات 
                                        
                                        </option>
                                        
                                        <option value="  خدمات اخرى  "   > 
                                        
                                          خدمات اخرى  
                                           
                                           </option>
                                           
                                        
                                    
                                   
                                  </select> 
                            </div>

                            <div class="col-12">
                                <textarea style="background: #E8E8E8" class="form-control" rows="1" id="message" name="msg" placeholder="معلومات اضافية"></textarea>
                            </div>
     <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                <button type="submit" class="form-control"   style="background: {{config('app.bg_color')}} " id="submit-button">احجز الان</button>
                            </div>
                            
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>










