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





   <div id="cookieConsent" class="fixed-bottom p-4" style="display: none; z-index: 1050;" dir="rtl">
       <div class="container">
           <div class="row justify-content-start">
               <div class="col-12 col-md-5 col-lg-4">
                   <div class="card border-0 card-glow rounded-3 overflow-hidden">
                       <div class="card-body p-4">

                           <div class="cookies_header">
                               <div class="mb-3">
                                   <img src="{{ asset('frontend/img/info-icon.png') }}" alt="Icon">
                               </div>
                           </div>

                           <div class="d-flex align-items-start">
                               <div class="flex-grow-1">
                                   <h6>אתר זה משתמש בעוגיות (Cookies) לצורך תפעולו בלבד.</h6>
                                   <p>
                                       המשך הגלישה באתר מהווה הסכמה למדיניות הפרטיות שלנו.
                                   </p>
                                   <div class="d-flex gap-2 mt-4">
                                       <button type="button" id="btnAcceptCookies"
                                           class="button button-primary w-100">אני מסכים/ה</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
