@extends('master')

@section('content')

<div class="row">
    <div class="col-md-24">
        
        <div id="hero" class="row white-bg">
            <div class="col-md-24" >
                <div class="container text-center">
                    <div class="type-t6">
                        Hello, my name is
                    </div><br>
                    
                    <img src="{{ url('img/profile.png') }}" alt="profile" height="182" class="prof-pic">
                    
                    <div class="type-t2 blue">
                        Jundi Ahmad Alwan
                    </div><br>
                    
                    <div class="type-t6">
                        Just call me Jundi :)
                    </div><br><br><br><br><br><br>
                    
                    <div class="type-t8 white">
                        Scroll for more about me
                    </div>
                    <span class="glyph glyph-chevron-down white"></span>
                </div>
            </div>  
        </div>

        <div class="row dblue-bg">
            <div class="col-md-24">
                <div class="container text-center white">
                    Ok, who am I?
                </div>
            </div>  
        </div>

        <div class="row">
            
            <div class="col-md-12">
                <div class="container black text-right">
                    <br><br><br><br><br><br>
                    <div class="type-t5">
                        I Love to..
                    </div>
                    <div class="type-t6"><b>sharing experience and knowledge</b></div><br>
                    <div class="type-t5">
                        I Have..
                    </div>
                    <div class="type-t6"><b>experience work with many people</b></div>
                    <div class="type-t6"><b>excellent verbal communication</b></div><br>
                    <div class="type-t5">
                        Also..
                    </div>
                    <div class="type-t6"><b>technology enthusiast</b> <br>with speciality in website and Windows Platform development</div><br>                    
                </div>
            </div>
            
            <div class="col-md-12 blue-bg">
                <div class="container white text-left">
                    <br><br><br><br><br><br>
                    <div class="type-t5">
                        Well, in a nutshell...
                    </div>
                    <div class="type-t3">
                        I just an ordinary student
                    </div><br>
                    <div class="type-t5">but...</div><br>
                    <div class="type-t6">I am a <b>fast learner</b></div>
                    <div class="type-t6">I am a <b>creative</b> person</div>
                    <div class="type-t6">I am a <b>passionate</b> person</div>
                    <div class="type-t6">I am an <b>ambitious</b> person</div>
                    <br><br><br><br><br><br>
                </div>
            </div>                         
            
        </div> 
        
        <div class="row dblue-bg">
            <div class="col-md-24">
                <div class="container text-center white">
                    What am I doing now?
                </div>
            </div>  
        </div>
        
        <div id="ui" class="row" style="height: 500px">
            <div class="col-md-24">
                <div class="container black"><br><br><br><br>
                    <div class="type-t3">
                        Take Information System Major
                    </div><br>
                    
                    <div class="row">
                        <div class="col-md-15">
                            <div class="col-md-2">
                                <img src="{{ url('img/ui.png') }}" alt="UI" height="48">
                            </div>
                            
                            <div class="col-md-12">
                                <div class="type-t5">
                                    Faculty of Computer Science <br>
                                    University of Indonesia
                                </div>
                            </div>
                        </div><br>
                    </div>
                        
                            
                    <div class="btn-group">
                        <a href="http://www.cs.ui.ac.id" target="_blank" class="btn btn-primary">www.cs.ui.ac.id</a>
                    </div>
                    
                    <br><br><br><br><br><br><br>
                    <div class="type-t7 white">
                        <i>*yes, this is UI library building</i>
                    </div>
                </div>
            </div>                        
        </div>
         
        <div id="ristek" class="row" style="height: 500px">
            <div class="col-md-24">
                <div class="container white"><br><br><br><br>
                    <div class="type-t3">
                        Pointed as Head of Project Development
                    </div><br>
                    
                    <div class="row">
                        <div class="col-md-15">
                            <div class="col-md-2">
                                <img src="{{ url('img/ristek-merah.png') }}" alt="UI" height="48">
                            </div>
                            
                            <div class="col-md-12">
                                <div class="type-t5 white">
                                    Ristek Fasilkom UI <br>
                                    University of Indonesia
                                </div>
                            </div>
                        </div><br>
                    </div>
                        
                            
                    <div class="btn-group">
                        <a href="http://ristek.cs.ui.ac.id" target="_blank" class="btn btn-primary">ristek.cs.ui.ac.id</a>
                    </div>
                    
                    <br><br><br><br><br><br><br>
                    <div class="type-t7 white">
                        <i>*me = wearing blue jacket :))</i>
                    </div>
                </div>
            </div>                        
        </div>
    </div>          
</div>
@stop