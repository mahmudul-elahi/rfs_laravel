   <section class="details" dir="rtl">
       <div class="container">
           <div class="row g-5 align-items-end">
               <div class="col-md-6">
                   <div class="logo-footer">
                       <img src="{{ asset($settings['site_logo']) }}" alt="לוגו" title="לוגו">
                       <p>{{ $settings['site_description'] ?? '' }}</p>
                   </div>
               </div>
               <div class="col-md-3">
                   <h4>מפת אתר</h4>
                   <ul class="list-unstyled">
                       <li><a href="{{ route('home') }}">דף הבית</a></li>
                       <li><a href="#">אודותינו</a></li>
                       <li><a href="#">פרויקטים</a></li>
                       <li><a href="#">מוצרים</a></li>
                       <li><a href="#">נגישות לאנשים עם מוגבלות</a></li>
                       <li><a href="#">צור קשר</a></li>
                   </ul>
               </div>
               <div class="col-md-3">
                   <h4>פרטי התקשרות</h4>

                   <ul class="list-unstyled">
                       <!-- Phone -->
                       <li>
                           <div class="d-flex align-items-center gap-3 contact-secton-right">
                               <div class="c-icon">
                                   <i class="bi bi-telephone"></i>
                               </div>

                               <div class="c-detail">
                                   <h5>טלפון:</h5>
                                   <h6>{{ $settings['contact_phone'] }}</h6>
                               </div>
                           </div>
                       </li>

                       <!-- WhatsApp -->
                       <li>
                           <div class="d-flex align-items-center gap-3 contact-secton-right">
                               <div class="c-icon">
                                   <i class="bi bi-whatsapp"></i>
                               </div>

                               <div class="c-detail">
                                   <h5>וואטסאפ:</h5>
                                   <h6>{{ $settings['whatsapp_number'] }}</h6>
                               </div>
                           </div>
                       </li>

                       <!-- Email -->
                       <li>
                           <div class="d-flex align-items-center gap-3 contact-secton-right">
                               <div class="c-icon">
                                   <i class="bi bi-envelope"></i>
                               </div>

                               <div class="c-detail">
                                   <h5>אימייל:</h5>
                                   <h6>udi@rsf-israel.com</h6>
                               </div>
                           </div>
                       </li>

                       <!-- Social Media Links -->
                       <li>
                           <div class="d-flex align-items-center gap-3 contact-secton-right">
                               <a href="https://wa.me/972544697447" target="_blank" class="c-icon rounded">
                                   <i class="fab fa-whatsapp"></i>
                               </a>

                               <a href="#" target="_blank" class="c-icon rounded">
                                   <i class="fab fa-instagram"></i>
                               </a>

                               <a href="#" target="_blank" class="c-icon rounded">
                                   <i class="fab fa-facebook-f"></i>
                               </a>

                               <a href="#" target="_blank" class="c-icon rounded">
                                   <i class="fab fa-x-twitter"></i>
                               </a>

                               <a href="#" target="_blank" class="c-icon rounded">
                                   <i class="fab fa-linkedin-in"></i>
                               </a>
                           </div>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </section>
