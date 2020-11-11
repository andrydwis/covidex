<div>
    <div class="row">
        <div class="col">
            <div class="card" data-aos="fade-up" data-aos-delay="1000" wire:ignore>
                <div class="card-body">
                    <form wire:submit.prevent="search">
                        <div class="form-group">
                            <label for="country">Select Country</label>
                            <select class="form-control select2" name="country" data-width="100%">
                                <option selected disabled>Select Country</option>
                                @foreach($countries as $country)
                                <option value="{{($country['iso3']) ?? ''}}">{{$country['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Check</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if($result)
    <div class="alert alert-primary alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span><i class="fas fa-times-circle"></i></span>
            </button>
            Data last update : {{$lastUpdate->diffForHumans()}}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-exclamation"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Confirmed Case</h4>
                    </div>
                    <div class="card-body">
                        {{$confirmed ?? '-'}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
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
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
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
    @endif

    <script>
        document.addEventListener('livewire:load', function() {
            $('.select2').on('change', function() {
                @this.country = $(this).val();
            })
        })
    </script>

</div>