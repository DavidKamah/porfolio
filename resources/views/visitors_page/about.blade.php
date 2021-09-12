@extends('visitors_page.master')

@section('content')
    <div class="container bg-white">
        <section class="skills section " >
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">          
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit optio id vero amet, alias architecto consectetur error eum eaque sit.</p>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">HTML5</span>
                        </div>
                        <div class="skills__bar skills__html">

                        </div>
                        <div>
                            <span class="skills__percentage">80%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS3</span>
                        </div>
                        <div class="skills__bar skills__css">
                            
                        </div>
                        <div>
                            <span class="skills__percentage">70%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon' ></i>
                            <span class="skills__name">JAVASCRIPT</span>
                        </div>
                        <div class="skills__bar skills__js">
                            
                        </div>
                        <div>
                            <span class="skills__percentage">50%</span>
                        </div>
                        
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxs-paint skills__icon'></i>
                            <span class="skills__name">UX/UI</span>
                        </div>
                        <div class="skills__bar skills__ux">
                            
                        </div>
                        <div>
                            <span class="skills__percentage">40%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxs-paint skills__icon'></i>
                            <span class="skills__name">PHP/LARAVEL</span>
                        </div>
                        <div class="skills__bar skills__PHP">
                            
                        </div>
                        <div>
                            <span class="skills__percentage">90%</span>
                        </div>
                    </div>
                </div>
                
                <div>              
                    <img src="{{ URL::asset('img/work3.jpg') }}" alt="" class="skills__img">
                </div>
            </div>
        </section>
    </div>
@endsection