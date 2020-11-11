<div>
    <div class="alert alert-primary alert-dismissible show fade" data-aos="fade-up" data-aos-delay="1000">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span><i class="fas fa-times-circle"></i></span>
            </button>
            Data last update : {{$lastUpdate->diffForHumans()}}
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-primary" data-aos="fade-up" data-aos-delay="1000">
                <div class="card-header">
                    <h4>Data summary all country</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="1500">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-exclamation"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Confirmed Case</h4>
                    </div>
                    <div class="card-body">
                        {{$confirmed}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="1500">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-plus"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Recovered Case</h4>
                    </div>
                    <div class="card-body">
                        {{$recovered}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="1500">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-skull-crossbones"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Death Case</h4>
                    </div>
                    <div class="card-body">
                        {{$deaths}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex">
        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
            <div class="card" data-aos="fade-up" data-aos-delay="2000">
                <div class="card-body d-flex flex-column align-items-center">
                    <img src="{{asset('assets/img/world.svg')}}" alt="" height="200" width="200" class="img-fluid d-none d-sm-none d-md-block"><br>
                    <a href="{{route('global')}}" class="btn btn-primary btn-lg">Data every country</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
            <div class="card" data-aos="fade-up" data-aos-delay="2000">
                <div class="card-body d-flex flex-column align-items-center">
                    <img src="{{asset('assets/img/province.svg')}}" alt="" height="200" width="200" class="img-fluid d-none d-sm-none d-md-block"><br>
                    <a href="{{route('local')}}" class="btn btn-primary btn-lg">Data every province in Indonesia</a>
                </div>
            </div>
        </div>
    </div>
</div>