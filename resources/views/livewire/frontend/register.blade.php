<div>
    <section id="newsletter" aria-label="Newsletter" class="mt-20 px-4 lg:px-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="relative -mx-4 overflow-hidden bg-indigo-50 px-4 py-20 sm:-mx-6 sm:px-6 md:mx-0 md:rounded-3xl md:px-16 xl:px-24 xl:py-36">
                <img alt="" loading="lazy" width="919" height="1351" decoding="async" data-nimg="1"
                     class="absolute left-1/2 rtl:left-auto rtl:right-[100px] top-0 translate-x-[-90%] translate-y-[-45%] lg:translate-x-[-32%] blur-3xl "
                     style="color:transparent" src="{{ asset('images/hero.svg') }}">
                <div class="relative mx-auto grid max-w-2xl grid-cols-1 gap-x-32 gap-y-14 xl:max-w-none xl:grid-cols-2">
                    <div>
                        <p class="font-display text-4xl font-medium tracking-tighter text-blue-900 sm:text-5xl">{{ __('home.registration.title') }}</p>
                        <p class="mt-4 text-lg tracking-tight text-blue-900">{{ __('home.registration.description') }}</p>
                        <script type="text/javascript">
                            (function(d, t) {
                                var s = d.createElement(t), options = {
                                    'id': '430P-A',
                                    'container': 'c191',
                                    'height': '1024px',
                                    'form': '//eform.om/app/app/embed'
                                };
                                s.type= 'text/javascript';
                                s.src = '//eform.om/app/static_files/js/form.widget.js';
                                s.onload = s.onreadystatechange = function() {
                                    var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
                                    try { (new EasyForms()).initialize(options).display() } catch (e) { }
                                };
                                var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
                            })(document, 'script');
                        </script>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold tracking-tight text-blue-900">{{ __('home.header.register_now') }}
                            ↓</h3>
                        <div id="c191">
                            Fill out my <a href="https://eform.om/app/app/form?id=430P-A">online form</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
