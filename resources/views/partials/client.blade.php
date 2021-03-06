        <!-- Client Area Strat -->
        <section class="client-area pt-95 pb-50">
            @php
                $before=Str::before($titleDesc[6]->title,'(');
                $between=Str::between($titleDesc[6]->title,'(',')');
                $after=Str::after($titleDesc[6]->title,')');
            @endphp
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            @if ($before == $between && $between == $after )
                        
                            <h2>{{$before}}</h2>
                            @else
                                <h2>{{$before}} <span style="color: rgb(95, 199,174)">{{$between}}</span>{{$after}}</h2>
                            @endif
                            <p>{{$titleDesc[6]->description}}</p>
                        </div>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="testimonial-owl">
                                @foreach ($client as $item)
                                <div class="col-xs-12">
                                    <div class="single-testimonial">
                                        <i class="{{$item->icon}}"></i>
                                        <p>{{$item->text}}</p>
                                        <img src="{{asset('img/icon/' . $item->url)}}" alt="signature">
                                        <h6>{{$item->function}}</h6>
                                    </div>    
                                </div> 
                                @endforeach
                            </div> 
                        </div>   
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Area End -->