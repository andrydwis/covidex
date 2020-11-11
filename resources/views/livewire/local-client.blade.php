<div>
    <div class="row">
        <div class="col">
            <div class="card" data-aos="fade-up" data-aos-delay="1000" wire:ignore>
                <div class="card-body">
                    <form wire:submit.prevent="search">
                        <div class="form-group">
                            <label for="country">Select Province</label>
                            <select class="form-control select2" name="province" data-width="100%">
                                <option selected disabled>Select Province</option>
                                @foreach($provinces as $province)
                                <option value="{{$province['provinsi']}}">{{$province['provinsi']}}</option>
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
                @this.province = $(this).val();
            })
        })
    </script>

</div>