<x-front.layout>

<!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    @foreach($data as $key => $value)
                    <!-- Post preview-->
                    <x-front.blog-list title='{{ $value->title }}' description='{{ $value->description }}'
                     date="{{ $value->created_at->isoFormat(' dddd, D MMMM Y')  }}" user='{{ $value->user->name }}' link="{{ route('blog-detail', ['slug'=>$value->slug]) }}"/>
                     @endforeach
                    <!-- Pager-->
                    <div class="d-flex justify-content-between mb-4">
                      
                            <div><a class="btn btn-primary text-uppercase" href="#!">&larr; Newer
                                Posts →</a></div>
                            <div><a class="btn btn-primary text-uppercase" href="#!">Older 
                                          Posts → &rarr;</a></div>
                      
                       
                                
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->


</x-front.layout>
        
