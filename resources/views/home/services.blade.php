 < class="service-one">
            <div class="service-one__bg" style="background-image: url(assets/images/shapes/service-bg-1.png);"></div>
            <div class="container">
                <div class="row">
                    @foreach ($services as $service )
                    
                    
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="service-one__item">
                            <div class="service-one__wrapper">
                                <div class="service-one__icon">
                                    <span class="icon-education"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-one__title">
                                    <a href="#">{{ $service->title }}</a>
                                </h3><!-- /.service-title -->
                                <p class="service-one__text">{{ $service->subTitle }}</p><!-- /.service-content -->
                                <a class="service-one__rm" href="team.html">Read More<span class="icon-caret-right"></span></a>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 129" fill="none">
                                    <path d="M0.582052 143.759C135.395 113.682 145.584 0.974413 145.584 0.974413L173.881 89.6286C173.881 89.6286 0.582054 322.604 0.582052 143.759Z" fill="#F1F2FD" />
                                </svg>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    @endforeach
                </div>
            </div>

        </section>